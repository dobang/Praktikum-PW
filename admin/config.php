<?php
    $servername="localhost";
    $uname="root";
    $pass="";
    $database="pweb";
    $koneksi=mysql_connect ($servername, $uname, $pass);

  if ($koneksi) {
    mysql_select_db ($database);
   }
?>