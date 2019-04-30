@if(isset($detail_route))
    <a href="{{ route($detail_route, [$id]) }}" data-id="{{$id}}" class="btn btn-info">Detalle</a>
@endif

@if(isset($edit_route))
    <a href="{{ route($edit_route, [$id]) }}" data-edit="true" data-id="{{$id}}" class="btn btn-info">Editar</a>
@endif

@if(isset($destroy_route))
    <a href="{{ route($destroy_route, [$id]) }}" data-remove="true" data-id="{{$id}}" class="btn btn-danger">Eliminar</a>
@endif
@stack('datatables_actions')