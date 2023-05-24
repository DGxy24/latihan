<?php
include ("koneksi.php"); 
    $nim = $_POST['nim']; 
    $nama = $_POST['nama'];     
    $ntugas = $_POST['ntugas'];           
    $nuts = $_POST['nuts']; 
    $nuas = $_POST['nuas']; 

    $nakhir=($ntugas*0.4)+($nuts*0.3)+($nuas*0.3);
    if($nakhir<=59){
        $nhuruf="E";
    }elseif($nakhir<=69){
        $nhuruf="D";
    }elseif($nakhir<=79){
        $nhuruf="C";
    }elseif($nakhir<=89){
        $nhuruf="B";
    }elseif($nakhir<=100){
        $nhuruf="A";
    }



    $sql= "insert into pemrogramanweb4tia values('$nim','$nama','$ntugas','$nuts','$nuas','$nakhir',' $nhuruf')";
    $proses = mysqli_query($koneksi,$sql);

    if($proses){
        header("location:tampil.php");
    }


