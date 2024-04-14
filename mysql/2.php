<?
    include "dbClass.php";

    $data = array('신은서','메모입니다.',date("Y-m-d H:i:s"));
    $insert = $db->query('INSERT INTO memo (name,memo,regdate) VALUES (?,?,?)',$data);
    echo $insert->affectedRows();

    $db->close();
    Header("Location: 1.php");
?>
