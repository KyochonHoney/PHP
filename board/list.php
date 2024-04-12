<?
    include "lib.php";

    $query = "SELECT * FROM board ORDER BY idx DESC";
    $result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width=800 border="1">
        <tr>
            <th>No</th>
            <th>제목</th>
            <th>작성자</th>
            <th>작성시간</th>
        </tr>    
        <? while($list = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?=$list['idx']?></td>
                <td><a href="boardDetail.php?idx=<?=$list['idx']?>"><?=$list['title']?></a></td>
                <td><?=$list['name']?></td>
                <td><?=$list['regdate']?></td>
            </tr>    
        <? } ?>
    </table>
    <a href="write.php">글쓰기</a>
</body>
</html>