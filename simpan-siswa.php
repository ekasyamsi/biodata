<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nim           = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat       = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_biodata (nim, nama_lengkap, tempat_lahir, tanggal_lahir, alamat) VALUES ('$nim', '$nama_lengkap', '$tempat_lahir', '$tanggal_lahir','$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>