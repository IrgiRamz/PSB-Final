<?php
include 'adm_header.php';
include '../koneksi.php';
date_default_timezone_set("Asia/Jakarta");

// QUERY UNTUK MENAMPILKAN DATA PESERTA
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<div class="container-fluid">
	<br><br><br><br>
  <div class="col-lg-12 column">
    <h3>Informasi User</h3>
    <div class="table-responsive">
  <table class="table table-bordered">
    <tr>
			<th>No</th>
			<th>No.Pendaftaran(username)</th>
			<th>Password</th>
			<th>Nama</th>
			<th>Tempat, Tanggal Lahir</th>
			<th>NISN</th>
			<th>Asal Sekolah</th>
			<th>Opsi</th>
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
			<td><?php echo $row['dfr_password']; ?></td>
			<td><?php echo $row['dft_nama']; ?></td>
			<td><?php echo $row['dfr_tmp_lahir']; ?>, <?php echo $row['dfr_tgl_lahir']; ?></td>
			<td><?php echo $row['dfr_nisn']; ?></td>
			<td><?php echo $row['dfr_asal_sekolah']; ?></td>
			<td>
				<a class="btn btn-danger" href="adm_opsi_hapus.php?id=<?php echo $row['dfr_no']; ?>">Hapus</a>
			</td>
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
<script type="text/javascript">
  $(document).ready(function() {
    $('#data').DataTable();
  });
</script>
