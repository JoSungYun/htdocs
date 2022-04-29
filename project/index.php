<?php
    require("config/projectconfig.php");
    require("lib/db.php");
    $conn = db_init($config["host"],$config["duser"],
                    $config["dpw"],$config["dname"]);
    $sql = "SELECT * FROM `have`;";
    $result = mysqli_query($conn,$sql);
?>

