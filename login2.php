<?php
	session_start();
	$id="";
	$password="";
	$occupation="";
	
	if(isset($_POST["id"]))
		$id = $_POST["id"];
	if(isset($_POST["password"]))
		$password = $_POST["password"];
	if(isset($_POST["occupation"]))
		$occupation = $_POST["occupation"];
	
	if (! (empty($_POST['id']) || empty($_POST['password'])) ){
		$link = mysqli_connect("localhost","root","","project")
                or die("無法開啟MySQL資料庫連接!<br/>");
		mysqli_query($link, 'SET NAMES utf8'); 
		$sql = "SELECT * FROM staff WHERE staff_id = $id AND staff_password = $password AND staff_occupation = $occupation";
		$result = mysqli_query($link, $sql);
		$total_record = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result, MYSQLI_NUM);
		
		if($total_record > 0) {
			$_SESSION['login_session'] = true;
			$_SESSION['id'] = $row[0];
			$_SESSION['password'] = $row[1];
			$_SESSION['name'] = $row[2];
			if($row[3] == 1)
				$_SESSION['occupation'] = "醫生";
			elseif($row[3] == 2)
				$_SESSION['occupation'] = "護理師";
			elseif($row[3] == 3)
				$_SESSION['occupation'] = "藥師";
		
			if($row[3] == 1)
				header('Location:display1.php');
			elseif($row[3] == 2)
				header('Location:display2.php');
			elseif($row[3] == 3)
				header('Location:display3.php');
			
		}
		else {
			echo "<center><font color='red'>";
			echo "使用者名稱或密碼錯誤!<br/>";
			echo "</font>";
			$_SESSION["login_session"] = false;
		}
		
		mysqli_close($link); 	
	}

?>