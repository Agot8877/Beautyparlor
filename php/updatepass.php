<?php 

$pass_msg = '';
if(isset($_POST['submit']))
{

	$old_pass = $_POST['old_pass'];
	$new_pass = md5($_POST['new_pass']);
	$new_pass_c = md5($_POST['new_pass_c']);

	if(!empty($old_pass))
	{
		$chk_pass = "SELECT * FROM `users` where password = '" . md5($old_pass) ."'";
		$result = mysqli_query($db, $chk_pass);
		if($result->num_rows != 1)
		{
			$pass_msg = "Old password fields doesn't match to your password";
		}
		else
		{
			if($new_pass == $new_pass_c)
			{
				$change_pass = "UPDATE `users` SET `password` = '$new_pass' WHERE `users`.`username` = '" . $_SESSION['username'] ."'";
				$result = mysqli_query($db, $change_pass);
				// echo $change_pass;
				if($result)
				{
					$pass_msg = 'Password Successfully Changed';
				}
				else
				{
					$pass_msg = 'Password Failed to Changed';
				}
			}
			else
			{
				$pass_msg = 'New Password and Confirm password field does not match';
			}
		}
	}
}