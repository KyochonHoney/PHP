<?
    include "lib.php";

    $idx = $_POST['idx'];
    $name = $_POST['name'];
    $content = $_POST['content'];
    $title = $_POST['title'];

    $idx = $connect->real_escape_string($idx);
    $name = $connect->real_escape_string($name);
    $content = $connect->real_escape_string($content);
    $title = $connect->real_escape_string($title);

    $query = "UPDATE board SET name='$name', content = '$content', title = '$title' WHERE idx = $idx";
    mysqli_query($connect, $query);
?>
<script>
    location.href="boardDetail.php?idx=<?=$idx?>";
</script>