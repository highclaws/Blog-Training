@extends('layouts.app')

@section('content')

    <form method="post" action="/posts">
        <input type="text" name="title" value="">

        <input type="submit" name="submit" >
    </form>    
@endsection