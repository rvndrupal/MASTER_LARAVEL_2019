<?php

namespace App\Http\Requests;

use App\Gallery;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class GalleryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST':
                return [
                    'title'       => 'required|max:255|unique:galleries',
                    'caption'     => 'required',
                    //'image'     => 'required|mimes:jpeg,png|dimensions:min_width=300,min_height=300,max_width=6000,max_height=6000'
                    'image'       => 'required|image'
                ];
            case 'PUT':
            case 'PATCH':
                $gallery = Gallery::find($request->segment( 2 ));
                return [
                    'title'       => 'required|max:255|unique:galleries,title,'.$gallery->id,
                    'caption'     => 'required',
                    'image'       => 'image'
                ];
            default:
                break;
        }
    }
}
