<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file = fopen("users.txt", "a");
    fwrite($file, "$username $password\n");
    fclose($file);

    echo "Registration successful!<br>";
    echo "<a href='member.php'>Go to Login</a>";
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

    
    <form class="form" method="POST" action="register.php">
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
         Sudah Punya Account?
         <a href="member.php">Login</a>
       </p>
    </form>
    <footer>
        <div class="footer" style="margin-top: 416px;">
            <p>© 2024 | Fauzan Dimas</p>
        </div>
    </footer>

    
</body>
</html>