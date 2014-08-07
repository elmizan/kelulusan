<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pengumuman Kelulusan SMPN 31 Bekasi</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
<div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle btn-primary" data-toggle="collapse" data-target=".navbar-collapse">
              Menu
            </button>
            <a class="navbar-brand" href="index.php?page=home"><img src="images/logo.png" width="42" height="48" class="barlogo"></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li>
                <a href="index.php?page=home">Beranda</a>
              </li>
              <li>
                <a href="index.php?page=about">Tentang</a>
              </li>
              <li>
                <a href="index.php?page=panduan">Panduan</a>
              </li>
              <li>
                <a href="index.php?page=contact">Hubungi Kami</a>
              </li>
              <li>
                <a href="index.php?page=login">Login</a>
              </li>
            </ul>
           
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
</div
<div class="container">
     <table width="600" align="center">
  <tr>
    <td>
      
      <?php

		  require "config.php";

		   $page=$_GET['page'];
		   $filename="content/$page.php";
		   if (!file_exists($filename))
        {
         include "content/home.php";
        }
            else
        {@include "content/$page.php";}
        ?>
      </td>
  </tr>
</table>

      <div align="center" class="alert alert-dismissable alert-danger">
<h4>
<script type="text/javascript">
TargetDate = "06/14/2014 07:00 AM";
BackColor = "";
ForeColor = "";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "%%D%% Hari, %%H%% Jam, %%M%% Menit, %%S%% Detik Lagi, Menuju Waktu Pengumuman Kelulusan";
FinishMessage = "Hore, sekarang sudah waktunya pengumuman!";
</script>
<script type="text/javascript" src="js/countdown.js"></script>
</h4>
</div> 
     

    <script src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" async="" src="js/ga.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootswatch.js"></script>

</body>
</html>
