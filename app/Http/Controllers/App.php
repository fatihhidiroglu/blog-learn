<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Post;
use Illuminate\Support\Str;

use App\Models\Uyeler;
class App extends Controller {

  public function index() {
    return view('anasayfa');
  }

  public function uye($id=null) {
    $users=DB::table('users')->where('id',$id)->get();
    foreach ($users as $user) {
      echo '<b>Id</b>'.'<br>'.$user->id.'<br>'.
        '<b>Name</b>'.'<br>'.$user->name.'<br>'.
        '<b>Email</b>'.'<br>'.$user->email.'<br>'.
        '<b>Age</b>'.'<br>'.$user->age.'<br>'.
        '<b>Gender</b>'.'<br>'.$user->gender;
    }
  }

  public function yeniUyeGet() {
    return view('category.yeniUye');
  }

  public function yeniUyePost(Request $request) {
    Uyeler::insert([
      'name'=> $request->name,
      'email'=> $request->email,
      'age'=> $request->age,
      'gender'=> $request->gender
    ]);
  }

  public function editUser($id=null) {
    $data['users']=DB::table('users')->where('id',$id)->get();
    return view('category.duzenle',$data);
  }

  public function editUserPost(Request $request) {
    DB::table('users')->where('id',$request->id)->update([
      'name'=>$request->name,
      'email'=>$request->email,
      'age'=>$request->age,
      'gender'=>$request->gender,
    ]);

    echo $request->name;

  }

  public function uyeler() {
    #model insert
    // User::insert([
    //   'name'=>'Fatih Hıdıroğlu',
    //   'email'=>'fatih.hidiroglu@hotmail.com',
    //   'age'=>24,
    //   'gender'=>2,
    //   'password'=>md5(123123123123),
    // ]);
    // echo Uyeler::find(102);

    // Post::insert([
    //   'title'=>'Laravel Dersleri Blog',
    //   'user'=>102,
    //   'see'=>58,
    //   'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    //   'slug'=>Str::slug('laravel dersleri')
    // ]);
    // $post=Post::find(3);
    // $post->title='Güncelledim';
    // $post->save();

    // $post= new Post;
    // $post->title='Deneme';
    // $post->user=102;
    // $post->description='denemeler açıklaması';
    // $post->slug='deneme';
    // $post->save();
    // Post::where('id',2)->update([
    //   'id'=>1,
    // ]);
    // die;


    #one To One    hasOne
    // $paylasim = Post::find(4);
    // echo $paylasim->title. ' - Paylaşım Sahibi : '.$paylasim->getUser->name; die;
    // echo $paylasim->getUser->name;

    #one To Many   hasMany
    // $uye=Uyeler::find(102);
    // echo $uye->name. ' üyesinin paylaşım sayısı: '. $uye->getPostCount() . '<br>';
    //
    // foreach (Uyeler::find(102)->getPost as $post) {
    //   echo $post->title;
    //   echo '<br> Yorumlar('.count($post->getComment).') <br>';
    //   foreach ($post->getComment as $comment) {
    //     echo $comment->comment . ' - ' . $comment->getUser->name . '<br>';
    //   }
    //   echo "<hr>";
    // }

    // $paylasim=Post::find(4);
    // echo $paylasim->title. '<hr>';
    // echo $paylasim->description.'<hr>';
    // echo 'Yorum sayısı: '.count($paylasim->getComment) . '<hr>';
    // foreach ($paylasim->getComment as $comment) {
    //   echo $comment->comment . ' - Yorumu Yapan :' .$comment->getUser->name;
    // }

    $data['users']=DB::table('users')->orderBy('id', 'ASC')->get();
    return view('uyeler',$data);
  }

}
