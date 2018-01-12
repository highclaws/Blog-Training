<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

     $posts = Post::latest();
     
    return View::make('posts.index', compact('posts'));
    // return view('posts.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('posts.create', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest  $request)
    {
        //

        // $this->validate($request, [
            
        //     'title'=>'required|max:100',
            
        //     'content'=>'required'
        
        // ]);
       // Post::create($request->all());


        //return $request->get('title');
        // $input = $request->all();
        // $input['title']= $request->title;
        // Post::create($request->all());
        $post = new Post;
        $post->title = $request->title;
        $post->title = $request->content;
        // $file = $request->file('file');
        // echo "<br>";
        // echo $file->getClientOriginalName();
        // echo "<br>";
        // echo $file->getClientSize();


         $post->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         $post = Post::findOrFail($id); 

         return View::make('posts.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::findOrFail($id); 
        return View::make('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // return $request->all();
        $post = Post::findOrFail($id); 

        $post->update($request->all());

        return redirect('/posts');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //        $post = Post::whereId($id)->delete(); 

        $post = Post::findOrFail($id); 

        $post->delete();

        return redirect('/posts');
    }

    protected function contact()
    {
        //
        return view( "contact");

    }

    public function show_post($id, $name, $password)
    {
        //
        //return view('post')->with('id',$id);
        return view('post', compact('id','name','password'));
    }


}
