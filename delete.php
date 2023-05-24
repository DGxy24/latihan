<?php
include ("koneksi.php"); 
    $nim = $_GET['x']; 



    $sql= "Delete from pemrogramanweb4tia where nim='$nim'";
    $proses = mysqli_query($koneksi,$sql);

    if($proses){
        header("location:tampil.php");
    }


