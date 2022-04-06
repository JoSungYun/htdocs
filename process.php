<?php
   $conn = mysqli_connect("localhost", "root","1q2w3e");
    mysqli_select_db($conn,"onpentutorials");
    $sql = "INSERT INTO topic (title,description,author,created)
    VALUES('".$_POST['title']."','".$_POST['description']."','".$_POST['author']."',now())"; 

/*    $sql = "INSERT INTO topic(title,description,author,created)VALUES('$_POST[title]','$_POST[description]','$_POST[author]','$_POST[created]')";*/
    $result = mysqli_query($conn,$sql);


/*$sql = "INSERT INTO topic (title,description,author,created)VALUES(".$_POST['title'].",".$_POST['description'].",".$_POST['author'].",now())"
echo $sql;*/

header('location: http://localhost/index.php');
?>

