<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
	</div>
	<div class="card mb-3">
		<div class="card-header bg-primary text-white">
			Filter Data Absensi Pegawai
		</div>
		<div class="card-body">
			<form class="form-inline">
				<div class="form-group mb-2">
					<label for="bulan">Bulan:</label>
					<select class="form-control ml-3" name="bulan">
						<option value="">--Pilih Bulan--</option>
						<option value="01" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '01') ? 'selected' : '' ?>>
							Januari
						</option>
						<option value="02" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '02') ? 'selected' : '' ?>>
							Februari
						</option>
						<option value="03" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '03') ? 'selected' : '' ?>>Maret
						</option>
						<option value="04" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '04') ? 'selected' : '' ?>>April
						</option>
						<option value="05" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '05') ? 'selected' : '' ?>>Mei
						</option>
						<option value="06" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '06') ? 'selected' : '' ?>>Juni
						</option>
						<option value="07" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '07') ? 'selected' : '' ?>>Juli
						</option>
						<option value="08" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '08') ? 'selected' : '' ?>>
							Agustus
						</option>
						<option value="09" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '09') ? 'selected' : '' ?>>
							September
						</option>
						<option value="10" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '10') ? 'selected' : '' ?>>
							Oktober
						</option>
						<option value="11" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '11') ? 'selected' : '' ?>>
							November
						</option>
						<option value="12" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '12') ? 'selected' : '' ?>>
							Desember
						</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fas fa-eye"></i> Tampilkan
					Data</button>
				<a href="" class="btn btn-success mb-2 ml-3"><i class="fas fa-plus"></i> Input Kehadiran</a>
			</form>
		</div>
	</div>
	<?php if (!empty($absensi)): ?>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<td class="text-center">No</td>
					<td class="text-center">NIK</td>
					<td class="text-center">Nama Pegawai</td>
					<td class="text-center">Jenis Kelamin</td>
					<td class="text-center">Jabatan</td>
					<td class="text-center">Hadir</td>
					<td class="text-center">Sakit</td>
					<td class="text-center">Alpa</td>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($absensi as $a): ?>
					<tr>
						<td class="text-center"><?php echo $no++; ?></td>
						<td class="text-center"><?php echo $a->nik; ?></td>
						<td class="text-center"><?php echo $a->nama_pegawai; ?></td>
						<td class="text-center"><?php echo $a->jenis_kelamin; ?></td>
						<td class="text-center"><?php echo $a->jabatan; ?></td>
						<td class="text-center"><?php echo $a->hadir; ?></td>
						<td class="text-center"><?php echo $a->sakit; ?></td>
						<td class="text-center"><?php echo $a->alpa; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php else: ?>
		<div class="alert alert-warning">Data Kehadiran tidak ditemukan.</div>
	<?php endif; ?>
</div>
