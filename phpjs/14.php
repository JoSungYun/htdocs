<?php
   $conn = mysqli_connect("localhost", "root","1q2w3e");
    mysqli_select_db($conn,"onpentutorials");
    $sql = "SELECT * FROM user WHERE name'".$_GET[name]."' AND password='".$_GET['password']."'";
    $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>14</title>
</head>
<body>
    <?php
       $password = $_GET["password"];
        if($password == 1111){
            echo "hi?";
        }else{
            echo "get out here";
        }
    ?>
</body>
</html>