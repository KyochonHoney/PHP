<?
    include "lib.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="writePost.php" method="post">
    <table width=800 border="1">
        <tr>
            <th> 이름 </th>
            <td><input type="text" name="name"/></td>
        </tr>    
        <tr>
            <th> 제목 </th>
            <td><input type="text" name="title" style="width:100%;"></td>
        </tr>    
        <tr>
            <th> 내용 </th>
            <td><textarea name="content" style="width:100%; height:300px;"></textarea></td>
        </tr>
        <tr>
            <td colspan="2">
                <div style="text-align: center;">
                    <input type="submit" value="저장"/>
                </div>
            </td>
        </tr>
    </table>
</form>    
</body>
</html>