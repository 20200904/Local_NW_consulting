<?php
   
   if ($_SESSION['id']) {
        $id = $_SESSION['id'];

        require "sql_connect.php";

        $sql = "SELECT name, age, address FROM user WHERE id='$id'";
        $return = sql_con($sql);
        $result = mysql_fetch_array($return);
    }
?>\




          