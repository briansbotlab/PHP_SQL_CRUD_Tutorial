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
			
            
            if (!isset($_SESSION["success_4"]))
                header("Location: view.php");
            elseif ($_SESSION["success_4"] == "no")
                header("Location: view.php");
            elseif (isset($_SESSION["mode"])){
                if ($_SESSION["mode"] == "b"){
                   header("Location: ../main.php");
                }
             }
		?>
	<center>
		資料庫管理系統-刪除<p>
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
        是否真的要刪除?
        <input type = 'submit' name="execute" value = '是'/>
		<input type = 'submit' name="execute" value = '否'/>
		</form>
		<hr>
        </center>
	</body>
	
</html>