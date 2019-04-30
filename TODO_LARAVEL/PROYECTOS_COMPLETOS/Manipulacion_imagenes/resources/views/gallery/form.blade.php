@extends('layouts.app')

@section('content')

    <div class="col-md-12">

        @if(isset($editable))
            {!! Form::model($model, ['route' => ['gallery.update', $model->id], 'method' => 'PUT', 'files' => true]) !!}
        @else
            {!! Form::open(['route' => 'gallery.store', 'files' => true]) !!}
        @endif


        @if(isset($editable))
            @if($errors->first('image') && ! $model->image)
                <div class="col-md-4 form-group has-error">
            @else
                <div class="form-group col-md-4">
            @endif
                <label class="btn btn-default btn-file">
                    Buscar imagen{!! Form::file('image', ['style' => 'display: none']) !!}
                </label>
                <span class="help-block">{{ $errors->first('image') }}</span>
            </div>
        @else
            @if($errors->first('image'))
                <div class="col-md-4 form-group has-error">
            @else
                <div class="form-group col-md-4">
            @endif
                <label class="btn btn-default btn-file">
                    Buscar imagen{!! Form::file('image', ['style' => 'display: none', 'class']) !!}
                </label>
                <span class="help-block">{{ $errors->first('image') }}</span>
            </div>
        @endif

        <div id="container-logo" class="col-md-12" style="display: none">
            @if(isset($editable) && $model->image)
                <div class="text-center">
                    {{ Html::image('uploads/gallery/' . $model->image, '', ["id" => "gallery-img"]) }}
                </div>
            @else
                <img style="padding: 10px;" class="img-responsive" id="gallery-img" src="#" />
            @endif
        </div>

        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('title', 'Título') }}
                {{ Form::input('text', 'title', old('title'), ['class' => 'form-control']) }}
                @if($errors->first('title'))
                    <div class="has-error">
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    </div>
                @endif
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('caption', 'Descripción de la imagen') }}
                {!! Form::textarea('caption', old('caption'), ['class' => 'form-control', 'rows' => 4]) !!}
                @if($errors->first('title'))
                    <div class="has-error">
                        <span class="help-block">{{ $errors->first('caption') }}</span>
                    </div>
                @endif
            </div>
        </div>

        <div class="col-md-12">
            @if (isset($editable))
                <div class="form-group">
                    {!! Form::submit('Actualizar imagen', ['class' => 'btn btn-success btn-block']) !!}
                </div>
            @else
                <div class="form-group">
                    {!! Form::submit('Dar de alta imagen', ['class' => 'btn btn-success btn-block']) !!}
                </div>
            @endif

            <div class="form-group">
                {!! link_to_route('gallery.index', 'Volver', [], ['class' => 'btn btn-warning btn-block']) !!}
            </div>
        </div>


        {!! Form::close() !!}

    </div>

@endsection

@push('scripts')
<script>
    jQuery(function ()
    {
        @if(isset($editable))
            jQuery('#container-logo').css('display', 'block');
        @endif

        jQuery("input[type=file]").change(function() {
            readURL(this);
        });

        const readURL = (input) => {

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload =  (e) => {
                    jQuery('#gallery-img').attr('src', e.target.result)
                    jQuery('#container-logo').css('display', 'block');
                }
                reader.readAsDataURL(input.files[0]);
            }
        };
    })
</script>
@endpush