@extends('layouts.app')

@section('content')
<a class="btn btn-success" href="/todo/{{$todo->id}}">Go Back</a>
    <h1>Edit Todo</h1>
    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
        {{ Form::bsText('text', $todo->text) }}
        {{ Form::bsText('due', $todo->due) }}
        {{ Form::bsTextArea('body', $todo->body) }}
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::bsSubmit('Sumbit', ['class'=> 'btn btn-secondary']) }}        
    {!! Form::close() !!}
@endsection