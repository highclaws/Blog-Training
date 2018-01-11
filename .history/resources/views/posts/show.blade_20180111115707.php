@extends('layouts.app')

@section('content')
<h1>show</h1>

        <ul>
            <p>{{$posts->title}}</p>
            <li><a href="{{route('posts.edit', $post->id)}}">edit</a></li>     
        </ul>

@endsection
@section('footer')

<h2>footer</h2>
@endsection