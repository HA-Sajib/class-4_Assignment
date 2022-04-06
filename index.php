<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class-4</title>
</head>
<body>


    <!-- Assignment- 2 -->
    <h3>Assignment-2</h3>
    <?php
    for($count = 1; $count <= 100; $count+=2 ){
        echo $count." is odd number <br>";
    }
    ?>

    <!-- Assignment - 3 -->
    <h3>Assignment-3</h3>
    <?php   
    $fact=1;
    for($num = 7; $num >= 1; $num--){
        $fact = $fact*$num;
    } 
    echo "Factorial of 7 is ".$fact;
    ?> 

    <!-- Assignment - 4 -->
    <h3>Assignment-4</h3>
    <?php
    $i = 1;
    while($i <= 100){
        echo $i ."<br>";
        $i++;
    }
    ?>
</body>
</html>