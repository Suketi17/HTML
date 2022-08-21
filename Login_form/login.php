<?php 
	// print_r($_POST);
	// die();
	
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databasename = "login_db";
	$connect = mysqli_connect($hostname,$username,$password,$databasename);
	if (!$connect) {
		// echo "Connect không thành công!"
		exit("Connect không thành công!");
	}
	$query = "SELECT * FROM login_table"; //query : truy vấn dữ liệu
	$result = mysqli_query($connect, $query); //result : thực thi câu tri vấn
	echo "<pre>";
	var_dump(mysqli_fetch_array($result, MYSQLI_BOTH));
	echo "</pre>";
	echo "Connect thành công!"



 ?>