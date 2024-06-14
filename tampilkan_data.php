<?php
    include "koneksi.php";
    $process = mysqli_query($koneksi, "SELECT * FROM mahasiswa") 
    or die (mysqli_error($koneksi));
?>