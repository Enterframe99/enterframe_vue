@extends('layouts.app')
@section('content')

    @if(session()->has('messaggio'))
        <message :messaggio="'{{session()->get('messaggio')}}'"></message>
    @endif

    <!-- <example-component></example-component> -->


   <ul class="list-group">
       @foreach($founded_posts as $post)
           <li class="list-group-item d-flex justify-content-between">
               <div class="col-8"><span class="text-primary">{{$post->id}}</span> - {{$post->title}}</div>

               <div class="col-4">

                   <form method="POST" action="{{ url('/') }}/posts/{{$post->id}}" class="float-right fontsmall">
                       @csrf
                       @method('DELETE')
                       <a href="{{ url('/') }}/posts/{{$post->id}}" class="btn btn-light">Mostra</a>
                       <a href="{{ url('/') }}/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a>
                       <input type="submit" class="btn btn-danger" value="Cancella">
                   </form>
               </div>
           </li>
       @endforeach
   </ul>
@stop
