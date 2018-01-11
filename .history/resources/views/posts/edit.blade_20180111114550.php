@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
     <form method="post" action="/posts/{{$post->id}}/">
    {{--  {!! Form::open (['action' =>['Postscontroller@update', $posts->id], 'method' => 'POST']) !!}  --}}
            {{csrf_field()}}
        <input type="hidden" name"_method" value="PUT">
        <input type="text" name="title" value="{{$posts->title}}">
        <input type="text" name="content" value="{{$posts->content}}">

        <input type="submit" name="submit" >
     </form>
    {{--  {!! Form::close() !!}  --}}
@endsection
@section('footer')

<h2>footer</h2>
@endsection