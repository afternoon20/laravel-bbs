<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreatePostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('create');
    }

    public function create(Request $request)
    {
        $param = [
			'title' => $request->title,
            'body' => $request->body,
            'created_at' => date("Y-m-d H:i:s"),
        ];
        DB::table('posts')->insert($param);
        return redirect('/');
    }
}
