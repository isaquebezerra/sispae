@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Campi</h2>
	        </div>

	        <div class="pull-right">
	        	@permission('campus-create')
	            	<a class="btn btn-success" href="{{ route('campus.create') }}">Criar Novo Campus</a>
	            @endpermission
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
			<th>Title</th>
			<th>Description</th>
			<th width="280px">Action</th>
		</tr>
		@foreach ($campuss as $key => $campus)
		<tr>
			<td>{{ ++$i }}</td>
			<td>{{ $campus->title }}</td>
			<td>{{ $campus->description }}</td>
			<td>
				<a class="btn btn-info" href="{{ route('campus.show',$campus->id) }}">Show</a>
				@permission('campus-edit')
				<a class="btn btn-primary" href="{{ route('campus.edit',$campus->id) }}">Edit</a>
				@endpermission
				@permission('campus-delete')
				{!! Form::open(['method' => 'DELETE','route' => ['campus.destroy', $campus->id],'style'=>'display:inline']) !!}
	            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
	        	{!! Form::close() !!}
	        	@endpermission
			</td>
		</tr>
		@endforeach
	</table>
</div>
{!! $campuss->render() !!}
@endsection