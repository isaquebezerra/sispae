@extends('layouts.app')

@section('content')
    <h2>Upload files here</h2>
    @if(count($errors))
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <ul>
        @foreach($files as $file)
            <li>{{ $file->filename }}{{ link_to_route('deleteFile', 'Delete', [$file->id]) }}</li>
        @endforeach
    </ul>
    {!! Form::open(array('url' => '/handleUpload', 'files' => true)) !!}

        {!! Form::file('file') !!}
        {!! Form::token() !!}
        {!! Form::submit('Upload') !!}
    {!! Form::close() !!}

@endsection