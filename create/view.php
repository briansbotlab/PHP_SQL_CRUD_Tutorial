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
			
			if (isset($_SESSION["success"])){
                if ($_SESSION["success"] == "yes")
                   header("Location: success.php");
                elseif ($_SESSION["fail"] == "yes") 
                   header("Location: fail.php");
             }elseif (isset($_SESSION["fail"])){
                if ($_SESSION["fail"] == "yes") 
                   header("Location: fail.php");
             }elseif (isset($_SESSION["mode"])){
                if ($_SESSION["mode"] == "b"){
                   header("Location: ../main.php");
                }
             }
            
		?>
	
		資料庫管理系統-新增<p>
		<hr>
		<form name = 'search' method = 'post' action = 'ctl.php'>
            <table>
                <tr>
                    <td>客戶代號:</td>
                    <td><input type = 'text' name = 'cust_no'/></td>
                </tr>
                <tr>
                    <td>姓名:</td>
                    <td><input type = 'text' name = 'name'/></td>
                </tr>
                <tr>
                    <td>統一編號:</td>
                    <td><input type = 'text' name = 'id'/></td>
                </tr>
                <tr>
                    <td>電話號碼:</td>
                    <td><input type = 'text' name = 'tel_no'/></td>
                </tr>
                <tr>
                    <td>地址:</td>
                    <td><input type = 'text' name = 'address'/></td>
                </tr>
            </table>
        
			<input type = 'submit' name="search" value = '新增'/>
			<input type = "reset" value = "清除"/>
            <input type = 'submit' name="back" value = '回主畫面'/>
		</form>
		<hr>	
	</body>
	
</html>