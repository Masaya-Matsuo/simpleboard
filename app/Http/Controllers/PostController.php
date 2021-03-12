<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\like;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('components.top', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $x=$request->file('picture')->store('public/test');//$requestには画面で入力されたデータが入っている。fileは画面で入力されたすべてのデータの中からファイルだけを取り出している。storeは画像が保存された場所を教えてくれるよ
        basename($x);//basenameは画像の名前だけ保存する関数
        
      $post->picture=basename($x);//nullを解消するためにtitleの値を空に設定した。//これで画像が画面に表示できるようになったよ
      $post->content = $request->input('content');//input('')この括弧の中身はviewの入力する項目のnameタグで設定したものをいれる
      $post->category = $request->input('category');
      $post->area = $request->input('area');
      $post->save();
        $post = Post::get();
        \Log::info($request->file('picture')->store('public/test'));
        //健一先生が書いてくれました。画面に入力したデータをログに出力する。これは写真のデータをログに送っている。
        //publicのstorageのtestには画像が保存されており、storageのlogsに出力されている。
       return view('components.top',['posts' => $post]);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('components.top', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
    
    public function _construct(){
        $this->middleware(['auth','verified'])->only(['like','unlike']);
    }
    
    
    public function like($id){
        like::create([
            'post_id' => $id,
            'user_id' => \Auth::id(),
            ]);
            
            session()->flash('success','You Liked the Post.');
            
            return redirect()->back();
    }
    
    public function unlike($id){
        $like = like::where('post_id',$id)->where('user_id',\Auth::id())->first();
        $like->delete();
        
        session()->flash('success','You Unliked the Reply.');
        
        return redirect()->back();
    }
    
    
}
