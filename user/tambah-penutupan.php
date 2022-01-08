<?php include 'header.php' ?>

	<!-- content -->
	<div class="content">
		
		<div class="container">

			<div class="box">

				<div class="box-header">
					Form Penutupan Rekening
			</div>

			<div class="box-body">

				<form accept="" method="POST">

					<div class="form-group">
						<label>NIK</label>
						<input type="text" name="nik" placeholder="...." class="input-control" required>
					</div>

					<div class="form-group">
						<label>Nomor Kartu</label>
						<input type="text" name="nomor_kartu" placeholder="...." class="input-control" required>
					</div>

					<div class="form-group">
						<label>alasan_penutupan</label>
						<input type="text" name="alasan_penutupan" placeholder="...." class="input-control" required>
					</div>

					<div class="form-group">
						<label>Sisa Saldo</label>
						<input type="text" name="sisa_saldo" placeholder="...." class="input-control" required>
					</div>

					<button type="button" class="btn" onclick="window.location = 'penutupan.php'">Kembali</button>
					<input type="submit" name="submit" value="Simpan" class="btn btn-blue">
					
				</form>

				<?php

				if(isset($_POST['submit'])){

					$nik = ucwords($_POST['nik']);
					$nomor_kartu = $_POST['nomor_kartu'];
					$alasan_penutupan = $_POST['alasan_penutupan'];
					$sisa_saldo = $_POST['sisa_saldo'];

					$simpan = mysqli_query($conn, "INSERT INTO penutupan VALUES(
						null,
						'".$nik."',
						'".$nomor_kartu."',
						'".$alasan_penutupan."',
						'".$sisa_saldo."'
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