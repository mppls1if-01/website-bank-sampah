<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class MasterKuponController extends Controller
{
    private $data;
    private $kid;
    private $jenis_kupon;
    private $nama_kupon;
    private $poin;
    // private $func = new Snapshot();

    public function tambahKupon(Request $request){
        $this->jenis_kupon = $request->jenisKupon;
        $this->nama_kupon = $request->nama;
        $this->poin = $request->poin;
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $ref = $database->getReference('kupon');
        $key = $ref->push()->getKey();
        $ref->getChild($key)->set([
            'idkupon' => $key,
            'jeniskupon' => $this->jenis_kupon,
            'namakupon' => $this->nama_kupon,
            'jumlahpoin' => $this->poin
        ]);
        return redirect('admin/kupon');
    }

    public function lihatKupon(){
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $ref = $database->getReference('kupon');
        $snapshot = $ref->getChildKeys();
        return $snapshot;
    }

    public function getId($i){
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $snap = $this->lihatKupon();
            
        //retrieve id
        $idKupon = $database->getReference("kupon/{$snap[$i]}/idkupon");
        $valueId = $idKupon->getValue();
        
        //retrieve jenis
        $jenisKupon = $database->getReference("kupon/{$snap[$i]}/jeniskupon");
        $valueJenis = $jenisKupon->getValue();
    }

    public function getJenis($i){
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $snap = $this->lihatKupon();
        //retrieve jenis
        $jenisKupon = $database->getReference("kupon/{$snap[$i]}/jeniskupon");
        $valueJenis = $jenisKupon->getValue();
        return $valueJenis;
    }

    public function getPoin($i){
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $snap = $this->lihatKupon();
        //retrieve poin
        $poinKupon = $database->getReference("kupon/{$snap[$i]}/jumlahpoin");
        $valuepoin = $poinKupon->getValue();
        return $valuepoin;
    }

    public function getNama($i){
        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $snap = $this->lihatKupon();
        //retrieve nama
        $namaKupon = $database->getReference("kupon/{$snap[$i]}/namakupon");
        $valuenama = $namaKupon->getValue();
        return $valuenama;
    }

    public function kupon(){
        return view('admin.Kupon');
    }
    public function riwayatKupon(){
        $Master_Kupon = new MasterKuponController();
        return view('admin.RiwayatKupon',compact('Master_Kupon'));
    }
}
