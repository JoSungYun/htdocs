<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>9</title>
</head>
<body>
   <ul>
   <h1>jsp</h1>
   <script>
    i = 0;
    while(i<10){
        document.write("<li>hello </li>");
        i += 1;
    }
       </script>
    </ul>   
    <h2>php</h2>
    <ul>
    <?php
        $i = 0;
        while($i<10){
            echo "<li>good</li>";
            $i += 1;
        }
    
    ?>
    </ul>
</body>
</html>