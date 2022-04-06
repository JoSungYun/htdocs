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
    </div>
    <article>
    <form action="process.php" method="post">
        <p>제목: <input type="text" name="title"></p>
        <p>본문: <textarea name="description"></textarea></p>
        <p>작성자: <input type="text" name="author"></p>
        <input type="submit" name="name" value="눌러">
    </form>
    
    </article>
</body>

</html>
