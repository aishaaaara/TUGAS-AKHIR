<?php
include 'koneksi.php';

?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COViD-19</title>
    <link rel="stylesheet" href="style-login.css">
</head>
<body>
    <!-- login -->
    
    <div class="login-box">
        <img src="user.png" class="avatar">
        <form action="proses-login.php" method="post">
               
                    <h2>LOGIN HERE</h2>
                    <p>Username</p>
                    <input type="text" name="username" placeholder="USERNAME">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="PASSWORD"><br><br>
                    <input type="submit" name="login" value="Login"><br><br>
                
            </form>
    </div>
    </div>
  </form>
    <!-- login -->
</body>
</html>