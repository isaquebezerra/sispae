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
                {!! Form::date('start_date', '', array('placeholder' => 'dd/mm/aaaa','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data Final:</strong>
                {!! Form::date('final_date', '', array('placeholder' => 'dd/mm/aaa','class' => 'form-control')) !!}
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
		        <strong>Status:</strong>
		        {!! Form::select('status', ['Aberto' => 'Aberto', 'Encerrado' => 'Encerrado'], [], array('class' => 'form-control')) !!}
	        </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Salvar</button>
        </div>
	</div>
	{!! Form::close() !!}

</div>
@endsection