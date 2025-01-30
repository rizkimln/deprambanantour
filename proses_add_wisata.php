<?php
session_start();
if (!isset($_POST['judul']) ) {
  header('Location:add_wisata.php');
  exit;
}
include "koneksi.php";

date_default_timezone_set('Asia/Bangkok');

$judul= $_POST['judul'];
$ids = $_POST['ids'];
$singkat= $_POST['singkat'];
$isi= $_POST['isi'];
$kategori= $_POST['kategori'];
$harga= $_POST['harga'];
$link= $_POST['link'];

//CU Logic

 if ($_FILES['fileToUpload']['size'] == 0 && $_FILES['fileToUpload']['error'] == 0 || $_FILES["fileToUpload"]["name"]=="")
{
    $newfilename = "-";
    $insert_query2 = mysqli_query($conn, "INSERT INTO `wisata` (`id_wisata`, `judul`, `singkat`, `isi`, `gambar`, `id_kategori`, `harga`, `link`) VALUES (NULL, '$judul', '$singkat', '$isi', '$newfilename', '$kategori', '$harga', '$link'); ");
    if ($insert_query2){
    echo "<script>
    alert ('Konten berhasil ditambahkan');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=wisata.php'>";
    }

    else{
    echo "<script>
    alert ('Terjadi kesalahan, Konten gagal ditambahkan');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=add_wisata.php'>";
    }
}

//Making Directory

else{
$target_dir = "assets/images/blog/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 10044070) {
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 echo "<script>
            alert ('Mohon perhatikan format gambar dan ukuran gambar');
            </script>";
            //echo "<meta http-equiv='refresh' content='0;url=add_wisata.php'>";

}

else {
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "$target_dir" . $newfilename)){

  $insert_query2 = mysqli_query($conn, "INSERT INTO `wisata` (`id_wisata`, `judul`, `singkat`, `isi`, `gambar`, `id_kategori`, `harga`, `link`) VALUES (NULL, '$judul', '$singkat', '$isi', '$newfilename', '$kategori', '$harga', '$link'); ");
  if ($insert_query2){
  echo "<script>
  alert ('Konten berhasil ditambahkan');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=wisata.php'>";
  }

  else{
  echo "<script>
  alert ('Terjadi kesalahan, Konten gagal ditambahkan');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=add_wisata.php'>";
  }
  } else {
      echo "<script>
            alert ('Maaf, terjadi kesalahan saat pengunggahan berkas');
            </script>";
            echo "<meta http-equiv='refresh' content='0;url=add_wisata.php'>";
  }
}
}



//--------------------------------------------------------------------------------------------------------------------------









?>
