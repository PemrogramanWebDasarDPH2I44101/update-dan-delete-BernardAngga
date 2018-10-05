<?php
require_once("konek.php");

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$tgl_lahir = $_POST["tgl_lahir"];

$sql = "UPDATE siswa SET nama='$nama', tgl_lahir='$tgl_lahir' WHERE nim=$nim";
if (mysqli_query($conn, $sql)) {
    echo "Berhasil di update";
}else {
    echo "Mengalami eror pada update: " . $sql . "<br>" . mysqli_error($conn);
}