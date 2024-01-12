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
            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["id"];

            header("Location: index.php");
            exit;
        }
    }

    $is_invalid = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script defer src="1234.js"></script>
    <title>Task and Time Management System</title>
    <link rel="stylesheet" href="1234.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
        </div>
        <div class="content">
            <h1>TASK<br><span>AND</span>TIME <br>MANAGEMENT<br><span>SYSTEM</span></h1>
            <p class="description">Welcome to Task and Time Management, where streamlined time and task management await you. Our user-friendly platform empowers you to effortlessly organize your days, prioritize tasks, and stay on top of deadlines. With intuitive task lists, interactive calendars, and time tracking features, you can optimize your productivity and make the most out of each moment.</p>
    
            <div class="form">
                <h2>Log in here</h2>

                <?php if ($is_invalid): ?>
                    <em>Invalid login</em>
                <?php endif; ?>

                <form method="post">

                    <input type="email" name="email" placeholder="Email" required value="<?= htmlspecialchars( $_POST["email"]??"") ?>" id="email">
                    <input type="password" name="password" placeholder="Password" required value="" id="password">
                    <button class="btnn" type="submit" name="submit">Login</button>

                </form>

                <p class="link">Dont have an account?<br>
                    <a href="registration.php">Register</a> here
                </p>


            </div>
        </div>
    </div>
</body>
</html>
