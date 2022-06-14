<?php  
if (isset($_POST['name']) && isset($_POST['phone_number']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
	include 'db_connect.php';

	
	$name = trim($_POST['name']);
	$phone_number = trim($_POST['phone_number']);
	$email = trim($_POST['email']);
	$subject = trim($_POST['subject']);
	$message = trim($_POST['message']);

	if (empty($name) || empty($phone_number) || empty($email) || empty($subject) || empty($message)) {
		echo "Please complete all form fields!";
	} else {
		$stmt = $conn->prepare("INSERT INTO messages(name, phone_number, email, subject, message) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("ssd", $name, $phone_number, $email, $subject, $message);
		$result = $stmt->execute();

		if ($result) {
			echo "We recieved your message!";
		} else {
			echo "Your message could not be sent due to an error!";
		}
		$stmt->close();
	}

	mysqli_close($conn);

} else {
	echo "Please complete all form fields!";
}

echo "</br><a href='index.html'>Back</a>"
?>