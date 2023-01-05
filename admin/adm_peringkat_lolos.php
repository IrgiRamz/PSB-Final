<?php
include 'adm_header.php';
include '../koneksi.php';
//TAMBAHKAN QUERY UNTUK MENAMPIKAN DATA YANG LOLOS DISINI

?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
<div class="container-fluid">
  <br><br><br><br>
  <div class="col-lg-12 column">
    <h3>Peringkat Lolos</h3>
    Data diurutkan bersadarkan Tanggal Pendaftaran


  <!-- TAMPILKAN DATA PESERTA YANG TIDAK LOLOS DI AREA INI DENGAN BENTUK TABEL -->
<div class="table-responsive">
  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>No.Pendaftaran</th>
      <th>Tanggal Pendaftaran</th>
      <th>Nama</th>
      <th>Tempat, Tanggal Lahir</th>
      <th>NISN</th>
      <th>Asal Sekolah</th>
      <th>Nilai MTK</th>
      <th>Nilai B.Indo</th>
      <th>Nilai B.Inggris</th>
      <th>Nilai IPA</th>
      <th>Nilai IPS</th>
    </tr>
    <?php 
    
    $no = 1;
    $sql = "SELECT * FROM daftar WHERE status = 's' ORDER BY dfr_tanggal"; 
    $datata = $connect->query($sql);
    while ($row = $datata->fetch_array()) {
    ?>
    <tr>
      <td style="text-align:center;"><?php echo $no++; ?></td>
      <td><?php echo $row['dfr_no']; ?></td>
      <td><?php echo $row['dfr_tanggal']; ?></td>
      <td><?php echo $row['dft_nama']; ?></td>
      <td><?php echo $row['dfr_tmp_lahir']; ?>, <?php echo $row['dfr_tgl_lahir']; ?></td>
      <td><?php echo $row['dfr_nisn']; ?></td>
      <td><?php echo $row['dfr_asal_sekolah']; ?></td>
      <td><?php echo $row['dfr_nilai_mm']; ?></td>
      <td><?php echo $row['dfr_nilai_indo']; ?></td>
      <td><?php echo $row['dfr_nilai_eng']; ?></td>
      <td><?php echo $row['dfr_nilai_ipa']; ?></td>
      <td><?php echo $row['dfr_nilai_ips']; ?></td>
    </tr>
    <?php } ?>
  </table>
</div>
  </div>
</div>
<?php
include 'adm_footer.php';
?>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#example').DataTable( {
      dom: 'Bfrtip',
      buttons: [
          'copyHtml5',
          'excelHtml5',
          'csvHtml5',
          'pdfHtml5',
          'print'
      ]
  } );
} );
</script>
