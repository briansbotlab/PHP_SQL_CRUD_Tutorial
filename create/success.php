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
			
            
            if (!isset($_SESSION["success"]))
                header("Location: view.php");
            elseif ($_SESSION["success"] == "no")
                header("Location: view.php");
            elseif (isset($_SESSION["mode"])){
                if ($_SESSION["mode"] == "b"){
                   header("Location: ../main.php");
                }
             }
		?>
	
		資料庫管理系統-新增<p>
		<p/>
		<hr>
		<?php

			print '!資料新增成功!' . "<p>";
			
			
		?>
			
        <form name="search" method="post" action="ctl.php">
		<input type = 'submit' name="search" value = '回新增畫面'/>
        <input type = 'submit' name="back" value = '回主畫面'/>
		</form>
		<hr>
	</body>
	
</html>