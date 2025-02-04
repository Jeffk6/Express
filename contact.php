<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once ('http://express2024.unaux.com/assets/template/head.php'); ?>
  <link rel="stylesheet" href="http://express2024.unaux.com/assets/style/Contact.css">
</head>

<body>
  
  <?php require_once ('http://express2024.unaux.com/assets/template/header.html'); ?>
  <div class="Contactcontainer">
    <div class="form">
      <div class="contact-info">
        <h3 class="title">Let's get in touch</h3>
        <p class="text">We would love to hear from you! You can reach out to us by clicking on any of the links below,
          or by filling out the forms on the right side of the page.
        </p>
        <div class="info">
          <div class="information">
            <h5>Developer</h5>
            <div>
              <i class="fa-solid fa-envelope"></i>
              <p>123mail@gmail.com</p>
              <a href="mailto:123mail@gmail.com">Send mail!</a>
            </div>
            <div>
              <i class="fa-solid fa-phone"></i>
              <p>+10201201201</p>
              <a href="tel:+10201201201">Call</a>
            </div>
          </div>
        </div>
        <div class="social-media">
          <p>Connect with us :</p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="contact-form">
        <form method="post" autocomplete="on">
          <h3 class="title">Contact us</h3>
          <div class="input-container">
            <input id="n" type="text" name="name" class="input" required />
            <label for="n">Username</label>
            <span>Username</span>
          </div>
          <div class="input-container">
            <input id="e" type="email" name="email" class="input" required />
            <label for="e">Email</label>
            <span>Email</span>
          </div>
          <div class="input-container">
            <input id="p" type="tel" name="phone" class="input" required />
            <label for="p">Phone</label>
            <span>Phone</span>
          </div>
          <div class="input-container textarea">
            <textarea id="m" name="message" class="input" required></textarea>
            <label for="m">Message</label>
            <span>Message</span>
          </div>
          <input type="submit" name="submit" value="Send" class="btn" />
        </form>
      </div>
    </div>
  </div>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection
    require_once 'backend/db.php';

    // Sanitize and validate input data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    if ($name && $email && $phone && $message) {
      // Prepare to save data to the database
      $conn = connect_db();

      $stmt = $conn->prepare("INSERT INTO contact (name, email, phone, message) VALUES (?, ?, ?, ?)");
      $stmt->bind_param("ssss", $name, $email, $phone, $message);

      if ($stmt->execute()) {
        echo "Your message has been sent successfully!";
      } else {
        echo "Error: " . $stmt->error;
      }

      $stmt->close();
      $conn->close();
    } else {
      echo "Please fill in all fields correctly.";
    }
  }
  ?>


  <?php require_once ('http://express2024.unaux.com/assets/template/footer.html'); ?>

  <script src="http://express2024.unaux.com/assets/script/contact.js"></script>
</body>

</html>