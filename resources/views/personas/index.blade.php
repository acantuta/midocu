@extends('personas.layout')
@section('content')
<div class="ibox float-e-margins">
    <div class="ibox-title">
    	<a href="{{ url('/personas/create') }}" class='btn btn-sm btn-default pull-right'>+ Crear</a>
        <h5>Inicio</h5>
    </div>
    <div class="ibox-content">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>n.° Identificacíón</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nro_identificacion }}</td>
                <td>{{ $item->nombre_completo }}</td>
                <td>
                    <a 
                        href="{{ url('/personas/' . $item->id . '/edit') }}"
                        >Editar
                    </a>
                    <a 
                        data-id='{{ $item->id }}'
                        class='delete-button'
                        href="#"
                        >Eliminar
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
            {{ Form::open(['url' => '', 'id' => 'form-delete', 'method' => 'delete']) }}

    {{ Form::close() }}

    </div>
</div>            
@endsection
@section('javascript')
<script type="text/javascript">
    $(document).ready(function () {
        $('.delete-button').on('click', function (e) {
             e.preventDefault();
            var itemId = $(this).data('id');

            if (confirm("¿Está seguro?")) {
                var url =  "{{ url('') }}/personas/" + itemId;
                $('#form-delete').attr('action', url);
                $('#form-delete').submit();
            }
        });
    });
</script>
@endsection