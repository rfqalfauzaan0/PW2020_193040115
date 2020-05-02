<?php
    require 'functions.php';

    // ambil id dari url admin.php
    $id = $_GET['id'];

    //query mahasiswa berdasarkan id
    $alm = query("SELECT * FROM pakaian WHERE id = $id")[0];
    // var_dump($alm);

    //memastikan kalau tombol ubah sudah ditekan
    if(isset($_POST['ubah'])) {
        if(ubah($_POST) > 0) {
            echo "
            <script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Data Gagal diubah!');
                document.location.href = 'admin.php';
            </script>
            ";
        }
    }
?>
<h2>Form Ubah Data Apparel</h2>       
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $pk['id']?>">
    <ul>
        <li>
            <label for="Foto"> Foto :</label>
            <input type="text" name="Foto" id="Foto" required value="<? $pk['Foto']?>"><br><br>
        </li>
        <li>
            <label for="Nama Barang">Nama Barang :</label>
            <input type="text" name="Nama Barang" id="Nama Barang" required value="<? $pk['Nama Barang']?>"><br><br>
        </li>
        <li>
            <label for="Merk Barang">Merk Barang :</label>
            <input type="text" name="Merk Barang" id="Merk Barang" required value="<? $pk['Merk Barang']?>">><br><br>
        </li>
        <li>
            <label for="Official Store Online">Official Store Online :</label>
            <input type="text" name="Official Store Online" id="Official Store Online" required value="<? $pk['Official Store Online']?>">><br><br>
        </li>
        <li>
            <label for="Harga">H1arga :</label>
            <input type="text" name="Harga" id="Harga" required value="<? $pk['Harga']?>">><br><br>
        </li>
        <br>
        <button type="submit" name="tambah">Ubah Data</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black;">kembali</a>
        </button>
    </ul>

    </form>
</td>
</tr>
</table>