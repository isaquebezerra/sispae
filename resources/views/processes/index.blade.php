@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Processos</h2>
	        </div>

	        <div class="pull-right">
	        	
	            	<a class="btn btn-success" href="{{ route('processes.create') }}">Criar Novo Processo</a>
	            
	        </div>
	    </div>
	</div>

	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Processo</th>
			<th>Data Inicial</th>
			<th>Data Final</th>
			<th>Campus</th>
			<th>Status</th>
			<th width="280px">Action</th>
		</tr>
		@foreach ($data as $key => $process)
		<tr>
			<?php 
			$start_date = $process->start_date;
			$start_date_format = DateTime::createFromFormat('Y-m-d', $start_date);
			$start_date_format = $start_date_format->format('d/m/Y');

			$final_date = $process->final_date;
			$final_date_format = DateTime::createFromFormat('Y-m-d', $final_date);
			$final_date_format = $final_date_format->format('d/m/Y');
			?>
			<td>{{ ++$i }}</td>
			<td>{{ $process->name }}</td>
			<td>{{ $start_date_format }}</td>
			<td>{{ $final_date_format }}</td>
			<td>{{ $process->campus->name }}</td>
			<td>{{ $process->status }}</td>
			<td>
				<a class="btn btn-info" href="{{ route('processes.show', $process->id) }}">Visualizar</a>
				
				<a class="btn btn-primary" href="{{ route('processes.edit', $process->id) }}">Editar</a>
								
				{!! Form::open(['method' => 'DELETE','route' => ['processes.destroy', $process->id],'style'=>'display:inline']) !!}
	            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
	        	{!! Form::close() !!}
	        	
			</td>
		</tr>
		@endforeach
	</table>
	{!! $data->render() !!}
</div>
@endsection