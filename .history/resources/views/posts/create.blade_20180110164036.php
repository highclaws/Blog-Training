@extends('layouts.app')

@section('content')

    <form method="post" action="/posts">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="title" value="">
        <input type="submit" name="submit" >
    </form>    
@endsection