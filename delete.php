<?php

include("config.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $no = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM data WHERE no=$no";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: name-list.php?status=success');
    } else {
        header('Location: name-list.php?status=fail');
    }

} else {
    die("Access Denied");
}

?>