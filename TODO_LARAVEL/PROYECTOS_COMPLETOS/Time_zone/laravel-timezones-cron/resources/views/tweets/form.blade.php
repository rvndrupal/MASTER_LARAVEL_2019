@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Formulario de tweets</div>

                    <div class="card-body">
                        <form action="{{ route('tweets.publish') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="datetime">Fecha</label>
                                <input type="datetime-local" name="datetime" class="form-control" id="datetime">
                            </div>
                            <div class="form-group">
                                <label for="timezones">Selecciona la zona horaria</label>
                                <select class="form-control" id="timezones" name="timezone">
                                    @foreach(DateTimeZone::listIdentifiers(DateTimeZone::ALL) as $timezone)
                                        <option value="{{ $timezone }}">{{ $timezone }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tweet">Tweet</label>
                                <textarea name="tweet" class="form-control" id="tweet" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Programar Tweet</button>
                            <a href="{{ route('tweets.list') }}" class="btn btn-info text-white mb-2">Listado de Tweets</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection