<?php
$pageTitle = 'Search & Match';
include 'templates/header.php';

// Simulate fetching projects or freelancers from a database
$results = [
    ["name" => "Project Alpha", "description" => "A web development project.", "skills" => "PHP, JavaScript"],
    ["name" => "Freelancer Bob", "description" => "Experienced web developer.", "skills" => "PHP, CSS"]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = $_POST['query'];
    // Here you would typically perform a search in the database
    // Simulate search results for simplicity
    $results = array_filter($results, function($item) use ($query) {
        return stripos($item['name'], $query) !== false || stripos($item['description'], $query) !== false || stripos($item['skills'], $query) !== false;
    });
}
?>

<h2>Search & Match</h2>
<form method="post" action="search.php">
    <label for="query">Search:</label>
    <input type="text" id="query" name="query" required><br>
    <input type="submit" value="Search">
</form>

<h3>Results:</h3>
<?php foreach ($results as $result): ?>
    <div class="result">
        <strong><?php echo htmlspecialchars($result['name']); ?>:</strong>
        <p><?php echo htmlspecialchars($result['description']); ?></p>
        <p><em>Skills: <?php echo htmlspecialchars($result['skills']); ?></em></p>
    </div>
<?php endforeach; ?>

<?php include 'templates/footer.php'; ?>
