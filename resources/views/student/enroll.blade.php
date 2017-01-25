@extends('layouts.student')
@section('content')
<div class="container">
	
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
            	<h3>
                    Siga as orientações abaixo para efetuar sua inscrição.
                </h3>
                <p>
                    Este questionário tem como objetivo conhecer os aspectos socioeconômicos que caracterizam os (as) estudantes do IF Sertão-PE, com a finalidade de planejar, oferecer e melhorar os programas da Política de Assistência Estudantil, como também criar e manter um banco de dados com informações sobre os (as) estudantes para serem atendidos (as) em atividades que dependem de avaliação socioeconômica. 
                    A veracidade das respostas e a devolução deste questionário são necessárias e indispensáveis para sua participação nos programas que tem a avaliação socioeconômica como pré-requisito. 
                    Todos os dados obtidos neste questionário serão confidenciais e mantidos em sigilo pela equipe da Assistência Estudantil.
                    Portanto, por favor, não deixe nenhuma questão sem resposta!
                </p>
            </div>

            <div class="panel-body">
            	<div class="center">
					<a class="btn btn-success" href="{{ route('student.questionnaire') }}">Preencher questionário</a>
					<a class="btn btn-primary" href="{{ route('student.enroll') }}">Enviar documentação</a>
				</div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection