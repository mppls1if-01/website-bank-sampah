<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class ProfilController extends Controller
{   
    private $user;
    private $name;
    private $email;
    private $password;
    private $no_hp;
    private $pekerjaan;
    private $gender;

    public function getUser(){
        session_start();
        $this->user = $_SESSION['user'];
        return $this->user;
    }
    public function getName(){
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $ref = $database->getReference("penukarsampah/{$this->user}/nama");
        return $ref->getValue();
    }
    public function getEmail(){
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $ref = $database->getReference("penukarsampah/{$this->user}/username");
        return $ref->getValue();
    }
    public function getPassword(){
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $ref = $database->getReference("penukarsampah/{$this->user}/password");
        return $ref->getValue();
    }
    public function getNoHP(){
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $ref = $database->getReference("penukarsampah/{$this->user}/noHP");
        return $ref->getValue();
    }
    public function getPekerjaan(){
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $ref = $database->getReference("penukarsampah/{$this->user}/pekerjaan");
        return $ref->getValue();
    }
    public function getGender(){
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        return $this->gender;
    }
    public function profil(){
        $profil = new ProfilController();
        return view('layout.profil',compact('profil'));
    }
}
