<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender Field</title>
</head>
<body>
<?php
	$genderError="";
	$gender="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

       if (empty($_REQUEST["gender"])) {
         $genderError = "Gender is required";
         } else {
           $gender = test_input($_REQUEST["gender"]);
          
          echo "<h3> Gender Input Check:</h3>";
          echo $gender; 
        } 
        
    }

    function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

  ?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
	<fieldset style="width:200px;">
		<legend>Gender</legend>
        
             <input type="radio" name="gender" value="female">Female
             <input type="radio" name="gender" value="male">Male
             <input type="radio" name="gender" value="other">Other  
             <span class="error">* <?php echo $genderError;?></span>
           
     </fieldset><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>