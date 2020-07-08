<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(Request $request){
        $qBuild = DB::table('posts')->orderBy('id', 'ASC');
        if($request->has('id')){
            $qBuild->where('id', '=', $request->input('id'));
        }
        $posts = $qBuild->get();
        return view('post/view', ['founded_posts' => $posts]);
    }

    public function destroy($id){
        //dd($sql);
        DB::table('posts')->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    public function show($id){
        $qBuild = DB::table('posts')->where('id', '=', $id);
        $idPost = $qBuild->get();
        //dd($idPost);
        return view('post/singleView', ['post' => $idPost[0]]);
    }

    public function  edit($id){
        $post = DB::table('posts')->where('id', '=', $id)->get();
        //dd($post);
        return view('post/edit', ['post' => $post[0]]);
    }

    public function store($id, Request $request){

       $post = DB::table('posts')
            ->where('id', '=', $id)
            ->update(['title' => $request->post()['title'], 'content' => $request->post()['content']]);

        $message = $post ? "Articolo $id aggiornato." : "Articolo $id NON aggiornato.";
        session()->flash('messaggio', $message);
        return redirect()->route('posts');
    }

    public function insert($id, Request $request){

        $post = DB::table('posts')
            ->where('id', '=', $id)
            ->update(['title' => $request->post()['title'], 'content' => $request->post()['content']]);

        $message = "l'articolo $id è stato aggiornato";
        session()->flash($message);
        return redirect()->route('posts');
    }
}
