@extends('admin.master')
@section('content')

<div class="main">
      <h4>Kupon</h4><hr>
      <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Kupon</th>
            <th scope="col">Jenis Kupon</th>
            <th scope="col">Poin</th>
            <th scope="col">Nama Kupon</th>
            <th scope="col"></th>
            </tr><form action="" method="post">
            <?php
                $data = $Master_Kupon->lihatKupon();
                $i = 0;$j = 0;
                foreach($data as $data1){
                    $i++;
            ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $Master_Kupon->getId($j); ?></td>
                <td><select name="jenisKupon" value="<?php echo $Master_Kupon->getJenis($j); ?>">
                    <option>Indomaret</option>
                    <option>Koperasi</option>
                    <option>Poin Keasramaan</option>
                    <option>Sanksi Sosial</option>
                    </select></td>
                <td><input type="text" name="poin" id="Poin" value="<?php echo $Master_Kupon->getPoin($j); ?>"></td>
                <td><input type="text" name="nama" id="NamaKupon" value="<?php echo $Master_Kupon->getNama($j); ?>"></td>
                <td>
                    <a href=""class="btn btn-danger">edit</a>
                    <a href=""class="btn btn-danger">delete</a>
                </td>
            </tr>   
                <?php $j++; } ?>
        </form>
        </thead>
    </table>
 @endsection