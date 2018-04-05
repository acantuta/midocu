@extends('expedientes.layout')
@section('navigation_menu')
	<li class='active'>
		<strong>Creación</strong>
	</li>
@endsection
@section('content')
<div class='ibox'>
	<div class='ibox-title'>Crear expediente</div>
	<div class='ibox-content'>
		{{ Form::open(['url' => url('/expedientes'), 'class' => 'form-horizontal']) }}
		<div class='row'>
			<div class='col-md-4'>
				<label class='control-label'>Origen</label>
				{{ Form::select("origen", $origenes, old('origen'), ['class' => 'form-control']) }}
			</div>
			<div class='col-md-8'>
				<label class='control-label'>Persona</label>
				{{ Form::select('remitente_persona_id', $personas, old('remitente_persona_id'), ['class' => 'form-control']) }}
			</div>
			<div class='col-md-4'>
				<label class='control-label'>Tipo de documento</label>
				{{ Form::select('expediente_tipo_id', $tiposExpediente,old('expediente_tipo_id'), ['class' => 'form-control']) }}
			</div>
			<div class='col-md-4'>
				<label class='control-label'>Cabecera del documento</label>
				{{ Form::text('cabecera', old('cabecera'), ['class' => 'form-control']) }}
			</div>
			<div class='col-md-4'>
				<label class='control-label'>Asunto</label>
				{{ Form::text('asunto', old('asunto'), ['class' => 'form-control']) }}
			</div>
			<div class='col-md-4'>
				<label class='control-label'>Folios</label>
				{{ Form::text('folios', old('folios'), ['class' => 'form-control']) }}
			</div>
			<div class='col-md-4'>
				<label class='control-label'>Prioridad</label>
				{{ Form::select('prioridad', $prioridades, old('prioridad'), ['class' => 'form-control']) }}
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