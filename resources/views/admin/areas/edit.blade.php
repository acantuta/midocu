@extends('admin.areas.layout')

@section('navigation_menu')
	<li class='active'>
		<strong>edición</strong>
	</li>
@endsection

@section('content')
<div class='ibox'>
	<div class='ibox-title'>Edición de área</div>
	<div class='ibox-content'>
		{{ Form::open(['url' => '/admin/areas/' . $item->id . '/edit', 'method' => 'put' ,'class' => 'form-horizontal']) }}
			<div class='form-group'>
				<label class='control-label'>Nombre</label>
				{{ Form::text('nombre', $item->nombre, ['class' => 'form-control']) }}
			</div>
			<div class='form-group'>
				<label class='control-label'>Descripcion</label>
				{{ Form::textarea('descripcion', $item->descripcion, ['class' => 'form-control']) }}
			</div>
			<div class='form-group'>
				<button type="submit" class='btn btn-default btn-sm'>Guardar</button>
			</div>
		{{ Form::close() }}
	</div>
</div>
@endsection