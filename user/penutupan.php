<?php include 'header.php' ?>

	<!-- content -->
	<div class="content">
		
		<div class="container">

			<div class="box">

				<div class="box-header">
					Form Penutupan Rekening
			</div>

			<div class="box-body">

				<a href="tambah-penutupan.php"><i class="fa fa-plus"></i> Tambah</a>

				<table class="table">
						<thead>
							<tr>
								<th>NIK</th>
								<th>Nomor Kartu</th>
								<th>Alasan Penutupan</th>
								<th>Sisa Saldo</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$nik = 1;
							$penutupan = mysqli_query($conn, "SELECT * FROM penutupan ORDER BY id DESC");
							if(mysqli_num_rows($penutupan) > 0){
								while($p = mysqli_fetch_array($penutupan)){
							?>

							<tr>
								<td><?= $p['nik'] ?></td>
								<td><?= $p['nomor_kartu'] ?></td>
								<td><?= $p['alasan_penutupan'] ?></td>
								<td><?= $p['sisa_saldo'] ?></td>
							</tr>

						<?php }}else{ ?>
							<tr>
								<td colspan="4">Data tidak ada</td>
							</tr>
						<?php } ?>
						</tbody>
				</table>

			</div>

		</div>

	</div>

<?php include 'footer.php' ?>