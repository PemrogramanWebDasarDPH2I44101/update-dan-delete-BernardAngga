<?php
require_once("konek.php");

$id = $_GET["nim"];

$sql = "DELETE FROM siswa WHERE nim=$id";

if (mysqli_query($conn, $sql)) {
    echo "Berhasil di update";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}