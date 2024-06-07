<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    //一覧ページ
    public function index() {
        $posts = Post::latest()->get();
        return view('posts.index',compact('posts'));
    }

    //作成ページ
    public function create() {
        return view('posts.create');
    }

    //作成機能
    public function store(Request $request) {
        $request->validate([
            'username' => 'required'
        ]);

        $post = new Post();
        $post->username = $request->input('username');
        $post->save();
        return redirect()->route('posts.index')->with('flash_message','ユーザー名を登録しました。');
    } 
        
    //更新ページ
    public function edit(Post $post) {
        return view('posts.edit',compact('post'));
    }

    //更新機能
    public function update(Request $request,Post $post) {
        $request->validate([
            'username' => 'required'
        ]);

        $post->username = $request->input('username');
        $post->save();

        return redirect()->route('posts.index',$post)->with('flash_message','ユーザー名を更新しました。');
    }

    //削除機能
    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index')->with('flash_message','ユーザー名を削除しました。');
    }
}
