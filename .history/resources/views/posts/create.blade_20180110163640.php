@extends('layouts.app')

@section('content')

    <form method="post" action="/posts">
        <input type="text" name="title" >

        <input type="submit" name="submit" value="{{ csrf_token() }}">
    </form>    
@endsection