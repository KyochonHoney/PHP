<?php
    error_reporting(1);
    ini_set( "display_errors", 1 );

    $connect = mysqli_connect("localhost","korea","korea1","korea");    //어디서 연결할 건지, 데이터베이스 아이디,비밀번호,
    if(mysqli_connect_error()){ 
        echo "mysql 접속 중 오류가 발생했습니다";
        echo mysqli_connect_error();        //에러의 이유 보기
    }

    $query = "SELECT * FROM memo";  //쿼리 넣기
    $result = mysqli_query($connect,$query);    //결과값 가져오기
    $a = mysqli_fetch_assoc($result); 
    
    //$a = mysqli_fetch_assoc($result);   //한줄 가져오기
    while($a = mysqli_fetch_assoc($result)){
        echo $a[a];
        echo $a[b];
        echo $a[c];
        echo $a[d];
        echo "<br/>";
    }
?>