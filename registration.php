<!DOCTYPE html>
<html lang="en">
<head>
    <script defer src="1234.js"></script>
    <title>Task and Time Management System</title>
    <link rel="stylesheet" href="1234.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" default></script>
    <script src="validation.js" defer></script>
</head>
<body>
    <div class="main">
        <div class="navbar">
        </div>
        <div class="content">
            <h1>TASK<br><span>AND</span>TIME <br>MANAGEMENT<br><span>SYSTEM</span></h1>
            <p class="description">Welcome to Task and Time Management, where streamlined time and task management await you. Our user-friendly platform empowers you to effortlessly organize your days, prioritize tasks, and stay on top of deadlines. With intuitive task lists, interactive calendars, and time tracking features, you can optimize your productivity and make the most out of each moment.</p>
    
            <div class="form">
                <h2>Register here</h2>

                <form action="process_registration.php"  method="post" id="singup" novalidate>

                    <input type="text" name="name" placeholder="Name" value=""  required value=""  id="name">
                    <input type="email" name="email" placeholder="Email" value="" id="email" >
                    <input type="password" name="password" placeholder="Password" value="" id="password">
                    <input type="password" name="confirmpassword" placeholder="Confirm Password" value="" id="confirmpassword">

                    <button class="btnn" type="submit" name="submit">Register</button>
                </form>

                <p class="link">Have an account already?<br>
                    <a href="login.php">Log in</a> here
                </p>


            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="javascript.js"></script>
</body>
</html>