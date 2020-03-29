<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class MasterSampahController extends Controller
{
    private $nama_sampah;
    private $jenis_sampah;
    private $poin;
    private $kondisi;

    public function editAnorganik(Request $request){
        $this->nama_sampah = $request->nama;
        $this->poin = $request->poin;

        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $ref = $database->getReference("sampah/NonOrganik/{$this->nama_sampah}");
        $ref->update([
            'poin' => $this->poin,
        ]);
        return redirect('admin/sampah');
    }

    public function editElektronik(Request $request){
        $this->jenis_sampah = $request->jenis;
        $this->nama_sampah = $request->nama;
        $this->kondisi = $request->kondisi;
        $this->poin = $request->poin;

        $ServiceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $Firebase = (new Factory)
            ->withServiceAccount($ServiceAccount)
            ->create();
        $database = $Firebase->getDatabase();
        $ref = $database->getReference("sampah/{$this->jenis_sampah}/{$this->nama_sampah}");
        $ref->update([
            "$this->kondisi" => $this->poin,
        ]);
        return redirect('admin/sampah');
    }

    public function sampah(){
        return view('admin.Sampah');
    }
}
