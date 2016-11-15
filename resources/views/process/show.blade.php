@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Visualizar Processo</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('processes.index') }}">Voltar</a>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Processo:</strong>
                {{ $process->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data Inicial:</strong>
                {{ $process->start_date }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data Final:</strong>
                {{ $process->final_date }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Campus:</strong>
                {{ $process->campus->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $process->status }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Arquivos:</strong>
                <ul>
                    @foreach($files as $file)
                        <li>{{ $file->filename }}{{ link_to_route('deleteFile', 'Delete', [$file->id]) }}</li>
                    @endforeach
                </ul>
                <strong>Adicionar Arquivos:</strong>
                {!! Form::open(array('url' => '/handleUpload', 'files' => true)) !!}
                    {!! Form::file('file') !!}
                    {!! Form::hidden('process_id', $process->id) !!}
                    {!! Form::token() !!}
                    {!! Form::submit('Upload') !!}
                {!! Form::close() !!}
                
            </div>
        </div>

        
        
        	
	</div>
</div>
@endsection