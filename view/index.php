<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php 
    require "controller/mysqlDB.php";
    $query= "SELECT * from bookrent order by book_id asc";
    $result=$db->executeSelectQuery($query);

?>
    <h1>
        Perpustakaan Hore
    </h1>
 

    <input type="button" value="Add" onclick="window.location.href='addBook.php'">

    <br><br>

    <form action="" method="post"></form>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Pengarang</th>
                <th>Status</th>
                    <th colspan="2">Aksi</th>
                    <?php
			foreach ($result as $key => $row) {
				echo "<tr>";
                echo "<td>".$row['book_id']."</td>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['author']."</td>";
                if ($row['status']==1){
                echo "<td>"."Available"."</td>";
                }
                else{
                    echo "<td>"."Rented until"."  ".$row['return_datetime']."</td>";

                }
                if ($row['status']==1){
                echo "<td>"."<button> RENT </button>"."</td>";
                }
                else{
                    echo "<td>"."<button> RETURN </button>"."</td>";
                }
                echo "<td>"."<button> DELETE </button>"."</td>";
				echo "</tr>";
			}
		?>
        
            </tr>
        </table>

    <hr><br>

    <div class = "list">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#info">Info</a></li>
        </ul>   
    </div>
  
</body>
</html>