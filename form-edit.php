<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: name-list.php');
}

//ambil id dari query string
$no = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM data WHERE no=$no";
$query = mysqli_query($db, $sql);
$item = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data not found");
}

?>

<?php include("style.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Membuat Input Output Produk</title>
</head>

<body class="mt-3 mx-5">
    <header>
        <h3>Edit Item</h3>
    </header>

    <form action="edit-process.php" method="POST">

        <fieldset>

            <input type="hidden" name="no" value="<?php echo $item['no'] ?>" />

        <p>
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="item name" value="<?php echo $item['name'] ?>" />
        </p>
        <p>
            <label for="type">Type: </label>
            <input type="text" name="type" value="<?php echo $item['type'] ?>" />
        </p>
        <p>
            <label for="quantity">Quantity: </label>
            <label><input type="text" name="quantity" value="<?php echo $item['quantity'] ?>" /></label>
        </p>
        <p>
            <input type="submit" value="Save" name="save" />
        </p>

        </fieldset>


    </form>

    </body>
</html>