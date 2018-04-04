@extends('personas.layout')
@section('navigation_menu')
	<li class='active'>
		<strong>Creación</strong>
	</li>
@endsection
@section('content')
<div class='ibox'>
	<div class='ibox-title'>Crear usuario</div>
	<div class='ibox-content'>
		{{ Form::open(['url' => '/personas', 'class' => 'form-horizontal']) }}
		<div class='row'>
			<div class='col-md-4'>
				<label class='control-label'>Tipo</label>
				{{ Form::select("tipo", $tipos, old('tipo'), ['class' => 'form-control']) }}
			</div>
			<div class='col-md-8'>
				<label class='control-label'>Nro de identificación</label>
				{{ Form::text('nro_identificacion', old('nro_identificacion'), ['class' => 'form-control']) }}
			</div>
			<div class='col-md-4'>
				<label class='control-label'>Nombres</label>
				{{ Form::text('nombres', old('nombres'), ['class' => 'form-control']) }}
			</div>
			<div class='col-md-4'>
				<label class='control-label'>Apellidos</label>
				{{ Form::text('apellidos', old('apellidos'), ['class' => 'form-control']) }}
			</div>
			<div class='col-md-4'>
				<label class='control-label'>Razón social</label>
				{{ Form::text('razon_social', old('razon_social'), ['class' => 'form-control']) }}
			</div>
		</div>
		<div class='row'>
			<div class='col-md-4'>
				<label class='control-label'>Correo</label>
				{{ Form::text('correo', old('correo'), ['class' => 'form-control']) }}
			</div>
			<div class='col-md-4'>
					<label class='control-label'>Dirección</label>
					{{ Form::text('direccion', old('direccion'), ['class' => 'form-control']) }}
			</div>
			<div class='col-md-4'>
				<label class='control-label'>Teléfono</label>
				{{ Form::text('telefono', old('telefono'), ['class' => 'form-control']) }}
			</div>
		</div>
		<div class='row'>
			<div class='col-md-12'>
				<button type="submit" class='btn btn-default btn-sm'>Crear</button>
			</div>
		</div>
		{{ Form::close() }}
	</div>
</div>
@endsection