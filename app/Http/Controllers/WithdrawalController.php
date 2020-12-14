<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth; 



class WithdrawalController extends Controller
{
    public function index()
    {
        $this->middleware('auth');
        $user = Auth::user();
        User::destroy($user->id);
        return redirect('/');
    }
}
