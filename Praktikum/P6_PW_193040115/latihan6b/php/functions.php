<?php 
	// function untuk melakukan koneksi ke database
	function koneksi() {
		$conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
		mysqli_select_db($conn, "pw_193040115") or die("Database salah!");

		return $conn;
	}
//function untuk melakukan query ke database
function query($sql){
  $conn = koneksi();
  $result = mysqli_query($conn,"$sql");

  $pakaian = [];
  while($pkin = mysqli_fetch_assoc($result)){
      $pakaian[] = $pkin ;
  }
  return $pakaian ;
  }

 // functions untuk menambahkan data dalam database
 function tambah($data){
  $conn = koneksi() ;

  $foto = htmlspecialchars($data['Foto']);
  $nama = htmlspecialchars($data['Nama Barang']);
  $merk = htmlspecialchars($data['Merk Barang']);
  $offical = htmlspecialchars($data['Official Store Online']);
  $harga = htmlspecialchars($data['Harga']);

  $query = "INSERT INTO pakaian
            VALUES 
            ('','$foto','$nama','$merk','$offical','$harga')";
    mysql_query($conn ,$query);

    return mysql_affected_rows($conn);
 }

 //functions untuk menghapus data 
function hapus($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM alat_musik WHERE id = $id");

    return mysqli_affected_rows($conn);
}

?>