<?php
    include "lib.php";

    $idx = $_GET['idx'];

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
    <table width=800 border=1 cellpadding=5>
        <tr>
            <th>이름</th>
            <td><?=$data[name]?></td>
        </tr>
        <tr>
            <th>제목</th>
            <td><?=$data[title]?></td>
        </tr>
        <tr>
            <th>내용</th>
            <td><?=nl2br($data[content])?></td> <!--nl2br은 자동줄바꿈-->
        </tr>
        <tr>
            <td colspan="2">
                <a href="list.php">목록</a>
                <div style="float:right;">
                    <a href="deletePost.php?idx=<?=$idx?>" onclick="return confirm('정말 삭제할까요?')";>삭제</a>
                    <a href="editPost.php?idx=<?=$idx?>">수정</a>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>