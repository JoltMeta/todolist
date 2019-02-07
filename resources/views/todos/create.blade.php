@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>
    {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
        {{ Form::bsText('text') }}
        {{ Form::bsText('due') }}
        {{ Form::bsTextArea('body') }}
        {{ Form::bsSubmit('Sumbit', ['class'=> 'btn btn-secondary']) }}        
    {!! Form::close() !!}
@endsection