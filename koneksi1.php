<?php 
$host="localhost";
$db ="login";
$user ="root";
$password = "";
$koneksi = mysqli_connect($host,$user,$password,$db);

if(!$connect){
    echo "koneksi database gagal : ". mysqli_connect_error();
}

?>