<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];
    
    $query = "SELECT * FROM user_account WHERE username='$username'";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php"); 
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with this username.";
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Inventory System - Login</title>
    <style>

    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login to Inventory System</h2>
        <form id="loginForm" method="POST" action="index.php">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
            <div class="error-message" id="errorMessage"></div>
            <div class="form-element">
                <div class="form-element2">
                    <div class="New-User">New User?</div>
                    <div class="Signup">
                        <a href="Register.php" id="registerLink">Register</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('errorMessage');

            if (username === '' || password === '') {
                errorMessage.textContent = 'Please fill in all fields.';
                errorMessage.style.display = 'block';
                return;
            }

            this.submit();
        });
    </script>
</body>
</html>
