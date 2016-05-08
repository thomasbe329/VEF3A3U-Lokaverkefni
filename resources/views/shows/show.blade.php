@extends('layouts.layout')

@section('content')
<div class="show-info">
    <div class="">
        <div class="">
            <div class=" ">

                @if($show['image'] != null)
                    <img src="{{$show['image']['medium']}}">
                @else
                    <img src="/images/missing-image.png">
                @endif
            </div>
            <div class="">
                <h3 class="">{{$show['name']}}</h3>
                <p class="">{!! $show['summary'] !!}</p>
            </div>
            <div class="">
                <p>Rating: {{$show['rating']['average']}}</p>
                <p>Runtime: {{$show['runtime']}}</p>
                <p>Network: {{$show['network']['name']}}</p>
                <p>Status: {{$show['status']}}</p>
                <p>Genre:
                    <?php $i = 1; $len = count($show['genres']); ?>
                    @foreach($show['genres'] as $genre)
                        @if ($i == $len)
                            {{$genre}}
                        @else
                            {{$genre}},
                        @endif
                        <?php $i++; ?>
                    @endforeach
                </p>
            </div>
        </div>
    </div>
</div>
<div class="content">
    @foreach($show['_embedded']['episodes'] as $episode)
        @if($season != $episode['season'])
            @if($season != -1)
                </div>
            @endif
            @eval($season = $episode['season'])
            <div class="episode-container"><h2 class="season">Season: {{$season}}</h2>
        @endif
        <div class="">
            <b>Episode {{$episode['number']}}: {{$episode['name']}}</b>
            <div>
                @if($episode['image'] != null)
                    <img src="{{$episode['image']['medium']}}">
                @else
                    <img src="http://placehold.it/250x140">
                @endif
                {!! $episode['summary'] !!}
            </div>
        </div>
    @endforeach
</div>

@stop