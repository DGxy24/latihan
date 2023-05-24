<?php
include("koneksi.php");
$sql=" select * from pemrogramanweb4tia";
$proses = mysqli_query($koneksi,$sql);
?>
<center>
    <table>
        <tr>
        <td height="45" width="750" align="center" bgcolor="lightgreen"><h1>Form Nilai Mahasiswa</h1></td>
        </tr>
        </tr>
    </table>
<table border>
    <tr bgcolor>

    </tr>
<tr bgcolor=#999999>
<th>NIM</th>
<th>Nama</th>
<th>Nilai Tugas</th>
<th>Nilai UTS</th>
<th>Nilai UAS</th>
<th>NIlai Akhir</th>
<th>NIlai Huruf</th>
<th>OPSI</th>


</tr>
<?php
while($isi=mysqli_fetch_assoc ($proses)) :?>

<tr>
<td><?php echo $isi['nim'];?> </td>

    <td><?php echo $isi['nama'];?> </td>
    <td><?php echo $isi['ntugas'];?> </td>
    <td><?php echo $isi['nuts']?> </td>
    <td><?php echo $isi['nuas'];?> </td>
    <td><?php echo $isi['na'];?> </td>
    <td><?php echo $isi['nh'];?> </td>

    <td>
        <a href="ubah.php?x=<?php echo $isi['nim'];?>">UBAH</a>
        <a href="delete.php?x=<?php echo $isi['nim'];?>">DELETE</a>
    </td>


</tr>
<?php
endwhile;
?>
</table>

<button><a href="simpan.php">TAMBAH DATA</a></button>
</center>
