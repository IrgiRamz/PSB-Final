<?php
ob_start();
include('tcpdf/tcpdf.php');

date_default_timezone_set("Asia/Jakarta");
include 'koneksi.php';
session_start();
if (!isset($_SESSION['dfr_no']))
$username = $_GET['id'];

$result = mysqli_query($connect, "SELECT * FROM daftar WHERE dfr_no = '$username'");
$d = mysqli_fetch_array($result,MYSQLI_ASSOC);
$mm = $d['dfr_nilai_mm'];
$indo = $d['dfr_nilai_indo'];
$eng = $d['dfr_nilai_eng'];
$ipa = $d['dfr_nilai_ipa'];
$ips = $d['dfr_nilai_ips'];
$total = ($mm + $indo + $eng + $ipa + $ips) / 5;


if($d['dfr_jekel'] == '1'){
  $jk = "Laki-Laki";
}else{
  $jk = "Perempuan";
}

if($d['dfr_anak_dr'] == '1'){
  $anak = "UMUM";
}elseif ($d['dfr_anak_dr'] == '2'){
  $anak = "PA-AD";
}elseif($d['dfr_anak_dr'] == '3'){
  $anak = "BA TA SIP-AD";
}elseif ($d['dfr_anak_dr'] == '4'){
  $anak = "WK-AD";
}else{
  $anak = "Tidak Terdaftar";
}

if($d['dft_agama'] == '1'){
  $rel = "Islam";
}elseif ($d['dft_agama'] == '2'){
  $rel = "Protestan";
}elseif($d['dft_agama'] == '3'){
  $rel = "Katolik";
}elseif ($d['dft_agama'] == '4'){
  $rel = "Hindu";
}elseif ($d['dft_agama'] == '5'){
  $rel = "Budha";
}elseif ($d['dft_agama'] == '6'){
  $rel = "Konghu Cho";
}else{
  echo "Tidak Terdaftar";
}

$sekarang = date("Y-m-d");
$sekarang = tanggal_Indo_surat($sekarang);

?>
<?php
class MYPDF extends TCPDF {
  public function Header() {
    $isi_header = "";
    $this->SetY(-30);
    $this->writeHTML($isi_header, false, false, false, false, '');
  }
  public function Footer() {
    $isi_footer = '';
    $this->SetY(-15);
    $this->writeHTML($isi_footer, false, false, false, false, '');
    // $this->SetFont('Helvetica','',12);
  }
}

$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'A4', true, 'UTF-8', false);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetMargins(12, 20, 12);
$pdf->SetHeaderMargin();
$pdf->SetFooterMargin();

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 0);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set font
$pdf->SetFont('times', '', 12);

// add a page
$pdf->AddPage();

$html = '
<table width="100%" border="1" cellpadding="5">
  <tbody>
    <tr>
      <td colspan="4">
        <table width="100%" cellpadding="5">
          <tbody>
            <tr>
              <td width="13%"><img src="assets/img/logo2.jpg" width="60"></td>
              <td valign="middle" width="50%"><strong style="font-size:18px;">PSB Online</strong><br><b>Jln. Bogor</b><br>http://www.psb.com</td>
              <td align="right" width="37%"><img src="assets/img/dikbud.jpg" width="60"></td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td width="65%" colspan="2">TANDA BUKTI PENGAJUAN PENDAFTARAN<br>PENERIMAAN PESERTA DIDIK BARU<br>TAHUN AJARAN 2020/2021</td>
      <td width="35%" align="right" colspan="2"><img src="assets/img/ppdbheader.jpg" height="60px"></td>
    </tr>
    <tr>
      <td colspan="4">Informasi Pengajuan Pendaftaran</td>
    </tr>
    <tr>
      <td width="25%">Nomor Registrasi</td>
      <td width="25%" align="center"><b>'.$d['dfr_no'].'</b></td>
      <td width="25%">Waktu Pendaftaran</td>
      <td width="25%" align="center"><b>'.$d['dfr_tanggal'].'</b></td>
    </tr>
    <tr>
      <td colspan="4">Biodata Siswa</td>
    </tr>
    <tr>
      <td width="25%" align="left">Nama Lengkap</td>
      <td width="50%" ><b>'.$d['dft_nama'].'</b></td>
      <td width="25%" colspan="2" rowspan="7" valign="top" align="center">NILAI RATA-RATA <br><br><strong style="font-size:18px;">'.$total.'</strong></td>
    </tr>
    <tr>
      <td align="left">NISN</td>
      <td>'.$d['dfr_nisn'].'</td>
    </tr>
    <tr>
      <td align="left">Jenis Kelamin</td>
      <td>'.$jk.'</td>
    </tr>
    <tr>
      <td align="left">Tempat, Tanggal Lahir</td>
      <td>'.$d['dfr_tmp_lahir'].', '.($d['dfr_tgl_lahir']).'</td>
    </tr>
    <tr>
      <td align="left">Agama</td>
      <td>'.$rel.'</td>
    </tr>
    <tr>
      <td align="left">Anak dari</td>
      <td>'.$anak.'</td>
    </tr>
    <tr>
      <td align="left">Asal Sekolah</td>
      <td>'.$d['dfr_asal_sekolah'].'</td>
    </tr>
    <tr>
      <td colspan="4">Data Tambahan</td>
    </tr>
    <tr>
      <td align="left">Orang Tua / Wali</td>
      <td colspan="3">
        <table width="100%" cellpadding="5">
          <tbody>
            <tr>
              <td width="20%">Nama Ayah :</td>
              <td width="30%">'.$d['dfr_ayah'].'</td>
              <td width="20%">Nama Ibu :</td>
              <td width="30%">'.$d['dfr_ibu'].'</td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td align="left">Handphone</td>
      <td colspan="3">'.$d['dfr_hp_ortu'].'</td>
    </tr>
    <tr>
      <td align="left">Alamat</td>
      <td colspan="3">'.$d['dfr_alamat'].'<br></td>
    </tr>
    <tr>
      <td width="50%" colspan="2" rowspan="2">&nbsp;</td>
      <td width="50%" colspan="2">'.$sekarang.'<br>Menyetujui data diatas,<br>Ortu / Wali Siswa <br><br><br><br>'.$d['dfr_ayah'].'
      </td>
    </tr>
  </tbody>
</table>
';
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------
ob_clean();
//Close and output PDF document
$pdf->Output($d['dfr_no'].'.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
