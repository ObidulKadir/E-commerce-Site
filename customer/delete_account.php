<center> <!-- Center Start-->
	<h1> Do You Really want to Delete Your Account ?</h1>

	<form action="" method="post"><!--form staart-->
		<input type="submit" class="btn btn-danger" name="Yes" value="Yes, I want To Delete">
		<input type="submit" class="btn btn-primary" name="No" value="No, I dont want To Delete">
	</form><!--form finish-->
</center><!-- Center Start-->

<?php
 $c_email = $_SESSION['customer_email'];

 if (isset($_POST['Yes'])) {
 	$delete_customer = "delete from customers where customer_email='$c_email'";
 	$run_delete_customer = mysqli_query($con,$delete_customer);
 	if ($run_delete_customer) {
 		session_destroy();
 		echo "<script>alert('Successfully delete your account , feel sorry about this.Good bye!!! </script> ";
 		echo "<script>window.open('../index.php','_self')</script>";
 	}
 }

 if (isset($_POST['No'])) {
 	echo "<script>window.open('my_account.php?my_orders','_self')</script>";
 }

?>