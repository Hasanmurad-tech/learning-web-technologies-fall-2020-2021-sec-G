<!DOCTYPE html>
<html>
<head>
	<title> Home Page</title>
</head>
<body>
	<h1>WELCOME HOME </h1>
	<a href="home.php">Home</a> |<br>
	<a href="create.php">Create New User</a> |<br>
	<a href="profile.php">Profile</a> |<br>
	<a href="userlist.php">User List</a> |<br>
	<a href="../php/logout.php">logout</a>

<hr>

	<form action="" method="POST">
		<table>
			<tr>
				<td>
					<input type="text" name='search_box'>
				</td>
				<td>
					<input type="submit" name='submit' value='Search'>
				</td>
			</tr>
		</table>
	</form>
	<?php

if(isset($_POST['submit']))
{
	if(!empty($_POST['search_box']))
	{
		$userlist = searchUser($_POST['search_box']);
		//print_r($userlist);
	}
	else
	{
		echo 'Search with a valid name....';
	}
}

?>
	<hr>

	<table border='1px' cellspacing=0>
		<tr>
			<th>
				Employee Name
			</th>
			<th>
				Company Name
			</th>
			<th>
				Contact Name
			</th>
			<th>
				Username
			</th>
		</tr>
		<tr>
			
			<td><?php if(isset($_POST['submit'])) {echo $userlist['e_name'];}?></td>
			<td><?php if(isset($_POST['submit'])) {echo $userlist['com_name'];}?></td>
			<td><?php if(isset($_POST['submit'])) {echo $userlist['con_no'];}?></td>
			<td><?php if(isset($_POST['submit'])) {echo $userlist['username'];}?></td>
			
		</tr>
	</table>


</body>
</html>