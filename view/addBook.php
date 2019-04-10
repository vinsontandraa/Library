<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AddBook</title>
</head>
<body>
    <h1>
        Perpustakaan Hore
    </h1>
    <form method="POST" action="">
    <p>Judul buku :</p>
    <input type="text" name="judulBuku" id="judulbuku">
    <p>Pengarang  :</p>
    <input type="text" name="pengarang" id ="pengarang">

    <br>

    <input type="submit" value="ADD" name='tambahbuku'>
    <?php
	    require "controller/mysqlDB.php";

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if (isset($_POST['tambahbuku'])) {
            $judulbuku = $_POST['judulBuku'];
            $pengarang=$_POST['pengarang'];
			if (isset($judulbuku,$pengarang) && $judulbuku != "" && $pengarang !="") {
                $judulbuku = $db->escapeString($judulbuku);
                $pengarang = $db->escapeString($pengarang);
				$query = "INSERT INTO book (nama,author,status) VALUES ('$judulbuku','$pengarang',1)";
				$db->executeNonSelectQuery($query);
			}
			header('Location: index.php');
		}
	}
	
?>

<hr><br>
</body>
</html>