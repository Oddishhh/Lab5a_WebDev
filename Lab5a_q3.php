<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    function calculateArea($length, $width) {

        return $length * $width;
    }

    $length = 4; 
    $width = 2;   
    $area = calculateArea($length, $width);

    // Display the result
    echo "<b>The area of a rectangle with a width of $width and $length is $area <b>";
    ?>
</body>
</html>
