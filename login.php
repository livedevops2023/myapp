<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php
    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get username and password from the form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Define the valid usernames and passwords
        $validCredentials = [
            'admin' => 'admin',
            'student' => 'student'
        ];

        // Validate the credentials
        if (isset($validCredentials[$username]) && $validCredentials[$username] === $password) {
            // Redirect to the welcome page if the credentials are valid
            header('Location: welcome.html');
            exit;
        } else {
            // Display an error message if the credentials are invalid
            echo '<p>Invalid username or password. Please try again.</p>';
        }
    }
    ?>

    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>