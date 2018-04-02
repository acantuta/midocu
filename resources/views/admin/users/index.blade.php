@extends('admin.users.layout')
@section('content')
<div class="ibox float-e-margins">
    <div class="ibox-title">
    	<a href="{{ url('/admin/users/create') }}" class='btn btn-sm btn-default pull-right'>+ Crear</a>
        <h5>Inicios</h5>
    </div>
    <div class="ibox-content">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Nombres</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->full_name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a 
                        href="{{ url('/admin/users/' . $item->id . '/edit') }}"
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
                var url =  "{{ url('') }}/admin/users/" + itemId;
                $('#form-delete').attr('action', url);
                $('#form-delete').submit();
            }
        });
    });
</script>
@endsection