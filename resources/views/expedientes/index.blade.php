@extends('expedientes.layout')
@section('content')
<div class="ibox float-e-margins">
    <div class="ibox-title">
    	<a href="{{ url('/expedientes/create') }}" class='btn btn-sm btn-default pull-right'>+ Crear</a>
        <h5>Inicio</h5>
    </div>
    <div class="ibox-content">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Tipo</th>
                <th>Asunto</th>
                <th>Otros</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->asunto }}</td>
                <td>
                    <div>
                        <span>Prioridad: </span>
                        <span>{{ $item->prioridad }}</span>
                    </div>

                    <div>
                        <span>Folios: </span>
                        <span>{{ $item->folios }}</span>
                    </div>

                    @if ($item->fecha_limite)
                    <div>
                        <span>Fecha de vencimiento: </span>
                        <span>{{ $item->folios }}</span>
                    </div>
                    @endif
                </td>
                <td>
                    <a 
                        href="{{ url('/expedientes/' . $item->id . '/edit') }}"
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
                var url =  "{{ url('') }}/expedientes/" + itemId;
                $('#form-delete').attr('action', url);
                $('#form-delete').submit();
            }
        });
    });
</script>
@endsection