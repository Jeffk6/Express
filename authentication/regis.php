<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $username = htmlspecialchars($_POST["usernameInp"]);
    $email = $_POST["emailInp"];
    $password = htmlspecialchars($_POST["passwordInp"]);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password for security

    // Additional validation (you may add more as per your requirements)
    if (empty($username) || empty($email) || empty($password)) {
        // Handle empty fields
        echo "Please fill in all required fields.";
    } else {
        // Connect to your database (assuming you have a db.php file as shown earlier)
        require_once '../backend/db.php';
        $conn = connect_db();

        // Check if the email is already registered
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // Email already exists
            echo "Email is already registered. Please use a different email.";
        } else {
            // Insert new user into database
            $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $hashed_password);

            if ($stmt->execute()) {
                // Registration successful
                echo "Registration successful. You can now login.";
                header("location: http://express2024.unaux.com/");
            } else {
                // Registration failed
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement and database connection
        $stmt->close();
        $conn->close();
    }
} else {
    // Handle invalid request method (GET request)
    echo "Invalid request.";
}
?>