<?php
    // $fp = fopen("8.txt" , "a"); //쓰기모드로 8.txt파일을 연다

    // fwrite($fp, "동해물과 백두산이 마르고 닳도록\r\n");

    // fclose($fp);

    $fp = fopen("8.txt" , "r");

    $string = fread($fp,6);

    echo($string);
?>
1. 파일을 연다
2. 파일을 사용한다
3. 파일을 닫는다