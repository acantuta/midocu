@extends('admin.users.layout')
@section('navigation_menu')
	<li class='active'>
		<strong>Creación</strong>
	</li>
@endsection
@section('content')
<div class='ibox'>
	<div class='ibox-title'>Crear usuario</div>
	<div class='ibox-content'>
		{{ Form::open(['url' => '/admin/users', 'class' => 'form-horizontal']) }}
		<div class='row'>
			<div class='col-md-6'>
				<label class='control-label'>Nombres</label>
				{{ Form::text('nombres', old('nombres'), ['class' => 'form-control']) }}
			</div>
			<div class='col-md-6'>
				<label class='control-label'>Apellidos</label>
				{{ Form::text('apellidos', old('apellidos'), ['class' => 'form-control']) }}
			</div>
		</div>
		<div class='row'>
			<div class='col-md-6'>
				<label class='control-label'>E-mail</label>
				{{ Form::text('email', old('email'), ['class' => 'form-control']) }}
			</div>
			<div class='col-md-6'>
					<label class='control-label'>Dirección</label>
					{{ Form::text('direccion', old('direccion'), ['class' => 'form-control']) }}
			</div>
		</div>
		<div class='row'>
			<div class='col-md-6'>
				<label class='control-label'>Teléfono</label>
				{{ Form::text('telefono', old('telefono'), ['class' => 'form-control']) }}
			</div>
			<div class='col-md-6'>
				<label class='control-label'>Password</label>
				{{ Form::text('password', old('password'), ['class' => 'form-control']) }}
			</div>
		</div>
		<div class='row'>
			<div class='col-md-12'>
				<label class='control-label'>Área</label>
				{{ Form::select('area_id', $areas, old('area_id') , ['class' => 'form-control']) }}
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