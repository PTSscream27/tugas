<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	

	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
	<title>tambah data</title>
</head>
<body>
<div class="container">

	<h2>Tambah Data  Kelompok D</h2>
	<form action="<?php echo base_url('DController/proses_tambah')?>" method="post">
		<div class="form-group">
			<label for="">Kolom_jurusan</label>
			<input type="text" name="txtkolom_jurusan" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Kolom Kelas</label>
			<input type="text" name="txtkolom_kelas" class="form-control">
		</div>
		<div class="form-group">
			<label for="">kolom Isi</label>
			<input type="text" name="txtkolom_isi" class="form-control">
		</div>

		<input type="submit" name="submit" value="simpan" class="btn btn-primary">

		<a href="<?php echo base_url('DController/index')?>" class="btn btn-warning">Batal</a>
	</form>

</div>
</body>
</html>
