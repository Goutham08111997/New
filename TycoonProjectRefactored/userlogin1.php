<?php
include "db1.php";
session_start();
?>

	<?php
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "select * from user WHERE username = '$username' AND password = '$password'";
		$query_run = mysqli_query($db, $query);
		if (mysqli_num_rows($query_run) > 0) {
			$_SESSION['username'] = $username;

			// 
			echo '<script type="text/javascript"> alert ("Login success..!!")

</script>';
			header('location:userPage.php');
		} else {
			echo '<script type="text/javascript"> alert ("Invalid Credentials..!!")</script>';
		}
	}

	?>

