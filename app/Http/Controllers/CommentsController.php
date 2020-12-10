<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Comment;



class CommentsController extends Controller
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

    public function put(Request $request)
    {
        // $param = [
        //     'post_id' => $request->post_id,
        //     'login_id' => $request->login_id,
        //     'body' => $request->body,
        //     'created_at' => date("Y-m-d H:i:s"),
        // ];
        // dd($param);
        // DB::table('comments')->insert($param);
        $comment = Comment::create([
            'post_id' => $request->post_id,
            'login_id' => $request->login_id,
            'body' => $request->body,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        $comment->save();
        return redirect(url()->previous());
    }
}
