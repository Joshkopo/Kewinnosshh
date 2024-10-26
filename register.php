<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

 
    $check_stmt = $conn->prepare("SELECT * FROM user_account WHERE username = ? OR email = ?");
    if ($check_stmt) {
        $check_stmt->bind_param('ss', $username, $email);
        $check_stmt->execute();
        $result = $check_stmt->get_result();

        if ($result->num_rows > 0) {
            $message = "<div class='error-message'>Username or Email already exists.</div>";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $insert_stmt = $conn->prepare("INSERT INTO user_account (username, password, email) VALUES (?, ?, ?)");
            if ($insert_stmt) {
                $insert_stmt->bind_param('sss', $username, $hashed_password, $email);
                
                if ($insert_stmt->execute()) {
                    $message = "<div class='success-message'>Registration successful!</div>";
                } else {
                    $message = "<div class='error-message'>Error: " . htmlspecialchars($insert_stmt->error) . "</div>";
                }

                $insert_stmt->close();
            } else {
                $message = "<div class='error-message'>Error preparing the insert statement.</div>";
            }
        }
        $check_stmt->close(); 
    } else {
        $message = "<div class='error-message'>Error preparing the check statement.</div>";
    }

    $conn->close(); 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="register-container">
        <h2>Create an Account</h2>
        <form method="POST" action="register.php">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="register-btn">Register</button>
            <div class="form-element">
                <?php if (isset($message)) echo $message; ?>
                <div class="Old-User">Already a user?</div>
                <div class="Signup">
                    <a href="index.php">Login Now</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
