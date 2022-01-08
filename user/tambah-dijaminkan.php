<?php include 'header.php' ?>

	<!-- content -->
	<div class="content">
		
		<div class="container">

			<div class="box">

				<div class="box-header">
					Form Penjaminan
			</div>

			<div class="box-body">

				<form accept="" method="POST">

					<div class="form-group">
						<label>NIK</label>
						<input type="text" name="nik" placeholder="...." class="input-control" required>
					</div>

					<div class="form-group">
						<label>Nama</label>
						<input type="date" name="nama" placeholder="...." class="input-control" required>
					</div>

					<div class="form-group">
						<label>alamat</label>
						<input type="text" name="alamat" placeholder="...." class="input-control" required>
					</div>

					<div class="form-group">
						<label>Status Pekerjaan</label>
						<select name="status_pekerjaan" class="input-control">
							<option value="">Pilih</option>
							<option value="pegawai swasta">pegawai swasta</option>
							<option value="pns">pns</option>
							<option value="mahasiswa/pelajar">mahasiswa/pelajar</option>
							<option value="pensiunan">pensiunan</option>
						</select>
					</div>
					<div class="form-group">
						<label>No Telpon</label>
						<input type="text" name="no_telpon" placeholder="...." class="input-control" required>
					</div>

					<div class="form-group">
						<label>Jenis Jaminan</label>
						<input type="text" name="jenis_jaminan" placeholder="...." class="input-control" required>
					</div>

					<button type="button" class="btn" onclick="window.location = 'dijaminkan.php'">Kembali</button>
					<input type="submit" name="submit" value="Simpan" class="btn btn-blue">
					
				</form>

				<?php

				if(isset($_POST['submit'])){

					$nik = ucwords($_POST['nik']);
					$nama = $_POST['nama'];
					$alamat = $_POST['alamat'];
					$status_pekerjaan = $_POST['status_pekerjaan'];
					$no_telpon = $_POST['no_telpon'];
					$jenis_jaminan = $_POST['jenis_jaminan'];

					$simpan = mysqli_query($conn, "INSERT INTO dijaminkan VALUES(
						null,
						'".$nik."',
						'".$nama."',
						'".$alamat."',
						'".$status_pekerjaan."',
						'".$no_telpon."',
						'".$jenis_jaminan."'
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