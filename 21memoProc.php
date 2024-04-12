<?php
    include "21_lib.php";
    $name = $_GET['name'];
    $memo = $_GET['memo'];
    $date = date("Y-m-d");
    $query = "INSERT INTO memo( name, memo, regdate) 
              VALUES('$name','$memo','$date')";
    mysqli_query($connect, $query); //query실행
?>
<script>
    location.href = "21memo.php";
</script>