@extends('layouts.app')

@section('content')
<a class="btn btn-info" href="/">Back</a>
<div clas="card">
    <div class="card-body">
        <h1  style="float:left;">{{$todo->text}}</h1> 
        <h3 style="float:right;">{{$todo->due}}</h3>
    </div>
    <hr />
    <div style="text-align:center;" class="card-body">
        <p class="lead">{{$todo->body}}</p>
    </div>
<a href="/todo/{{$todo->id}}/edit" class="btn btn-secondary">EDIT</a>
{!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'float-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::bsSubmit('Delete', ['class'=> 'btn btn-danger']) }}        
{!! Form::close() !!}
</div>


@endsection
