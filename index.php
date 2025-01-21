<?php
// index.php

// This page is intentionally vulnerable to reflected XSS for demonstration/testing.

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reflected XSS Demo</title>
</head>
<body>
    <h1>Reflected XSS Demo</h1>
    <form action="" method="GET">
        <label for="name">Enter your name: </label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Submit">
    </form>

    <?php
    // Below is the vulnerable part: user input is output without sanitization or escaping.
    if (isset($_GET['name'])) {
        echo "Hello, " . $_GET['name'] . "!";
    }
    ?>
</body>
</html>
