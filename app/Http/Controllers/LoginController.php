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
            return $this->author();
        }
    }

    public function author(){
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $user = $_SESSION['user'];
        $ref = $database->getReference("pengguna/{$user}/pekerjaan");
        if($ref->getValue() == "admin"){
            return redirect('admin');
        }else{
            return redirect('Dashboard');
        }
    }

    public function login(){
        return view('auth.login');
    }
}
