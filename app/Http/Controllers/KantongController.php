<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class KantongController extends Controller
{
    private $uid;
    private $id_kantong;
    private $id_sampah;
    private $jumlah;
    private $total_poin;

    public function tambahSampah(Request $request){
        $this->jumlah = $request->jumlah;
        session_start();
        $this->uid = $_SESSION['user'];
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $ref = $database->getReference('kantong');
        $key = $ref->push()->getKey();
        $this->id_kantong = $key;
        $ref->getChild($this->uid)->set([
            'idkantong' => $this->$key,
            'jumlah' => $this->jumlah
        ]);
    }

    public function totalPoin(Request $request){
        
    }
}
