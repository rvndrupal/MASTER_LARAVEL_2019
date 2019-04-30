<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Helpers\Helper;
use App\Http\Requests\GalleryRequest;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Yajra\Datatables\Facades\Datatables;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gallery.index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function jsonData(Request $request)
    {
        if( ! $request->ajax())
        {
            return redirect('/gallery');
        }

        $model = Gallery::query();
        $actions = 'gallery.datatables.actions';

        return Datatables::eloquent($model)
            ->addColumn('actions', $actions)
            ->rawColumns(['actions'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.form');
    }

    /**
     * @param GalleryRequest $galleryRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(GalleryRequest $galleryRequest)
    {
        ini_set('memory_limit','1024M');
        $fileIdWithExtension = $this->_uploadImage($galleryRequest);
        $file = $galleryRequest->file('image');
        $gallery = Gallery::create([
           'title' => $galleryRequest->input('title'),
            'caption' => $galleryRequest->input('caption'),
            'image' => $fileIdWithExtension,
            'original_name' => $file->getClientOriginalName(),
            'mime_type' => $file->getMimeType(),
            'file_size' => Helper::formatBytes($file->getSize())
        ]);

        return redirect()->route('gallery.edit', ['id' => $gallery->id])->with('message', 'La imagen se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Gallery::find($id);
        return view('gallery.detail', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Gallery::find($id);
        $editable = true;
        return view('gallery.form', compact('model', 'editable'));
    }

    /**
     * @param GalleryRequest $galleryRequest
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(GalleryRequest $galleryRequest, $id)
    {
        $gallery = Gallery::findOrFail($id);

        if($galleryRequest->file('image'))
        {
            Helper::removeImages($gallery);

            $fileIdWithExtension = $this->_uploadImage($galleryRequest);
            $file = $galleryRequest->file('image');

            $gallery->fill([
                'title' => $galleryRequest->input('title'),
                'caption' => $galleryRequest->input('caption'),
                'image' => $fileIdWithExtension,
                'original_name' => $file->getClientOriginalName(),
                'mime_type' => $file->getMimeType(),
                'file_size' => Helper::formatBytes($file->getSize())
            ])
            ->save();
        }
        else
        {
            $gallery->fill([
                'title' => $galleryRequest->input('title'),
                'caption' => $galleryRequest->input('caption'),
            ])
            ->save();
        }
        return back()->with('message', 'Imagen actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $galleryId = $request->input('id');
        $gallery = Gallery::find($galleryId);

        if($gallery->image)
        {
            Helper::removeImages($gallery);
        }
        $gallery->delete();
        return response()->json(['res' => 'success'], 200);
    }

    /**
     * @param GalleryRequest $galleryRequest
     * @return string
     */
    private function _uploadImage(GalleryRequest $galleryRequest)
    {
        $file = $galleryRequest->file('image');
        $uniqueId = uniqid();
        $extension = $file->getClientOriginalExtension();
        $fileIdWithExtension = sprintf('%s.%s', $uniqueId, $extension);

        foreach(config('constants.IMAGE_SIZES') as $imageSize)
        {
            if(!\File::isDirectory(public_path('uploads' . DIRECTORY_SEPARATOR . $imageSize[2])))
            {
                \File::makeDirectory(public_path('uploads' . DIRECTORY_SEPARATOR . $imageSize[2]));
            }

            Image::make($file)->resize($imageSize[0], $imageSize[1], function($constraint)
            {
                $constraint->aspectRatio();
            })
            ->save(sprintf('%s/%s/%s', 'uploads',  $imageSize[2], $fileIdWithExtension));
        }

        $watermark = Image::make(public_path('uploads/watermarks/cdw.png'));
        $img = Image::make($file);
        $img->insert($watermark, 'bottom-right', 10, 10);
        $img->save(sprintf('%s/%s', 'uploads/gallery', $fileIdWithExtension));

        return $fileIdWithExtension;
    }
}

