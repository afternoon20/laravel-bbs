<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        ->where('id',$id)
        ->first();
        // dd($item);

        $comments = DB::table('comments')
        ->select('comments.body','users.name','comments.created_at')
        ->leftJoin('users','comments.login_id','users.login_id')
        ->where('post_id',$id)
        ->orderByDesc('created_at')
        ->get();
        
        return view('post', ['item' => $item,'comments'=>$comments]);
    }
}