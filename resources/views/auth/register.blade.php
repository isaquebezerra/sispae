@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="campus" class="col-md-4 control-label">Campus</label>

                            <div class="col-md-6">
                                {!! Form::select('campus_id',$campuses, [], array('class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="course" class="col-md-4 control-label">Curso</label>

                            <div class="col-md-6">
                                {!! Form::text('course', null, array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="register" class="col-md-4 control-label">Número da Matrícula</label>

                            <div class="col-md-6">
                                {!! Form::text('register', null, array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="shift" class="col-md-4 control-label">Turno</label>

                            <div class="col-md-6">
                                {!! Form::select('shift', ['M' => 'Matutino', 'V' => 'Vespertino', 'N' => 'Noturno'], [], array('class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="genre" class="col-md-4 control-label">Sexo</label>

                            <div class="col-md-6">
                                {!! Form::select('genre', ['M' => 'Masculino', 'F' => 'Feminino'], [], array('class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="birthday" class="col-md-4 control-label">Data de Nascimento</label>

                            <div class="col-md-6">
                                {!! Form::text('birthday', null, array('placeholder' => '31-12-2016','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cpf" class="col-md-4 control-label">CPF</label>

                            <div class="col-md-6">
                                {!! Form::text('cpf', null, array('placeholder' => '000.000.000-00','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rg" class="col-md-4 control-label">RG</label>

                            <div class="col-md-6">
                                {!! Form::text('rg', null, array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="issuing-body" class="col-md-4 control-label">Órgao Emissor</label>

                            <div class="col-md-6">
                                {!! Form::text('issuing_body', null, array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mother" class="col-md-4 control-label">Nome da Mãe</label>

                            <div class="col-md-6">
                                {!! Form::text('mother', null, array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="father" class="col-md-4 control-label">Nome do Pai</label>

                            <div class="col-md-6">
                                {!! Form::text('father', null, array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="course_modality" class="col-md-4 control-label">Modalidade do Curso</label>

                            <div class="col-md-6">
                                {!! Form::select('course_modality', ['SP' => 'Superior', 'SS' => 'Subsequente', 'PE' => 'PROEJA', 'ME' => 'Médio Integrado'], [], array('class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="class" class="col-md-4 control-label">Turma</label>

                            <div class="col-md-6">
                                {!! Form::text('class', null, array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="col-md-4 control-label">Telefone</label>

                            <div class="col-md-6">
                                {!! Form::text('phone', null, array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"class="btn btn-primary">
                                    Cadastrar-se
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
