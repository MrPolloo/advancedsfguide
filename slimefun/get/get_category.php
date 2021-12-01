<?php
	include '../class/DB.php';
 
	echo "<option value=''>Pilih Category</option>";
 
	$query = DB::query('SELECT * FROM category');
	foreach ($query as $row) {
		echo "<option value='" . $row['category_id'] . "'>" . $row['category'] . "</option>";
	}


?>