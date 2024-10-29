# PHP - Learnings

This repo is all about the learning notes of PHP.

- [PHP - Learnings](#php---learnings)
  - [What is PHP](#what-is-php)
  - [Installation](#installation)
  - [HTML in PHP](#html-in-php)
  - [Variables](#variables)
  - [Articmetic Operations \& Operator Precedence](#articmetic-operations--operator-precedence)
  - [Special Variables \[ $\_GET, $\_POST \]](#special-variables--_get-_post-)
  - [Math Functions](#math-functions)
  - [If - Else Statements](#if---else-statements)
  - [For Loop](#for-loop)
  - [Arrays](#arrays)
  - [Associative Array](#associative-array)
  - [Isset \& Empty functions](#isset--empty-functions)
  - [String Functions \[ Methods \]](#string-functions--methods-)
  - [Validating \& Sanitazing Inputs \[ From Malicious inputs \]](#validating--sanitazing-inputs--from-malicious-inputs-)

## What is PHP

PHP (Hypertext Preprocessor) is a server-side programming language that is especially designed for web development and is open-source. PHP can be embedded within HTML, making it widely used to create dynamic web pages. It processes code on the server and then sends the resulting HTML to the browser, so users cannot see the PHP code directly.

- **Server-Side Execution**: PHP code runs on the server, and only HTML output is sent to the browser.
- **Database Integration**: PHP easily integrates with databases like MySQL and PostgreSQL, which enables dynamic content management.
- **Open Source and Free**: PHP is open-source, with strong community support.
- **Easy to Use**: Compared to many other programming languages, PHP is considered easier to learn and use.

## Installation

- First we need to install xampp to run our apache server with the MySQL.
- Also in chrome we can install live-server extension from chrome web store. In this way we can see our changes immediately on the screen without reload.

## HTML in PHP

- We can use HTML code into our PHP files.
- We can display data within the `<?php echo"SomeText" ?>` tag.

## Variables

- A variable can hold string, integer, float and boolean. We are using dollar sign `$` to declare variables like `$name="George";`
- We can use variables into strings like `echo "Hello {$name}";`
- Boolean values doesnt display anything on the screen if it's value is false. If it's true it displays 1. But we never use themselves to display on the screen, instead we use them to display other things or if-else statements.

## Articmetic Operations & Operator Precedence

```php
    // Aritmetic Operations
    $num1 = 10;
    $num2 = 5;
    echo "Addition: ". ($num1 + $num2). "<br>";
    echo "Subtraction: ". ($num1 - $num2). "<br>";
    echo "Multiplication: ". ($num1 * $num2). "<br>";
    echo "Division: ". ($num1 / $num2). "<br>";
    echo "Modulus: ". ($num1 % $num2). "<br>";

    // Increment / Decrement operators
    $counter = 0;
    echo "Initial counter: $counter <br>";
    $counter++;
    echo "Incremented counter: $counter <br>";
    $counter--;
    echo "Decremented counter: $counter <br>";

    // Operator precedence
    () paranteses first, ** power is second, * & % is third, + & - is fourth
```

## Special Variables [ $_GET, $_POST ]

- These variables are used to collect data from an HTML form data is sent to the file in the action attribute. `<form action="some_file.php" method="post">`
- #### `$_GET Method`
  - Data is appended to the URL.
  - Not Secure
  - Char limits
  - Bookmark is possible with values
  - Requests can be cached
  - Better for a search page
- #### `$_POST Method`
  - More Scure
  - No data limit
  - Cannot bookmark
  - Requests are not cached
  - Better for submitting credentials

## Math Functions

- `abs()` Absolute value of the negative number.
- `round()` Rounding decimal part of floats.
- `floor()` Rounding floats to floor.
- `ceil()` Rounding floats to ceil.
- `pow()` Powering the first number with the second number pow(2,3) = 8 forexample.
- `sqrt()` sqrt(100) = 10 ( It returns squares )
- `max()` Returns the max number of given numbers.
- `min()` Returns the min number of given numbers.
- `pi()` Returns the pi.
- `rand()` Returns a random number. Also we can spesify min and max numbers to generate random number between these two values.

## If - Else Statements

In this section nothing different from other languages. Only the `elseif()` is written like this.

## For Loop

Everything is same only just defining variables is different

```php
for($i = 0; $i < 5; $i++) {
  echo"Hello <br>"
}
```

## Arrays

To create an array in php is `array()` function which takes values as arguments.

- To push new value to array `array_push()`
- To remove last value from array `array_pop()`
- To remove first value from array `array_shift()`
- To reverse an array `$reversed = array_reverse($anArray)`
- To get length of an array `$count = count($array);`

## Associative Array

An array made of key-value pairs. We can access the values like `$capitals["Japan"]`

- An associative array is looks like this: ` $capitals = array("USA"=>"Washington D.C", "Japan"=>"Kyoto", "South Korea"=>"Seoul", "India"=>"New Delhi");`
- Associative arrays can be useful when we hold data like `country->capital, id->userName, item->price` etc.

## Isset & Empty functions

- `isset()` function returns true if a variable is `declared and not null`.
- `empty()` function returns true if a variable is `not declared, false, null or empty string`.
- Also in PHP true means 1, false means 0.

## String Functions [ Methods ]

- `strtolower()` returns the given string as lowercase
- `strtoupper()` returns the given string as uppercase
- `trim()` returns the given string without speaces it has at start or at end.
- `str_pad()` pads a string with the certain amount of spesified characters.
- `str_replace()` allow us to replace a character with different one.
- `str_rev` reverse the given string
- `str_shuffle()` shuffles the string randomly.
- `str_cmp()` allow us to compare a string with another string. If both strings are equal, it returns 0, if not it returns 1.
- `strlen()` returns the length of a string.
- `strspos()` returns the position ( index ) of given character.
- `substr()` allow us the create new string with the given string.
- `explode()` allow us to create an array with our string with the separating rule.
- `implode()` takes an array and creates a string with the combining rule.

## Validating & Sanitazing Inputs [ From Malicious inputs ]

To handle malicious input values, we can use `filter_input()` function which takes three arguments. PHP has lot of prebuilt filters for Sanitazing like emails, numbers etc.

- #### Sanitization
  - First argument is the form method like `filter_input(INPUT_POST, )`
  - Second argument is the name of the input `filter_input(INPUT_POST, "username", )`
  - Third argument is the type of filter. There is lot of filters in PHP but to filter special chars we can use `filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS)` filter like this.
- #### Validation
  -
