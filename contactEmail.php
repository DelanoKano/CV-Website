
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and validate the email
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "The email address you entered is: " . htmlspecialchars($email);
            // You can now use this $email variable for further processing
        } else {
            echo "Invalid email format.";
        }
    }
    ?>
