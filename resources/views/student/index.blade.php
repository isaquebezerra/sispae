@extends('layouts.student')
@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Processos Seletivos</h2>
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
			<th>Processo</th>
			<th>Período de Inscrições</th>
			<th>Status</th>
			<th width="280px"></th>
		</tr>
		@foreach ($processes as $key => $process)
		<tr>
			<?php 
			$start_date = $process->start_date;
			$start_date_format = DateTime::createFromFormat('Y-m-d', $start_date);
			$start_date_format = $start_date_format->format('d/m/Y');

			$final_date = $process->final_date;
			$final_date_format = DateTime::createFromFormat('Y-m-d', $final_date);
			$final_date_format = $final_date_format->format('d/m/Y');
			?>
			<td>{{ $process->name }}</td>
			<td>De: <strong>{{ $start_date_format }}</strong> Até: <strong>{{ $final_date_format }}</strong></td>
			<td>{{ $process->status }}</td>
			<td>
				@if($process->status == 'Aberto')
				<a class="btn btn-primary" href="{{ route('processes.edit', $process->id) }}">Inscrever-se</a>
				@endif
			</td>
		</tr>
		@endforeach
	</table>
	
</div>
@endsection