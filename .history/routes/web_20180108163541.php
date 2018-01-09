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
use Illuminate\Support\Facades\DB;


// Route::get('/insert', function(){
    
//     DB::insert('insert into posts(title, content) values(7,7)', ['PHP with laravel', 'laravel is the best thing having']);

// });

Route::get('/read', function(){

    $results = DB::select('select * from posts where id = 1', [1]);

         
        return $results;
        
    


}) ;





/*
|--------------------------------------------------------------------------
| application route
|--------------------------------------------------------------------------
 */

Route::group(['middleware' => ['web']], function () {


}); 

