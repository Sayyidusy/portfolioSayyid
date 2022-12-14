<?php 

//koneksi ke database
$conn = mysqli_connect('localhost','root','','portfolio');

//akan menerima parameter string query di file index.php
function query($query ){
   
    global $conn;
     //2 parameter 
    $result = mysqli_query($conn, $query);
    //menyiapkan array kosong
    $rows = [];

    // menggunakan looping
    while ( $row = mysqli_fetch_assoc($result)){

        //menambahkan elemen baru ditiap elemen
         $rows[] = $row;

    }
    //mengembalikan tipedata (array)
    return $rows;

}

function hapus ($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM kontak WHERE id = $id");
    return mysqli_affected_rows($conn);
}