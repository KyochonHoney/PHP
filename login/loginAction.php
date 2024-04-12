<?
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    if($id == "admin" && $pw ="1112")
    {
        //로그인처리
        setcookie("isAdmin","ok");
?>
        <script>
            location.href="memberList.php";
        </script>
<?php
    }   
    else
    {
        echo "관리자만 접근 가능합니다.";
        exit;
    }
?>