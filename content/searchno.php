<html>
<head>
<title> Hasil Pencarian </title>
</head>
<body>
<?php
include "../config.php";
$noujian= $_POST['noujian']; //get the nama value from form
$q = "SELECT * from tb_student where noujian = '$noujian' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";
echo "<h4> Hasil Pencarian </h4>";
echo "<table width='400' class='table table-striped table-hover'>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
 <tr class='active'>
    <td width='180'>No Peserta Ujian</td>
    <td><strong>".$data['noujian']."</strong></td>
  </tr>
  <tr>
    <td>Nama Lengkap</td>
    <td><font style='text-transform: capitalize;'><strong>".$data['name']."</strong></font></td>
  </tr>
  <tr class='active'>
    <td>Mata Pelajaran</td>
    <td><div align='center'>Nilai UN</div></td>
  </tr>
  <tr class='danger'>
    <td>Bahasa Indonesia</td>
    <td><div align='center'>".$data['indo']."</div></td>
  </tr>
  <tr class='success'>
    <td>Bahasa Inggris</td>
    <td><div align='center'>".$data['inggris']."</div></td>
   </tr>
  <tr class='warning'>
    <td>Matematika</td>
    <td><div align='center'>".$data['mat']."</div></td>
   </tr>
  <tr class='info'>
    <td>IPA</td>
    <td><div align='center'>".$data['ipa']."</div></td>
   </tr>
  <tr>
    <td><strong>Jumlah</strong></td>
    <td><strong><div align='center'>".$data['sekolah']."</div></strong></td>
   </tr>
 <tr>
    <td><strong>Rata-rata</strong></td>
    <td><strong><div align='center'>".$data['rataun']."</div></strong></td>
   </tr>
  <tr>
    <td>Keterangan</td>
    <td><font color='#0066FF' size='5' style='text-transform: uppercase; align:center;'><div align='center'>".$data['ket']."</td>
  </div></tr>";
echo "</table>";
echo "<a href='printsk.php?noUjian=".$data['noujian']."' class='btn btn-primary'>Cetak SURAT KETERANGAN LULUS</a>";
}
?>
</body>
</html>