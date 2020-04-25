<?php 
include '../aset/header.php';
include 'koneksi.php';

$id_pasien = $_GET['id_pasien'];

$sql = "SELECT * FROM pasien INNER JOIN gender ON pasien.id_gender= gender.id_gender where id_pasien = '$id_pasien'";
$res = mysqli_query($kon,$sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2><i class="fas fa-clipboard"> Detail Data Pasien</h2></i>
			<hr class="bg-light">
			<table><tr><th>
				<table class="table table-bordered " style="border-radius: 50px">
					
					<tr class="table-active">
						<td width="100px"><strong> Nama </strong></td>
						<th width="500px"><?= $detail['nama'] ?></th>
					</tr>
					<tr class="table-active">
						<td width="100px"><strong> Alamat </strong></td>
						<td width="500px"><?= $detail['alamat'] ?></td>
					</tr>
					<tr class="table-active">
						<td width="100px"><strong> Usia </strong></td>
						<td width="500px"><?= $detail['usia'] ?> Tahun</td>
					</tr>
					<tr class="table-active">
						<td width="100px"><strong> Suhu </strong></td>
						<td width="500px"><?= $detail['suhu'] ?> </td>
					</tr>
					<tr class="table-active">
						<td width="100px"><strong> Riwayat Perjalanan </strong></td>
						<td width="500px"><?= $detail['riwayat'] ?></td>
					</tr>
					<tr class="table-danger">
						<td width="100px"><strong> Gejala </strong></td>
						<td width="500px"><?= $detail['gejala'] ?></td>
					</tr>
					<tr class="table-active">
						<td width="100px"><strong> Telp </strong></td>
						<td width="500px"><?= $detail['telp'] ?></td>
					</tr>
					</tr>
					<tr class="table-active">
						<td width="100px"><strong> Gender </strong></td>
						<td width="500px"><?= $detail['gender'] ?></td>
					</tr>
					<tr class="table-active">
						<td width="100px"><strong> Status </strong></td>
						<td width="500px"><?= $detail['status'] ?></td>
					</tr>
				
				</table>
				</th></tr></table>
					<h3><a href="pasien.php?id_pasien=<?php echo $detail['id_pasien']; ?>" class="badge badge-primary" style="width:100px; height: 40px">Kembali</a></h3>
						
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>