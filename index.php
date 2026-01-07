<!DOCTYPE html>
<html>
<head>
  <title>Simple Calculator</title>

  <style>
     body {
        faint-family:Arial, sans-serif;
        background: #f4f6f8;
      }

     .container {
        width: 300px;
        margin: 80px auto;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadows: 0 0 10px rgba(0,0,0,0.1);
      }

      input, select, button {
          width: 100%;
          padding: 10px;
          margin-top: 10px
      }

       button {
           background: #007bff
           color: white;
           border: none;
           cursor: pointer;
      }

       button:hover {
           background: #0056b3;
      }

      .result {
          margin-top: 15px;
          font-weight: bold;
          text-align: center;
      }
   </style>
</head>
<body>
<div class="container">
   <h2>Simple Calcultor (addition)</h2>

<form method="post">
   <input type="number" name="num1" placeholder="Enter first number" required>
   <br><br>

   <input type="number" name="num2" placeholder="Enter second number" required>
   <br><br>

   <select name="operation" rquired>
    <option value="">--Choose Operation--</option>
    <option value="add">Add (+)</option>
    <option value="sub">Subtract (-)</option>
    <option value="mul">Multiply (*)</option>
    <option value="div">Divide (/)</option>
    <option value="mod">Modulus (%)</option>
   <select>
  
   <br><br>
   <button type="submit">Calculator</button>
</form>

<?php
 $result = "";
 $error = "";

if (isset($_POST['num1'], $_POST['num2'], $_POST['operation'])) {

   $num1 = $_POST["num1"];
   $num2 = $_POST["num2"];
   $operation = $_POST['operation'];

   switch ($operation) {

      case "add":
         $result = $num1 + $num2;
         break;

      case "sub":
         $result = $num1 - $num2;
         break;

      case "mul":
         $result = $num1 * $num2;
         break;

      case "div":
         if ($num2 == 0) {
             $error = "Cannot divide by zero!";
         } else {
             $result = $num1 / $num2;
         }
         break;

      case "mod":
          if ($num2 ==0) {
              $error = "cannot modulo by zero";
           } else { 
          $result = $num1 % $num2;
           }
          break;

      default:
          $error = "please select an operation";
    }
  }
  ?>

<?php 
 if ($result != "") {
    echo "<div class='result'>Result: $result</div>";
 } elseif ($error != "") {
      echo "<div class='error'>$eror</div>";
 }
?>

</div>
</body>
</html>
 