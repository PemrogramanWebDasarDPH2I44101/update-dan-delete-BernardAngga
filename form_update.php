<?php
require_once("konek.php");

$id = $_GET["nim"];

$sql = "SELECT * FROM siswa WHERE nim=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dokumen</title>
</head>
<body>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $row["nama"]; ?>"></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td><input type="text" name="nims" value="<?php echo $row["nim"]; ?>" disabled>
                <input type="hidden" name="nim" value="<?php echo $row["nim"]; ?>">
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir" value="<?php echo $row["tgl_lahir"]; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>