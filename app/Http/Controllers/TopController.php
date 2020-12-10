<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // ログインしていない場合は、ログイン画面に遷移する
        // $this->middleware('auth');
    }

    public function index()
    {
        $sub = DB::table('comments')
        ->select(DB::raw('post_id, count(id) AS comments'))
        ->groupBy('post_id')
        ->toSql();
        
        $items = DB::table('posts')
          ->select(DB::raw('id,title,body,created_at,comments'))
          ->leftJoinSub($sub,'comments','posts.id','comments.post_id')
          ->orderBy('created_at','desc')
          ->get();
        // dd($items);
        return view('top', ['items' => $items]);
    }
}
