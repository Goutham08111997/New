
	<?php
	include "db1.php";
	if (isset($_POST['submit_btn'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		if ($password == $cpassword) {
			$query = "select * from user WHERE username = '$username'";
			$query_run = mysqli_query($db, $query);
			if (mysqli_num_rows($query_run) > 0) {
				echo '<script type="text/javascript"> alert ("Already the username exists.....Try another one!!!")</script>';
			} else {
				$query = "insert into user values('$username','$password')";
				$query_run = mysqli_query($db, $query);

				if ($query_run) {
					echo '<script type="text/javascript"> alert ("Successfully Registered..!!")</script>';
				} else {
					echo mysqli_error($db);
				}
			}
		} else {
			echo '<script type="text/javascript"> alert ("password and confirm password doesnt match please try again .....!!!")</script>';
		}
	}
	?>

