@extends('layouts.app')

@section('content')
    <h1>edit</h1>
    <form method="post" action="/posts">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="title" value="">
        <input type="text" name="content" value="">

        <input type="submit" name="submit" >
    </form>    
@endsection
@section('footer')

<h2>footer</h2>
@endsection