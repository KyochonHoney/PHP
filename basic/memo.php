<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메모장</title>
</head>
<body>
    <form action="memoSave.php">
        <div>
            <table border="1">
                <tr>
                    <td>이름</td>
                    <td><input type="text" name="name"/></td>
                </tr>
                <tr>
                    <td>이메일</td>
                    <td><input type="text" name="email"/></td>
                </tr>
                <tr>
                    <td>내용</td>
                    <td><input type="text" name="content" style="width:400px;"/></td>
                </tr>
            </table>
            <input type="submit" value="저장" style="margin-top:10px;">
        </div>
    </form>
    <table border="1">
        <tr>
            <td>이름</td>
            <td>이메일</td>
            <td>내용</td>
            <td>시간</td>
        </tr>
        <?php
    $list = file("memo.txt");   //파일의 첫번째 문장을 가져옴
    $a = array_reverse($list);
    $i = 1;
    foreach($a as $d){
        if($i > 5) break;
        $data = explode("///", $d);
        ?>
    <tr>
        <td><?=$data[0]?></td>
        <td><?=$data[1]?></td>
        <td><?=$data[2]?></td>
        <td><?=$data[3]?></td>
    </tr>
    <?  
        $i++;
        } 
    ?>
    </table>
</body>
</html>