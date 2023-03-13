<?php 

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASSWORD = "";
$DB_NAME = "form";

$conn = mysqli_connect($DB_HOST,$DB_USER, $DB_PASSWORD, $DB_NAME);

    if(mysqli_connect_error()){
        exit('Error connecting to database'); 
    }
    
    if(!isset($_POST['username'], $_POST['email'], $_POST['password'])){
        exit( 'Missing field(s)');
    }
    
    if (empty($_POST['username'] || $_POST['email'] || $_POST['password'])){
        exit('Error: Some values are empty');
    }
    
    //check if username entered exists before adding to database
    
    if($stmt = $conn->prepare('SELECT id, password  FROM users WHERE username = ?')){
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();
    
        if($stmt->num_rows > 0){
            echo 'User with that username already exists';
        }else{
            if($stmt = $conn->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)')){
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
                $stmt->execute();
                echo "Successfully registered";
            }else{
                echo "Error occurred on registration";
            }
        }
        $stmt->close();
    }else{
        echo "Error occurred";
    }


$conn->close();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="register">
        <h1>Register</h1>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post">

            <label for="username"></label>
            <input type="text" name="username" required placeholder="username">

            <label for="email"></label>
            <input type="email" name="email" id="email" required placeholder="email">

            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="password" required>

            <input type="submit" value="Register">
        </form>
    </div>

</body>

</html>