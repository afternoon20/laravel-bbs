<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        $param = [
            'post_id' => $request->post_id,
            'login_id' => $request->login_id,
            'body' => $request->body,
            'created_at' => date("Y-m-d H:i:s"),
        ];
        // dd($param);
       
        DB::table('comments')->insert($param);

        

        return redirect(url()->previous());
    }
}
