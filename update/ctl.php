<?php
	session_start();// 啟用交談期
	
    
    if(isset($_POST['back'])){
        $go =$_POST['back'];
        if($go == "回主畫面"){
            $_SESSION["mode"] = 'b';
            header("Location: ../main.php"); //畫面轉跳
            return 0;
        }
        
    }
    if(isset($_POST['search'])){
        $go =$_POST['search'];
        if($go == "回修改主畫面"){
            $_SESSION["success_3"] = "no";
            $_SESSION["fail_3"] = "no";
            header("Location: view.php"); //畫面轉跳
            return 0;
        }
        
    }
    

    
	
	if (isset($_POST['cust_no']) ) { //先判斷輸入值是否為set
		$cust_no = $_POST["cust_no"];
		$link = mysqli_connect("localhost","root","","customer")or die("無法開啟MySQL資料庫連接!<br/>");
		 // 執行SQL查詢
		
		$sql = "SELECT * FROM basic ";
		$sql.= " WHERE cust_no = ".$cust_no;
        
        //錯誤偵測
		
		if(mysqli_errno($link)!= 0){
			echo "錯誤訊息". mysqli_error($link);
		}
		
		mysqli_query($link, 'SET NAMES utf8');
		$result = mysqli_query($link, $sql);
        
        
        $row = mysqli_fetch_assoc($result);
        
		//如果SQL查不到資料
		if(!isset($row["cust_no"])){  
						
				$_SESSION['cust_no'] = $cust_no;
				$_SESSION['success_3'] = 'no';
				$_SESSION["fail_3"] = "yes";
				
				header('Location: fail.php'); //畫面轉跳
				mysqli_free_result($result);
				mysqli_close($link);
				return 0;
					
		}else{
        //如果有查到資料
			
            //將查到的資料存放至 SESSION中
			$_SESSION['success_3'] = 'yes';
			$_SESSION["fail_3"] = "no";
			$_SESSION['cust_no'] = $row["cust_no"];
			$_SESSION['name'] =  $row["name"];
			$_SESSION['id'] =  $row["id"];
			$_SESSION['address'] = $row["address"];
			$_SESSION['tel_no'] = $row["tel_no"];
			
			
			//$result->close();    // 釋放佔用的記憶體  
			//$mysqli->close(); 
			mysqli_free_result($result);
			mysqli_close($link);
				
			header('Location: success.php'); //畫面轉跳
			return 0;
			
			
		}
	}

?>