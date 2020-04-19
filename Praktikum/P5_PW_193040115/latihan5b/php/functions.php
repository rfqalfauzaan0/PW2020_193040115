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

  $pakian = [];
  while($pkin = mysqli_fetch_assoc($result)){
      $pakian[] = $pkin ;
  }
  return $pakian ;
}
?>