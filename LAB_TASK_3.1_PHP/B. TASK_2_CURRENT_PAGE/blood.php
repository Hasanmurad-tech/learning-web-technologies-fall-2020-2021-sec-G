<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Blood
        </legend>
        <form method="POST" >
            <select name="blood_group" >
				<option value="" selected >A+</option>
				<option value="">B+</option>
                <option value="">A-</option>
                <option value="">B-</option>
                
            </select> <br>
            <hr>
            <input type="submit" name="submit" id="" value="submit">
        </form>
    </fieldset>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        echo $_POST['blood_group'];
        echo 'done';
    }
    else
        echo 'Enter blood Group';




?>