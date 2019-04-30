@extends('layouts.app')

@push('stylesheets')
{!! Html::style('//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css') !!}
{!! Html::style('//cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css') !!}

<style>
    #gallery-table th, #gallery-table td
    {
        text-align:center;
        vertical-align:middle;
    }
</style>
@endpush

@section('content')

    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Galería
                    <span class="pull-right">
                        <a class="btn btn-primary" href="{{ route('gallery.create') }}">
                            Añadir imagen
                        </a>
                    </span>
                </h3>
            </div>

            <hr />

            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-striped table-bordered nowrap" cellspacing="0" id="gallery-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Caption</th>
                        <th>Imagen</th>
                        <th width="70">Acciones</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

{!! Html::script('//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js') !!}
{!! Html::script('//cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js') !!}

<script>
    var dt;
    jQuery(function()
    {
        dt = jQuery('#gallery-table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
            },
            processing: true,
            serverSide: false,
            ajax: '{!! route('gallery.json_data') !!}',
            columns: [
                { data: 'id', name: 'id', visible: false },
                { data: 'title', name: 'title' },
                { data: 'caption', name: 'caption', mRender: function(data, type, full)
                {
                    return `${data.substring(0, 70)}...`;
                }},
                { data: 'image', name: 'image' },
                { data: 'actions', name: 'actions', orderable: false }
            ]
        });

        jQuery(document).on('click', '#gallery-table a', function(e)
        {
            if(jQuery(this).data('remove'))
            {
                e.preventDefault();
                removeRow(jQuery(this).data('id'), '{{ route('gallery.destroy', 0) }}', dt)
            }
        });

        function removeRow(id, route, dt)
        {
            jQuery.ajax({
                url: route,
                method: 'DELETE',
                headers: {
                    'x-csrf-token': $('meta[name="csrf-token"]').attr('content'),
                },
                data: {
                    id: id
                },
                success: function (data) {
                    dt.ajax.reload();
                }
            });
        }
    });
</script>
@endpush