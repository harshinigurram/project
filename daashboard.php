<?php
$pageTitle = 'Dashboard';
include 'templates/header.php';

// Simulate a logged-in user
$user = "John Doe";
?>

<h2>Welcome, <?php echo htmlspecialchars($user); ?></h2>
<nav>
    <ul>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="search.php">Search & Match</a></li>
        <li><a href="messages.php">Messages</a></li>
        <li><a href="logout.php">Log Out</a></li>
    </ul>
</nav>
<p>This is your user dashboard where you can manage your profile, search for projects or freelancers, and communicate with others.</p>

<?php include 'templates/footer.php'; ?>
