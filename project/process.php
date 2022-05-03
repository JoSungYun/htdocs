<?php
$conn = mysqli_connect("localhost","root","1q2w3e");
        mysqli_select_db($conn,"project");

$nickname = mysqli_real_escape_string($conn,$_POST['nickname']);
$sql = "SELECT * FROM `user` WHERE `nickname` = '{$nickname}'";
$result = mysqli_query($conn,$sql);

if($result->num_rows > 0){
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['nickname'];
    echo 10+10;
}else{
    $sql = "INSERT INTO `user`(`numtitle`,`nickname`) VALUES(NULL,'{$nickname}');";
   /* $sql = "INSERT INTO user(nickname,numtitle) VALUES ('{$nickname}', NULL);";*/
   /* $sql = "INSERT INTO `user` (`uname`, `passwd`, `nickname`, `numtitle`) VALUES (NULL, NULL, '{$nickname}}', NULL);";*/
    echo 10+10;
    $result = mysqli_query($conn,$sql); 
    echo 10+10;
    $user_id = mysqli_insert_id($conn);
    echo 10+10;
}

$bigtitle = mysqli_real_escape_string($conn,$_POST['bigtitle']);
$smtitle = mysqli_real_escape_string($conn,$_POST['smtitle']);
$description = mysqli_real_escape_string($conn,$_POST['description']);

$sql = "INSERT INTO `have` (
    `numtitle`, `bigtitle`, `smtitle`, `nickname`, `description`, `created`) 
    VALUES (NULL,'{$bigtitle}', '{$smtitle}', '{$user_id}', '{$description}', now());";

mysqli_query($conn, $sql);
?>


