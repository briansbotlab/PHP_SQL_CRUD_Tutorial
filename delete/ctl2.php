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
        if($go == "回刪除主畫面"){
            $_SESSION["success_4"] = "no";
            $_SESSION["fail_4"] = "no";
            header("Location: view.php"); //畫面轉跳
            return 0;
        }elseif($go == "回刪除畫面"){
            $_SESSION["success_4"] = "yes";
            $_SESSION["fail_4"] = "no";
            header("Location: success.php"); //畫面轉跳
            return 0;
        }
        
    }
    
    if(isset($_POST['execute'])){
        $exe =$_POST['execute'];
        if($exe == "是"){
            
            if (isset($_SESSION["cust_no"]) ) { //先判斷是否為set
                $cust_no = $_SESSION["cust_no"];
                $name = $_SESSION["name"];
                $id = $_SESSION["id"];
                $tel_no = $_SESSION["tel_no"];
                $address = $_SESSION["address"];

            
                    $link = mysqli_connect("localhost","root","","customer")or die("無法開啟MySQL資料庫連接!<br/>");
                    // 執行SQL

                
                    $sql = "DELETE FROM basic ";
                    $sql.= " WHERE cust_no = ".$cust_no;
                
                    //錯誤偵測
                
                    if(mysqli_errno($link)!= 0){
                    echo "錯誤訊息". mysqli_error($link);
                    }
                
                    mysqli_query($link, 'SET NAMES utf8');
                    $result = mysqli_query($link, $sql);


                    mysqli_free_result($result);
                    mysqli_close($link);
                    
                    unset($_SESSION['cust_no']);
                    unset($_SESSION['name']);
                    unset($_SESSION['id']);
                    unset($_SESSION['tel_no']);
                    unset($_SESSION['address']);
                    
                    $_SESSION["exe_result"]= "!資料刪除成功!";
                    $_SESSION["result_btn"]= "回刪除主畫面";
                    header('Location: result.php'); //畫面轉跳
                    return 0;
                
            }else{
                $_SESSION["exe_result"]= "!資料刪除失敗!";
                $_SESSION["result_btn"]= "回刪除畫面";
                header('Location: result.php'); //畫面轉跳
                return 0;
            }
            
            
        }elseif($exe == "否"){
            $_SESSION["exe_result"]= "!資料沒有刪除!";
            $_SESSION["result_btn"]= "回刪除畫面";
            header('Location: result.php'); //畫面轉跳
            return 0;
        }
        
    }
    
	

    
    
?>