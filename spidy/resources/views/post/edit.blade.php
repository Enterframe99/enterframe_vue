@extends('layouts.app')
@section('content')
   <form action="{{ url('/') }}/posts/{{$post->id}}" method="POST">
       @csrf
       @method('PATCH') <!-- <input name="_method" type="hidden" value="PATCH">  -->
       <div class="form-group">
           <label for="">Titolo</label>
           <input type="text"
                  class="form-control" name="title" id="title-id" value="{{$post->title}}">
           <div class="w-100"></div>
           <label for="">Contenuto</label>
           <textarea class="form-control" name="content" id="content-id" rows="10">{{$post->content}}</textarea>
       </div>
       <button type="submit" class="btn btn-primary">Salva</button>
       <a href="{{route('posts')}}" class="btn btn-light">Annulla</a>
   </form>
@stop
