<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['save'])){

    // ambil data dari formulir
    $no = $_POST['no'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $qty = $_POST['quantity'];

    // buat query update
    $sql = "UPDATE data SET no='$no', name='$name', type='$type', quantity='$qty' WHERE no=$no";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: name-list.php?status2=success');
    } else {
        // kalau gagal tampilkan pesan
        header('Location: name-list.php?status2=fail');
    }


} else {
    die("Access Denied");
}

?>