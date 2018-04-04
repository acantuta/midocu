@extends('personas.layout')

@section('navigation_menu')
    <li class='active'>
        <strong>edición</strong>
    </li>
@endsection

@section('content')
<div class='ibox'>
    <div class='ibox-title'>Edición de usuario</div>
    <div class='ibox-content'>
        {{ Form::open(['url' => '/personas/' . $item->id . '/edit', 'method' => 'put' ,'class' => 'form-horizontal']) }}
            <div class='row'>
                <div class='col-md-4'>
                    <label class='control-label'>Tipo</label>
                    {{ Form::select("tipo", $tipos, $item->tipo, ['class' => 'form-control']) }}
                </div>
                <div class='col-md-8'>
                    <label class='control-label'>Nro de identificación</label>
                    {{ Form::text('nro_identificacion', $item->nro_identificacion, ['class' => 'form-control']) }}
                </div>
                <div class='col-md-4'>
                    <label class='control-label'>Nombres</label>
                    {{ Form::text('nombres', $item->nombres, ['class' => 'form-control']) }}
                </div>
                <div class='col-md-4'>
                    <label class='control-label'>Apellidos</label>
                    {{ Form::text('apellidos', $item->apellidos, ['class' => 'form-control']) }}
                </div>
                <div class='col-md-4'>
                    <label class='control-label'>Razón social</label>
                    {{ Form::text('razon_social', $item->razon_social, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class='row'>
                <div class='col-md-4'>
                    <label class='control-label'>Correo</label>
                    {{ Form::text('correo', $item->correo, ['class' => 'form-control']) }}
                </div>
                <div class='col-md-4'>
                        <label class='control-label'>Dirección</label>
                        {{ Form::text('direccion', $item->direccion, ['class' => 'form-control']) }}
                </div>
                <div class='col-md-4'>
                    <label class='control-label'>Teléfono</label>
                    {{ Form::text('telefono', $item->telefono, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class='form-group'>
                <button type="submit" class='btn btn-default btn-sm'>Guardar</button>
            </div>
        {{ Form::close() }}
    </div>
</div>
@endsection