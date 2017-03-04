@extends('layouts.student')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Inscrições</h2>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Processo</th>
            <th>Data da inscrição</th>
            <th>Modalidade</th>
            <th width="280px">Status</th>
        </tr>
        @foreach ($enrolls as $key => $enroll)
        <tr>
            <td>{{ $enroll->process->name }}</td>
            <td>{{ $enroll->created_at }}</strong></td>
            <td>{{ $enroll->modality->name }}</td>
            <td>{{ $enroll->status }}</td>
        </tr>
        @endforeach
    </table>
    
</div>
@endsection