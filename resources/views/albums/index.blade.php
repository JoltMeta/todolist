@extends('layouts.app')

@section('content')

<h3>Albums</h3>
   @if(count($albums) > 0)
    <?php
    $colcount = count($albums);
    $i = 1;
    ?>
    <div id="albums">
        <div class="row text-center">
            @foreach($albums as $album)
            @if($i == $colcount)
                <div class='col-md-4 col-sm-4'>
                    <a href="/albums/{{$album->id}}">
                        <img class="img-thumbnail" style="max-width:auto;" src="storage/album_covers/{{$album->cover_image}}"
                        alt="{{$album->name}}"/>
                    </a>
                <br />
                <h4>{{$album->name}}</h4>
            @else 
            <div class='col-md-4 col-sm-4'>
                    <a href="/albums/{{$album->id}}">
                        <img class="img-thumbnail" style="max-width:auto;margin:auto;" src="storage/album_covers/{{$album->cover_image}}"
                        alt="{{$album->name}}"/>
                    </a>
                <br />
                <h4>{{$album->name}}</h4>
            @endif
            @if($i % 3 == 0)
            </div></div><div class="row text-center">
            @else
                </div>
            @endif
                <?php $i++; ?>
            @endforeach
        </div>
    </div>
   @else 
    <p>No albums to show</p>
   @endif
@endsection