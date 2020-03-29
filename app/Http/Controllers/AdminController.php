<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class AdminController extends Controller
{
    private $nama;
    private $email;
    private $noHP;
    private $password;
    private $user;

    public function index(){
        return view('admin.admin');
    }

    public function getUser(){
        session_start();
        $this->user = $_SESSION['user'];
        return $this->user;
    }

    public function editProfil(Request $request){
        $this->nama = $request->nama;
        $this->email = $request->email;
        $this->noHP = $request->number;
        $this->password = $request->password;
        $user = $this->getUser();
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $ref = $database->getReference("pengguna/{$user}");
        $ref->update([
            'nama' => $this->nama,
            'email' => $this->email,
            'noHP' => $this->noHP,
            'password' => $this->password,
        ]);
        return redirect('admin/profil');
    }

    public function lihatProfil(){
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        //retrieve nama
        $ref = $database->getReference("pengguna/{$this->user}/nama");
        $this->nama = $ref->getValue();
        //retrieve email
        $ref = $database->getReference("pengguna/{$this->user}/email");
        $this->email = $ref->getValue();
        //retrieve no Hp
        $ref = $database->getReference("pengguna/{$this->user}/noHP");
        $this->noHP = $ref->getValue();
        //retrieve password
        $ref = $database->getReference("pengguna/{$this->user}/password");
        $this->password = $ref->getValue();

        $lihat = array($this->nama, $this->email, $this->noHP, $this->password);
        return $lihat;
    }

    public function profil(){
        $Admin = new AdminController();
        return view('admin.Profil',compact('Admin'));
    }
}
