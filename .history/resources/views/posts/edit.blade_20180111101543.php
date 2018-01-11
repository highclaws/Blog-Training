@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form method="post" action="">
        {{csrf_field()}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name"_method" value="PUT">
        <input type="text" name="title" value="{{$post->title}}">
        <input type="text" name="content" value="{{$post->content}}">

        <input type="submit" name="submit" >
    </form>    
@endsection
@section('footer')

<h2>footer</h2>
@endsection