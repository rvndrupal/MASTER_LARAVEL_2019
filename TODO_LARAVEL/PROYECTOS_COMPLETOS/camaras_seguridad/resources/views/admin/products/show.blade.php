@extends('admin.base')

@section('content')


<h1>
    Productos
    <small>Producto</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('products.index') }}"><i class="fa fa-dashboard"></i> Listado de Productos</a></li>
    <li class="active">Producto</li>
  </ol>

{{--  <div class="container">  --}}
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Producto
                </div>

                <div class="panel-body">
                 
                <p> <strong>Nombre</strong> {{ $product->nombre }}</p>
                <p> <strong>Descripción</strong> {!! $product->descripcion !!}</p>
                
              

               
                 @if($product->fotos->count()==1)
                <img class="uno" src="{{ asset(''.$product->fotos[0]->url ) }}">  
                @elseif($product->fotos->count() == 2)
                <img class="uno" src="{{ asset(''.$product->fotos[0]->url ) }}"> 
                <img class="dos" src="{{ asset(''.$product->fotos[1]->url ) }}">  
                @elseif($product->fotos->count() == 3)
                <img class="uno" src="{{ asset(''.$product->fotos[0]->url ) }}"> 
                <img class="dos" src="{{ asset(''.$product->fotos[1]->url ) }}"> 
                <img class="tres" src="{{ asset(''.$product->fotos[2]->url ) }}">  
                @endif

           

                
        

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Producto
                </div>

                <div class="panel-body">
                <p> <strong>Tamaño</strong> {{ $product->tamano }}</p>
                <p> <strong>Peso</strong> {{ $product->peso }}</p>
                <p> <strong>Color</strong> {{ $product->color }}</p>
                <p> <strong>Precio</strong> {{ $product->precio }}</p>
                <p> <strong>Categoría</strong> {{ $product->category->nombre }}</p>
                @if($product->iframe)
                <div class="video">
                    {!! $product->iframe !!}
                </div>
                @endif
                
                </div>
            </div>
        </div>
    </div>
{{--  </div>     --}}
@endsection 