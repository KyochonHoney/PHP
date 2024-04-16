<?php
    include "21_lib.php";

    $query = "INSERT INTO memo( name, memo, regdate) 
              VALUES('신은서','안녕하세요','2024-11-10')";
    mysqli_query($connect, $query); //query실행

?>