<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>2</title>
</head>
<body>
    <?php
    echo file_get_contents($_GET['id'].".txt");
    
    ?>
</body>
</html>