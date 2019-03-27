@extends('layouts.app')

@section('content')
    @include('posts.partials.post', ['list' => false])
@endsection