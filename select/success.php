<!DOCTYPE html>

<html>

	<head>
		<meta charset = 'utf-8'>
		
		<title>
			資料庫管理系統
		</title>
	</head>
	
	<body>
	
		<?php
			session_start();   // 啟用交談期
			
            
            if (!isset($_SESSION["success_1"]))
                header("Location: view.php");
            elseif ($_SESSION["success_1"] == "no")
                header("Location: view.php");
            elseif (isset($_SESSION["mode"])){
                if ($_SESSION["mode"] == "b"){
                   header("Location: ../main.php");
                }
             }
		?>
	<center>
		資料庫管理系統-查詢<p>
		<p/>
		<hr>
        <table>
		<tr>
			<td>客戶代號:</td>
			<td><?php echo $_SESSION['cust_no']?></td>
		</tr>
		<tr>
			<td>姓名:</td>
			<td><?php echo $_SESSION['name']?></td>
		</tr>
		<tr>
			<td>統一編號:</td>
			<td><?php echo $_SESSION['id']?></td>
		</tr>
		<tr>
			<td>電話號碼:</td>
			<td><?php echo $_SESSION['tel_no']?></td>
		</tr>
		<tr>
			<td>地址:</td>
			<td><?php echo $_SESSION['address']?></td>
		</tr>
		</table>
			
        <form name="search" method="post" action="ctl.php">
		<input type = 'submit' name="search" value = '回查詢畫面'/>
        <input type = 'submit' name="back" value = '回主畫面'/>
		</form>
		<hr>
        </center>
	</body>
	
</html>