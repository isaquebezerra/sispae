@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Visualizar Usuário</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}">Voltar</a>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
               {{ $user->name }}
        </div>
    </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
              <strong>Email:</strong>

                {{ $user->email }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Papéis:</strong>

                @if(!empty($user->roles))

					@foreach($user->roles as $v)

						<label class="label label-success">{{ $v->display_name }}</label>

					@endforeach

				@endif

            </div>

        </div>

	</div>
</div>
@endsection