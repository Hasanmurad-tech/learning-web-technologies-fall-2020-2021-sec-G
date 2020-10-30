<!DOCTYPE html>
<html>
<head>
  <title>Name Field</title>
</head>
<body>
<?php
$nameError="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {

    $nameError = "Name cannot be Empty";

  } elseif(!empty($_POST["name"])) {

    $name = test_input($_POST["name"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameError = "Must start with a letter, And Only letters and white space allowed";
    }
   } 
   if(!empty($_POST["name"])){
      $name = test_input($_POST["name"]);
     $n=strlen($name);
      $m=2;
      if ($n < $m) {
      $nameError="Required at least two words";
    }else{
      echo "<h2> My Input Check:</h2>";
      echo $name;
    }

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
  Name: <br><br><input type="text" id="name" name="name" value="" >
           <span>* <?php echo $nameError;?></span> <br><br>
           
           <input type="submit" name="submit" value="Submit">

</form>



</body>
</html>