<?php
$conn = mysqli_connect("localhost","root","1q2w3e");
        mysqli_select_db($conn,"project");
$sql = "SELECT * FROM `have`;";
$result = mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html lang="kr">

<head>
    <meta charset="UTF-8">
    <title>index</title>

    <style media="screen">
        body {
            margin: 0;
        }

        body.black {
            background-color: black;
            color: aliceblue;
        }

        header {
            padding-left: 30px;
            border-bottom: 1px solid gray;
        }

        nav {
            border-right: 1px solid gray;
            width: 200px;
            height: 700px;
            float: left;
        }

        nav ol {
            margin-top: 0px;
            padding: 20px;
            list-style: none;
        }

        #content {
            padding-left: 20px;
            float: left;
            width: 400px;
        }

    </style>
</head>

<body id="body">
    <header>
        <h1><a href="/project/index.php">Project Start</a></h1>
    </header>
    <nav>
        <ol>
            <?php

                while($row = mysqli_fetch_assoc($result)){
                    echo '<li><a href="index.php?numtitle='.$row['numtitle'].'">'.htmlspecialchars($row['bigtitle']).'</a></li>';
                }
            ?>
        </ol>
    </nav>
    <div id="content">
        <article>
            <form action="process.php" method="post">
                <p>
                    <label for="nickname">닉네임: </label>
                    <input id="nickname" type="text" name="nickname">
                </p>
                <p>
                    <label for="smtitle">bigtitle: </label>
                    <input id="smtitle" type="text" name="bigtitle">
                </p>
                <p>
                    <label for="smtitle">제목: </label>
                    <input id="smtitle" type="text" name="smtitle">
                </p>
                <p>
                    <label for="description">내용: </label>
                    <textarea id="description" name="description" cols="40" rows="8"></textarea>
                </p>
                <p>
                    <input type="submit" value="입력">
                </p>
            </form>

        </article>
        <input type="button" name="name" value="White" onclick="document.getElementById('body').className=''">
        <input type="button" name="name" value="Black" onclick="document.getElementById('body').className='black'">
        <a href="write.php">쓰기</a>
    </div>
</body>

</html>
