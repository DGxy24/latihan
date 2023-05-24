<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <style type="text/css">
        <!--
        a:link {
        color: #36387B;
        text-decoration: none;
        }
        a:visited {
        text-decoration: none;
        color: #000000;
        }
        a:hover {
        text-decoration: none;
        color: #FF9900;
        }
        a:active {
        text-decoration: none;
        color: #000000;
        }
      
    </style>
</head>
<body>
<?php
include('koneksi.php')    ;
$nim = $_GET['x'];
$sql= "select * from pemrogramanweb4tia where nim ='$nim'";
$aksi = mysqli_query($koneksi,$sql);
$isi = mysqli_fetch_assoc($aksi);
?>
    
    <tr>
        <td width="400"><table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td height="45" align="center" bgcolor="lightgreen"><h1>Form Ubah Nilai Mahasiswa</h1></td>
        </tr>
    <tr>
        <td><form action="update.php" method="post">
        <fieldset>
        <legend>  Nilai</legend>
        <table>
    <tr>
        <td> NIM </td>
        <td> : </td>
        <td><input type="text"name="nim"value="<?php echo $isi['nim'];?>"readonly><br></td>
    </tr>
    <tr>
        <td> Nama  </td>
        <td> : </td>
        <td><input type="text"name="nama"value="<?php echo $isi['nama'];?>"></td>
    </tr>
    <tr>
        <td> Nilai Tugas </td>
        <td> : </td>
        <td><input type="text"name="ntugas"value="<?php echo $isi['ntugas'];?>"></td>
    </tr>
   
    <tr>
        <td>  Nilai UTS </td>
        <td> : </td>
        <td><input type="text"name="nuts"value="<?php echo $isi['nuts'];?>"></td>
    </tr>
    <tr>
        <td> Nilai UAS </td>
        <td> : </td>
        <td><input type="text"name="nuas"value="<?php echo $isi['nuas'];?>"></td>
    </tr>
   
   
        <td><input type='submit' name='simpan' value='Simpan data' />
        <input type='reset' name='reset' value=' Batal ' /></td> </tr>
    </table>
 </fieldset>
 </form></td> </tr>

 </table> 
</body>
</html>