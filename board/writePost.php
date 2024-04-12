<?php
    include "lib.php";

    $name = $_POST['name'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $name = $connect->real_escape_string($name);    //해킹을 위해 post값으로 받은 값은 항상 보안처리하고 사용
    $title = $connect->real_escape_string($title);
    $content = $connect->real_escape_string($content);

    $ip = $_SERVER[REMOTE_ADDR];
    $query = "INSERT INTO board(name, title, content, regdate, ip)
              VALUES('$name', '$title', '$content', sysdate() , '$ip')";   //, password('$pw') password 암호화 --> 복호화
    
    mysqli_query($connect, $query);
?>
<script>
    location.href="list.php";
</script>