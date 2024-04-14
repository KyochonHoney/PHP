<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        //이름을 입력해야 다음 페이지로 넘어갈 수 있음
        function checkFrm()
        {
            var a = document.getElementById("name").value;
            if(a=="")
            {
                alert('이름을 입력해주세요.');
                document.getElementById("name").focus();
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <form action="joinAction.php" method="post" onsubmit="return checkFrm();">
        <div>
            id : <input type="text" name="id" placeholder="아이디를 입력해주세요."/>
        </div>
        <div>
            pw : <input type="text" name="pw" placeholder="비밀번호를 입력해주세요."/>
        </div>
        <div>
            이름 : <input type="text" name="name" placeholder="이름을 입력해주세요."/>
        </div>
        <div>
            이메일 : <input type="email" name="email" placeholder="이메일을 입력해주세요."/>
        </div>
        <input type="submit" value="회원가입"/>
    </form>
</body>
</html>