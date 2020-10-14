<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Membuat Input Output Produk</title>
</head>

<body class="mt-3 mx-5">
    <header class="text-center">
        <h3>Item List</h3>
    </header>

    <nav>
        <a href="form-register.php">[+] Add New</a>
    </nav>

    <br>

    <table border="1" class="table table-hover table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
			<th>Quantity</th>
			<th>Tools</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data";
        $query = mysqli_query($db, $sql);

        while($item = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$item['no']."</td>";
            echo "<td>".$item['name']."</td>";
            echo "<td>".$item['type']."</td>";
            echo "<td>".$item['quantity']."</td>";

            echo "<td>";
            echo "<a class='btn btn-primary' href='form-edit.php?id=".$item['no']."'>Edit</a> | ";
            echo "<a class='btn btn-danger' href='delete.php?id=".$item['no']."'>Delete</a>";
            echo "</td>";

            echo "</tr>";
        }
		?>
		<?php if(isset($_GET['status'])): ?>
			<p>
				<?php
					if($_GET['status'] == 'success'){
						echo "<p class='bg-success text-white'>1 entry has been deleted</p<";
					} else {
						echo "<p class='bg-danger text-white'>Failed to delete the entry</p>";
					}
				?>
			</p>
        <?php endif; ?>
		<?php if(isset($_GET['status2'])): ?>
			<p>
				<?php
					if($_GET['status2'] == 'success'){
						echo "<p class='bg-success text-white'>1 entry has been updated</p>";
					} else {
						echo "<p class='bg-danger text-white'>Failed to update the entry</p>";
					}
				?>
			</p>
        <?php endif; ?>
		<?php if(isset($_GET['status3'])): ?>
			<p>
				<?php
					if($_GET['status3'] == 'success'){
						echo "<p class='bg-success text-white'>Your entry has been submitted</p>";
					} else {
						echo "<p class='bg-danger text-white'>Failed to submit your entry</p>";
					}
				?>
			</p>
		<?php endif; ?>
    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>