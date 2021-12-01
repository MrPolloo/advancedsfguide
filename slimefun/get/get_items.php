<?php
	include '../class/DB.php';
	$category = $_POST['category'];
 
	echo "<option value=''>Pilih Item</option>";
 
    $query = DB::query('SELECT * FROM items WHERE category_id=:category_id', array(':category_id'=>$category));
	foreach ($query as $row) {
		echo "<option value='" . $row['items_id'] . "'>" . $row['items'] . "</option>";
	}
?>