<h3>Data Siswa</h3>
<div class="well">
<fieldset>
<legend>Nama-Nama Data Siswa Kelas 9</legend>
<table class="table table-striped table-hover">
<thead>
<th>No</th>
<th>No Ujian Peserta</th>
<th>Nama Siswa</th>
<th>Nilai Bhs Indonesia</th>
<th>Nilai Bhs Inggris</th>
<th>Nilai Matematika</th>
<th>Nilai IPA</th>
<th>Keterangan</th>
</tr>
</thead>
<?php
include('../config.php');
$q = mysql_query("select * from tb_student");
$n = 1;
while($r = mysql_fetch_array($q))
{
	echo '<tbody><tr class="info"><td>'.$n.'</td><td>'.$r["noujian"].'</td><td>'.$r["name"].'</td><td>'.$r["indo"].'</td><td>'.$r["inggris"].'</td><td>'.$r["mat"].'</td><td>'.$r["ipa"].'</td><td>'.$r["ket"].'</td></tr></tbody>';
	$n++;
}
?>
</table>
*) Anda dapat mempersiapkan dan mengedit data melalui microsoft Excel. Format file dapat di download <a href="contoh-data.xls">Disini</a><br />
*) Jangan lupa hapus header di file excel setelah mengedit / input data, kemudian disave dan diimport <a href="index.php?page=import">disini.</a>
</div>
<a href="index.php?page=hapus" class="btn btn-primary">Hapus Semua Data</a>
</fieldset>
	