<?php
// Cek role user
if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
    ?>
    <div class="pull-right">
        <a href="" class="btn btn-success">TAMBAH DATA</a>
    </div>
    <?php
}
?>

<h2 style="margin-top: 0;margin-bottom: 0;">Data Siswa</h2>
<div class="clearfix"></div>
<hr />

<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th style="width: 80px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>SUCI HARIRI</td>
                <td>Duis arcu augue, tincidunt id posuere suscipit, aliquam a libero. Cras varius neque quis odio varius commodo. Nullam in tellus gravida, porttitor tortor nec, bibendum nisi...</td>
                <td>27 Mei 2013</td>
                <td>
                    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>HADI NUGROHO KANAFI</td>
                <td>Duis arcu augue, tincidunt id posuere suscipit, aliquam a libero. Cras varius neque quis odio varius commodo. Nullam in tellus gravida, porttitor tortor nec, bibendum nisi...</td>
                <td>14 Oktober 2014</td>
                <td>
                    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>SATRIA MALANGKA BUMI</td>
                <td>Duis arcu augue, tincidunt id posuere suscipit, aliquam a libero. Cras varius neque quis odio varius commodo. Nullam in tellus gravida, porttitor tortor nec, bibendum nisi...</td>
                <td>12 Januari 2015</td>
                <td>
                    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
