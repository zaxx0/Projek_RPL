<?php

include 'koneksi.php';


if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add"){

        $nama = $_POST['nama'];
        $jenis_makanan = $_POST['jenis_makanan'];
        $nomor_meja = $_POST['nomor_meja'];
        $harga = $_POST['harga'];
        
        $query = "INSERT INTO pesanan VALUES(null, '$nama', '$jenis_makanan', '$nomor_meja','$harga')";
        $mysql = mysqli_query($connect, $query);

        if ($mysql) {
            header("location:pesanan.php");
        } else {
            echo "DATA GAGAL!!!";
        }

        
        } else if ($_POST['aksi'] == "edit") {
            header("location:pesanan.php");

            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $jenis_makanan = $_POST['jenis_makanan'];
            $nomor_meja = $_POST['nomor_meja'];
            $harga = $_POST['harga'];

            $query = "UPDATE pesanan SET nama = '$nama', jenis_makanan = '$jenis_makanan', nomor_meja = '$nomor_meja' WHERE id = '$id';";
            $mysql = mysqli_query( $connect, $query);
    }
}


if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM pesanan WHERE id = '$id';";
    $mysql = mysqli_query( $connect, $query);

    if ($mysql) {
        header("location:pesanan.php");
    } else {
        echo "data gagal dihapus";
    }
}

?>