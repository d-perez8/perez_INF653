<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
</head>

<body>
    <?php
    
    #Challenge 1:
    $var1 = 10;
    $var2 = 5;
    $var3 = rand(0, 10); 
    $grade = rand(0, 100);
    $year = rand(0, 2025);
    ?>

    <?php echo "Number 1: " . $var1 ?><br>
    <?php echo "Number 2: " . $var2 ?><br>
    <?php echo "Addition: " . $var1 + $var2 ?><br>
    <?php echo "Subtraction: " . $var1 - $var2 ?><br>
    <?php echo "Multiplication: " . $var1 * $var2 ?><br>
    <?php echo "Division: " . $var1 / $var2 ?><br>
    <?php echo "Modulus: " . $var1 % $var2 ?><br>

    <?php
    if ($var3 % 2 === 0){
        echo $var3 . " is an even number.<br>";
    } else {
        echo $var3 . " is an odd number.<br>";
    }
    ?>

    <?php echo "Starting number: " . $var3 ?><br>
    <?php echo "After increment: " . ++$var3 ?><br>
    <?php echo "After decrement: " . --$var3 ?><br>

    <?php
    if ($grade >= 90){
        echo $grade . ". You got an A!<br>";
    }
    elseif ($grade >= 80 && $grade < 90){
        echo $grade . ". You got a B!<br>";
    }
    elseif ($grade >= 70 && $grade < 80){
        echo $grade . ". You got a C!<br>";
    }
    elseif ($grade >= 60 && $grade < 70){
        echo $grade . ". You got a D.<br>";
    }
    else{
        echo $grade . ". You got a F.<br>";
    }
    ?>

    <?php
    if ($year % 4 === 0 || $year % 100 != 0 && $year % 4 === 0){
        echo $year . " is a leap year.";
    }
    else{
        echo $year . " is not a leap year.";
    }

    ?>

    </body>

    </html>