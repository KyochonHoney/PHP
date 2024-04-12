<?php
    include "21_lib.php";

    $idx = $_GET['idx'];
    $content = $_GET['content'];
   
    $query = "UPDATE memo SET memo='$content' WHERE idx= $idx";
    mysqli_query($connect, $query);
?>
<script>
    location.href="21memo.php";
</script>