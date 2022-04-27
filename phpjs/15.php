<?php
   $conn = mysqli_connect("localhost", "root","1q2w3e");
    mysqli_select_db($conn,"onpentutorials");
    $name = mysqli_real_escape_string($conn,$_GET['name']);
    $password = mysqli_real_escape_string($conn,$_GET['password']);
    $sql = "SELECT * FROM user WHERE name='".$name."' AND password='".$password."'";
    echo $sql;
    $result = mysqli_query($conn,$sql);
/*    var_dump($result->num_rows);*/
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>8-2</title>
</head>
<body>
    <?php
       $password = $_GET["password"];
        if($result->num_rows == "0"){
            echo "get out here";
        }else{
            echo "hi?";
        }
    ?>
</body>
</html>