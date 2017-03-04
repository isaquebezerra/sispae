<?php
use App\Modality;
?>
@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Criar Novo Processo</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('processes.index') }}">Voltar</a>
	        </div>
	    </div>
	</div>

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Ops!</strong>Verifique os dados inseridos.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	{!! Form::open(array('route' => 'processes.store','method'=>'POST')) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Nome','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data Inicial:</strong>
                {!! Form::text('start_date', '', array('placeholder' => 'dd/mm/aaaa', 'maxlength' => '10', 'onkeypress' => 'mascaraData( this, event )', 'class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data Final:</strong>
                {!! Form::text('final_date', '', array('placeholder' => 'dd/mm/aaa', 'maxlength' => '10', 'onkeypress' => 'mascaraData( this, event )', 'class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
	        <div class="form-group">
		        <strong>Campus:</strong>
		        {!! Form::select('campus_id',$campuses, [], array('class' => 'form-control')) !!}
	        </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
	        <div class="form-group">
		        <strong>Modalidades:</strong>
		        <div class="checkbox">
		        	<?php $modalities = Modality::all(); ?>
		        	@foreach($modalities as $modality)
		        		<label class="checkbox-inline"><input type="checkbox" name="modalidades[]" value="{{ $modality->id }}">{{ $modality->name }}</label>
		        	@endforeach
		        </div>
	        </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Salvar</button>
        </div>
	</div>
	{!! Form::close() !!}

</div>
@endsection