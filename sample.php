<?php
// ---------------------------------------------
// Sample PHP Program
// Author: Your Name
// Description: A simple form-based PHP program
// ---------------------------------------------

// Define a function to calculate the square of a number
function squareNumber($num) {
    return $num * $num;
}

// Define variables
$result = "";
$error = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"] ?? '';

    if (is_numeric($number)) {
        $result = "The square of $number is " . squareNumber($number);
    } else {
        $error = "❌ Please enter a valid number!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample PHP Program</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            color: #007bff;
        }
        form {
            background: #fff;
            padding: 20px;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        input[type="text"] {
            padding: 8px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<h1>PHP Square Calculator</h1>

<form method="POST" action="">
    <label for="number">Enter a number:</label><br><br>
    <input type="text" name="number" id="number" placeholder="e.g. 5" required><br><br>
    <input type="submit" value="Calculate">
</form>

<div class="result">
    <?php echo $result; ?>
</div>
<div class="error">
    <?php echo $error; ?>
</div>

</body>
</html>