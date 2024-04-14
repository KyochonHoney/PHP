<?
    session_start();
    
    include "dbClass.php";

    $id = $_POST['id'];
    $pw = $_POST['pw'];

    $q = 'SELECT * FROM uni_member WHERE id = ?';
    $data = $db->query($q,$id)->fetchArray();

    if(!$data['idx'])
    {
        echo "존재하지 않는 회원입니다.";
        exit;
    } 

    $q = "SELECT password(?) as pw";
    $tmp = $db->query($q, $pw)->fetchArray();

    if($data['pw']!=$tmp['pw'])
    {
        echo '로그인정보가 잘못되었습니다.';
        exit;
    }

    $_SESSION['isLoginId'] = $id;

    Header("Location: index.php");
?>