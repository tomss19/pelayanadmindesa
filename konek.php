<?php
    include('settings.php');

    date_default_timezone_set('Asia/Jakarta');
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = DB_NAME;

    $konek = mysqli_connect($hostname,$username,$password,$database);
?>
