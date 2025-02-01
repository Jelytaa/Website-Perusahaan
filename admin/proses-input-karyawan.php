<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$id_karyawan=$_POST['id_karyawan'];
$No=$_POST['no'];
$Nik=$_POST['nik'];
$Nama_karyawan=$_POST['nama_karyawan'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$Jabatan=$_POST['jabatan'];
$alamat=$_POST['alamat'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into karyawan(id_karyawan,no,nik,nama_karyawan,jenis_kelamin,jabatan,alamat) 
                        values ('$id_karyawan', '$no', '$nik', '$nama_karyawan', '$jenis_kelamin', '$jabatan', '$alamat',)");

if($simpan==true){

    header("location:tampil-karyawan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>