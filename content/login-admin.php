<?php
include('../config.php');
$pass=md5($_POST['password']);
$user=mysql_real_escape_string($_POST['username']);
$login=sprintf("SELECT * FROM tbl_user WHERE username='$user' AND pass='$pass'", mysql_real_escape_string($user), mysql_real_escape_string($pass));
$cek_lagi=mysql_query($login);
$ketemu=mysql_num_rows($cek_lagi);
$r=mysql_fetch_array($cek_lagi);
if ($ketemu > 0){
  session_start();
  $_SESSION['namauser'] = $r['nama'];
  $_SESSION['kode'] = $r['id_user'];
  $_SESSION['username'] = $r['username'];
  echo "<meta http-equiv='refresh' content='0; url=admin/index.php'>";
}
else{
?>
<script>alert("Username atau password salah...!!!");</script>
<?php
  echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>
