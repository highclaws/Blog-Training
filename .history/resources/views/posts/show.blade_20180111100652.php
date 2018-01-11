@extends('layouts.app')

@section('content')
<h1>show</h1>

        <ul>
            <li>{{$posts->title}}</li>     
            
        </ul>

@endsection
@section('footer')

<h2>footer</h2>
@endsection