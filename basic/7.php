<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $list = file("7.txt");
    //9강부터 듣기
    //print_r($list);

    // $str = explode("," , $list[0]);
    // print_r($str);
?>
<table border="1">
        <tr>
            <td>이름</td>
            <td>제목</td>
            <td>내용</td>
        </tr>
    <? foreach($list as $d) { 
            $str = explode("," , $d);    
    ?>
            <tr>
                <td><?=$str[0]?></td>
                <td><?=$str[1]?></td>
                <td><?=$str[2]?></td>
            </tr>
    <? } ?>
        </table>
</body>
</html>