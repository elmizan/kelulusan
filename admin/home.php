<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
<h3>Halaman Administrator</h3>
<div class="well">
<div align="right"><SCRIPT language=JavaScript src="../js/almanak.js"></SCRIPT> 
          <span class="style1">I</span> <SCRIPT language=JavaScript>var d = new Date();
var h = d.getHours();
if (h < 11) { document.write('Selamat pagi, admin'); }
else { if (h < 15) { document.write('Selamat siang, admin'); }
else { if (h < 19) { document.write('Selamat sore, admin'); }
else { if (h <= 23) { document.write('Selamat malam, admin'); }
}}}</SCRIPT>   </div>
 <h4><div style="padding:10px;">Selamat Datang, <b><?php echo $_SESSION['namauser']; ?></b><br />Anda login sebagai : <strong><?php echo $_SESSION['username']; ?></strong></div></h4>
 <h3>Anda Dapat menggunakan fasilitas di Menu Atas.</h3><br>
  <a href="index.php?page=logout">Keluar / Log Out</a>
</div>
</body>
</html>