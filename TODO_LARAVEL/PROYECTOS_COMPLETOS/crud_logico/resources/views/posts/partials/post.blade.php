<div class="col-12 pb-3">
    <div class="card">
        <div class="card-header">
            ID: {{ $post->id }} - {{ $post->title }}
        </div>
        <div class="card-body">
            {{ $post->body }}
        </div>

        @if ($list)
            <div class="card-footer">
                <div class="float-right">
                    <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="btn btn-info">Detalle</a>
                    <a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="btn btn-secondary">Editar</a>

                    @if($post->trashed())
                        <form method="POST" class="float-right" action="{{ route('posts.restore', ['id' => $post->id]) }}">
                            @csrf
                            @method('PUT')
                            <input type="submit" class="btn btn-default ml-2" value="Restaurar" />
                        </form>
                    @endif

                    <form method="POST" class="float-right" action="{{ route('posts.destroy', ['id' => $post->id]) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger ml-2" value="Eliminar" />
                    </form>
                </div>
            </div>
        @else
            <div class="card-footer">
                <div class="float-right">
                    <a href="{{ route('posts.index') }}" class="btn btn-info">Listado</a>
                </div>
            </div>
        @endif
    </div>
</div>