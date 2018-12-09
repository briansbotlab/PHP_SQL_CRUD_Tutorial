<?php
	session_start();// 啟用交談期
	
    //四大功能判定
    if(isset($_POST['select'])){
        if($_POST['select'] == "查詢"){
            $_SESSION["mode"] = "select";
            header("Location: select/view.php"); //畫面轉跳
            return 0;
        }
    }
    
    if(isset($_POST['create'])){
        if($_POST['create'] == "新增"){
            $_SESSION["mode"] = "create";
            header("Location: create/view.php"); //畫面轉跳
            return 0;
        }
    }
    
    if(isset($_POST['update'])){
        if($_POST['update'] == "修改"){
            $_SESSION["mode"] = "update";
            header("Location: update/view.php"); //畫面轉跳
            return 0;
        }
    }
    
    if(isset($_POST['delete'])){
        if($_POST['delete'] == "刪除"){
            $_SESSION["mode"] = "delete";
            header("Location: delete/view.php"); //畫面轉跳
            return 0;
        }
    }

?>