<?php
include 'adm_header.php';
include '../koneksi.php';
date_default_timezone_set("Asia/Jakarta");

// QUERY UNTUK MENAMPILKAN DATA PESERTA
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

  <div class="container">
  	<br><br><br><br>
    <h3>TAMPILKAN SELURUH DATA PESERTA DISINI</h3>
    <div class="table-responsive">
  <table class="table table-bordered">
    <tr>
			<th>No</th>
			<th>No.Pendaftaran</th>
			<th>Nama</th>
			<th>Tempat, Tanggal Lahir</th>
			<th>NISN</th>
			<th>Asal Sekolah</th>
			<th>Nilai MTK</th>
			<th>Nilai B.Indo</th>
			<th>Nilai B.Inggris</th>
			<th>Nilai IPA</th>
			<th>Nilai IPS</th>
			<th>Opsi Lainnya</th>
		</tr>
		<?php 
		
		$no = 1;
		$sql = "SELECT * FROM daftar ORDER BY dfr_no";
		$datata = $connect->query($sql);
		while ($row = $datata->fetch_array()) {
		?>
		<tr>
			<td style="text-align:center;"><?php echo $no++; ?></td>
			<td><?php echo $row['dfr_no']; ?></td>
			<td><?php echo $row['dft_nama']; ?></td>
			<td><?php echo $row['dfr_tmp_lahir']; ?>, <?php echo $row['dfr_tgl_lahir']; ?></td>
			<td><?php echo $row['dfr_nisn']; ?></td>
			<td><?php echo $row['dfr_asal_sekolah']; ?></td>
			<td><?php echo $row['dfr_nilai_mm']; ?></td>
			<td><?php echo $row['dfr_nilai_indo']; ?></td>
			<td><?php echo $row['dfr_nilai_eng']; ?></td>
			<td><?php echo $row['dfr_nilai_ipa']; ?></td>
			<td><?php echo $row['dfr_nilai_ips']; ?></td>
			<td>
				<a class="btn btn-warning" href="adm_edit_pendaftar.php?id=<?php echo $row['dfr_no']; ?>">Edit</a>
				<a class="btn btn-primary" href="adm_detail_peserta.php?id=<?php echo $row['dfr_no']; ?>">Info</button>
			</td>
		</tr>
		<?php } ?>
  </table>
  <br><br>
</div>
  </div>
<?php
include 'adm_footer.php';
?>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#data').DataTable();
  });
</script>
