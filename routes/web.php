<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\comment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    /* use save() add new data
    $post = new Post();
    $post -> title = 'test title';
    $post -> content = 'test content';
    $post -> save();
    return 'Saved, OK!';
    */
    /* use create() add new data
    Post::create([
        'title' => 'created title',
        'content' => 'created content',
    ]);
    */
    /*
    $post = Post::find(1); //尋找posts table id = 1 data
    echo '標題：' . $post -> title . '<br>';
    echo '內容：' . $post -> content . '<br>';
    dd($post); //dump and die
    */
    /*
    $post = new Post();
    $posts = Post::all();
    foreach ($posts as $post){
        echo '編號：' . $post -> id . '<br>';
        echo '標題：' . $post -> title . '<br>';
        echo '內容：' . $post -> content . '<br>';
        echo '張貼時間：' . $post -> created_at . '<br>';
        echo '----------------------------' . '<br>';
    }
    dd($posts);
    */
    /*
    $posts = Post::where('id', '<', 10) -> orderby('id', 'DESC')->get();
    dd($posts);
    */
    /*
    $post = Post::find(1);
    $post->update([
        'title' => 'updated title',
        'content' => 'updated content'
    ]);
    */
    /*
    $post = Post::find(1);
    $post -> title = 'saved title';
    $post -> content = 'saved content';
    $post -> save();
    */
    /*使用delete()刪除
    $post = Post::find(1);
    $post -> delete();
    */

    /*使用destroy()刪除
    Post::destroy(2);
    */

    /*刪除多筆資料
    Post::destroy(3, 5, 7);
    */
    /*
    $allPosts = Post::all();
    dd($allPosts);
    */
    /*
    $featuredPosts = Post::where('is_feature', 1) -> get();
    dd($featuredPosts);
    */
    /*
    $fourthPost = Post::find(4);
    dd($fourthPost);
    */
    /*
    $lastPost = Post::orderBy('id', 'DESC') -> first();
    dd($lastPost);
    */
    /*Post 透過 comments() 擷取其所有評論$comments
    $post = Post::find(6);
    echo '標題：' . $post -> title . '<br>';
    echo '內容：' . $post -> content . '<br>';
    echo '---------------------------' . '<br>';
    //$comments = $post -> comments() -> get();
    $comments = $post -> comments;
    foreach ($comments as $comment) {
        echo '留言：' . $comment -> content . '<br>';
        echo '#######################' . '<br>';
    }
    */
    $comment = Comment::find(6);
    echo '內容：' . $comment -> content . '<br>';
    echo '---------------------------' . '<br>';
    //$post = $comment -> post() -> first();
    $post = $comment -> post;
    echo '編號：' . $post -> id . '<br>';
    echo '標題：' . $post -> title . '<br>';
    echo '內容：' . $post -> content . '<br>';
});
