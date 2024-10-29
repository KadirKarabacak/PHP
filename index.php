<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">username:</label><br>
        <input type="text" name="username"> <br>
        <label for="">password:</label><br>
        <input type="password" name="password"> <br>
        <input type="submit" value="Log in"></input>
    </form>
</body>
</html>

<?php
    // echo"I love pizza<br>";
    // echo"It's really good<br>";

    //! String Variable
    // $name = "George";
    // echo "Hello {$name} <br>";

    //! Number Variable
    // $age = 30;
    // echo "I am $age years old <br>";

    //! Float Variable
    // $salary = 5000.50;
    // echo "My salary is $salary <br>";

    //! Boolean Variable
    // $isStudent = true;
    // echo "I am a student: $isStudent <br>";

    //! Aritmetic operators
    // $num1 = 10;
    // $num2 = 5;
    // echo "Addition: ". ($num1 + $num2). "<br>";
    // echo "Subtraction: ". ($num1 - $num2). "<br>";
    // echo "Multiplication: ". ($num1 * $num2). "<br>";
    // echo "Division: ". ($num1 / $num2). "<br>";
    // echo "Modulus: ". ($num1 % $num2). "<br>";
    
    //! Increment / decrement operators
    // $counter = 0;
    // echo "Initial counter: $counter <br>";
    // $counter++;
    // echo "Incremented counter: $counter <br>";
    // $counter--;
    // echo "Decremented counter: $counter <br>";

    //! Operator precedence
    // () paranteses first, ** power is second, * & % is third, + & - is fourth

    //! SPECIAL VARIABLES
    echo $_POST["username"];
    echo $_POST["password"];
?>