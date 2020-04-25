<?php 
include 'koneksi.php';

if (isset($_POST['simpan'])) 
{
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$suhu = $_POST['suhu'];
$riwayat = $_POST['riwayat'];
$gejala = $_POST['gejala'];
$telp = $_POST['telp'];
$id_gender = $_POST['id_gender'];
$status = $_POST['status'];

$query =mysqli_query($kon,"INSERT INTO pasien (nama, alamat, usia, suhu, riwayat, gejala, telp, id_gender, status)
        VALUES ('$nama','$alamat', '$usia','$suhu', '$riwayat', '$gejala', '$telp', '$id_gender', '$status')");
if($query>0){
	echo "
	<script>
	     alert('Data Berhasil Ditambahkan');
	     document.location.href='pasien.php';
</script>
	";
}
}




 ?>