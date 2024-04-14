<?
    session_start(); 
    include "dbClass.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .text-right{ text-align: right;}
    </style>
</head>
<body>
    <div class="text-right">
        <?  if($_SESSION['isLoginId']){   ?>   
                <a href="logout.php">로그아웃</a>
        <?  }else{ ?>
            <a href="join.php">회원가입</a>
            <a href="login.php">로그인</a>
        <?  }   ?>
    </div>

    <?  if(isset($_SESSION['isLoginId'])){ ?>
            <form action="memoAction.php" method="post">
                <textarea name="memo" placeholder="메모를 입력해주세요." style="width:500px; height:100px;"></textarea>
                <br/>
                <input type="submit" value="저장"/>
            </form>
    <?  }   ?>
    <table border=1>
        <tr>
            <th>아이디</th>
            <th>메모</th>
            <th>등록일</th>
        </tr>
        <?
            $query = "SELECT * FROM uni_memo WHERE id=?";
            $list = $db->query($query,$_SESSION['isLoginId'])->fetchAll();
            foreach($list as $data){
       ?>   
            <tr>
                <td><?=$data['id']?></td>
                <td><?=nl2br($data['memo'])?></td>
                <td><?=$data['regdate']?></td>
            </tr>
        <?  }   ?>
    </table>
</body>
</html>