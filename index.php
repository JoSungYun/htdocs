<?php
    require("config/config.php");
    require("lib/db.php");
    $conn = db_init($config["host"],$config["duser"],
                    $config["dpw"],$config["dname"]);
    $result = mysqli_query($conn,"SELECT * FROM topic");
?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>index</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body id="ta">
    <header class="jumbotron">
        <img src="myimg/log.png" alt="로고" class="imp-circle" id="logo">
        <h1><a href="index.php">JSP</a></h1>
    </header>
    <div class="row">
        <nav class="col-md-1">
            <ol>
                <?php
    while($ro = mysqli_fetch_assoc($result)){
    echo '<li><a href="http://localhost/index.php?id='.$ro['id'].'">'.htmlspecialchars($ro['title']).'</a></li>'."\n";
}
            ?>
            </ol>
        </nav>
        <div class="col-md-1">
            <div id="control">
                <input type="button" value="white" onclick="document.getElementById('ta').className='white'" />
                <input type="button" value="balck" onclick="document.getElementById('ta').className='black'" />
                <a href="http://localhost/write.php">쓰기</a>
                <a href="http://localhost/ohhoho.php">ohhoho</a>
            </div>
            <article>
                <?php
        if(empty($_GET['id']) === false){
        $sql = 'SELECT * FROM topic WHERE id ='.$_GET['id'];
        $result = mysqli_query($conn,$sql);
        $ro = mysqli_fetch_assoc($result);
        echo '<h2>'.htmlspecialchars($ro['title']).'</h2>';
        echo strip_tags($ro['description'].'<a><h1><h2><h3><4><h5><ul><ol><li>');
        }
    ?>
            </article>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
