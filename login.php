<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                    $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($_POST["password"], $user["password_hash"])) {
            die("Login successful");
        }
    }

    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
</head>
<body>
    
    <h1>Login</h1>
    <p>Don't have an account? <a href="login/signup.html">Sign Up</a></p>

    <?php if ($is_invalid): ?>
        <em>Invalid Login</em>
    <?php endif; ?>

<form method="post">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <label for="password">Password</label>
    <input type="password" name="password" id="password">

    <button>Log In</button>
</form>

</body>
</html>