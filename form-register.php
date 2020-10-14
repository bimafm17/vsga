<?php include("style.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Membuat Input Output Produk</title>
</head>

<body class="mt-3 mx-5">
    <header>
        <h3>Add New Item</h3>
    </header>

    <form action="register-process.php" method="POST">

        <fieldset>

        <p>
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="item name" />
        </p>
        <p>
            <label for="type">Type: </label>
            <input type="text" name="type">
        </p>
        <p>
            <label for="quantity">Quantity: </label>
            <label><input type="text" name="quantity"></label>
        </p>
        <p>
            <input type="submit" value="Submit" name="submit" />
        </p>

        </fieldset>

    </form>

    </body>
</html>