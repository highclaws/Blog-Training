<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  Route::get('/', function () {

//      return view('welcome');

//  });

// Route::get('/about', function () {

//     return " Hi about page";

// });


// Route::get('/contact', function () {

//     return " hi mi contact";

// });

// Route::get('/post/{id}/{name} ', function ($id, $name) {

//     return "this is post number " . $id . " " . $name;

// });

// Route::get('admin/posts/example', array ( 'as'=>'admin.home', function(){
//     $url = route('admin.home');
//     return "this url is ". $url;

// }));
//Route::get('/post/{id}', 'Postscontroller@index');

//Route::resource('/posts', 'Postscontroller');

//Route::get('/contact', 'Postscontroller@contact'); 

//Route::get('post/{id}/{name}/{passeword}', 'Postscontroller@show_post'); 

//Route::get('post/{id}', 'Postscontroller@show_post'); 

//   Route::get('/contact', function () {

//      return view('contact');

//   });

/*
|--------------------------------------------------------------------------
| application Routes
|--------------------------------------------------------------------------
 */
// Route::get('/insert', 'Postscontroller@insert');


/*
|--------------------------------------------------------------------------
| database raw sql 
|--------------------------------------------------------------------------
 */
// use Illuminate\Support\Facades\DB;


//   Route::get('/insert', function(){
    
//       DB::insert('insert into posts(title, content) values(2,2)', ['laravel with laravel', 'laravel is the best thing having']);

//   });

// Route::get('/read', function(){

//     $results = DB::select('select * from posts where id = 1', [1]);
//         return var_dump($results);
//         foreach($results as $post){
//             return "article . $post->title";
//         }
// }) ;

// Route::get('/update', function() {
//     $updated = DB::update('update posts set title = "UPDATE title" where id=1', [1]);
//     return "article a jour . $updated";

// });

// Route::get('/delete', function (){
// $deleted = DB::delete('delete from posts where id =1', [1]);
// return "supprimer.$deleted";
// });


/*
--------------------------------------------------
| ELOQUENT
--------------------------------------------------
 */

use App\Post;

//  Route::get('/find', function(){
    //  UN
    // $post = Post::all();
    //  return $post;

     // DEUX
    //  $post = Post::all();

    //  foreach($post as $post){

    //      return $post->title;

    //  }
    // TROIs
//     $post = Post::find(2);
//     return $post->title;
//  });

// Route::get('/findwhere', function(){
// $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
// return $posts;
// });

// Route::get('/findmore',function(){

//     // $posts = Post::findOrFail(1);
//     // return $posts;
// $posts = Post::where('users_count','<', 50)->firstOrFail(1);
// return $posts;
// });

// Route::get('/basicinsert',function(){
// $post = new Post;
// $post->title = 'New eloquent title insert';
// $post->content = 'Wow eloquent is really cool,look at this content';
// $post->save();
// });
// Route::get('/basicinsert2',function(){
//     $post = Post::find(2);
//     $post->title = 'New eloquent title insert 2';
//     $post->content = 'Wow eloquent is really cool,look at this content 2';
//     $post->save();
//     });
Route::get('/create', function () {

    Post::create(['title'=>'the create title', 'content'=>'the content create']);

});

// Route::get('/update', function () {
//     Post::where('id', 2)->where('is_admin',0)->update(['title'=>'New PHP title','content'=>'New PHP content']);
// });

// Route::get('/delete', function(){
//     $post = Post::find(2);
//     $post->delete();
// });

// Route::get('/delete2', function(){
// Post::destroy([3,1]);
// Post::where('is_admin', 0)->delete();
// });

Route::get('softdelete',function(){

    Post::find(10)->delete();
});

Route::get('/readsoftdelete', function(){
    $post = Post::onltTrashed()->where('id', 10)->get(); 
    return $post;
});



/*
|--------------------------------------------------------------------------
| application route
|--------------------------------------------------------------------------
 */

Route::group(['middleware' => ['web']], function () {


}); 

