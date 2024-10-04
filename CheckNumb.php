<?php
$message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

 
    if (!is_numeric($number)) {
        $message = "The input is not a number.";
    } else {
        
        $number = floatval($number);

        
        if ($number > 0) {
            $message = "The number is positive.";
        } elseif ($number < 0) {
            $message = "The number is negative.";
        } else {
            $message = "The number is zero.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Check</title>
</head>
<body>
    <h2>Check if a number is positive, negative, or zero</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Enter a number: <input type="text" name="number" required>
        <button type="submit">Check</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>
