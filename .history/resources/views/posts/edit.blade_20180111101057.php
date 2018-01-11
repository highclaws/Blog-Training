@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form method="post" action="/posts/$posts-id">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="title" value="{{$posts->title}}">
        <input type="text" name="content" value="{{$posts->content}}">

        <input type="submit" name="submit" >
    </form>    
@endsection
@section('footer')

<h2>footer</h2>
@endsection