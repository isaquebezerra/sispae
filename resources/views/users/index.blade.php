@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Gerenciador de Usuários</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}">Criar Novo Usuário</a>
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
		<th>Email</th>
		<th>Papéis</th>
		<th>Campus</th>
		<th width="280px">Ação</th>
	</tr>
	@foreach ($data as $key => $user)
		<tr>
			<td>{{ ++$i }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>
				@if(!empty($user->roles))
					@foreach($user->roles as $v)
						<label class="label label-success">{{ $v->display_name }}</label>
					@endforeach
				@endif
			</td>

			<td>{{ $user->campus->name }}</td>

			<td>
				<a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Visualizar</a>
				<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Editar</a>
				{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
	            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
	        	{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
</table>
{!! $data->render() !!}
</div>
@endsection