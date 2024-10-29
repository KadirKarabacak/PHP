<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ISSET & EMPTY FUNCTIONS FORM -->
    <!-- <form action="index.php" method="post">
        <label for="">username:</label><br>
        <input type="text" name="username"> <br>
        <label for="">password:</label><br>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="Log in"></input>
    </form> -->

    <!-- RADIO BUTTONS -->
    <!-- <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="Visa">Visa <br>
        <input type="radio" name="credit_card" value="Mastercard">Mastercard <br>
        <input type="radio" name="credit_card" value="American Express">American Express <br>
        <input type="submit" name="confirm" value="confirm">
    </form> -->

    <!-- CHECKBOXES -->
     <!-- <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza"> Pizza <br>
        <input type="checkbox" name="foods[]" value="Hamburger"> Hamburger <br>
        <input type="checkbox" name="foods[]" value="HotDog"> HotDog <br>
        <input type="checkbox" name="foods[]" value="Taco"> Taco <br>
        <input type="submit" name="submit" value="Submit">
     </form> -->

     <!-- VALIDATING INPUTS -->
      <form action="index.php" method="post">
        Username: <br>
        <input type="text" name="username"> <br>
        Age: <br>
        <input type="text" name="age"> <br>
        Email: <br>
        <input type="text" name="email"> <br>
        <input type="submit" name="login" value="login">
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
    // echo $_POST["username"] . "<br>";
    // echo $_POST["password"] . "<br>";

    //! IF - ELSE STATEMENTS
    // $age = 0;
    // if ($age >= 18) {
    //     echo "You are an adult";
    // }
    // elseif($age === 0){
    //     echo "You are not born yet";
    // }    
    // else {
    //     echo "You are a child";
    // } 

    //! FOR LOOPS
    // for($i = 1; $i <= 10; $i++) {
    //     echo"Hello $i <br>";
    // }

    //! ARRAYS
    // $food_1 = "apple";
    // $food_3 = "orange";
    // $food_2 = "banana";
    // $food_4 = "coconut"; 

    // $foods = array($food_1, $food_2, $food_3, $food_4);

    //* push new values to arry.
    // array_push($foods, "pineapple", "kiwi");

    //* remove last element of array
    // array_pop($foods);

    //* remove first element of array
    // array_shift($foods);

    //* reverse array ( It returns new array)
    // $reversed_foods = array_reverse($foods);

    //* Count the number of items in the array
    // $count = count($foods);
    // echo "Count of foods: $count <br>";

    // foreach($foods as $food){
    //     echo "I love $food <br>";
    // }

    //! Associative array 
    // $capitals = array("USA"=>"Washington D.C", "Japan"=>"Kyoto", "South Korea"=>"Seoul", "India"=>"New Delhi");

    //* Destructuring array in loop
    // foreach($capitals as $key => $value){
    //     echo "Capital of $key is $value <br>";
    // }

    //* Get all the keys of associative array [implode() works as like join() in javascript]
    // $keys = array_keys($capitals);
    // echo "Keys of capitals: ". implode(", ", $keys). "<br>";

    //* Get all the values of associative array
    // $values = array_values($capitals);
    // echo "Values of capitals:". implode(", ", $values). "<br>";

    //* isset and empty functions useful on forms
    // if(isset($_POST["login"])){
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];
    //     if(empty($username) || empty($password)){
    //         echo "Username or password is empty";
    //     }
    // }

    //* Working with radio buttons
    // if(isset($_POST["confirm"]) && !empty($_POST["credit_card"])){
    //     $credit_card = $_POST["credit_card"]; 
    //     echo $credit_card;
    // }

    //* Working with checkboxes
    // if(isset($_POST["submit"])){ // This condition checks button is clicked
    //     $foods = $_POST["foods"];
        
    //     if(empty($foods)){
    //         echo "You haven't selected any food";
    //     } else {
    //         foreach($foods as $food){
    //             echo $food . "<br/>";
    //         }
    //     }  
    // } 

    //* Sanitazing & Validating inputs 
    if(isset($_POST["login"])) {
        // Sanitazes
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        
        // Validates
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        echo "You are {$age} years old";
    }
?>  