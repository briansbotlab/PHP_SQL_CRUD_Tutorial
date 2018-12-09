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
    
    if(isset($_POST['execute'])){
        $exe =$_POST['execute'];
        if($exe == "修改"){
            
            if (isset($_POST['name']) ) { //先判斷輸入值是否為set
                $cust_no = $_SESSION["cust_no"];
                $name = $_POST["name"];
                $id = $_POST["id"];
                $tel_no = $_POST["tel_no"];
                $address = $_POST["address"];

                if(strlen($name)>0 && strlen($id)>0 && strlen($tel_no)>0 && strlen($address)>0){ //判斷輸入內容
            

            
                    $link = mysqli_connect("localhost","root","","customer")or die("無法開啟MySQL資料庫連接!<br/>");
                    // 執行SQL查詢

                
                    $sql = "UPDATE basic ";
                    $sql.= " SET id = '$id', tel_no='$tel_no', address = '$address' , name = '$name'";
                    $sql.= " WHERE cust_no = ".$cust_no;
                
                    //錯誤偵測
                
                    if(mysqli_errno($link)!= 0){
                    echo "錯誤訊息". mysqli_error($link);
                    }
                
                    mysqli_query($link, 'SET NAMES utf8');
                    $result = mysqli_query($link, $sql);


                    mysqli_free_result($result);
                    mysqli_close($link);
                    $_SESSION["exe_result"]= "!資料修改成功!";
                    header('Location: result.php'); //畫面轉跳
                    return 0;
                }else{
                    $_SESSION["exe_result"]= "!資料修改失敗!";
                    header('Location: result.php'); //畫面轉跳
                    return 0;
                    }
            }else{
                $_SESSION["exe_result"]= "!資料修改失敗!";
                header('Location: result.php'); //畫面轉跳
                return 0;
            }
            
            
        }
        
    }
    
	

    
    
?>