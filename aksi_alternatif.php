<?php
include 'koneksi.php';
$kode = $_POST['kode'];
$nama = $_POST['nama'];
{
    // update data ke database
    // $db->query("UPDATE tb_kriteria SET nama_kriteria='$nama_kriteria', bobot='$bobot' WHERE kode_kriteria='$_GET[kode_kriteria]'");
    $query = mysqli_query($koneksi,"UPDATE tb_alternatif SET nama_alternatif='$nama' WHERE kode_alternatif='$_GET[ID]'");
    
        echo "<script>
                    window.location='index.php?m=alternatif';
                </script>";
         }
?>