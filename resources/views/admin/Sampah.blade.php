@extends('admin.master')
@section('content')

<div class="main">
      <h4>Poin</h4><hr>
      <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Jenis Sampah</th>
            <th scope="col">Nama Sampah</th>
            <th scope="col">Kondisi</th>
            <th scope="col">Poin</th>
            <th scope="col"></th>
         
            </tr>
            <form action="{{route('anorganik')}}" method="post">
            <tr>
                <td>1</td>
                <td>Non organik</td>
                <td><select name="nama">
                    <option value="Plastik">Plastik</option>
                    <option value="Kertas">Kertas</option>
                    <option value="Botol">Botol</option>
                    <option value="Besi">Besi</option>
                    <option value="Aluminium">Aluminium</option>
                </select></td>
                <td>
                  </td>
                <td><input type="number" name="poin" id="Poin">/kg</td>
                <td>
                    <input type="submit" class="btn btn-danger" value="edit">
                </td>
            </tr>   
        </form>
            <form action="{{route('elektronik')}}" method="post">
            <tr>
                <td>2</td>
                <td><select name="jenis">
                    <option value="komputer">Komputer</option>
                    <option value="HP_dan_Aksesoris">Hp dan Aksesoris</option>
                    <option value="PRT">Peralatan Rumah Tangga</option>
                    <option value="Pakaian">Pakaian</option>
                </select></td>
                <td><select name="nama">
                    <option value="Harddisk">Hardisk</option>
                    <option value="Mouse">Mouse</option>
                    <option value="Monitor">Monitor</option>
                    <option value="Keyboard">Keyboard</option>
                    <option value="Speaker">Speaker</option>
                    <option value="Printer">Printer</option>
                    <option value="CPU">CPU</option>
                    <option value="Charger">Charger</option>
                    <option value="Casing">Casing</option>
                    <option value="TeleponSeluler">Telepon Seluler</option>
                    <option value="PowerBank">Power Bank</option>
                    <option value="Earphone">Earphone</option>
                    <option value="Kulkas">Kulkas</option>
                    <option value="MesinCuci">Mesin Cuci</option>
                    <option value="VacuumCleaner">Vacuum Cleaner</option>
                    <option value="TV">Tv</option>
                    <option value="Kamera">Kamera</option>
                    <option value="Jam">Jam</option>
                    <option value="Blender">Blender</option>
                    <option value="Dispenser">Dispenser</option>
                    <option value="Setrika">Setrika</option>
                    <option value="Kaos">Kaos</option>
                    <option value="Kemeja">Kemeja</option>
                    <option value="Jaket">Jaket</option>
                    <option value="Selimut">Selimut</option>
                    <option value="Sepatu">Sepatu</option>
                    <option value="Tas">Tas</option>
                    </select></td>
                <td>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kondisi" id="exampleRadios1" value="bagus" checked>
                    <label class="form-check-label" for="exampleRadios1">
                       Bagus
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="kondisi" id="exampleRadios2" value="ringan">
                    <label class="form-check-label" for="exampleRadios2">
                        Rusak Ringan
                    </label>
                    </div>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="kondisi" id="exampleRadios2" value="berat">
                    <label class="form-check-label" for="exampleRadios2">
                        Rusak Berat
                    </label>
                    </div>
                  </td>
                <td><input type="text" name="poin" id="Poin">/pcs</td>
                <td>
                    <input type="submit" class="btn btn-danger" value="edit">
                </td>
            </tr>   
        </form>
       
        </thead>
    </table>
 @endsection