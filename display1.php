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
	
	<form action="update1.php" method="post">
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
				<td width="84%"><input type="text" name="name" size="15" value = "<?php echo $_SESSION["name"] ?>"  maxlength="10"/></td>
			</tr>
			<tr>
				<td width="16%" align="right">服務院所:</td>
				<td width="84%"><input type="text" name="hospital" size="15" value = "<?php echo $_SESSION["hospital"] ?>"  maxlength="10"/ readonly="readonly"/></td>
			</tr>
			<tr>
				<td width="16%" align="right">單位:</td>
				<td width="84%"><input type="text" name="department" size="15" value = "<?php echo $_SESSION["department"] ?>"  maxlength="10"/ readonly="readonly"/></td>
			</tr>
			<tr>
				<td width="16%" align="right">職業:</td>
				<td width="84%"><input type="text" name="occupation" size="15" value = "<?php echo $_SESSION["occupation"] ?>"  maxlength="10"/ readonly="readonly"/></td>
			</tr>
			<tr>
                <td colspan="2" align="center"><input type="submit" value="確認修改"/></td>
            </tr> 
		</table>
	</form>
    
    <form action="search1.php" method="post">
    	<table align="center" bgcolor="#FFCC99">
    	<tr>
    		 <td><font size="2">查詢病患ID:</font></td>
             <td><input type="text" name="patient_id" size="15" /></td>
    	</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="查詢"/></td>
		</tr>
    	</table>
    </form>
	
	<div align="center"><button onclick="location.href='create.html'" style="width:100px;height:30px">新增病例</button></div>
	<br>
	<div align="center"><button onclick="location.href='login2.html'" style="width:100px;height:30px">登出</button></div>

</body>
</html>