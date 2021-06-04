<?php
	$id = $_POST["id"];
    $password = $_POST["password"];
	
	$link = mysqli_connect("localhost","root","","project")
            or die("無法開啟MySQL資料庫連接!<br/>");
			
	mysqli_query($link, 'SET NAMES utf8');
	$sql = "UPDATE staff SET staff_password = '$password' WHERE staff_id = '$id'";
	
	if ($link->query($sql) === TRUE) {
	    echo "資料更新成功，點擊跳轉回登入頁面";
	    echo '<a href="login2.html" >登入</a>';
	} 
	else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}

	$link->close();
?>
