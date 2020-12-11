<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
	
	<title>Kelompok D</title>
</head>
<body>
<div class="container">
	<h2>Data Kelompok D</h2>

	<a href="<?php echo base_url('DController/tambah')?>" class="btn btn-primary mb-4 mt-3">Tambah Data</a>

	<?php echo $this->session->flashdata('pesan_kelompok_d')?>

	<table class="table table-hover table-striped table-bordered">
		<thead>
		<tr>
			<th>No</th>
			<th>kolom Jurusan</th>
			<th>Kolom Kelas</th>
			<th>Kolom Isi</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$no = 1;
		foreach ($isi as $is) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $is->kolom_jurusan;?></td>
				<td><?php echo $is->kolom_kelas;?></td>
				<td><?php echo $is->kolom_isi;?></td>
				<td>
					<a href="#" class="btn-small btn-sm btn-danger"><i class="fas fa-trash"></i></a>
					<a href="#" class="btn-small btn-sm btn-primary"><i class="fas fa-edit"></i></a>
				</td>
			</tr>
			<?php
		}
		?>
		</tbody>
	</table>
</div>
<script scr="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
</body>
</html>
