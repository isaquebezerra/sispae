@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Gerenciador de Papéis</h2>
	        </div>
	        <div class="pull-right">	        	
	            <a class="btn btn-success" href="{{ route('roles.create') }}">Criar Novo Papel</a>
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
			<th>#</th>
			<th>Nome</th>
			<th>Descrição</th>
			<th width="280px">Ação</th>
		</tr>
		@foreach ($roles as $key => $role)
		<tr>
			<td>{{ ++$i }}</td>
			<td>{{ $role->display_name }}</td>
			<td>{{ $role->description }}</td>
			<td>
				<a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Visualizar</a>
				<a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Editar</a>
				{!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
	            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
	        	{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
	</table>
	{!! $roles->render() !!}
</div>
@endsection