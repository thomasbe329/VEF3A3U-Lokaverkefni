@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="shows">
            @foreach($shows as $show)
                <div class="show">
                    <a href="/show/{{$show['id']}}">
                        <div>
                            @if($show['image'] != null)
                                <img src="{{$show['image']['medium']}}">
                            @else
                                <img src="/images/missing-image.png">
                            @endif
                        </div>
                        <b>{{$show['name']}}</b>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="shows-navigation">
            @if($page != 0)
                <a href="/shows/{{$page-1}}" class="button left">Previous Page</a>
            @endif
            @if($page != 67)
                <a href="/shows/{{$page+1}}" class="button right">Next Page</a>
            @endif
        </div>
    </div>
@stop