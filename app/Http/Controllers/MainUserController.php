<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainUserController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
