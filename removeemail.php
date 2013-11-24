<html>
<head>
	<title>Remove Email PHP</title>
</head>
<body>
	<h2> h2 in remove email php (demo)</h2>

<?php

	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$email = $_POST['email'];

	//$dbc is the variable to connect to the SQL DB
	$dbc = mysqli_connect('localhost', 'corpjuk', 'grools2!', 'elvis_store')
		or die('Error connecting to MySQL server.');

	$query = "DELETE FROM emailList WHERE email = '$email' || firstName = '$first_name' || lastName = '$last_name'";

	mysqli_query($dbc, $query)
		or die('Query Error');

	//$row = mysqli_fetch_array($result);

		echo 'Removed Customer';

	mysqli_close($dbc);

	//echo 'Customer Added';

?>

</body>

</html>