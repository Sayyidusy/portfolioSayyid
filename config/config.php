<?php 

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

function kontak($data){
    
    global $conn;
    
    // htmlspecialchars = untuk memblokade script html 
    $nama  = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $pesan = htmlspecialchars($data["pesan"]);

      //query insert dadta
      $query = "INSERT INTO kontak VALUES('','$nama','$email','$pesan')";

      mysqli_query($conn,$query);
      return mysqli_affected_rows($conn);
}

?>