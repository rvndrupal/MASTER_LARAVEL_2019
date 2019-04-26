@extends('layouts.app')

@section('content')
    <div class="row p-5">

        <div class="col-12 mb-2">
            <a href="{{ route('posts.create') }}" class="btn btn-primary float-right">Añadir post</a>
        </div>

        @forelse ($posts as $post)
            @include('posts.partials.post', ['list' => true])
        @empty
            <div class="w-100 p-3">
                <div class="alert alert-dark text-center">No hay ningún post disponible</div>
            </div>
        @endforelse

        @if ($posts->count())
            {{ $posts->links() }}
        @endif
    </div>
@endsection