<html>

<head>

	<title>Send Email PHP</title>

</head>

<body>
	<h2> h2 in send email php (demo)</h2>

<?php

	$from = 'jcunningham2@email.itt-tech.edu';
	$subject = $_POST['subject'];
	$text = $_POST['elvismail'];


	//$dbc is the variable to connect to the SQL DB
	$dbc = mysqli_connect('localhost', 'corpjuk', 'grools2!', 'elvis_store')
		or die('Error connecting to MySQL server.');

	$query = "SELECT * FROM emailList";

	$result = mysqli_query($dbc, $query)
		or die('Query Error');

	//$row = mysqli_fetch_array($result);

	while($row = mysqli_fetch_array($result)) {

		$first_name = $row['firstName'];
		$last_name = $row['lastName'];
		$msg = "Dear $first_name $last_name, \n $text";
		$to = $row['email'];

		//mail($to, $subject, $msg, 'From: ' . $from);

		echo 'DEMO Not really sending emails thru mail()';
		echo 'Email sent to: ' . $row['firstName'] . ' ' . $row['lastName'] .
		' : ' . $row['email'] . '<br />';
	}

	mysqli_close($dbc);

	//echo 'Customer Added';

?>

</body>

</html>