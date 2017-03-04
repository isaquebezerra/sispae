@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit Process</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('processes.index') }}">Voltar</a>
	        </div>
	    </div>
	</div>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	{!! Form::model($process, ['method' => 'PATCH','route' => ['processes.update', $process->id]]) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Nome','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Start Date:</strong>
                {!! Form::text('start_date', $startDate, array('placeholder' => 'dd/mm/aaaa', 'maxlength' => '10', 'onkeypress' => 'mascaraData( this, event )', 'class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Final Date:</strong>
                {!! Form::text('final_date', $finalDate, array('placeholder' => 'dd/mm/aaa', 'maxlength' => '10', 'onkeypress' => 'mascaraData( this, event )', 'class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Campus:</strong>
                {!! Form::select('campus_id', $campuses, $processCampus, array('class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
	        <div class="form-group">
		        <strong>Modalityes:</strong>
	        	<div class="checkbox">
                @foreach($modalities as $modality)
	                @if($modality->processes->contains($process))
	                	<label>
	                	{{ Form::checkbox('modalities[]',$modality->id,true,array('class' => 'name', 'id'=>"modality_$modality->id")) }}
	                	{{ $modality->name }}
	                	</label><br>
	                	@else
	                	<label>
	      				{{ Form::checkbox('modalities[]',$modality->id,null,array('class' => 'name', 'id'=>"modality_$modality->id")) }}
	      				{{ $modality->name }}
	      				</label><br>
	      			@endif
				@endforeach
	        	</div>
	        </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Salvar</button>
        </div>
	</div>
</div>
{!! Form::close() !!}
@endsection