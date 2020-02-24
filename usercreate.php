<?php 
include './konek.php';

$id_user=$_POST['id_user'];
$Nama=$_POST['Nama'];
$Alamat=$_POST['Alamat'];
$Telp=$_POST['Telp'];
$Level_User=$_POST['Level_User'];

$query= "INSERT INTO data_user (id_user, Nama, Alamat, Telp, Level_User)
        VALUES ('$id_user', '$Nama', '$Alamat', '$Telp', '$Level_User')";

$result = mysqli_query($connect,$query);

$num = mysqli_affected_rows($connect);

if($num > 0){
    echo "Berhasil Menambahkan Data";
}else{
    echo "Gagal Tambah Data";
}
?>