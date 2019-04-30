@extends('layouts.app')

@section('content')

    <div class="col-lg-12">
        @foreach(config('constants.IMAGE_SIZES') as $imageSize)
            <div class="well">
                {!! Html::image(sprintf('%s/%s/%s', 'uploads', $imageSize[2], $model->image)) !!}
            </div>
        @endforeach
            {!! Html::image(sprintf('%s/%s/%s', 'uploads', 'gallery', $model->image)) !!}
    </div>

@endsection