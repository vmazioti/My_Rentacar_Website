<?php  
if (isset($_POST['username'])=='root' && isset($_POST['password'])=='admin123') {
	include 'db_connect.php';

	
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	if (empty($username) ||empty($password)) {
		echo "Please complete all form fields!";
	} else {
		// $stmt = $conn->prepare("INSERT INTO clients(username, name, email) VALUES (?, ?, ?)");
		// $stmt->bind_param("ssd", $username, $name, $email);
		// $result = $stmt->execute();

		// if ($result) {
		// 	echo "You are subscribed to our newsletter!";
		// } else {
		// 	echo "You could not subscribe to our nesletter due to an error!";
		// }
		// $stmt->close();
    echo "You are in!";
	}

	mysqli_close($conn);

} else {
	echo "You shall not pass!";
  
}
echo "</br><a href='index.html'>Back</a>"


?>










<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fontawesome icons -->
    <link rel="stylesheet" href="./css/fontawesome/css/all.css" />
    <!-- external css -->
    <link rel="stylesheet" href="./css/style.css" />
    <script src="./script.js" defer></script>
    <title>Admin Page</title>
  </head>
  <body>
    <div class="page-container">
      <nav>
        <div class="logo">
          <a href="index.html">
            <img src="./assets/logo.png" alt="rentacar-logo" />
          </a>
        </div>

        <div class="nav-links">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="fleet.html">Our Fleet</a></li>
            <li><a href="fee.html">Rental Fee</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="admin.html">Admin Page</a></li>
          </ul>
        </div>
      </nav>

      <main>
        <div class="page-container">
          <h2 class="page-title">Admin Login</h2>
          <div class="admin-login">
            <form id="login" method="post" action="admin.php">
              <div class="form-group">
                <label class="form-label" for="username">Username</label>
                <input type="text" id="username" name="username" />
              </div>

              <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" name="password" />
              </div>

              <button type="submit">Login</button>
            </form>
          </div>
          <p></p>
        </div>
      </main>

      <footer>
        <div class="newsletter">
          <h3>Join Our Newletter</h3>
          <form action="" method="">
            <div>
              <input type="text" name="username" placeholder="Your Username" />
            </div>
            <div>
              <input type="text" name="name" placeholder="Your Name" />
            </div>
            <div>
              <input type="text" name="email" placeholder="Your Email" />
            </div>
            <button>Subscribe</button>
          </form>
        </div>
        <div class="contact">
          <h3>Contact Us</h3>
          <i class="fa-solid fa-phone"></i>
          <a href="tel:+302102102100">2102102100</a>
          <br />
          <i class="fa-solid fa-envelope"></i>
          <a href="mailto:smazioti@gmail.com">smazioti@gmail.com</a>
        </div>
        <div class="map">
          <h3>Our Location</h3>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12586.102136318656!2d23.644113333862744!3d37.94151337566892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bbe5bb8515a1%3A0x3e0dce8e58812705!2zzqDOsc69zrXPgM65z4PPhM6uzrzOuc6_IM6gzrXOuc-BzrHOuc-Oz4I!5e0!3m2!1sel!2sgr!4v1653406106524!5m2!1sel!2sgr"
            width="150"
            height="80"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </footer>
    </div>
  </body>
</html>