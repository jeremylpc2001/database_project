<html>
<head>
	<meta charset = 'UTF-8'>
	<title>profile</title>
</head>

<?php session_start();?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<a href="login1.html"><img src="logo.png" style="width:400px;height:130px"></a>
	<br>
	<img src="banner.jpg" style="width:1510px;height:105px">
	
	<form action="update2.php" method="post">
		<table  align="center" RULES=ROWS style="border-top:0px #FFFFFF solid;  border-right:0px #FFFFFF solid; border-left:0px #FFFFFF solid;"cellspacing="1" cellpadding="5" border="1" class="table">
			<tr>
				<td width="16%" align="right">身分證字號:</td>
				<td width="84%"><input type="text" name="id" value = "<?php echo $_SESSION["id"] ?>" size="15" maxlength="10"/ readonly="readonly"></td>
			</tr>
			<tr>
				<td width="16%" align="right">密碼(可修改):</td>
				<td width="84%"><input type="password" name="password" value = "<?php echo $_SESSION["password"] ?>" size="15" maxlength="10"></td>
			</tr>
			<tr>
				<td width="16%" align="right">姓名(可修改):</td>
				<td width="84%"><input type="text" name="name" size="15" value = "<?php echo $_SESSION["name"] ?>"  maxlength="10"></td>
			</tr>
			<tr>
				<td width="16%" align="right">生日:</td>
				<td width="84%"><input type="date" name="birth" size="15" value = "<?php echo $_SESSION["birth"] ?>"  maxlength="10"/ readonly="readonly"/></td>
			</tr>
			<tr>
				<td width="16%" align="right">血型:</td>
				<td width="84%"><input type="text" name="blood" size="15" value = "<?php echo $_SESSION["blood"] ?>"  maxlength="10"/ readonly="readonly"/></td>
			</tr>
			<tr>
				<td width="16%" align="right">生理性別:</td>
				<td width="84%"><input type="text" name="gender" size="15" value = "<?php echo $_SESSION["gender"] ?>"  maxlength="10"/ readonly="readonly"/></td>
			</tr>
			<tr>
				<td width="16%" align="right">緊急連絡電話(可修改):</td>
				<td width="84%"><input type="text" name="emergency" size="15" value = "<?php echo $_SESSION["emergency"] ?>"  maxlength="10"/></td>
			</tr>
			<tr>
                <td colspan="2" align="center"><input type="submit" value="確認修改"/></td>
            </tr> 
		</table>
	</form>
	
	<div align="center"><button onclick="location.href='login3.html'" style="width:100px;height:30px">登出</button></div>

</body>
</html>