<?php
	$patient_id = $_POST["patient_id"];
	
	$link = mysqli_connect("localhost","root","","project")
            or die("無法開啟MySQL資料庫連接!<br/>");
	mysqli_query($link, 'SET NAMES utf8');
	
	$sql = 




?>