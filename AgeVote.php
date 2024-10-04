<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST['age'];

    
    if ($age >= 18) {
        $message = "You are worthy to vote.";
    } else {
        $message = "You are not worthy to vote.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote Worthy Check</title>
</head>
<body>
    <h2>Enter your age to check if you can vote</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Age: <input type="number" name="age" required>
        <button type="submit">Check</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>
