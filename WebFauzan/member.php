<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file = fopen("users.txt", "r");
    $login_successful = false;

    while (($line = fgets($file)) !== false) {
        list($stored_username, $stored_password) = explode(" ", trim($line));

        if ($stored_username === $username && $stored_password === $password) {
            $login_successful = true;
            break;
        }
    }
    fclose($file);

    if ($login_successful) {
        echo "Login successful!<br>";
        echo "<a href='home.html'>Go to the main page</a>";
    } else {
        echo "Login failed!<br>";
    }
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FauzanWeb</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="member.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><img src="https://www.transparentpng.com/download/diamond/O3UOts-diamond-best-png.png"></div>
            <div class="menu">
                <ul>
                    <li><a href="home.html" class="tbl-biru">Home</a></li>
                    <li><a href="kalkulator.html" class="tbl-biru">Kalkulator</a></li>
                    <li><a href="member.php" class="tbl-biru">Member</a></li>
                </ul>
            </div>
        </div>
    </nav>

    
    <form class="form" method="POST" action="member.php">
        <p class="form-title">Sign in to your account</p>
         <div class="input-container">
           <input type="username" placeholder="Enter username" name="username">
       </div>
       <div class="input-container">
           <input type="password" placeholder="Enter password" name="password">
         </div>
          <button type="submit" class="submit">
         Sign in
       </button>
 
       <p class="signup-link">
         No account?
         <a href="register.php">Sign up</a>
       </p>
    </form>
    <footer>
        <div class="footer" style="margin-top: 416px;">
            <p>© 2024 | Fauzan Dimas</p>
        </div>
    </footer>

    
</body>
</html>