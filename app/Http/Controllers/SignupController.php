<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class SignupController extends Controller
{
    private $name;
    private $email;
    private $password;
    private $no_hp;
    private $pekerjaan;
    private $login;

    public function signupAuth(Request $request){
        $this->name = $request->name;
        $this->email = $request->email;
        $this->password = $request->password;
        $this->no_hp = $request->number;
        $this->pekerjaan = $request->pekerjaan;
        
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->withDatabaseUri('db_uri')
            ->create();
        $auth = $Firebase->getAuth();
        $user = $auth->createUserWithEmailAndPassword($this->email, $this->password);
        $id = $auth->getUserByEmail($this->email);
        if($user){
            return $this->signupData();
        }        
    }

    public function signupData(){
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $email = str_replace('.','_',$this->email);
        $ref = $database->getReference("penukarsampah/{$email}");
        $ref->set([
            'nama'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password,
            'noHP'=>$this->no_hp,
            'pekerjaan'=>$this->pekerjaan
        ]);
        return redirect()->route('login');
    }

    public function signup(){
        return view('auth.register');
    }
}
