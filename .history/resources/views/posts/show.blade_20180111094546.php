@extends('layouts.app')

@section('content')
<h1>Ready</h1>

    <ul>
        @foreach($posts as $post)

        <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>
        
        @endforeach
    </ul>

@endsection
@section('footer')

<h2>footer</h2>
@endsection