<?
    include "dbClass.php";

    $data = array($_POST['id'],$_POST['pw'],$_POST['name']);

    $ip = $_SERVER['REMOTE_ADDR'];
    $data[] = date("Y-m-d H:i:s");
    $data[] = $ip;

    $query = "INSERT INTO uni_member(id,pw,name,regdate,ip)"
            ."VALUES(?,password(?),?,?,?)";

    $db->query($query,$data);
    Header("Location: index.php");
?>

