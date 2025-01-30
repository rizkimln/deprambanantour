<?php
$id = $_GET['id'];
session_start();
include "koneksi.php";
date_default_timezone_set('Asia/Bangkok');
$target_dir = "assets/img/blog/";
$get_data = mysqli_query($conn,"SELECT gambar FROM wisata where id_wisata=$id");
$hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
if($hasil['gambar']<>"-")
{
    unlink("assets/img/blog/".$hasil['gambar']);
}


$query=mysqli_query($conn,"DELETE from wisata where id_wisata=$id");
echo "<script>
	alert ('Artikel berhasil dihapus');
	</script>";
echo"<meta http-equiv=refresh content=0;url=wisata.php>";
?>
