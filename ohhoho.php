<?php
   $conn = mysqli_connect("localhost", "root","1q2w3e");
    mysqli_select_db($conn,"onpentutorials");
    $result = mysqli_query($conn,"SELECT * FROM topic");
?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>

<body id="ta">
    <header>
        <h1><a href="index.php">JSP</a></h1>
        <img src="myimg/log.png" alt="로고" />
    </header>

    <nav>
        <ol>
            <?php
    while($ro = mysqli_fetch_assoc($result)){
    echo '<li><a href="http://localhost/index.php?id='.$ro['id'].'">'.$ro['title'].'</a></li>'."\n";
}
            ?>
        </ol>
    </nav>
    <div id="control">
        <input type="button" value="white" onclick="document.getElementById('ta').className='white'" />
        <input type="button" value="balck" onclick="document.getElementById('ta').className='black'" />
        <a href="http://localhost/write.php">쓰기</a>
        <a href="http://localhost/ohhoho.php">ohhoho</a>
    </div>
    <article>
        <form action="process.php" method="post">
            <p>제목: <input type="text" name="title" ></p>
            <p>본문: <textarea name="description"></textarea></p>
            <p>작성자: <input type="text" name="author"></p>
            <input type="hidden" role="uploadcare-uploader" >
            <input type="submit" name="name" value="눌러" >
        </form>

    </article>
    <script>
        UPLOADCARE_PUBLIC_KEY = "e5f2c3a80b454ab729e7"
    </script>
    <script charset="utf-8" src="https://ucarecdn.com/libs/widget/3.x/uploadcare.full.min.js"></script>
</body>

</html>
