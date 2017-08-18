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

Route::resource('photo', 'PhotoController');

Route::get('userid/{id}', 'UserController@showid');

//Route::get('/hellocontroller', 'UserController@show');

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    Return 'Post ID: '.$postId. ', Comment:  '.$commentId;
});


//Route::get('/user/{id}', function ($id) {
//    return 'User '.$id;
//});


Route::get('/hello/bd', function () {
    return ('welcome alvee');
});


Route::get('user/{name}', function ($name) {
//
})->where('name', '[A-Za-z]+');

Route::get('useri/{id}', function ($id) {

//
})->where('id', '[0-9]+');


Route::get('/hellocontroller', 'HelloController@show');


Route::get('userid/{id}', 'HelloController@showid');



Route::get('/insert', function () {
DB::insert(DB::raw('insert into users (name,age,email) values ("sbira","25","samir@yahoo.com")'));
return "insert successfull";
});

Route::get('/read', function () {
$post = DB::select(DB::raw('select * from users where name = "sohan"'));
return var_dump($post);
});

Route::get('/update', function () {
DB::select(DB::raw('update users set name="hasan",age="15",email="hasan@gmail.com" where id ="1"'));
return "update successfull";
});

Route::get('/delete', function () {
DB::select(DB::raw('delete from users where id ="5"'));
//return var_dump($post);
});

use App\Post;

Route::get('/insertORM', function() {
    App\Post::create(array('name' => 'rahman', 'email' => 'email@mail.com', 'password' => '123456'));
    App\Post::create(array('name' => 'man', 'email' => 'email@mail.com', 'password' => '123456'));
     App\Post::create(array('name' => 'alvee', 'email' => 'ganjel@mail.com', 'password' => '123'));
    return 'Insert ORM sucessfull';
    
});

Route::get('/readORM', function() {
    $category = new App\Post();
    
    $data = $category->all(array('id', 'name', 'email', 'password'));

    foreach ($data as $list) {
        echo $list->id . '<br>' . $list->name . '<br>'. $list->email . '<br>'. $list->password . '<br><br><br>';
    }
});


Route::get('/updateORM', function() {
    $category = App\Post::find(1);
    $category->name = 'sumon';
    $category->email = 'sumon@email.com';
    $category->password = '321';
    $category->save();
    
    $data = $category->all(array('id', 'name', 'email', 'password'));

    foreach ($data as $list) {
        echo $list->id . '<br>' . $list->name . '<br>'. $list->email . '<br>'. $list->password . '<br><br><br>';
    }
});


Route::get('/deleteORM', function() {
    $category = App\Post::find(1);
    $category->delete();
    
    $data = $category->all(array('id', 'name', 'email', 'password'));

    foreach ($data as $list) {
        echo $list->id . '<br>' . $list->name . '<br>'. $list->email . '<br>'. $list->password . '<br><br><br>';
    }
});




