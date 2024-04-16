<?php
    include "21_lib.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="21memoProc.php">
        이름 : <input type="text" name="name"/> <br/>
        메모 : <input type="text" name="memo" size=50/> <br/>
        <input type="submit" value="저장"/>
    </form>/
<?php
    $query = "SELECT * FROM memo ORDER BY idx desc";
    $result = mysqli_query($connect,$query);

?>

    <table border=1>
        <tr>
            <td>idx</td>
            <td>이름</td>
            <td>메모</td>
            <td>등록일</td>
        </tr>
        <? while($data = mysqli_fetch_assoc($result)) {  ?>
            <tr>
                <td><?=$data[idx]?></td>
                <td><?=$data[name]?></td>
                <td><?=$data[memo]?></td>
                <td><?=$data[regdate]?></td>
                <td><a href="21del.php?idx=<?=$data[idx]?>"; onclick="return confirm('정말 삭제할까요?')";>삭제<//a></td>
                <td><a href="#"; onclick="editData(<?=$data[idx]?>);";>수정</a></td>
        </tr>
        <? } ?>
    </table>
</body>
<script>
    function editData(idx){
        var content = prompt('수정할 내용을 입력하세요.');
        location.href = "21edit.php?idx=" + idx + "&content=" + content;
    }

</script>
</html>