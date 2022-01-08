<?php include 'header.php' ?>

	<!-- content -->
	<div class="content">
		
		<div class="container">

			<div class="box">

				<div class="box-header">
					Form Penarikan Bunga
			</div>

			<div class="box-body">

				<form accept="" method="POST">

					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" name="nama" placeholder="...." class="input-control" required>
					</div>

					<div class="form-group">
						<label>Tanggal</label>
						<input type="date" name="tanggal" placeholder="...." class="input-control" required>
					</div>

					<div class="form-group">
						<label>Nomor Rekening</label>
						<input type="text" name="no_rek" placeholder="...." class="input-control" required>
					</div>

					<div class="form-group">
						<label>Nominal</label>
						<input type="text" name="nominal" placeholder="...." class="input-control" required>
					</div>

					<button type="button" class="btn" onclick="window.location = 'penarikan.php'">Kembali</button>
					<input type="submit" name="submit" value="Simpan" class="btn btn-blue">
					
				</form>

				<?php

				if(isset($_POST['submit'])){

					$nama = ucwords($_POST['nama']);
					$tanggal = $_POST['tanggal'];
					$no_rek = $_POST['no_rek'];
					$nominal = $_POST['nominal'];

					$simpan = mysqli_query($conn, "INSERT INTO penarikan VALUES(
						null,
						'".$nama."',
						'".$tanggal."',
						'".$no_rek."',
						'".$nominal."'
				)");

					if($simpan){
						echo '<div class="alert-succes">Simpan Berhasil</div>';
					}else{
						echo 'gagal disimpan'.mysqli_error($conn);
					}

				}

				?>

			</div>

		</div>

	</div>

<?php include 'footer.php' ?>