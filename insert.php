<?php
include('./db_conn.php');// mysql 접속

if ( $conn ) {
    echo "Connected!<br>";
} else {
    echo "Failed!!<br>";
}

$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];

echo "유저아이디 : ".$user_id."<br>";
echo "유저이름 : ".$user_name."<br>";

// 쿼리 날리기
$sql = "INSERT INTO myuser (user_id, user_name) VALUES ('$user_id', '$user_name');";
mysqli_query($conn, $sql);

echo "Inserted!!!";

mysqli_close($conn);// mysql 종료

?>