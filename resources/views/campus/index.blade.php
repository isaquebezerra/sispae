@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Campi</h2>
	        </div>

	        <div class="pull-right">
	        	
	            	<a class="btn btn-success" href="{{ route('campuses.create') }}">Criar Novo Campus</a>
	            
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
			<th>Campus</th>
			<th width="280px">Action</th>
		</tr>
		@foreach ($campuses as $key => $campus)
		<tr>
			<td>{{ ++$i }}</td>
			<td>{{ $campus->name }}</td>
			<td>
				<a class="btn btn-info" href="{{ route('campuses.show', $campus->id) }}">Visualizar</a>
				
				<a class="btn btn-primary" href="{{ route('campuses.edit', $campus->id) }}">Editar</a>
								
				{!! Form::open(['method' => 'DELETE','route' => ['campuses.destroy', $campus->id],'style'=>'display:inline']) !!}
	            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
	        	{!! Form::close() !!}
	        	
			</td>
		</tr>
		@endforeach
	</table>
	{!! $campuses->render() !!}
</div>
@endsection