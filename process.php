<?php
    require("config/config.php");
    require("lib/db.php");
    $conn = db_init($config["host"],$config["duser"],
                    $config["dpw"],$config["dname"]);
    $sql = "INSERT INTO topic (title,description,author,created)
    VALUES('".$_POST['title']."','".$_POST['description']."','".$_POST['author']."',now())"; 

/*    $sql = "INSERT INTO topic(title,description,author,created)VALUES('$_POST[title]','$_POST[description]','$_POST[author]','$_POST[created]')";*/
    $result = mysqli_query($conn,$sql);


/*$sql = "INSERT INTO topic (title,description,author,created)VALUES(".$_POST['title'].",".$_POST['description'].",".$_POST['author'].",now())"
echo $sql;*/

header('location: http://localhost/index.php');
?>

