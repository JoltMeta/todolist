@extends('layouts.app')

@section('content')
            
    <div class=card>
        <div class="card-header">
            <h3>Create Album</h3>
        </div>
        <div class="card-body">
            {!! Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {{ Form::Text('name','',['placeholder' => 'Album Name']) }} 
                <br />
                {{ Form::Textarea('description','',['placeholder' => 'Album Description']) }}
                {{ Form::file('cover_image') }}
                {{ Form::bsSubmit('Sumbit', ['class'=> 'btn btn-secondary']) }}        
            {!! Form::close() !!}
        </div>

</div>
@endsection
