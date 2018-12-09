<!DOCTYPE html>

<html>

	<head>
		<meta charset = 'utf-8'>
		
		<title>
			資料庫管理系統
		</title>
	</head>
	
	<body>
	

	<center>
		資料庫管理系統-修改
		<hr>
        
		<?php
        session_start();   // 啟用交談期
        
            
			echo $_SESSION["exe_result"];
            
        
        
		?>
        <p/>
		<form name="search" method="post" action="ctl.php">
		<input type = 'submit' name="search" value = '回修改主畫面'/>
        <input type = 'submit' name="back" value = '回主畫面'/>
		</form>
        <hr>
        </center>
	</body>
	
</html>