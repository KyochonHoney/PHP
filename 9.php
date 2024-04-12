<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세
    </div>

    <?php
        include_once "9_1.php"; //파일 전체를 한 번만 가져오게 함. == require
    ?>
    <div>
        남산 위의 저 소나무 철갑을 두른 듯...
    </div>
    <?php
        include "9_1.php";  //파일 전체 내용을 가져옴
    ?>
</body>
</html>