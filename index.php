<?php
$nama = "Fahad Alfan Danny Raharjo";
$ttl = "16 September 2002";
$jk = "Laki-laki";
$alamat = "Jl. Kapten Syafiri 28, Bangkalan, Jawa Timur";
$rp1 ="SMA NEGERI 1 BANGKALAN";
$rp2 ="S1 Teknik Informatika Universitas Trunojoyo Madura(NOW)";
$hobi1 ="Game";
$hobi2 ="Berenang";
$hobi3 ="Nonton";


?>
<!DOCTYPE html>
<html>
<head>
	<title>Biodata Diri</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="asset/index.css">
</head>
<body>
	<div class="container mt-4 c1 border-5">
		<h1 class="text-center mb-4 bar">Biodata Diri</h1>
		<div class="row c4">
			<div class="col-md-3">
				<img src="images/profile.jpg" alt="Foto 3x4" class="img-fluid rounded">
			</div>
			<div class="col-md-9 c3">
				<table class="table">
					<tr>
						<th>Nama</th>
						<td><?php echo $nama; ?></td>
					</tr>
					<tr>
						<th>Tanggal Lahir</th>
						<td><?php echo $ttl; ?></td>
					</tr>
					<tr>
						<th>Jenis Kelamin</th>
						<td><?php echo $jk; ?></td>
					</tr>
					<tr>
						<th>Alamat</th>
						<td><?php echo $alamat; ?></td>
					</tr>
					<tr>
						<td>
							<div class="row">
								<div class="col-md-12">
									<h2>Riwayat Pendidikan</h2>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>1. <?php echo $rp1; ?></td>
						<td>2. <?php echo $rp2; ?></td>
					</tr>
					<tr>
						<td>
							<div class="row">
								<div class="col-md-12">
									<h2>HOBI</h2>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>1. <?php echo $hobi1; ?></td>
						<td>2. <?php echo $hobi2; ?></td>
						<td>3. <?php echo $hobi3; ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>