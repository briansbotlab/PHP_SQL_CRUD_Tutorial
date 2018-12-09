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
			
			if (isset($_SESSION["success_4"])){
                if ($_SESSION["success_4"] == "yes")
                   header("Location: success.php");
                elseif ($_SESSION["fail_4"] == "yes") 
                   header("Location: fail.php");
             }elseif (isset($_SESSION["fail_4"])){
                if ($_SESSION["fail_4"] == "yes") 
                   header("Location: fail.php");
             }elseif (isset($_SESSION["mode"])){
                if ($_SESSION["mode"] == "b"){
                   header("Location: ../main.php");
                }
             }
            
		?>
	
		資料庫管理系統-刪除<p>
		<hr>
		<form name = 'search' method = 'post' action = 'ctl.php'>
			客戶代號: <input type = 'text' name = 'cust_no'/> <p>
			
			<input type = 'submit' name="search" value = '查詢'/>
			<input type = "reset" value = "清除"/>
            <input type = 'submit' name="back" value = '回主畫面'/>
		</form>
		<hr>	
	</body>
	
</html>