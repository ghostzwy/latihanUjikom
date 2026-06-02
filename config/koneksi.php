<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'latihan3';

$koneksi = mysqli_connect($hostname,$username,$password,$database);

if(!$koneksi){
    die("eror". $koneksi->connect_error);
}