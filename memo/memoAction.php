<?
    session_start();
    include "dbClass.php";

    $data[] = $_SESSION['isLoginId'];
    $data[] = $_POST['memo'];
    $data[] = date("Y-m-d H:i:s");

    $query = "INSERT INTO uni_memo(id, memo, regdate) VALUES(?,?,?)";
    $db->query($query, $data);

    Header("Location: index.php");
?>