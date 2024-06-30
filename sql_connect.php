<?php
    function sql_con($sql_str){
    $connect = mysql_connect("96.96.96.12","root","P@ssw0rd",$sql_str);
        
    if(!$connect){
        echo "mysql connect fail";
        exit;
    }
    //DB 테이블 선택
    mysql_select_db("testla");
    //쿼리 결과
    $return = mysql_query($sql_str);
    mysql_close();
    return $return;
    }
?>