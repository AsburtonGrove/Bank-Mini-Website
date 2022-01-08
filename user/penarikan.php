<?php include 'header.php' ?>

	<!-- content -->
	<div class="content">
		
		<div class="container">

			<div class="box">

				<div class="box-header">
					Form Penarikan Bunga
			</div>

			<div class="box-body">

				<a href="tambah-penarikan.php"><i class="fa fa-plus"></i> Tambah</a>

				<table class="table">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Tanggal</th>
								<th>Nomor Rekening</th>
								<th>Nominal</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$nama = 1;
							$penarikan = mysqli_query($conn, "SELECT * FROM penarikan ORDER BY id DESC");
							if(mysqli_num_rows($penarikan) > 0){
								while($p = mysqli_fetch_array($penarikan)){
							?>

							<tr>
								<td><?= $p['nama'] ?></td>
								<td><?= $p['tanggal'] ?></td>
								<td><?= $p['no_rek'] ?></td>
								<td><?= $p['nominal'] ?></td>
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