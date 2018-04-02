@extends('admin.users.layout')

@section('navigation_menu')
	<li class='active'>
		<strong>edición</strong>
	</li>
@endsection

@section('content')
<div class='ibox'>
	<div class='ibox-title'>Edición de usuario</div>
	<div class='ibox-content'>
		{{ Form::open(['url' => '/admin/users/' . $item->id . '/edit', 'method' => 'put' ,'class' => 'form-horizontal']) }}
			<div class='row'>
			<div class='col-md-6'>
					<label class='control-label'>Nombres</label>
					{{ Form::text('nombres', $item->nombres, ['class' => 'form-control']) }}
				</div>
				<div class='col-md-6'>
					<label class='control-label'>Apellidos</label>
					{{ Form::text('apellidos', $item->apellidos, ['class' => 'form-control']) }}
				</div>
			</div>
			<div class='row'>
				<div class='col-md-6'>
					<label class='control-label'>E-mail</label>
					{{ Form::text('email', $item->email, ['class' => 'form-control']) }}
				</div>
				<div class='col-md-6'>
						<label class='control-label'>Dirección</label>
						{{ Form::text('direccion', $item->direccion, ['class' => 'form-control']) }}
				</div>
			</div>
			<div class='row'>
				<div class='col-md-6'>
					<label class='control-label'>Teléfono</label>
					{{ Form::text('telefono', $item->telefono, ['class' => 'form-control']) }}
				</div>
				<div class='col-md-6'>
					<label class='control-label'>Password</label>
					{{ Form::text('password', null, ['class' => 'form-control']) }}
				</div>
			</div>
			<div class='row'>
				<div class='col-md-12'>
					<label class='control-label'>Área</label>
					{{ Form::select('area_id', $areas, $item->area_id, ['class' => 'form-control']) }}
				</div>
			</div>
			<div class='form-group'>
				<button type="submit" class='btn btn-default btn-sm'>Guardar</button>
			</div>
		{{ Form::close() }}
	</div>
</div>
@endsection