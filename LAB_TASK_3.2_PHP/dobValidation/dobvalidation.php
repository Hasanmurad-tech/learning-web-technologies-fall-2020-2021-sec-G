<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date of Birth</title>
</head>
<body>
<?php
	$dateError="";
	$date="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

       if (empty($_REQUEST["date"])) {
         $dateError = "Enter date of Birth";
         } elseif(!empty($_REQUEST["date"])) {

           $date=$_REQUEST["date"];
           if(is_numeric($date)!= 0)
           {
           	$dateError = "Date must be valid number";

           }

          echo $date;
        } 
        
    }


  ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<fieldset>
		<legend>Date of Birth</legend>
		<input type="Date" id="date" name="date"><br>
		<span class="error">* <?php echo $dateError;?></span>
		<hr>
		<input type="submit" name="submit" value="Submit">
	</fieldset>
</form>
</body>
</html>