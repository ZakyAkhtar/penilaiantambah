<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama=$_POST['nama'];
    $jb=$_POST['jb'];

    $sql="INSERT INTO tb_bantuanblt (nama,jb) VALUES ('$nama','$jb')";
    $query=mysqli_query($koneksi,$sql);
}
else{
    ("askes dilarang");
}
?>