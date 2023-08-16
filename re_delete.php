<?php
include('./db_conn.php');// mysql 접속

$delete_no = $_POST['delete_no'];

$sql = "DELETE FROM myuser WHERE id=$delete_no;";
mysqli_query($conn, $sql);

// mysqli_close($conn);

echo $delete_no."번이 삭제되었습니다.<br>";
?>