<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(){
        session_start();
        $_SESSION['user'] = null;
        session_destroy();
        return redirect()->route('login');
    }
}
