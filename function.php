<?php
require 'koneksi.php';

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
}

function cari($keyword){
    $query = "SELECT * FROM pengaduan where nama='$_SESSION[nama]' and 
    status='teruskan' judul = '$keyword' ";
}
?>