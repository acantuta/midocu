@extends('admin.expediente-tipos.layout')
@section('navigation_menu')
	<li class='active'>
		<strong>Creación</strong>
	</li>
@endsection
@section('content')
<div class='ibox'>
	<div class='ibox-title'>Crear área</div>
	<div class='ibox-content'>
		{{ Form::open(['url' => '/admin/expediente-tipos', 'class' => 'form-horizontal']) }}
			<div class='form-group'>
				<label class='control-label'>Nombre</label>
				{{ Form::text('nombre', old('nombre'), ['class' => 'form-control']) }}
			</div>
			<div class='form-group'>
				<label class='control-label'>Descripcion</label>
				{{ Form::textarea('descripcion', old('descripcion'), ['class' => 'form-control']) }}
			</div>
			<div class='form-group'>
				<button type="submit" class='btn btn-default btn-sm'>Crear</button>
			</div>
		{{ Form::close() }}
	</div>
</div>
@endsection