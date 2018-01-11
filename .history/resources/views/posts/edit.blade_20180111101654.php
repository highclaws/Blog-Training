@extends('layouts.app')
<input type="hidden" name="_token" value="{{ csrf_token() }}">

@section('content')
    <h1>Edit Post</h1>
    <form method="post" action="/posts/{{$post-id}}">
        <input type="hidden" name"_method" value="PUT">
        <input type="text" name="title" value="{{$posts->title}}">
        <input type="text" name="content" value="{{$posts->content}}">

        <input type="submit" name="submit" >
    </form>    
@endsection
@section('footer')

<h2>footer</h2>
@endsection