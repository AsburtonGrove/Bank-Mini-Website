<?php include 'header.php' ?>

	<!-- content -->
	<div class="content">
		
		<div class="container">

			<div class="box">

				<div class="box-header">
					Form Penjaminan
			</div>

			<div class="box-body">

				<a href="tambah-dijaminkan.php"><i class="fa fa-plus"></i> Tambah</a>

				<table class="table">
						<thead>
							<tr>
								<th>NIK</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Status Pekerjaan</th>
								<th>No Telepon</th>
								<th>Jenis Jaminan</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$nik = 1;
							$dijaminkan = mysqli_query($conn, "SELECT * FROM dijaminkan ORDER BY id DESC");
							if(mysqli_num_rows($dijaminkan) > 0){
								while($p = mysqli_fetch_array($dijaminkan)){
							?>

							<tr>
								<td><?= $p['nik'] ?></td>
								<td><?= $p['nama'] ?></td>
								<td><?= $p['alamat'] ?></td>
								<td><?= $p['status_pekerjaan'] ?></td>
								<td><?= $p['no_telpon'] ?></td>
								<td><?= $p['jenis_jaminan'] ?></td>
							</tr>

						<?php }}else{ ?>
							<tr>
								<td colspan="6">Data tidak ada</td>
							</tr>
						<?php } ?>
						</tbody>
				</table>

			</div>

		</div>

	</div>

<?php include 'footer.php' ?>