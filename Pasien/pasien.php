<?php 
include 'koneksi.php';
$sql = "SELECT * FROM pasien ORDER BY nama";
$res = mysqli_query($kon, $sql);
$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
	$pinjam[] = $data;
}

include '../aset/header.php';
?>

<div class="container">
<div class="row mt-4">
<div class="col-md">
	</div>
</div>
</div>

  <div class="card">
  <div class="card-header">
         <h2 class="card-title"><i class="fas fa-pager"></i> Data pasien </h2>
  </div>
  <div class="card-body">
  <table class="table table-hover table-dark">
  <thead>
  
    <tr>
      <td scope="col">No</td>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Usia</th>
      <th scope="col">Suhu</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>

  <?php 

    $no = 1;
    foreach ($pinjam as $p) { 
      ?>
    
  

    <tr>
    	<th scope="row"><?= $no ?></th>
    	<td><?= $p['nama']?></th>
    	<td><?= $p['alamat']?></th>
      <td><?= $p['usia']?></th>
      <td><?= $p['suhu']?></th>
     
    	<td>
      <a href="detail.php?id_pasien=<?php echo $p['id_pasien']; ?>" class="badge badge-secondary">Detail</a>
      <a href="edit.php?id_pasien=<?php echo $p['id_pasien']; ?>" class="badge badge-light">Edit</a>
      <a href="hapus.php?id_pasien=<?php echo $p['id_pasien']; ?>" class="badge badge-danger">Hapus</a> 
      </td>
      </tr>

    <?php  
    $no++;
    }
     ?>
  
 </table>
  </div>
  </div>
  <center>
  <table>
    <br>
  <tr>
    <B><h3><a href="tambah.php" class="badge badge-primary"><i class="fas fa-pen"> Tambah Data</h3></a></B></i>
  </tr>
</table>
</center>
<?php 
include  '../aset/footer.php'
;?>
