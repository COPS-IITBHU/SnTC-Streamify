@extends('event.main')

@section('main-content')
<div class="row">
    <div class="col-8">
        <h3 class="p-1">{{$event->title}}</h3>
    </div>
    <div class="row col-4">
    </div>
</div>

<div class="row p-3">

    <div class="col-6 p-1">
        <b>Event Id: </b>{{$event->id}}
    </div>
    <div class="col-6 p-1">
        <b>Event Tag: </b>{{$event->tag->name}}
    </div>
    <div class="col-6 p-1">
        <b>Event Title: </b>{{$event->title}}
    </div>
    <div class="col-6 p-1">
        <b>Event Stream: </b>{{$event->stream->title}}
    </div>
    <div class="col-6 p-1">
        <b>Event Subtitle: </b>{{$event->subtitle}}
    </div>
    <div class="col-6 p-1">
        <b>Event Description: </b>{{$event->description}}
    </div>
    <div class="col-6 p-1">
        <b>Event Author: </b>{{$event->author->name}}
    </div>
    <div class="col-6 p-1">
        <b>Event Time: </b>{{Carbon\Carbon::parse($event->time)->diffForHumans()}}
    </div>
    <div class="col-6 p-1">
        <b>Event Location: </b>{{$event->location->name}}
    </div>
    <div class="col-6 p-1">
        <b>Event Subscribers: </b>{{$event->appUsers->count()}}
    </div>
    <div class="col-12 p-1">
        <b>FCM Response: </b><pre style="background:#263238;color:#ffffff;" class="p-2" id="fcm_response">

        </pre>
    </div>
    <div class="col-12 p-3">
        <img style="max-height:500px;max-width:500px;" src="{{str_replace("www.dropbox.com","dl.dropboxusercontent.com",$event->image)}}" />
    </div>

</div>
<div class="row p-3" >

</div>

<script>
    var data = JSON.parse('{!!$event->fcm_json_response!!}');
    $('#fcm_response').text(JSON.stringify(data,null,' '));
</script>



@endsection
