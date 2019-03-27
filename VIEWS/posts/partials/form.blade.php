<div class="col-12 p-5">
    <div class="col-8 offset-2">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h2 class="text-center">{{ $titleBtn }}</h2>

        <form method="POST" action="{{ $route }}">
            @csrf

            @method($method)  //super importante para el metodo sea post o put

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ?: $post->title }}" />
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="body" rows="3">{{ old('body') ?: $post->body }}</textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="{{ $titleBtn }}" />
            <a class="btn btn-info" href="{{ route('posts.index') }}">Volver al listado</a>
        </form>
    </div>
</div>