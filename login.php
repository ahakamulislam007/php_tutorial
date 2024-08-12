
<!-- this is my test code -->

<?php
// session_start();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     // Database connection
//     $conn = new mysqli('localhost', 'root', '', 'db_for_kcbd');

//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     // Check if the user exists
//     $sql = "SELECT * FROM users WHERE username='$username'";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         if (password_verify($password, $row['password'])) {
//             $_SESSION['username'] = $username;
//             header("Location: dashboard.php");
//             exit();
//         } else {
//             echo "Invalid password.";
//         }
//     } else {
//         echo "No user found with that username.";
//     }

//     $conn->close();
// }
?>





<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Login</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html> -->