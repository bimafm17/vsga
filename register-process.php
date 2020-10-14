<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $name = $_POST['name'];
    $type = $_POST['type'];
    $qty = $_POST['quantity'];

    // buat query
    $sql = "INSERT INTO data (name, type, quantity) VALUE ('$name', '$type', '$qty')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: name-list.php?status3=success');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: name-list.php?status3=fail');
    }


} else {
    die("Access Denied");
}

?>