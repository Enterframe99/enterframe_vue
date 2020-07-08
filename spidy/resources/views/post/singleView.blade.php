@extends('layouts.app')
@section('content')

    @if(session()->has('messaggio'))
        <message :messaggio="'{{session()->get('messaggio')}}'"></message>
    @endif

   <div class="col-12">
       <a href="#" onclick="history.back()" class="btn btn-primary">Back</a>

       <div><h1>{{$post->title}}</h1></div>

       <div  class="clearfix">{{$post->content}}</div>


   </div>
@stop
