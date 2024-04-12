<?
    include "lib.php";
    $query = "SELECT * FROM bookmark ORDER BY idx DESC";
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
    <table border=1>
        <tr>
            <th>idx</th>
            <th>북마크</th>
            <th>등록일</th>
            <th>삭제</th>
        </tr>
    <? while($data = mysqli_fetch_array($result)) {?>
        <tr>
            <td><?=$data['idx']?></td>
            <td><a href="<?=$data['url']?>"><?=$data['url']?></a></td>
            <td><?=$data['regdate']?></td>
            <th><a href="del.php?idx=<?=$data['idx']?>" onclick="return confirm('정말 삭제할까요?')";>삭제</a></th>
        </tr>
    <?  }   ?>
    </table>
    <a href="add.php">북마크 추가</a>
</body>
</html>