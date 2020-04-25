<?php 
include 'koneksi.php';
include '../aset/header.php';
$id_pasien = $_GET["id_pasien"];
$query = mysqli_query($kon,"SELECT * FROM pasien INNER JOIN gender ON pasien.id_gender = gender.id_gender WHERE id_pasien=$id_pasien");
$pasien = mysqli_fetch_assoc($query);




 ?>


 <div class="container">
 	<div class="row mt-4">
 		<div class="col-md">
 <center>
 <div class="card" style="width: 100%;">
 <div class="card-header" style="width: 100%;">
 	<h2 class="card-header"><i class="fas fa-edit"></i> Edit pasien</h2>
 </div>
 <div class="card-body">
<form action="edit-proses.php" method="post">
<table class="table">
 <input type="hidden" name="id_pasien" value="<?= $pasien['id_pasien']; ?>">
 <tr>
 	<td>Nama</td>
    <td><input style="width:100%" type="text" name="nama" value="<?= $pasien['nama'];?>" required></td>
</tr>
<tr>
 	<td>Alamat</td>
    <td><input style="width:100%" type="text" name="alamat" value="<?= $pasien['alamat'];?>" required></td>
</tr>
<tr>
 	<td>Usia</td>
    <td><input style="width:100%" type="text" name="usia" value="<?= $pasien['usia'];?>" required></td>
</tr>
<tr>
 	<td>Suhu</td>
   <td><input style="width:100%" type="text" name="suhu" value="<?= $pasien['suhu'];?>" required></td>
</tr>
<tr>
 	<td>Riwayat Perjalanan</td>
   <td><input style="width:100%" type="text" name="riwayat" value="<?= $pasien['riwayat'];?>" required></td>
</tr>
<tr>
 	<td>Gejala</td>
   <td><input style="width:100%" type="text" name="gejala" value="<?= $pasien['gejala'];?>" required></td>
</tr>
<tr>
<tr>
 	<td>Telp</td>
   <td><input style="width:100%" type="text" name="telp" value="<?= $pasien['telp'];?>" required></td>
</tr>
<td>Gender</td>
	<td>
		<select style="width: 200px" name="id_gender" required>
		
				<?php 
				$kamu = mysqli_query($kon, "SELECT * FROM pasien INNER JOIN gender ON pasien.id_gender = gender.id_gender WHERE id_pasien=$id_pasien");
				         while ($query_gender = mysqli_fetch_assoc($kamu)){;
				          	?>
				         <option value="<?php echo $query_gender['id_gender']; ?>">
				             <?php echo $query_gender['gender']; ?>
				         </option>
                        <?php }; ?>
	<td>Level</td>
	<td>
		<td> Status</td>
	<td>
		<td><input style="width:100%" type="text" name="status" value="<?= $pasien['status'];?>" required></td>
		
			</select>
			</td>
			</tr>
			</tr>
        <tr>
 	         <th></th>
             <th><button style="width:100px; height: 50px" type="submit" class="btn btn-primary" name="simpan">Edit</button>
             <button style="width:100px; height: 50px" type="submit" class="btn btn-primary" name="kembali">Kembali</button></th>
       </tr>
       
</table>
</form>
</div>
</div>
</div>
</div>
</div> 
</center>

 <?php 
include '../aset/footer.php';
  ?>