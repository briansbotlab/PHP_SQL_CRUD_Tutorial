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
			
            
            if (!isset($_SESSION["success_3"]))
                header("Location: view.php");
            elseif ($_SESSION["success_3"] == "no")
                header("Location: view.php");
            elseif (isset($_SESSION["mode"])){
                if ($_SESSION["mode"] == "b"){
                   header("Location: ../main.php");
                }
             }
		?>
	<center>
		資料庫管理系統-修改<p>
		<p/>
		<hr>
        
			
        <form name="search" method="post" action="ctl2.php">
        
        <table>
		<tr>
			<td>客戶代號:</td>
			<td> <?php echo $_SESSION['cust_no']?></td>
		</tr>
		<tr>
			<td>姓名:</td>
			<td><input type = 'text' name="name" value ="<?php echo $_SESSION['name']?>"/></td>
		</tr>
		<tr>
			<td>統一編號:</td>
			<td><input type = 'text' name="id" value ="<?php echo $_SESSION['id']?>"/></td>
		</tr>
		<tr>
			<td>電話號碼:</td>
			<td><input type = 'text' name="tel_no" value ="<?php echo $_SESSION['tel_no']?>"/></td>
		</tr>
		<tr>
			<td>地址:</td>
			<td><input type = 'text' name="address" value ="<?php echo $_SESSION['address']?>"/></td>
		</tr>
		</table>
        
        <input type = 'submit' name="execute" value = '修改'/>
		<input type = 'submit' name="search" value = '回修改主畫面'/>
        <input type = 'submit' name="back" value = '回主畫面'/>
		</form>
		<hr>
        </center>
	</body>
	
</html>