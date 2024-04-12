<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .item{width:14%; height:100px; border:1px solid #aaa; float:left; }
    </style>
</head>
<body>
    <div style="text-align:center;">
        <select>
            <?  for($i=2000; $i <=2024; $i++) { ?>
                    <option value="<?=$i?>"><?=$i?>년</option>
            <?  }  ?>
        </select>
        <select name="month">
            <?  for($i = 1; $i <=12; $i++) { ?>
                <option value="<?=$i?>"><?=$i?>년</option>
            <?  }   ?>        
        </select>
        <button type="submit">이동</button>
    </div>
<?
    $tm = date("Y-m-");
    $tm .= "01";
    $startDay = strtotime($tm);
    //오늘의 날짜 구하기
    $b = date("w",$startDay);
    $days = date("t", $startDay);
?>
<?  for($i = 0; $i < $b; $i++){ ?>
<div class="item"></div>
<?  }  ?>
<?  for($i=1; $i<=$days; $i++) { ?>
        <div class="item"><?=$i?></div>
<?  }   ?>
</body>
</html>