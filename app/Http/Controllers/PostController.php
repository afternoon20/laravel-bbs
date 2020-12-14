<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id = $request->id;
        $item = DB::table('posts')
        ->where('id', $id)
        ->first();
        $date = $item->created_at;
        $item->created_at = date('Y-m-d',strtotime($date));

        $comments = DB::table('comments')
        ->select('comments.body', 'users.name', 'comments.created_at')
        ->leftJoin('users', 'comments.login_id', 'users.login_id')
        ->where('post_id', $id)
        ->orderByDesc('created_at')
        ->paginate(10);
        
        return view('post', ['item' => $item,'comments'=>$comments]);
    }

    public function edit(Request $request)
    {
        $this->middleware('auth');
        $id = $request->id;
        $item = Post::find($id);
        return view('/edit',['item' => $item]);
    }

    public function update(Request $request)
    {
        $this->middleware('auth');
        $id = $request->id;
        $item = Post::find($id);
        $item->title = $request->title;
        $item->body = $request->body;
        $item->save();
        return redirect()->route('post', ['id' => $id]);
    }


    public function delete(Request $request)
    {
        $this->middleware('auth');
        $id = $request->post_id;
        Post::destroy($id);
        return redirect('/');
    }
}
