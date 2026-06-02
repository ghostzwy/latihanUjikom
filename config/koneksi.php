<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'latihan3';

$koneksi = mysqli_connect($hostname,$username,$password,$database);

if(!$koneksi){
    echo "eror". mysqli_eror();
}