<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>11</title>
</head>
<body>
    <script>
        list = new Array("rkawk","rhrnak","chlrh","alstn");
        i =0;
        while(i<list.length){
            document.write(list[i]+<br/>;
            i += 1;
        }
    </script>
    
    <?php
        $list = array("rkawk","rhrnak","chlrh","alstn");
        $i=0;
    while($i<count($list)){
        echo $list[i];
        $i+=1;
    }
    
    ?>
    
</body>
</html>