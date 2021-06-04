<?php
	session_start();
	$id="";
	$password="";
	
	if(isset($_POST["id"]))
		$id = $_POST["id"];
	if(isset($_POST["password"]))
		$password = $_POST["password"];
	
	if (! (empty($_POST['id']) || empty($_POST['password'])) ){
		$link = mysqli_connect("localhost","root","","project")
                or die("無法開啟MySQL資料庫連接!<br/>");
		mysqli_query($link, 'SET NAMES utf8'); 
		$sql = "SELECT * FROM patient WHERE patient_id = $id AND patient_password = $password";
		$result = mysqli_query($link, $sql);
		$total_record = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result, MYSQLI_NUM);
		
		if($total_record > 0) {
			$_SESSION['login_session'] = true;
			$_SESSION['id'] = $row[0];
			$_SESSION['password'] = $row[1];
			$_SESSION['name'] = $row[2];
			$_SESSION['birth'] = $row[3];
			$_SESSION['blood'] = $row[4];
			$_SESSION['gender'] = $row[5];
			$_SESSION['emergency'] = $row[6];
		
			header('Location:display4.php');
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