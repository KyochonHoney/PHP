<?php
    include "21_lib.php";

    $idx = $_GET['idx'];

    $query = "DELETE FROM memo WHERE idx = $idx";
    mysqli_query($connect, $query); //query실행
?>
<script>
    location.href = "21memo.php";
</script>