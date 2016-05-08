@extends('layouts.layout')

@section('content')
    <div class="content">
        <h1>Todays Schedule</h1>
        @foreach($schedule as $show)
            @if($show['airtime'] != "")
                @if($hour != $show['airtime'][0] . $show['airtime'][1])
                    @if($hour != "0")
                        </div>
                    @endif
                    @eval($hour = $show['airtime'][0] . $show['airtime'][1])
                    <div class="schedule-container"><h2 class="schedule-hour">{{$hour}}:00</h2>
                @endif

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
            @endif
        @endforeach
        {{--@foreach($schedule as $show)
            @if($show['airtime'] == "")
                @if($hour != "Unknown")
                    @eval($hour = "Unknown")
                    <div class="schedule-container"><h2 class="schedule-hour">{{$hour}}</h2>
                @endif
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
            @endif
        @endforeach
        @if($hour == "Unknown")
            </div>
        @endif--}}
    </div>
@stop