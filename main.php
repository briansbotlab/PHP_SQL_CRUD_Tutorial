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
			
			if (isset($_SESSION["mode"])){
                if ($_SESSION["mode"] == "select")
                   header("Location: select/view.php");
                if ($_SESSION["mode"] == "create")
                   header("Location: create/view.php");
                if ($_SESSION["mode"] == "update")
                   header("Location: update/view.php");
                if ($_SESSION["mode"] == "delete")
                   header("Location: delete/view.php");
             }
            
		?>
	<center>
		資料庫管理系統<p>
		<hr>
		<form name = 'menu' method = 'post' action = 'controller.php'>
			
			
			1.<input type = 'submit' name="select" value = '查詢'/><br/>
            2.<input type = 'submit' name="create" value = '新增'/><br/>
            3.<input type = 'submit' name="update" value = '修改'/><br/>
            4.<input type = 'submit' name="delete" value = '刪除'/><br/>
			
		</form>
		<hr>	
        </center>
	</body>
	
</html>