<?php
include_once("../dbkoneksi.php");
   $sql = "SELECT NIM, NAMA, JURUSAN, JK, TGLLAHIR FROM mhs";
   $hsl = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hsl);
   echo json_encode($output);