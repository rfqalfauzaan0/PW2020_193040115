<?php

//function untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("127.0.0.1" , "root" , "") or die("Koneksi ke DB Gagal");
    mysqli_select_db($conn, "pw_193040115") or die("Database Salah!");
    
    return $conn;
}

//function untuk melakukan query ke database
function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

//functions untuk menambahkan data didalam database
function tambah($data) {
    $conn = koneksi();

     $id           = $data['id'];
    $foto         = htmlspecialchars($data['Foto']);
    $nama         = htmlspecialchars($data['Nama Barang']);
    $merk         = htmlspecialchars($data['Merek Barang']);
    $official     = htmlspecialchars($data['Official Store Online']);
    $harga        = htmlspecialchars($data['Harga']);


    $query = "INSERT INTO pakaian
                VALUES 
                ('','$foto','$nama','$merk','$official' , '$harga')";
    
    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}

//functions untuk menghapus data 
function hapus($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pakaian WHERE id = $id");

    return mysqli_affected_rows($conn);
}

//functions untuk menambahkan data didalam database
function ubah($data) {
    $conn = koneksi();

    $id           = $data['id'];
    $foto         = htmlspecialchars($data['Foto']);
    $nama         = htmlspecialchars($data['Nama Barang']);
    $merk         = htmlspecialchars($data['Merek Barang']);
    $official     = htmlspecialchars($data['Official Store Online']);
    $harga        = htmlspecialchars($data['Harga']);

   $query = "UPDATE pakaian SET
            Foto =$foto
            Nama Barang = $nama
            Merk Barang = $merk
            Official Store Online = $offical
            Harga = $harga
            where id =$id";

    
    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}



?>