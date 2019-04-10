<form method="GET" action="users">
	<fieldset>
		<legend>Search by Name</legend>
		<input type="text" name="filter" value="<?php echo $name; ?>">
		<input type="submit" value="SEARCH">
	</fieldset>
</form>
<br>
<a href="update">UPDATE</a>
<hr>
<table>
	<tr>
		<th>User ID</th>
		<th>Name</th>
		<th>Role</th>
	</tr>
	<?php
		foreach ($result as $key => $row) {
			echo "<tr>";
			echo "<td>".$row->userID."</td>";
			echo "<td>".$row->name."</td>";
			echo "<td>".$row->role."</td>";
			echo "</tr>";
		}
	?>
</table>