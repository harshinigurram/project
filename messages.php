<?php
$pageTitle = 'Messages';
include 'templates/header.php';

// Simulate fetching messages from a database
$messages = [
    ["from" => "Alice", "message" => "Hi, I'm interested in your project!"],
    ["from" => "Bob", "message" => "Can we discuss the project details?"]
];
?>

<h2>Inbox</h2>
<?php foreach ($messages as $message): ?>
    <div class="message">
        <strong><?php echo htmlspecialchars($message['from']); ?>:</strong>
        <p><?php echo htmlspecialchars($message['message']); ?></p>
    </div>
<?php endforeach; ?>

<?php include 'templates/footer.php'; ?>
