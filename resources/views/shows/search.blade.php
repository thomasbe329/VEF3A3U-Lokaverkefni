@extends('layouts.layout')

@section('content')
    <div class="content">
        <h1>Search="{{$query}}"</h1>
        <div class="shows">
            @foreach($shows as $show)
                <div class="show">
                    <a href="/show/{{$show['show']['id']}}">
                        <div>
                            @if($show['show']['image'] != null)
                                <img src="{{$show['show']['image']['medium']}}">
                            @else
                                <img src="/images/missing-image.png">
                            @endif
                        </div>
                        <b>{{$show['show']['name']}}</b>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@stop