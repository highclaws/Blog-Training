@extends('layouts.app')

@section('content')

    <li>
        @foreach($posts as $post)
            <h1>{{$post->title}}</h1>
        
        @endforeach
    </li>

@endsection
@section('footer')

<h2>footer</h2>
@endsection