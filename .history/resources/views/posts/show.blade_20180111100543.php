@extends('layouts.app')

@section('content')
<h1>show</h1>

    <ul>
            @foreach($posts as $post)
            <li>{{$posts->title}}</li>     
            @endforeach
        </ul>

@endsection
@section('footer')

<h2>footer</h2>
@endsection