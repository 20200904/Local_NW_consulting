<?php
    $no = $_GET['no'];

    require "sql_connect.php"

    $sql = "select user_id from notice where no=$no";
    $return = sql_con($sql);
    $result = mysql_fetch_array($return);

    session_start();
    if($_SESSION['loginID'] == $result['user'] || $_SESSION['loginID'] == "admin"){
       
        if($return){
            echo "글 삭제 성공";
        }
        else{
            echo "글삭제 실패";
        }
    }
    else{
        echo "삭제할 권한이 없음";
    }
?>