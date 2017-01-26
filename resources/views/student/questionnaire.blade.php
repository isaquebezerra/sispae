<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link href="/css/app.css" rel="stylesheet">
    <link href="/js/app.js">

    <link rel="stylesheet" href="/css/jquery.steps.css">


    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.steps.js"></script>
    <script src="/js/jquery.validate.js"></script>

    <!-- Scripts -->
    
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>


    <style type="text/css">
        .family-member {
            border-top: solid 1px #ccc;
            margin-top: 20px;
            padding-top: 6px;
        }
    </style>
</head>
<body>
<div id="app">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                @if(Auth::check())
                    <li><a href="{{ route('users.index') }}">Dados Pessoais</a></li>
                    <li><a href="{{ route('roles.index') }}">Inscrições</a></li>
                    <li><a href="{{ route('campuses.index') }}">Questionário</a></li>
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Cadastrar-se</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <!--
            <div class="panel-heading">
                <h3>Questionário Socioeconômico</h3>
            </div>
            -->
            <div class="panel-body">
            {!! Form::open(['route'=>'student.questionnairesend', 'id'=>'questionnaire']) !!}
                <h1>Dados pessoais</h1>
                <section>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('nome', 'Nome:') !!}
                            {!! Form::text('nome', Auth::user()->name, array('placeholder' => 'Nome', 'class' => 'form-control')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('apelido', 'Apelido:') !!}
                            {!! Form::text('apelido', null, array('placeholder' => 'Apelido', 'class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('endereco', 'Endereço:') !!}
                            {!! Form::textarea('endereco', null, array('placeholder' => 'Nome da rua, numero, Bairro', 'rows' => 2, 'class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            {!! Form::label('cidade', 'Cidade:') !!}
                            {!! Form::text('cidade', null, array('placeholder' => 'Cidade', 'class' => 'form-control')) !!}
                        </div>
                        <div class="col-sm-4">
                            {!! Form::label('estado', 'Estado:') !!}
                            {!! Form::text('estado', null, array('placeholder' => 'Estado', 'class' => 'form-control')) !!}
                        </div>
                        <div class="col-sm-4">
                            {!! Form::label('cep', 'CEP:') !!}
                            {!! Form::text('cep', null, array('placeholder' => 'CEP', 'class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('ponto_ref', 'Ponto de referência:') !!}
                            {!! Form::text('ponto_ref', null, array('placeholder' => 'Ponto de Referencia', 'class' => 'form-control')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('telefone', 'Telefone:') !!}
                            {!! Form::text('telefone', null, array('placeholder' => 'Telefone', 'class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('data_nascimento', 'Data de nascimento:') !!}
                            {!! Form::date('data_nascimento', null, array('placeholder'=>'dd/mm/yyyy', 'class' => 'form-control')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('sexo', 'Sexo:') !!}
                            {!! Form::select('sexo', ['Feminino' => 'Feminino', 'Masculino' => 'Masculino'], null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('nome_mae', 'Nome da mãe:') !!}
                            {!! Form::text('nome_mae', null, array('placeholder' => 'Nome da mãe', 'class' => 'form-control')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('nome_pai', 'Nome do pai:') !!}
                            {!! Form::text('nome_pai', null, array('placeholder' => 'Nome do pai', 'class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('cond_resid', 'Qual a sua atual condição de residência:') !!}
                            {!! Form::select('cond_resid',
                            [
                                'A' => 'Família reside em área rural, indígena aldeado, negro de comunidade quilombola, pais falecidos, pais negligentes',
                                'B' => 'Reside separado da família (jovem e adolescente, responsável pelo próprio sustento)',
                                'C' => 'Adulto(a) reside com companheiro(a), responsável pelo próprio sustento',
                                'D' => 'Estudante dividindo a moradia com outros tendo a finalidade de estudar, sustentado pelos pais. Oriundo de cidades distintas do Campus'
                            ],
                            null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('endereco_pais', 'Caso não more com seus pais ou responsáveis, qual é o endereço deles?') !!}
                            {!! Form::textarea('endereco_pais', null, array('placeholder' => 'Nome da rua, numero, Bairro', 'rows' => 2, 'class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            {!! Form::label('cidade_pais', 'Cidade:') !!}
                            {!! Form::text('cidade_pais', null, array('placeholder' => 'Cidade', 'class' => 'form-control')) !!}
                        </div>
                        <div class="col-sm-4">
                            {!! Form::label('estado_pais', 'Estado:') !!}
                            {!! Form::text('estado_pais', null, array('placeholder' => 'Estado', 'class' => 'form-control')) !!}
                        </div>
                        <div class="col-sm-4">
                            {!! Form::label('cep_pais', 'CEP:') !!}
                            {!! Form::text('cep_pais', null, array('placeholder' => 'CEP', 'class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('ponto_ref_pais', 'Ponto de referência:') !!}
                            {!! Form::text('ponto_ref_pais', null, array('placeholder' => 'Ponto de referência', 'class' => 'form-control')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('telefone_pais', 'Telefone dos pais:') !!}
                            {!! Form::text('telefone_pais', null, array('placeholder' => 'Telefone', 'class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('estado_civil', 'Estado Civil do (a) estudante:') !!}
                            {!! Form::select('estado_civil',
                            [
                                'Solteiro(a)' => 'Solteiro(a)',
                                'Casado(a)' => 'Casado(a)',
                                'Divorciado(a)' => 'Divorciado(a)',
                                'Desquitado ou separado(a) judicialmente' => 'Desquitado ou separado(a) judicialmente',
                                'Vive em união estável' => 'Vive em união estável',
                                'Viúvo(a)' => 'Viúvo(a)'
                            ],
                            null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('raca', 'Você se considera:') !!}
                            {!! Form::select('raca',
                            [
                                'Negro(a)/Preto(a)' => 'Negro(a)/Preto(a)',
                                'Branco(a)' => 'Branco(a)',
                                'Indígena' => 'Indígena',
                                'Pardo' => 'Pardo',
                                'Amarelo(a)' => 'Amarelo(a)',
                                'Quilombola' => 'Quilombola',
                                'Não quer declarar' => 'Não quer declarar',
                                'Outros' => 'Outros'
                            ],
                            null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('orientacao_sex', 'Orientação sexual:') !!}
                            {!! Form::select('orientacao_sex',
                            [
                                'Heterossexual' => 'Heterossexual',
                                'Bissexual' => 'Bissexual',
                                'Travesti' => 'Travesti',
                                'Homossexual' => 'Homossexual',
                                'Transsexual' => 'Transsexual',
                                'Não quer responder' => 'Não quer responder',
                                'Outros' => 'Outros'
                            ],
                            null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('mora_com', 'Com quem você mora?') !!}
                            {!! Form::select('mora_com',
                            [
                                'Sozinho(a)' => 'Sozinho(a)',
                                'Só com a mãe' => 'Só com a mãe',
                                'Só com o pai' => 'Só com o pai',
                                'Com mãe e irmãos' => 'Com mãe e irmãos',
                                'Com pai e irmãos' => 'Com pai e irmãos',
                                'Com esposo(a) e filhos' => 'Com esposo(a) e filhos',
                                'Só com os filhos' => 'Só com os filhos',
                                'Só com irmãos' => 'Só com irmãos',
                                'Com amigos(as)' => 'Com amigos(as)',
                                'Outros' => 'Outros'
                            ],
                            null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-8">
                            {!! Form::label('prat_ativ', 'Você pratica alguma atividade física?') !!}
                            <div class="radio">
                                <label><input type="radio" name="prat_ativ" value="Não">Não</label>
                                <label><input type="radio" name="prat_ativ" value="Sim, esporadicamente">Sim, esporadicamente</label>
                                <label><input type="radio" name="prat_ativ" value="Sim, com frequência">Sim, com frequência</label>
                            </div>                            
                        </div>
                        <div class="col-sm-4">
                            {!! Form::label('tem_filhos', 'Você tem filhos ou enteados?') !!}
                            <div class="radio">
                                <label><input type="radio" name="temfilhos" value="Não">Não</label>
                                <label><input type="radio" name="temfilhos" value="Sim">Sim</label>
                            </div>
                        </div>
                    </div>
                </section>

                <h1>Dados escolares</h1>
                <section>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('ensino_fund', 'Em que tipo de escola você fez o ensino fundamental?') !!}
                            {!! Form::select('ensino_fund',
                            [
                                'Somente em escola pública' => 'Somente em escola pública',
                                'Em escola particular com bolsa' => 'Em escola particular com bolsa',
                                'Em escola particular sem bolsa' => 'Em escola particular sem bolsa',
                                'Parte em escola pública e parte em escola particular com bolsa' => 'Parte em escola pública e parte em escola particular com bolsa',
                                'Parte em escola pública e parte em escola particular sem bolsa' => 'Parte em escola pública e parte em escola particular sem bolsa'
                            ],
                            null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('ensino_medio', 'Em que tipo de escola você fez o ensino médio?') !!}
                            {!! Form::select('ensino_medio',
                            [
                                'Somente em escola pública'                                      => 'Somente em escola pública',
                                'Em escola particular com bolsa'                                 => 'Em escola particular com bolsa',
                                'Em escola particular sem bolsa'                                 => 'Em escola particular sem bolsa',
                                'Parte em escola pública e parte em escola particular com bolsa' => 'Parte em escola pública e parte em escola particular com bolsa',
                                'Parte em escola pública e parte em escola particular sem bolsa' => 'Parte em escola pública e parte em escola particular sem bolsa'
                            ],
                            null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('motivo_curso', 'Qual seu curso no IF Sertão e por que o escolheu?') !!}
                            {!! Form::textarea('motivo_curso', null, array('rows' => 2, 'class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('cotista', 'Ingressou através do sistema de cotas?') !!}
                            <div class="radio">
                                <label><input type="radio" name="cotista" value="Não">Não</label>
                                <label><input type="radio" name="cotista" value="Sim">Sim</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            {!! Form::label('modalidade', 'Modalidade:') !!}
                            {!! Form::select('modalidade',
                            [
                                'Ensino médio'  => 'Ensino médio',
                                'PROEJA'        => 'PROEJA',
                                'Subsequente'   => 'Subsequente',
                                'Superior'      => 'Superior'
                            ],
                            null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                        </div>
                        <div class="col-sm-3">
                            {!! Form::label('turno', 'Turno:') !!}
                            {!! Form::select('turno',
                            [
                                'Manhã' => 'Manhã',
                                'Tarde' => 'Tarde',
                                'Noite' => 'Noite'
                            ],
                            null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('inicio_curso', 'Data de início do curso:') !!}
                            {!! Form::date('inicio_curso', null, array('placeholder'=>'dd/mm/yyyy', 'class' => 'form-control')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('termino_curso', 'Data de término do curso:') !!}
                            {!! Form::date('termino_curso', null, array('placeholder'=>'dd/mm/yyyy', 'class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('fez_outra_graduacao', 'Cursou ou está cursando outra graduação?') !!}
                            <div class="radio">
                                <label><input type="radio" name="fez_outra_graduacao" value="Não">Não</label>
                                <label><input type="radio" name="fez_outra_graduacao" value="Sim">Sim</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('fez_outro_tecnico', 'Cursou ou está cursando outro curso técnico?') !!}
                            <div class="radio">
                                <label><input type="radio" name="fez_outro_tecnico" value="Não">Não</label>
                                <label><input type="radio" name="fez_outro_tecnico" value="Sim">Sim</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('fez_curso_lingua', 'Você fez ou faz curso de línguas?') !!}
                            <div class="checkbox">
                                <label class="checkbox-inline"><input type="checkbox" name="fez_curso_lingua[]" value="Inglês">Inglês</label>
                                <label class="checkbox-inline"><input type="checkbox" name="fez_curso_lingua[]" value="Espanhol">Espanhol</label>
                                <label class="checkbox-inline"><input type="checkbox" name="fez_curso_lingua[]" value="Francês">Francês</label>
                                <label class="checkbox-inline"><input type="checkbox" name="fez_curso_lingua[]" value="Libras">Libras</label>
                                <label class="checkbox-inline"><input type="checkbox" name="fez_curso_lingua[]" value="Outro">Outro</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('recebe_auxilio', 'Você recebe Auxílio Financeiro da Política de Assistência Estudantil no IF Sertão-PE?') !!}
                            <div class="checkbox">
                                <div class="col-sm-3">
                                    <label class="checkbox"><input type="checkbox" name="recebe_auxilio[]" value="Auxílio Alimentação">Auxílio Alimentação</label>
                                    <label class="checkbox"><input type="checkbox" name="recebe_auxilio[]" value="Auxílio Transporte">Auxílio Transporte</label>
                                    <label class="checkbox"><input type="checkbox" name="recebe_auxilio[]" value="Auxílio Moradia">Auxílio Moradia</label>
                                </div>
                                <div class="col-sm-3">
                                    <label class="checkbox"><input type="checkbox" name="recebe_auxilio[]" value="Material didático">Material didático</label>
                                    <label class="checkbox"><input type="checkbox" name="recebe_auxilio[]" value="Auxílio Creche">Auxílio Creche</label>
                                    <label class="checkbox"><input type="checkbox" name="recebe_auxilio[]" value="Auxílio Atleta">Auxílio Atleta</label>
                                </div>
                                <div class="col-sm-4">
                                    <label class="checkbox"><input type="checkbox" name="recebe_auxilio[]" value="Atividade artística e cultural">Atividade artística e cultural</label>
                                    <label class="checkbox"><input type="checkbox" name="recebe_auxilio[]" value="Auxílio emergencial">Auxílio emergencial</label>
                                    <label class="checkbox"><input type="checkbox" name="recebe_auxilio[]" value="Ajuda de custo para viagens">Ajuda de custo para viagens</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('acesso_programas', 'Quais dos programas da Política de Assistência Estudantil você tem acesso?') !!}
                            <div class="checkbox">
                                <div class="col-sm-3">
                                    <label class="checkbox"><input type="checkbox" name="acesso_programas[]" value="Seguro de vida">Seguro de vida</label>
                                    <label class="checkbox"><input type="checkbox" name="acesso_programas[]" value="Material escolar">Material escolar</label>
                                    <label class="checkbox"><input type="checkbox" name="acesso_programas[]" value="Camisa da farda">Camisa da farda</label>
                                    <label class="checkbox"><input type="checkbox" name="acesso_programas[]" value="Residência estudantil">Residência estudantil</label>
                                    <label class="checkbox"><input type="checkbox" name="acesso_programas[]" value="Auxílio permanência">Auxílio permanência</label>
                                </div>
                                <div class="col-sm-4">
                                    
                                    <label class="checkbox"><input type="checkbox" name="acesso_programas[]" value="Serviço social">Serviço social</label>
                                    <label class="checkbox"><input type="checkbox" name="acesso_programas[]" value="Técnico em enfermagem">Técnico em enfermagem</label>
                                    <label class="checkbox"><input type="checkbox" name="acesso_programas[]" value="Merenda pronta">Merenda pronta</label>
                                    <label class="checkbox"><input type="checkbox" name="acesso_programas[]" value="Ajuda de custo para refeições">Ajuda de custo para refeições</label>
                                    <label class="checkbox"><input type="checkbox" name="acesso_programas[]" value="Psicologia">Psicologia</label>
                                </div>
                                <div class="col-sm-2">
                                    <label class="checkbox"><input type="checkbox" name="acesso_programas[]" value="Napne">Napne</label>
                                    <label class="checkbox"><input type="checkbox" name="acesso_programas[]" value="Dentista">Dentista</label>
                                    <label class="checkbox"><input type="checkbox" name="acesso_programas[]" value="Enfermagem">Enfermagem</label>
                                    <label class="checkbox"><input type="checkbox" name="acesso_programas[]" value="Médico">Médico</label>
                                    <label class="checkbox"><input type="checkbox" name="acesso_programas[]" value="Nutrição">Nutrição</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('part_proj_ext', 'Participa de projeto de PESQUISA ou EXTENSÃO?') !!}
                            <div class="radio">
                                <label><input type="radio" name="part_proj_ext" value="Não">Não</label>
                                <label><input type="radio" name="part_proj_ext" value="Sim, com bolsa">Sim, com bolsa</label>
                                <label><input type="radio" name="part_proj_ext" value="Sim, sem bolsa">Sim, sem bolsa</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('faz_estagio', 'Você faz estágio?') !!}
                            <div class="radio">
                                <label><input type="radio" name="faz_estagio" value="Não">Não</label>
                                <label><input type="radio" name="faz_estagio" value="Sim, remuneraado">Sim, remunerado</label>
                                <label><input type="radio" name="faz_estagio" value="Sim, não remunerado">Sim, não remunerado</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('em_que_estagia', 'Em que você faz estágio?') !!}
                            {!! Form::text('em_que_estagia', Auth::user()->name, array('class' => 'form-control')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('valor_estagio', 'Valor do salário') !!}
                            {!! Form::text('valor_estagio', null, array('class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-9">
                            {!! Form::label('dific_estudos', 'Você tem dificuldade para os estudos?') !!}
                            <div class="checkbox">
                                <label><input type="checkbox" name="dific_estudos" value="Não tenho nenhuma dificuldade">Não tenho nenhuma dificuldade</label>
                                <label><input type="checkbox" name="dific_estudos" value="Nas matérias de ciências da natureza (matemática, física, química, biologia)">Nas matérias de ciências da natureza (matemática, física, química, biologia)</label>
                                <label><input type="checkbox" name="dific_estudos" value="Redação">Redação</label>
                                <label><input type="checkbox" name="dific_estudos" value="Nas matérias de ciências humanas (história, geografia, sociologia, filosofia, Artes)">Nas matérias de ciências humanas (história, geografia, sociologia, filosofia, Artes)</label>
                                <label><input type="checkbox" name="dific_estudos" value="Nas matérias de linguagem (Português, inglês, espanhol, libras)">Nas matérias de linguagem (Português, inglês, espanhol, libras)</label>
                                <label><input type="checkbox" name="dific_estudos" value="Nas matérias das áreas específicas/técnicas do curso">Nas matérias das áreas específicas/técnicas do curso</label>
                            </div>
                        </div>
                    </div>
                </section>

                <h1>Dados financeiros</h1>
                <section>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('trabalha', 'Você trabalha?') !!}
                            <div class="radio">
                                <label class="radio-inline"><input type="radio" name="trabalha" value="Não">Não</label>
                                <label class="radio-inline"><input type="radio" name="trabalha" value="Sim, com carteira assinada">Sim, com carteira assinada</label>
                                <label class="radio-inline"><input type="radio" name="trabalha" value="Sim, sem carteira assinada">Sim, sem carteira assinada</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('em_que_trabalha', 'Em que você faz trabalha?') !!}
                            {!! Form::text('em_que_trabalha', null, array('class' => 'form-control')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('valor_salario', 'Valor do salário') !!}
                            {!! Form::text('valor_salario', null, array('class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('responsavel', 'Quem é responsável por SUAS despesas?') !!}
                            <div class="radio">
                                <div class="col-sm-6">
                                    <label><input type="radio" name="responsavel" value="Você é responsável pelo próprio sustento">Você é responsável pelo próprio sustento</label>
                                    <label><input type="radio" name="responsavel" value="Seus pais são responsáveis pelo seu sustento">Seus pais são responsáveis pelo seu sustento</label>
                                    <label><input type="radio" name="responsavel" value="Somente sua mãe é responsável por seu sustento">Somente sua mãe é responsável por seu sustento</label>
                                    <label><input type="radio" name="responsavel" value="Somente seu pai é responsável por seu sustento">Somente seu pai é responsável por seu sustento</label>
                                </div>
                                <div class="col-sm-3">
                                    <label><input type="radio" name="responsavel" value="Você é responsável pelo próprio sustento">Por avô/avó.</label>
                                    <label><input type="radio" name="responsavel" value="Seus pais são responsáveis pelo seu sustento">Esposo (a)</label>
                                    <label><input type="radio" name="responsavel" value="Somente sua mãe é responsável por seu sustento">Outros parentes.</label>
                                    <label><input type="radio" name="responsavel" value="Outros meios">Outros meios</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            {!! Form::label('saude', 'Possui algum problema de saúde?') !!}
                            <div class="checkbox">
                                <label><input type="checkbox" name="saude[]" value="Depressão">Depressão</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="saude[]" value="Ansiedade">Ansiedade</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="saude[]" value="Diabetes">Diabetes</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="saude[]" value="Hipertensão">Hipertensão</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="saude[]" value="Desnutrição">Desnutrição</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="saude[]" value="Fumante">Fumante</label>
                            </div>
                            <div class="checkbox">                              
                                <label><input type="checkbox" name="saude[]" value="Usa álcool/drogas">Usa álcool/drogas</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="saude[]" value="Tem DST">Tem DST</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="saude[]" value="Outras">Outras</label>       
                            </div>
                        </div>
                        <div class="col-sm-3">
                            {!! Form::label('nec_educ', 'Possui necessidade educacional?') !!}
                            <div class="checkbox">
                                <label><input type="checkbox" name="nec_educ[]" value="Não">Não</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="nec_educ[]" value="Superdotação">Superdotação</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="nec_educ[]" value="Daltônico">Daltônico</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="nec_educ[]" value="TDH">TDH</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="nec_educ[]" value="Altas habilidades">Altas habilidades</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="nec_educ[]" value="Hiperatividade">Hiperatividade</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="nec_educ[]" value="Dislexia">Dislexia</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="nec_educ[]" value="Autismo">Autismo</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="nec_educ[]" value="Outras">Outras</label>         
                            </div>
                        </div>
                        <div class="col-sm-3">
                            {!! Form::label('deficiencia', 'Possui alguma deficiência?') !!}
                            <div class="checkbox">
                                <label><input type="checkbox" name="deficiencia[]" value="Não">Não</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="deficiencia[]" value="Visual/Cegueira">Visual/Cegueira</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="deficiencia[]" value="Física/Motora">Física/Motora</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="deficiencia[]" value="Auditiva/Surdes">Auditiva/Surdes</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="deficiencia[]" value="Intelectual">Intelectual</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="deficiencia[]" value="Múltipla">Múltipla</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="deficiencia[]" value="Amputação">Amputação</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="deficiencia[]" value="Outras">Outras</label>           
                            </div>
                        </div>
                        <div class="col-sm-3">
                            {!! Form::label('limitacao', 'Possui alguma limitação?') !!}
                            <div class="checkbox">
                                <label><input type="checkbox" name="limitacao[]" value="Não">Não</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="limitacao[]" value="Baixa visão">Baixa visão</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="limitacao[]" value="Locomoção">Locomoção</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="limitacao[]" value="Gestante">Gestante</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="limitacao[]" value="Obesidade">Obesidade</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="limitacao[]" value="Física/Motora">Física/Motora</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="limitacao[]" value="Outras">Outras</label>       
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('usa_medic', 'Você faz uso de medicamentos de uso contínuo ou controlado em função de alguma enfermidade?') !!}
                            <div class="radio">
                                <label class="radio-inline"><input type="radio" name="usa_medic" value="Não">Não</label>
                                <label class="radio-inline"><input type="radio" name="usa_medic" value="Sim">Sim</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('nome_medic', 'Nome do medicamento:') !!}
                            {!! Form::text('nome_medic', null, array('class' => 'form-control')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('valor_medic', 'Valor do medicamento:') !!}
                            {!! Form::text('valor_medic', null, array('class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('plano_saude', 'Tem plano de saúde?') !!}
                            <div class="radio">
                                <label class="radio-inline"><input type="radio" name="plano_saude" value="Não">Não</label>
                                <label class="radio-inline"><input type="radio" name="plano_saude" value="Sim">Sim</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('nome_plano_saude', 'Nome do plano de saude:') !!}
                            {!! Form::text('nome_plano_saude', null, array('class' => 'form-control')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('valor_plano_saude', 'Valor do plano de saude:') !!}
                            {!! Form::text('valor_plano_saude', null, array('class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('plano_odontologico', 'Tem plano odontológico?') !!}
                            <div class="radio">
                                <label class="radio-inline"><input type="radio" name="plano_odontologico" value="Não">Não</label>
                                <label class="radio-inline"><input type="radio" name="plano_odontologico" value="Sim">Sim</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('nome_plano_odontologico', 'Nome do plano odontológico:') !!}
                            {!! Form::text('nome_plano_odontologico', null, array('class' => 'form-control')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('valor_plano_odontologico', 'Valor do plano odontológico:') !!}
                            {!! Form::text('valor_plano_odontologico', null, array('class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            {!! Form::label('resid_familia', 'Qual a situação da residência de sua família?') !!}
                            {!! Form::select('resid_familia',
                            [
                                'Própria quitada'                   => 'Própria quitada',
                                'Alugada'                           => 'Alugada',
                                'Herdada'                           => 'Herdada',
                                'Cedida'                            => 'Cedida',
                                'Financiada'                        => 'Financiada',
                                'Programa Minha Casa Minha Vida'    => 'Programa Minha Casa Minha Vida'
                            ],
                            null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            {!! Form::label('tipo_construcao', 'Tipo de constução:') !!}
                            {!! Form::select('tipo_construcao',
                            [
                                'Alvenaria/Tijolo'  => 'Alvenaria/Tijolo',
                                'Taipa/Pau a pique' => 'Taipa/Pau a pique',
                            ],
                            null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                        </div>
                        <div class="col-sm-4">
                            {!! Form::label('abastecimento_agua', 'Abastecimento de água:') !!}
                            {!! Form::select('abastecimento_agua',
                            [
                                'Rede pública'  => 'Rede pública',
                                'Poço nascente' => 'Poço nascente',
                                'Carro pipa'    => 'Carro pipa',
                                'Outro'         => 'Outro'
                            ],
                            null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                        </div>
                        <div class="col-sm-4">
                            {!! Form::label('infra_rua', 'Infraestrutura da rua:') !!}
                            {!! Form::select('infra_rua',
                            [
                                'Pavimentada' => 'Pavimentada',
                                'Não pavimentada' => 'Não pavimentada',
                            ],
                            null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            {!! Form::label('coleta_lixo', 'Coleta de lixo:') !!}
                            {!! Form::select('coleta_lixo',
                            [
                                'Regular' => 'Regular',
                                'Não regular' => 'Não regular',
                            ],
                            null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::label('acesso_saude', 'Acesso a serviço de saúde:') !!}
                            {!! Form::select('acesso_saude',
                            [
                                'Posto de saúde'    => 'Posto de saúde',
                                'Hospital público'  => 'Hospital público',
                                'Hospital privado'  => 'Hospital privado',
                                'CAPS'              => 'CAPS'
                            ],
                            null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                        </div>
                    </div>
                </section>

                <h1>Composição familiar</h1>
                <section>
                    <div class="input_fields_wrap">
                        <button class="add_field_button">Adicionar membro</button>
                        <div class="row family_member">
                            <div class="col-sm-12">
                                <div class="col-sm-3">
                                    {!! Form::label('nome_membro', 'Nome:') !!}
                                    {!! Form::text('nome_membro[]', null, array('placeholder' => 'Nome', 'class' => 'form-control')) !!}
                                </div>
                                <div class="col-sm-3">
                                    {!! Form::label('idade_membro', 'Idade:') !!}
                                    {!! Form::text('idade_membro[]', null, array('placeholder' => 'Idade', 'class' => 'form-control')) !!}
                                </div>
                                <div class="col-sm-3">
                                    {!! Form::label('parentesco_membro[]', 'Parentesco:') !!}
                                    {!! Form::text('parentesco_membro[]', null, array('placeholder' => 'Parentesco', 'class' => 'form-control')) !!}
                                </div>
                                <div class="col-sm-3">
                                    {!! Form::label('profissao_membro[]', 'Profissão:') !!}
                                    {!! Form::text('profissao_membro[]', null, array('placeholder' => 'Profissão', 'class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="col-sm-4">
                                    {!! Form::label('estado_civil_membro[]', 'Estado civil:') !!}
                                    {!! Form::select('estado_civil_membro[]',
                                    [
                                        'Solteiro'      => 'Solteiro',
                                        'Casado'        => 'Casado',
                                        'União estável' => 'União estável',
                                        'Separado'      => 'Separado',
                                        'Viúvo'         => 'Viúvo'
                                    ],
                                    null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                                </div>
                                <div class="col-sm-4">
                                    {!! Form::label('escolaridade_membro[]', 'Escolaridade:') !!}
                                    {!! Form::select('escolaridade_membro[]',
                                    [
                                        'Não escolarizado'          => 'Não escolarizado',
                                        'Fundamental incompleto'    => 'Fundamental incompleto',
                                        'Fundamental completo'      => 'Fundamental completo',
                                        'Médio incompleto'          => 'Médio incompleto',
                                        'Médio completo'            => 'Médio completo',
                                        'Superior completo'         => 'Superior completo',
                                        'Superior incompleto'       => 'Superior incompleto',
                                        'Pós graduação'             => 'Pós graduação'
                                    ],
                                    null, ['placeholder' => 'Selecione...', 'class'=>'form-control']); !!}
                                </div>
                                <div class="col-sm-4">
                                    {!! Form::label('renda_mensal_membro[]', 'Renda mensal:') !!}
                                    {!! Form::text('renda_mensal_membro[]', null, array('placeholder' => 'Nome', 'class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>SISPAE - Sistema de Apoio ao Programa de Assistência Estudantil.</p>
</footer>
</div> <!--end id=app-->


</body>
<!-- Scripts -->
<script>
    $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
    
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="row family-member"><div class="form-group row"><div id="member" class="member"><div class="col-sm-3 form-group"><label>Nome:</label><input type="text" name="nome_membro[]" placeholder="Primeiro nome" class="form-control"></div><div class="col-sm-3 form-group"><label>Idade:</label><input type="text" name="idade_membro[]" placeholder="Idade" class="form-control"></div><div class="col-sm-3 form-group"><label>Parentesco:</label><input type="text" name="parentesco_membro[]" placeholder="Parentesco" class="form-control"></div><div class="col-sm-3 form-group"><label>Profissão:</label><input type="text" name="profissao_membro[]" placeholder="Profissão" class="form-control"></div><div class="col-sm-4 form-group"><label>Estado civil:</label><select name="estado_civil_membro[]" class="form-control" id="sel1"><option value="" disabled selected>Selecione...</option><option>Solteiro</option><option>Casado</option><option>União estável</option><option>Separado</option><option>Viúvo</option></select></div><div class="col-sm-4 form-group"><label>Escolaridade:</label><select name="escolaridade_membro" class="form-control" id="sel1"><option value="" disabled selected>Selecione...</option><option>Não escolarizado</option><option>Fundamental incompleto</option><option>Fundamental completo</option><option>Médio incompleto</option><option>Médio completo</option><option>Superior completo</option><option>Superior incompleto</option><option>Pós-Graduação</option></select></div><div class="col-sm-4 form-group"><label>Renda mensal:</label><input name="renda_mensal_membro" type="text" placeholder="Profissão" class="form-control"></div></div></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
            }
        });
    
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
</script>
<script>
    var form = $("#questionnaire");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
    form.steps({
        headerTag: "h1",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex)
        {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {
            document.getElementById("questionnaire").submit();
        }
    });
</script>

</html>

