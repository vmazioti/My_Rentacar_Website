<?php  
if (isset($_POST['username']) && isset($_POST['name']) && isset($_POST['email'])) {
	include 'db_connect.php';

	
	$username = trim($_POST['username']);
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);

	if (empty($username) ||empty($name) || empty($email)) {
		echo "Please complete all form fields!";
	} else {
		$stmt = $conn->prepare("INSERT INTO clients(username, name, email) VALUES (?, ?, ?)");
		$stmt->bind_param("ssd", $username, $name, $email);
		$result = $stmt->execute();

		if ($result) {
			echo "You are subscribed to our newsletter!";
		} else {
			echo "You could not subscribe to our newsletter due to an error!";
		}
		$stmt->close();
	}

	mysqli_close($conn);

} else {
	echo "Please complete all form fields!";
}

echo "</br><a href='index.html'>Back</a>"
?>