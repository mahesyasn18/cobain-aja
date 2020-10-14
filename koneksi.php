<?php
    $varkoneksi=mysqli_connect("localhost","root","","pepedebe");
    if(mysqli_connect_errno($varkoneksi))
    {
        echo "gagal koneksi ke DB".mysqli_connect_error();
    }
?>