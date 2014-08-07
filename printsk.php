<?php
@require_once 'include/fpdf/fpdf.php';
@require_once 'include/config.php';
@require_once 'include/classes/database.class.php';

$dbclass    		= new database($dbtype, $dbhost, $dbname, $dbuser, $dbpass);
$mysqli     		= new mysqli($dbhost, $dbuser, $dbpass, $dbname);

class PDF extends FPDF
{
//Page header
function Header()
{
	//Logo
	$this->Image('images/logobks.jpg',15,3,29);
	//Times bold 18
	$this->SetFont('Times','',18);
	//Move to the right
	$this->Cell(92);
	//Title
	$this->Cell(30,6,'PEMERINTAH KOTA BEKASI',0,1,'C');
	//Times bold 12
	$this->SetFont('Times','',12);
	//Move to the right
	$this->Cell(92);
	$this->Cell(30,4,'DINAS PENDIDIKAN',0,1,'C');
	$this->Cell(92);
	$this->Cell(30,4,'SMP NEGERI 31 KOTA BEKASI',0,1,'C');
	//Times bold 14
	$this->SetFont('Times','',12);
	//Move to the right
	$this->Cell(92);
	$this->Cell(30,6,'Jl. Pangkalan 8 Perum. Taman Rahayu Regency Ciketing Udik Bantargebang',0,1,'C');
	//Times bold 12
	$this->SetFont('Times','',12);
	//Move to the right
	$this->Cell(92);
	$this->Cell(30,4,'Telp. (021) 82483471 - Bekasi 17153',0,1,'C');
	$this->Ln(10);

	//Set Line
    $this->SetLineWidth(1);
    //Line
	$this->Line(15,38,195,38);
	//Line break
	$this->Ln(5);
    
}

}
//$NoUjian = "$_POST[kd1]-$_POST[kd2]-$_POST[kd3]-$_POST[kd4]";
$noujian = $_REQUEST[noUjian];
$sql    = "SELECT * FROM tb_student WHERE noujian = '$noujian'";
$query  = $dbclass->query($sql);
$data   = $dbclass->get_row();
$ketgambar   = $data[ketgambar];
$addresse = $data[addresse];
$nama        = $data[name];
$tgllhr        = $data[tgllhr];
$kelas       = $data[kelas];
$noujian     = $data[noujian];
$sekolah = $data[sekolah];
$text = "Yang bertanda tangan dibawah ini, Kepala SMP Negeri 31 Kota Bekasi, dengan ini menerangkan bahwa :";
//Instanciation of inherited class
$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetMargins(25.4, 25.4, 25.4);
$pdf->SetFont('Times','U',12);
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"SURAT KETERANGAN",0,'C');
$pdf->SetFont('Times','',11);
$pdf->MultiCell(0,5,"Nomor : 421/ 167/ SMPN.31/ VI/ 2014",0,'C');
//Line break
$pdf->Ln(5);
$pdf->SetFont('Times','',12);
$pdf->MultiCell(0,5,$text,0,'J');
//Line break
$pdf->Ln(5);
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Nama                                  : ".$nama,0,'J');
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Nomor Peserta Ujian          : ".$noujian,0,'J');
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Tempat, Tanggal lahir        : ".$tgllhr,0,'J');
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"NISN                                  : ".$ketgambar,0,'J');
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Alamat                                : ".$addresse,0,'J');
//Line break
$pdf->Ln(5);
$pdf->MultiCell(0,5,"Berdasarkan hasil Ujian Nasional siswa tersebut berhasil dan dinyatakan :",0,'J');
$pdf->Ln(5);
//$pdf->Image("images/".$ketGambar.".jpg",80,120,60);

// Set font
$pdf->SetFont('Times','B',16);
$pdf->MultiCell(0,2,"LULUS/ TIDAK LULUS",0,'C');
//Set Line
    $pdf->SetLineWidth(2);
    //Line
	$pdf->Line(98,120,135,120);
	//Line break
	$pdf->Ln(2);

$pdf->SetFont('Times','',12);
//$pdf->MultiCell(0,5,"Adapun Nilai Ujian Nasional adalah sebagai berikut : ",0,'J');
//Line break
$pdf->Ln(5);
$pdf->MultiCell(0,5,"Demikian surat keterangan ini dibuat dengan sebenarnya untuk dipergunakan sebagaimana mestinya.",0,'J');
//Line break
$pdf->Ln(5);
//Move to the right
$pdf->Cell(105.4);
$pdf->MultiCell(0,5,"Bekasi, 14 Juni 2014",0,'J');
$pdf->Cell(105.4);
$pdf->MultiCell(0,5,"Kepala Sekolah,",0,'J');
//Line break
$pdf->Ln(25);
//Move to the right
$pdf->Cell(105.4);
$pdf->MultiCell(0,5,"Toto Suharto, S.Pd.",0,'J');
$pdf->Cell(105.4);
$pdf->MultiCell(0,5,"Pembina",0,'J');
$pdf->Cell(105.4);
$pdf->MultiCell(0,5,"NIP. 19630604 198910 1 001",0,'J');
//Line break
//$pdf->Ln(5);
//$pdf->MultiCell(0,5,"Catatan :",0,'J');
//$pdf->MultiCell(0,5,"- Bagi siswa yang belum mengembalikan buku perpustakaan harap segera dikembalikan.",0,'J');
//$pdf->MultiCell(0,5,"- Untuk siswa yang mendapatkan keterangan “PANGGILAN”. Silakan datang kesekolah hubungi panitia.",0,'J');

$pdf->Output();
?>
