@extends('admin.master')
@section('content')

<div class="main">
      <h4>Poin</h4><hr>
      <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Sampah</th>
            <th scope="col">Jenis Sampah</th>
            <th scope="col">Kondisi</th>
            <th scope="col">Poin</th>
            <th scope="col"></th>
         
            </tr>
            <form>
            <tr>
                <td>1</td>
                <td>Non organik</td>
                <td></td>
                <td>
                  </td>
                <td><input type="text" id="Poin">/kg</td>
                <td>
                    <a href=""class="btn btn-danger">edit</a>
                </td>
            </tr>   
        </form>
            <form>
            <tr>
                <td>2</td>
                <td>Komputer</td>
                <td><select>
                    <option>Hardisk</option>
                    <option>Mouse</option>
                    <option>Monitor</option>
                    <option>Keyboard</option>
                    <option>Speaker</option>
                    <option>Printer</option>
                    <option>CPU</option>
                    </select></td>
                <td>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                       Bagus
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Rusak Ringan
                    </label>
                    </div>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Rusak Berat
                    </label>
                    </div>
                  </td>
                <td><input type="text" id="Poin">/pcs</td>
                <td>
                    <a href=""class="btn btn-danger">edit</a>
                </td>
            </tr>   
        </form>
        <form>
            <tr>
                <td>3</td>
                <td>Perlengkapan Rumah Tangga</td>
                <td><select>
                    <option>Kulkas</option>
                    <option>Mesin Cuci</option>
                    <option>Vacuum Cleaner</option>
                    <option>Tv</option>
                    <option>Kamera</option>
                    <option>Jam</option>
                    <option>Blender</option>
                    <option>Dispencer</option>
                    <option>Setrika</option>
                    </select></td>
                <td>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                       Bagus
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Rusak Ringan
                    </label>
                    </div>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Rusak Berat
                    </label>
                    </div>
                  </td>
                <td><input type="text" id="Poin">/pcs</td>
                <td>
                    <a href=""class="btn btn-danger">edit</a>
                </td>
            </tr>   
        </form>
        <form>
            <tr>
                <td>4</td>
                <td>Handphone</td>
                <td><select>
                    <option>Charger</option>
                    <option>Casing</option>
                    <option>Telepon Seluler</option>
                    <option>Power Bank</option>
                    <option>Earphone</option>
                    </select></td>
                <td>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                       Bagus
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Rusak Ringan
                    </label>
                    </div>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Rusak Berat
                    </label>
                    </div>
                  </td>
                <td><input type="text" id="Poin">/pcs</td>
                <td>
                    <a href=""class="btn btn-danger">edit</a>
                </td>
            </tr>   
        </form>
        </thead>
    </table>
 @endsection