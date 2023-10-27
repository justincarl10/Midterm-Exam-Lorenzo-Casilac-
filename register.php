<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="quizmath.php" method="POST" class="">
            <h1>STUDENT LOGIN</h1>
            <div class="input-box">
                <input type="text" name="" placeholder="Username" id="" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="" placeholder="Student Number" id="" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox" name="" id="">Remember me</label>
            </div>

            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>