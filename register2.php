<?php
    $id = $_POST["id"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $birth = $_POST["birth"];
	$blood = $_POST["blood"];
	$gender = $_POST["gender"];
	$emergency = $_POST["emergency"];
	
    $link = mysqli_connect("localhost","root","","project")
            or die("無法開啟MySQL資料庫連接!<br/>");

    mysqli_query($link, 'SET NAMES utf8'); 

	$sql = "INSERT INTO patient (patient_id, patient_password, patient_name, patient_birth, patient_blood, patient_gender, patient_emergency)
	VALUES ('$id', '$password', '$name', '$birth', '$blood', '$gender', '$emergency')";

	if ($link->query($sql) === TRUE) {
	    echo "成功新增病患資料，點擊跳轉回使用者頁面";
	    echo '<a href="display2.php" >返回</a>';
	} 
	else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}

	$link->close();

?>