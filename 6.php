<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $a["subject"] = "안녕하세요";
    $a["memo"] = "동해물과 백두산이 마르고 닳도록 "; 

    //print_r($a);
    
    // foreach($a as $data){
    //     echo $data;
    // }
    // foreach( $a as $key => $data){
    //     echo "<br/>";
    //     echo $key;
    //     echo " : ";
    //     echo $data;
    // }

    $list = array();    //배열로 선언
    
    $data['name'] = "홍길동";
    $data['subject'] = "문의 드립니다. ";
    $data['memo'] = "동해물과 백두산이 마르고 닳도록 하느님이 보우하사";

    $list[] = $data;

    $data['name'] = "신은서";
    $data['subject'] = "문의 드립니다. ";
    $data['memo'] = "동해물과 백두산이 마르고 닳도록 하느님이 보우하사";

    $list[] = $data;
//    print_r($list); //2중배열 

?>
    <table border="1">
        <tr>
            <td>이름</td>
            <td>제목</td>
            <td>내용</td>
        </tr>
    <? foreach($list as $d) { ?>
            <tr>
                <td><?=$d['name']?></td>
                <td><?=$d['subject']?></td>
                <td><?=$d['memo']?></td>
            </tr>
    <? } ?>
        </table>
</body>
</html>