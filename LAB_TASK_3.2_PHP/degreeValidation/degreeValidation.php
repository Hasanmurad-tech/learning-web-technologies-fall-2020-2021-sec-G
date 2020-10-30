<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree validation</title>
</head>
<body>
<?php
	$degError="";
	$degree="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

       if (empty($_REQUEST["checkbox"])) {

          $degError = "You have to check at least one degree";

         } else {
           $degree = $_REQUEST["checkbox"];
          
           foreach ($degree as $dg ) {
  	 
           echo $dg."<br>";
          }  
        } 
        
    }

  ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<fieldset>
		<legend>Degree</legend>
		<input type="checkbox" id="ssc" name="checkbox[]" value="Ssc">Sse
    
        <input type="checkbox" id="hsc" name="checkbox[]" value="Hsc">Hsc
   
        <input type="checkbox" id="bsc" name="checkbox[]" value="Bsc">Bsc 
        <span class="error">* <?php echo $degError;?></span>
       
	</fieldset><br>
	<input type="submit" name="submit" value="Submit">

</form>
</body>
</html>