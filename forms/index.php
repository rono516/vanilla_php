<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
   <div class="register">
    <form  action="login.php" method="POST">
        <h2 style="text-align:center;">LOGIN</h2>
        <?php if(isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label for="username">User Name</label>
        <br>
        <input type="text" name="username"  placeholder="User Name">
        <br>

        <label for="password">Password</label>
        <br>
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <br>

        <button type="submit">Login</button>        
    </form>
    </div>
</body>
</html>