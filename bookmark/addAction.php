<?
    include "lib.php";
    $memo = $_POST['memo'];
    $memo = mysqli_real_escape_string($connect, $memo);

    $list = explode('\r\n', $memo);

    foreach($list as $url)
    {
        $url = trim($url);
        if(!$url) continue; //-->값이 있는 것만 들어가고 공백 빼기
        echo "<li>";
        echo $url;
        
        $query = "SELECT * FROM bookmark WHERE url ='$url'";
        $result = mysqli_query($connect, $query);
        $data = mysqli_fetch_array($result);
        if($data['idx']){ continue; }   //url이 이미 들어가있으면 추가 X

        $query = "INSERT INTO bookmark(url, regdate) VALUES('$url', now())";
        mysqli_query($connect, $query);
        echo "</li>";
    }
    Header("Location: index.php"); //첫페이지로 돌아가기
?>