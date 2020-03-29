@extends('admin.master')
@section('content')

<div class="main">
      <h4>Kupon</h4><hr>
      <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Jenis Kupon</th>
            <th scope="col">Poin</th>
            <th scope="col">Nama Kupon</th>
            <th scope="col"></th>
            </tr><form action="{{route('tambahKupon')}}" method="post">
            <tr>
                <td>1</td>
                <td><select name="jenisKupon">
                    <option value="Indomaret">Indomaret</option>
                    <option value="Koperasi">Koperasi</option>
                    <option value="Keasramaan">Poin Keasramaan</option>
                    <option value="Sanksi Sosial">Sanksi Sosial</option>
                    </select></td>
                <td><input name="poin" type="number" id="Poin"></td>
                <td><input name="nama" type="text" id="NamaKupon"></td>
                <td>
                    <button type="submit" class="btn btn-danger">Tambah</button>
                </td>
            </tr>   
        </form>
        </thead>
    </table>
 @endsection