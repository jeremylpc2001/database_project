<?php
    $id = $_POST["id"];
    $password = $_POST["password"];
    $name = $_POST["name"];
	$hospital = $_POST["hospital"];
    $department = $_POST["department"];
    $occupation = $_POST["occupation"];
	
	
    $link = mysqli_connect("localhost","root","","project")
            or die("無法開啟MySQL資料庫連接!<br/>");

    mysqli_query($link, 'SET NAMES utf8'); 

	$sql = "INSERT INTO staff (staff_id, staff_password, staff_name, staff_hospital, staff_department, staff_occupation)
	VALUES ('$id', '$password', '$name', '$hospital', '$department' '$occupation')";

	if ($link->query($sql) === TRUE) {
	    echo "New record created successfully，點擊跳轉回登入頁面";
	    echo '<a href="login1.html" >登入</a>';
	} 
	else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}

	$link->close();

?>