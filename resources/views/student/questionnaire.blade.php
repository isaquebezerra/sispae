@extends('layouts.student')
@section('content')
<div class="container">
	
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
            	<h2>
                    Para se inscrever neste processo seletivo, 
                    você deve preencher o questionário abaixo.
                </h2>
                <p>
                    Este questionário tem como objetivo conhecer os aspectos socioeconômicos que caracterizam os (as) estudantes do IF Sertão-PE, com a finalidade de planejar, oferecer e melhorar os programas da Política de Assistência Estudantil, como também criar e manter um banco de dados com informações sobre os (as) estudantes para serem atendidos (as) em atividades que dependem de avaliação socioeconômica. 
                    A veracidade das respostas e a devolução deste questionário são necessárias e indispensáveis para sua participação nos programas que tem a avaliação socioeconômica como pré-requisito. 
                    Todos os dados obtidos neste questionário serão confidenciais e mantidos em sigilo pela equipe da Assistência Estudantil.
                    Portanto, por favor, não deixe nenhuma questão sem resposta!
                </p>
            </div>

            <div class="panel-body">
                <form>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nome</label>
                                <input type="text" placeholder="Insira seu nome aqui" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Apelido</label>
                                <input type="text" placeholder="Insira seu apelido aqui" class="form-control">
                            </div>
                        </div>                  
                        <div class="form-group">
                            <label>Endereço</label>
                            <textarea placeholder="Nome da rua, numero, Bairro" rows="3" class="form-control"></textarea>
                        </div>  
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Cidade</label>
                                <input type="text" placeholder="Insira o nome da sua cidade" class="form-control">
                            </div>  
                            <div class="col-sm-4 form-group">
                                <label>Estado</label>
                                <input type="text" placeholder="Insira o nome do seu estado" class="form-control">
                            </div>  
                            <div class="col-sm-4 form-group">
                                <label>CEP</label>
                                <input type="text" placeholder="Insira seu CEP aqui" class="form-control">
                            </div>      
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Ponto de referência</label>
                                <input type="text" placeholder="Insira um ponto de referência" class="form-control">
                            </div>      
                            <div class="col-sm-6 form-group">
                                <label>Telefone</label>
                                <input type="text" placeholder="Insira o seu número de telefone" class="form-control">
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Data de nascimento</label>
                                <input type="text" placeholder="dd/mm/aaaa" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Sexo</label>
                                  <select class="form-control" id="sel1">
                                    <option>Feminino</option>
                                    <option>Masculino</option>
                                  </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>CPF</label>
                                <input type="text" placeholder="Insira o número do seu CPF" class="form-control">
                            </div>      
                            <div class="col-sm-4 form-group">
                                <label>RG</label>
                                <input type="text" placeholder="Insira o número do seu RG" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Órgão emissor</label>
                                <input type="text" placeholder="Insira o órgão emissor do RG" class="form-control">
                            </div> 
                        </div>                    
                    <div class="form-group">
                        <label>Nome da mãe</label>
                        <input type="text" placeholder="Insira um nome" class="form-control">
                    </div>      
                    <div class="form-group">
                        <label>Nome do pai</label>
                        <input type="text" placeholder="Insira um nome" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Qual a sua atual condição de residência</label>
                        <select class="form-control" id="sel1">
                            <option>Família reside em área rural, indígena aldeado, negro de comunidade quilombola, pais falecidos, pais negligentes</option>
                            <option>Reside separado da família (jovem e adolescente, responsável pelo próprio sustento)</option>
                            <option>Adulto(a) reside com companheiro(a), responsável pelo próprio sustento</option>
                            <option>Estudante dividindo a moradia com outros tendo a finalidade de estudar, sustentado pelos pais. Oriundo de cidades distintas do Campus</option>
                        </select>
                    </div>
                    <div class="form-group">
                            <label>Caso não more com seus pais ou responsáveis, qual é o endereço deles?</label>
                            <textarea placeholder="Nome da rua, numero, Bairro" rows="3" class="form-control"></textarea>
                        </div>  
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Cidade</label>
                                <input type="text" placeholder="Insira o nome da cidade" class="form-control">
                            </div>  
                            <div class="col-sm-4 form-group">
                                <label>Estado</label>
                                <input type="text" placeholder="Insira o nome do estado" class="form-control">
                            </div>  
                            <div class="col-sm-4 form-group">
                                <label>CEP</label>
                                <input type="text" placeholder="Insira o CEP aqui" class="form-control">
                            </div>      
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Ponto de referência</label>
                                <input type="text" placeholder="Insira um ponto de referência" class="form-control">
                            </div>      
                            <div class="col-sm-6 form-group">
                                <label>Telefone</label>
                                <input type="text" placeholder="Insira um número de telefone" class="form-control">
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Estado Civil do (a) estudante:</label>
                                <select class="form-control" id="sel1">
                                    <option>Solteiro(a)</option>
                                    <option>Casado(a)</option>
                                    <option>Divorciado(a)</option>
                                    <option>Desquitado ou separado(a) judicialmente</option>
                                    <option>Vive em união estável</option>
                                    <option>Viúvo(a)</option>
                                  </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Você se considera:</label>
                                  <select class="form-control" id="sel1">
                                    <option>Negro(a)/Preto(a)</option>
                                    <option>Branco(a)</option>
                                    <option>Indígena</option>
                                    <option>Parto(a)</option>
                                    <option>Amarelo(a)</option>
                                    <option>Quilombola</option>
                                    <option>Não quer declarar</option>
                                    <option>Outros</option>
                                  </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Orientação sexual:</label>
                                <select class="form-control" id="sel1">
                                    <option>Heterossexual</option>
                                    <option>Bissexual</option>
                                    <option>Travesti</option>
                                    <option>Homossexual</option>
                                    <option>Transsexual</option>
                                    <option>Não quer responder</option>
                                    <option>Outros</option>
                                  </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Com quem você mora?</label>
                                  <select class="form-control" id="sel1">
                                    <option>Sozinho(a)</option>
                                    <option>Só com a mãe</option>
                                    <option>Só com o pai</option>
                                    <option>Com mãe e irmãos</option>
                                    <option>Com pai e irmãos</option>
                                    <option>Com esposo(a) e filhos</option>
                                    <option>Só com os filhos</option>
                                    <option>Só com irmãos</option>
                                    <option>Com amigos(as)</option>
                                    <option>Outros</option>
                                  </select>
                            </div>        
                        </div>
                        <div class="row">
                            <div class="col-sm-8 form-group">
                                <label>Você pratica alguma atividade física</label>
                                <div class="radio">
                                  <label><input type="radio" name="prat-ativ-fis">Não</label>
                                  <label><input type="radio" name="prat-ativ-fis">Sim, esporadicamente</label>
                                  <label><input type="radio" name="prat-ativ-fis">Sim, com frequência</label>
                                </div>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Você tem filhos ou enteados?</label>
                                <div class="radio">
                                  <label><input type="radio" name="temfilhos">Não</label>
                                  <label><input type="radio" name="temfilhos">Sim</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Em que tipo de escola você fez o ensino fundamental?</label>
                            <select class="form-control" id="sel1">
                                <option>Somente em escola pública</option>
                                <option>Em escola particular com bolsa</option>
                                <option>Em escola particular sem bolsa</option>
                                <option>Parte em escola pública e parte em escola particular com bolsa</option>
                                <option>Parte em escola pública e parte em escola particular sem bolsa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Em que tipo de escola você fez o ensino médio?</label>
                            <select class="form-control" id="sel1">
                                <option>Somente em escola pública</option>
                                <option>Em escola particular com bolsa</option>
                                <option>Em escola particular sem bolsa</option>
                                <option>Parte em escola pública e parte em escola particular com bolsa</option>
                                <option>Parte em escola pública e parte em escola particular sem bolsa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Qual seu curso no IF Sertão e por que o escolheu?</label>
                            <textarea placeholder="Motivo da escolha do curso" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Ingressou através do sistema de cotas?</label>
                                <div class="radio">
                                  <label><input type="radio" name="cotista">Não</label>
                                  <label><input type="radio" name="cotista">Sim</label>
                                </div>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Modalidade:</label>
                                  <select class="form-control" id="sel1">
                                    <option>Ensino médio</option>
                                    <option>PROEJA</option>
                                    <option>Subsequente</option>
                                    <option>Superior</option>
                                  </select>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Turno:</label>
                                  <select class="form-control" id="sel1">
                                    <option>Manhã</option>
                                    <option>Tarde</option>
                                    <option>Noite</option>
                                  </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Data de início do curso:</label>
                                <input type="text" placeholder="dd/mm/aaaa" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Previsão de término do curso:</label>
                                <input type="text" placeholder="dd/mm/aaaa" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Cursou ou está cursando outra graduação?</label>
                                <div class="radio">
                                  <label><input type="radio" name="prat-ativ-fis">Não</label>
                                  <label><input type="radio" name="prat-ativ-fis">Sim</label>
                                </div>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Cursou ou está cursando outro curso técnico?</label>
                                <div class="radio">
                                  <label><input type="radio" name="temfilhos">Não</label>
                                  <label><input type="radio" name="temfilhos">Sim</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Você fez ou faz curso de línguas?</label>
                            <div class="checkbox">
                                <label class="checkbox-inline"><input type="checkbox" value="">Inglês</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Espanhol</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Francês</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Libras</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Outro</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Você recebe Auxílio Financeiro da Política de Assistência Estudantil no IF Sertão-PE?</label>
                                <div class="checkbox">
                                    <div class="col-sm-3">
                                        <label class="checkbox"><input type="checkbox" value="">Alimentação</label>
                                        <label class="checkbox"><input type="checkbox" value="">Transporte</label>
                                        <label class="checkbox"><input type="checkbox" value="">Moradia</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="checkbox"><input type="checkbox" value="">Material didático</label>
                                        <label class="checkbox"><input type="checkbox" value="">Creche</label>
                                        <label class="checkbox"><input type="checkbox" value="">Atleta</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="checkbox"><input type="checkbox" value="">Atividade artística e cultural</label>
                                        <label class="checkbox"><input type="checkbox" value="">Auxílio emergencial</label>
                                        <label class="checkbox"><input type="checkbox" value="">Ajuda de custo para viagens</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Quais dos programas da Política de Assistência Estudantil você tem acesso?</label>
                                <div class="checkbox">
                                    <div class="col-sm-4">
                                        <label class="checkbox"><input type="checkbox" value="">Seguro de vida</label>
                                        <label class="checkbox"><input type="checkbox" value="">Napne</label>
                                        <label class="checkbox"><input type="checkbox" value="">Residência estudantil</label>
                                        <label class="checkbox"><input type="checkbox" value="">Camisa da farda</label>
                                        <label class="checkbox"><input type="checkbox" value="">Material escolar</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="checkbox"><input type="checkbox" value="">Auxílio permanência</label>
                                        <label class="checkbox"><input type="checkbox" value="">Dentista</label>
                                        <label class="checkbox"><input type="checkbox" value="">Enfermagem</label>
                                        <label class="checkbox"><input type="checkbox" value="">Médico</label>
                                        <label class="checkbox"><input type="checkbox" value="">Nutrição</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="checkbox"><input type="checkbox" value="">Psicologia</label>
                                        <label class="checkbox"><input type="checkbox" value="">Serviço social</label>
                                        <label class="checkbox"><input type="checkbox" value="">Técnico em enfermagem</label>
                                        <label class="checkbox"><input type="checkbox" value="">Merenda pronta</label>
                                        <label class="checkbox"><input type="checkbox" value="">Ajuda de custo para refeições</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Participa de projeto de PESQUISA ou EXTENSÃO?</label>
                                <div class="radio">
                                  <label><input type="radio" name="part-proj-pesq">Não</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="part-proj-pesq">Sim, com bolsa</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="part-proj-pesq">Sim, sem bolsa</label>
                                </div>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Você faz estágio?</label>
                                <div class="radio">
                                  <label><input type="radio" name="faz-estagio">Não</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="faz-estagio">Sim, remunerado</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="faz-estagio">Sim, não remunerado</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Em que você faz estágio?</label>
                                <input type="text" placeholder="Insira seu emprego" class="form-control">
                            </div>      
                            <div class="col-sm-6 form-group">
                                <label>Valor do salário:</label>
                                <input type="text" placeholder="Insira o valor do salário" class="form-control">
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Você tem dificuldade para os estudos?</label>
                                <div class="checkbox">
                                        <label class="checkbox"><input type="checkbox" value="">Não tenho nenhuma dificuldade</label>
                                        <label class="checkbox"><input type="checkbox" value="">Nas matérias de ciências da natureza (matemática, física, química, biologia)</label>
                                        <label class="checkbox"><input type="checkbox" value="">Nas matérias de ciências humanas (história, geografia, sociologia, filosofia, Artes)</label>
                                        <label class="checkbox"><input type="checkbox" value="">Nas matérias de linguagem (Português, inglês, espanhol, libras)</label>
                                        <label class="checkbox"><input type="checkbox" value="">Nas matérias das áreas específicas/técnicas do curso.</label>
                                        <label class="checkbox"><input type="checkbox" value="">Redação</label>           
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Você trabalha?</label>
                            <div class="radio">
                                <label class="radio-inline"><input type="radio" name="trabalha">Não</label>
                                <label class="radio-inline"><input type="radio" name="trabalha">Sim, com carteira assinada</label>
                                <label class="radio-inline"><input type="radio" name="trabalha">Sim, sem carteira assinada</label> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Em que você trabalha?</label>
                                <input type="text" placeholder="Insira seu emprego" class="form-control">
                            </div>      
                            <div class="col-sm-6 form-group">
                                <label>Valor do salário:</label>
                                <input type="text" placeholder="Insira o valor do salário" class="form-control">
                            </div>  
                        </div>  
                        <div class="form-group">
                            <label>Quem é responsável por SUAS despesas?</label>
                            <div class="col-sm-8">
                                <div class="radio">
                                  <label><input type="radio" name="resp-sust">Você é responsável pelo próprio sustento</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="resp-sust">Seus pais são responsáveis pelo seu sustento</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="resp-sust">Somente sua mãe é responsável por seu sustento</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="resp-sust">Somente seu pai é responsável por seu sustento</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="radio">
                                  <label><input type="radio" name="resp-sust">Por avô/avó.</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="resp-sust">Esposo (a)</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="resp-sust">Outros parentes.</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="resp-sust">Outros meios</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Saúde do(a) estudante?</label>
                                <div class="checkbox">
                                        <label class="checkbox"><input type="checkbox" value="">Depressão</label>
                                        <label class="checkbox"><input type="checkbox" value="">Ansiedade</label>
                                        <label class="checkbox"><input type="checkbox" value="">Diabetes</label>
                                        <label class="checkbox"><input type="checkbox" value="">Hipertensão</label>
                                        <label class="checkbox"><input type="checkbox" value="">Desnutrição</label>
                                        <label class="checkbox"><input type="checkbox" value="">Fumante</label>
                                        <label class="checkbox"><input type="checkbox" value="">Tem DST</label>
                                        <label class="checkbox"><input type="checkbox" value="">Usa álcool/drogas</label>
                                        <label class="checkbox"><input type="checkbox" value="">Outras</label>       
                                </div>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Possui necessidade educacional?</label>
                                <div class="checkbox">
                                        <label class="checkbox"><input type="checkbox" value="">Não</label>
                                        <label class="checkbox"><input type="checkbox" value="">Superdotação</label>
                                        <label class="checkbox"><input type="checkbox" value="">Daltônico</label>
                                        <label class="checkbox"><input type="checkbox" value="">TDH</label>
                                        <label class="checkbox"><input type="checkbox" value="">Altas habilidades</label>
                                        <label class="checkbox"><input type="checkbox" value="">Hiperatividade</label>
                                        <label class="checkbox"><input type="checkbox" value="">Dislexia</label>
                                        <label class="checkbox"><input type="checkbox" value="">Autismo</label>
                                        <label class="checkbox"><input type="checkbox" value="">Outras</label>         
                                </div>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Possui alguma deficiência?</label>
                                <div class="checkbox">
                                        <label class="checkbox"><input type="checkbox" value="">Não</label>
                                        <label class="checkbox"><input type="checkbox" value="">Visual/Cegueira</label>
                                        <label class="checkbox"><input type="checkbox" value="">Física/Motora</label>
                                        <label class="checkbox"><input type="checkbox" value="">Auditiva/Surdes</label>
                                        <label class="checkbox"><input type="checkbox" value="">Intelectual</label>
                                        <label class="checkbox"><input type="checkbox" value="">Múltipla</label>
                                        <label class="checkbox"><input type="checkbox" value="">Amputação</label>
                                        <label class="checkbox"><input type="checkbox" value="">Outras</label>           
                                </div>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Possui alguma limitação?</label>
                                <div class="checkbox">
                                        <label class="checkbox"><input type="checkbox" value="">Não</label>
                                        <label class="checkbox"><input type="checkbox" value="">Baixa visão</label>
                                        <label class="checkbox"><input type="checkbox" value="">Locomoção</label>
                                        <label class="checkbox"><input type="checkbox" value="">Gestante</label>
                                        <label class="checkbox"><input type="checkbox" value="">Obesidade</label>
                                        <label class="checkbox"><input type="checkbox" value="">Física/Motora</label>
                                        <label class="checkbox"><input type="checkbox" value="">Outras</label>       
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Você faz uso de medicamentos de uso contínuo ou controlado em função de alguma enfermidade?</label>
                            <div class="radio">
                                <label class="radio-inline"><input type="radio" name="uso-medic">Não</label>
                                <label class="radio-inline"><input type="radio" name="uso-medic">Sim</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nome do medicamento:</label>
                                <input type="text" placeholder="Insira o nome do medicamento" class="form-control">
                            </div>      
                            <div class="col-sm-6 form-group">
                                <label>Valor do medicamento:</label>
                                <input type="text" placeholder="Insira o valor do medicamento" class="form-control">
                            </div>  
                        </div>
                        <div class="form-group">
                            <label>Tem plano de saúde?</label>
                            <div class="radio">
                                <label class="radio-inline"><input type="radio" name="plano-saude">Não</label>
                                <label class="radio-inline"><input type="radio" name="plano-saude">Sim</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nome do plano de saúde:</label>
                                <input type="text" placeholder="Insira o nome do plano" class="form-control">
                            </div>      
                            <div class="col-sm-6 form-group">
                                <label>Valor do plano de saúde:</label>
                                <input type="text" placeholder="Insira o valor do plano" class="form-control">
                            </div>  
                        </div>
                        <div class="form-group">
                            <label>Tem plano odontológico?</label>
                            <div class="radio">
                                <label class="radio-inline"><input type="radio" name="plano-odonto">Não</label>
                                <label class="radio-inline"><input type="radio" name="plano-odonto">Sim</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nome do plano odontológico:</label>
                                <input type="text" placeholder="Insira o nome do plano" class="form-control">
                            </div>      
                            <div class="col-sm-6 form-group">
                                <label>Valor do plano odontológico:</label>
                                <input type="text" placeholder="Insira o valor do plano" class="form-control">
                            </div>  
                        </div>
                        <div class="form-group">
                            <label>Qual a sua atual condição de residência</label>
                            <select class="form-control" id="sel1">
                                <option>Própria quitada</option>
                                <option>Alugada</option>
                                <option>Herdada</option>
                                <option>Cedida</option>
                                <option>Financiada</option>
                                <option>Programa Minha Casa Minha Vida</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Tipo de construção</label>
                                <select class="form-control" id="sel1">
                                    <option>Alvenaria/Tijolo</option>
                                    <option>Taipa/Pau a pique</option>
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Abastecimento de água:</label>
                                <select class="form-control" id="sel1">
                                    <option>Rede pública</option>
                                    <option>Poço nascente</option>
                                    <option>Carro pipa</option>
                                    <option>Outro</option>
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Infraestrutura da rua:</label>
                                <select class="form-control" id="sel1">
                                    <option>Pavimentada</option>
                                    <option>Não pavimentada</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Coleta de lixo:</label>
                                <select class="form-control" id="sel1">
                                    <option>Regular</option>
                                    <option>Não há coleta</option>
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Acesso a serviço de saúde:</label>
                                <select class="form-control" id="sel1">
                                    <option>Posto de saúde</option>
                                    <option>Hospital público</option>
                                    <option>Hospital privado</option>
                                    <option>CAPS</option>
                                </select>
                            </div>
                        </div>
                        <p><strong>Composição familiar:</strong></p>
                        <input type="button" id="newMember" value="Inserir membro"/>
                        <div class="row family-member">
                            <div class="form-group">
                                <div id="member" class="member">
                                    <div class="col-sm-3 form-group">
                                        <label>Nome:</label>
                                        <input type="text" placeholder="Primeiro nome" class="form-control">
                                    </div>
                                    <div class="col-sm-3 form-group">
                                        <label>Idade:</label>
                                        <input type="text" placeholder="Idade" class="form-control">
                                    </div>
                                    <div class="col-sm-3 form-group">
                                        <label>Parentesco:</label>
                                        <input type="text" placeholder="Parentesco" class="form-control">
                                    </div>
                                    <div class="col-sm-3 form-group">
                                        <label>Profissão:</label>
                                        <input type="text" placeholder="Profissão" class="form-control">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Estado civil:</label>
                                        <select class="form-control" id="sel1">
                                            <option>Solteiro</option>
                                            <option>Casado</option>
                                            <option>União estável</option>
                                            <option>Separado</option>
                                            <option>Viúvo</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Escolaridade:</label>
                                        <select class="form-control" id="sel1">
                                            <option>Não escolarizado</option>
                                            <option>Fundamental incompleto</option>
                                            <option>Fundamental completo</option>
                                            <option>Médio incompleto</option>
                                            <option>Médio completo</option>
                                            <option>Superior completo</option>
                                            <option>Superior incompleto</option>
                                            <option>Pós-Graduação</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Renda mensal:</label>
                                        <input type="text" placeholder="Profissão" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    <button type="button" class="btn btn-lg btn-info">Salvar</button>                   
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
