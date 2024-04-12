<?php

    $fp = fopen("memo.txt", "a"); //memo.txt란 파일을 엶
    $now = date("Y-m-d H:i:s"); //2020-12-12
    $content = $_REQUEST['name']."///".$_REQUEST['email']."///".$_REQUEST['content']."///".$now."\r\n";
    fwrite($fp, $content);

    fclose($fp);    //memo.txt파일을 닫음
?>
<script>
    location.href="memo.php";
</script>