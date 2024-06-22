<?php
// Include db.php to establish database connection
require_once '../backend/db.php';

// Initialize variables
$email = "";
$error = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs
    $email = trim($_POST["emailInp"]);
    $password = $_POST["passwordInp"];

    // Connect to database
    $conn = connect_db();

    // Prepare SQL statement with parameterized query to prevent SQL injection
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);

    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Fetch the user record
        $user = $result->fetch_assoc();
        
        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, set session variables
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["email"] = $email;
            // Redirect to a secure page or homepage
            header("location: http://express2024.unaux.com/");
            exit;
        } else {
            // Password is incorrect
            $error = "Invalid email or password. Please try again.";
        }
    } else {
        // No user found with the given email
        $error = "Invalid email or password. Please try again.";
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
}
?>

<script>
    // Set email in localStorage for client-side use
    localStorage.setItem('email', "<?php echo htmlspecialchars($email); ?>");
</script>

<?php
// Display error message if login failed
if (!empty($error)) {
    echo '<div id="notification" class="notification mt-3">' . htmlspecialchars($error) . '</div>';
}
?>