<?php
require_once("konek.php");

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$tgl_lahir = $_POST["tgl_lahir"];

$sql = "INSERT INTO siswa(nama,nim,tgl_lahir) VALUES('$nama','$nim','$tgl_lahir')";

if (mysqlI_query($conn, $sql)) {
    echo "Berhasil di update <br>";
}else {
    echo "Mengalami eror: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
echo "Silahkan klik <a href='list.php'>link ini</a> untuk melanjutkan";