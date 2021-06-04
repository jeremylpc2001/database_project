<?php
	$id = $_POST["id"];
    $password = $_POST["password"];
	$name = $_POST["name"];
	$emergency = $_POST["emergency"];
	
	$link = mysqli_connect("localhost","root","","project")
            or die("無法開啟MySQL資料庫連接!<br/>");
			
	mysqli_query($link, 'SET NAMES utf8');
	$sql = "UPDATE patient SET patient_password = '$password', patient_name = '$name', patient_emergency = '$emergency' WHERE patient_id = '$id'";
	
	if ($link->query($sql) === TRUE) {
	    echo "資料更新成功，點擊跳轉回登入頁面";
	    echo '<a href="login3.html" >登入</a>';
	} 
	else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}

	$link->close();
?>
