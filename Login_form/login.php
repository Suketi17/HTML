<?php 
	// print_r($_POST);
	// die();
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$hostnameDB = "localhost";
	$usernameDB = "root";
	$passwordDB = "";
	$databasenameDB = "login_db";
	$connect = mysqli_connect($hostnameDB,$usernameDB,$passwordDB,$databasenameDB);
	if (!$connect) {
		// echo "Connect không thành công!"
		exit("Connect không thành công!");
	}
	$query = "INSERT INTO login_table (`username`, `pass`)
	VALUES ($username, $password);";
	// $query = "SELECT * FROM login_table"; //query : truy vấn dữ liệu
	$result = mysqli_query($connect, $query); //result : thực thi câu tri vấn
	echo "<pre>";
	// var_dump(mysqli_fetch_array($result, MYSQLI_BOTH));
	echo "</pre>";
	echo "Connect thành công!"


 ?>