<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Field</title>
</head>
<body>
<?php

$emailError="";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_REQUEST["email"])) {
  $emailError = "Email field cannot be empty";
} else {
  $email = test_input($_REQUEST["email"]);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailError = "Invalid email format";
  }
  echo "<h3> Email input check:</h3>";
  echo $email;
}
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Email: <br><br><input type="text" id="email" name="email" value="" >
         <span>* <?php echo $emailError;?></span> <br><br>
         
         <input type="submit" name="submit" value="Submit">

 </form>
</body>
</body>
</html>