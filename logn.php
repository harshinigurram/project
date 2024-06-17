<?php
$pageTitle = 'Log In';
include 'templates/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle login (e.g., validate credentials)
    // For simplicity, we assume login is successful
    header("Location: dashboard.php");
    exit();
}
?>

<h2>Log In</h2>
<form method="post" action="login.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>
    <input type="submit" value="Log In">
</form>

<?php include 'templates/footer.php'; ?>
