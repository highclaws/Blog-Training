@extends('layouts.app')

@section('content')
<h1>show</h1>

        <ul>
            <li><a href="{{route('posts.edit', $post->id)}}">{{$posts->title}}</a>li>     
        </ul>

@endsection
@section('footer')

<h2>footer</h2>
@endsection