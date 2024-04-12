<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?
    $a = array(1,2,3);

    print_r($a[2]);
    //for문
    for($i = 0; $i < count($a); $i++){
        echo $a[$i];
        echo "<br/>";
    }
    //foreach문
    foreach($a as $b){
        echo $b;
        echo "<br/>";
    }
    //foreach에서의 배열 인덱스값 알려주기
    foreach($a as $key => $b){
        echo $key;
        echo " : ";
        echo $b;
        echo "<br/>";
    }
?>
</body>
</html>