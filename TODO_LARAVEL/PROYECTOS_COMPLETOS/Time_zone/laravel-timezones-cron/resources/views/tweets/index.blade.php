@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Listado de tweets</div>

                    <div class="card-body">
                        <a href="{{ route('tweets.form') }}" class="btn btn-info text-white float-right">Añadir Tweet</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tweet</th>
                                    <th scope="col">Publicar en fecha</th>
                                    <th scope="col">Fecha según TZ</th>
                                    <th scope="col">Zona horaria</th>
                                    <th scope="col">Publicado</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($tweets as $tweet)
                                <tr>
                                    <th>{{ $tweet->id }}</th>
                                    <td>{{ $tweet->tweet }}</td>
                                    <td>{{ $tweet->published_at->format('d/m/Y H:i:s') }}</td>
                                    <td>{{ $tweet->original_datetime->format('d/m/Y H:i:s') }}</td>
                                    <td>{{ $tweet->timezone }}</td>
                                    <td>{{ $tweet->published }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">no nay tweets</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection