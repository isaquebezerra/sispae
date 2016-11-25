@extends('layouts.student')
@section('content')
<div class="container">
	
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
            	Atenção! para se inscrever neste processo seletivo, 
            	você deve preencher o questionário e enviar sua documentação.
            </div>

            <div class="panel-body">
            	<div class="center">
					<a class="btn btn-success" href="{{ route('student.enroll') }}">Preencher questionário</a>
					<a class="btn btn-primary" href="{{ route('student.enroll') }}">Enviar documentação</a>
				</div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection