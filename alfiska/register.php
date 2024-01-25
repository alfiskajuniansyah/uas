<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <!--header-->
    
    <div class="container">
        <form action="registration.php" method="post">
            <h2 class = "containerRegis">Register</h2>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label for="username">NPM</label>
            <span class="icon"><ion-icon name="person"></ion-icon></span>
            <input type="text" class="transparent-textfield" id="username" name="username" placeholder="NPM" required>
            <label for="password">Password</label>
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" class="transparent-textfield" id="password" name="password" placeholder="Password" required>
            <button type="submit">Daftar</button>
        </form>
        <p>Sudah punya akun? <a href="index.php">Sign-in</a></p>
    </div>
</body>
</html>