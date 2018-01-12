@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
     {{--  <form method="post" action="/posts/{{$post->id}}/">
            {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT" >

        <input type="text" name="title" value="{{$post->title}}">
        <input type="text" name="content" value="{{$post->content}}">

        <input type="submit" name="submit"value="UPDATE">
     </form>
     <form method="post" action="/posts/{{$post->id}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="DELETE">
     </form>   --}}

        {!! Form::model($post, ['method'=>'PATCH', 'action'=>['Postscontroller@update', $post->id]]) !!}
            
            {{csrf_field()}}

            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control', ]) !!}
            </div>

            <div class="form-group">
                {!! Form::label('content', 'content:') !!}
                {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">             
                <div class="image-container">
                        <img  height="100" src="{{$post->path}}" alt="">
                        {!! Form::file('image');!!}
                </div>
            </div>
 
                <div class="form-group">             
                    {!! Form::submit('Update Post', ['class'=>'btn btn-info']) !!}
                </div>
            

            {!! Form::close() !!}
        
            {!! Form::model($post, ['method'=>'DELETE', 'action'=>['Postscontroller@destroy', $post->id]]) !!}
                <div class="form-group">             
                {!! Form::submit('DELETED Post', ['class'=>'btn btn-danger']) !!}

        {!! Form::close() !!}

    </div>

@endsection
@section('footer')

<h2>footer</h2>
@endsection