<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class LoginController extends Controller
{
    private $email;
    private $password;

    public function loginAuth(Request $request){
        $this->email= $request->email;
        $this->password = $request->password;
        
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->withDatabaseUri('db_uri')
            ->create();
        $auth = $Firebase->getAuth();
        $user = $auth->verifyPassword($this->email, $this->password);
        if($user){
            $email = str_replace('.','_',$this->email);
            session_start();    
            $_SESSION['user'] = $email;
            return redirect()->route('dashboard');
        }
    }

    public function login(){
        return view('auth.login');
    }
}
