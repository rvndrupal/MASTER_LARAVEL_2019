@extends('admin.layout')

@section('page-header')
    <section class="content-header">
            <h1>
                    Usuarios
                    <small>Del usuario</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('users.index') }}"><i class="fa fa-dashboard"></i> Lista</a></li>
                    <li class="active">User</li>
                    </ol>
    </section>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Nuevo Usuario
                </div>

                <div class="panel-body">
                
                {!! Form::open(['route'=> 'users.store']) !!}

                @include('users.partials.form')
                
                {!! Form::close() !!}
                
                
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 