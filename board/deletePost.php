<?
    include "lib.php";

    $idx = $_GET['idx'];
    $idx = $connect->real_escape_string($idx);

    $query = "DELETE FROM board WHERE idx = $idx";

    mysqli_query($connect, $query);
?>
<script>
    location.href = "list.php";
</script>