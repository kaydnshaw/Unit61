<?php

	$connect_db = mysqli_connect("127.0.0.1","root","","unit6");
	
	$select_sql = "Select * From profiles";
	$select_query = mysqli_query($connect_db, $select_sql);

	
?>