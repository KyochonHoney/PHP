<?php
    //파일의 업로드
    //phpinfo(); 1번째 PHP variables 들어가서 파일 확인
// $_FILES['test'];    	
// Array
// (
//     [name] => 고양상공회의소 자사이력서양식.hwp
//     [type] => application/octet-stream
//     [tmp_name] => C:\xampp\tmp\phpA4FB.tmp
//     [error] => 0
//     [size] => 67072
// )
    //echo $_FILES['test']['name'];
    //move_uploaded_file($_FILES['test']['tmp_name'],"./data/a.exe");   파일 업로드하기