<?php
    include "lib.php";

    $idx = $_GET['idx'];
    $idx = $connect->real_escape_string($idx);

    $query = "SELECT * FROM board WHERE idx= $idx";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="editAction.php" method="post">
        <input type="hidden" name="idx" value="<?=$data['idx']?>"/>
        <table width=800 border=1 cellpadding=5>
            <tr>
                <th>이름</th>
                <td><input type="text" name="name" value="<?=$data['name']?>"/></td>
            </tr>
            <tr>
                <th>제목</th>
                <td><input type="text" name="title" value="<?=$data['title']?>"/></td>
            </tr>
            <tr>
                <th>내용</th>
                <td><textarea name="content"><?=$data['content']?></textarea></td> <!--nl2br은 자동줄바꿈-->
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="수정" onclick="return confirm('정말 수정할까요?')";/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>