<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class-4</title>
</head>
<body>


    <!-- Assignment- 2
    Question 02:
	If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100.
    # You have to rotate from 1 to 100.
    # Your output message should like that, “3 is a odd number”
    # Not need to print even number
    -->
    <h3>Assignment-2</h3>
    <?php
    for($count = 1; $count <= 100; $count+=2 ){
        echo $count." is odd number <br>";
    }
    ?>

    <!-- Assignment - 3 
    Factorial - I think everyone knows the word. Factorial of 4 is given below:
    4! = 4*3*2*1 = 24
    6! = 6*5*4*3*2*1 = 720  
    So let’s calculate the factorial of 7.
    -->
    <h3>Assignment-3</h3>
    <?php   
    $fact=1;
    for($num = 7; $num >= 1; $num--){
        $fact = $fact*$num;
    } 
    echo "Factorial of 7 is ".$fact;
    ?> 

    <!-- Assignment - 4 
    Print out from 100 - 1 using a while loop. 
    You must use decrement operator
    -->
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
