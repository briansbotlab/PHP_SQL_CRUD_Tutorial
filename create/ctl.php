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
        if($go == "回新增畫面"){
            $_SESSION["success"] = "no";
            $_SESSION["fail"] = "no";
            header("Location: view.php"); //畫面轉跳
            return 0;
        }elseif($go == "新增"){
            //&& isset($_POST['name']) && isset($_POST['id']) && isset($_POST['tel_no']) && isset($_POST['address'])
            if (isset($_POST['cust_no'])) { //先判斷輸入值是否為set
            
                $cust_no = $_POST["cust_no"];
                $name = $_POST["name"];
                $id = $_POST["id"];
                $tel_no = $_POST["tel_no"];
                $address = $_POST["address"];
                
                if(strlen($cust_no)>0 &&strlen($name)>0 && strlen($id)>0 && strlen($tel_no)>0 && strlen($address)>0){
                
                    $link = mysqli_connect("localhost","root","","customer")or die("無法開啟MySQL資料庫連接!<br/>");
                     // 執行SQL查詢
                    
                    $sql = "INSERT INTO basic(cust_no,name,id,tel_no,address)";
                    $sql.= " VALUES( $cust_no ,'$name' ,'$id' ,'$tel_no' ,'$address')";
                    
                    //錯誤偵測
                    
                    if(mysqli_errno($link)!= 0){
                        //echo "錯誤訊息". mysqli_error($link);
                        $_SESSION['success'] = 'no';
                        $_SESSION["fail"] = "yes";
                    
                        mysqli_free_result($result);
                        mysqli_close($link);
                            
                        header('Location: fail.php'); //畫面轉跳
                        return 0;
                    }
                
                    mysqli_query($link, 'SET NAMES utf8');
                    $result = mysqli_query($link, $sql);
                
                    $_SESSION['success'] = 'yes';
                    $_SESSION["fail"] = "no";
                    
                    //$result->close();    // 釋放佔用的記憶體  
                    //$mysqli->close(); 
                    mysqli_free_result($result);
                    mysqli_close($link);
                        
                    header('Location: success.php'); //畫面轉跳
                    return 0;
                }else{
                    $_SESSION['success'] = 'no';
                    $_SESSION["fail"] = "yes";
                        
                    mysqli_free_result($result);
                    mysqli_close($link);
                        
                    header('Location: fail.php'); //畫面轉跳
                    return 0;
                }
                        
                
            }
            $_SESSION['success'] = 'no';
            $_SESSION["fail"] = "yes";
                
            mysqli_free_result($result);
            mysqli_close($link);
                
            header('Location: fail.php'); //畫面轉跳
            return 0;
            
        }
        
    }
    

    
	

        
    

?>