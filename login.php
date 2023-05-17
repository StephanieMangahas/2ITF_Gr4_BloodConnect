<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="BC_logo.png" />
    <link rel="stylesheet" href="login.css"> 
    <title>Login</title>
</head>
<body>
    
    <section class="header">
        <nav>
            <a href=""><img src="BC_logo.png" alt="bc logo"></a>
        </nav>

        <div class="login-container">
        <a href="Homepage.html"> <- Home</a>

        <h2>Login to the Portal</h2>
        
<form action="login-check.php" method="post">
    <div class="form-element">
        
            <input type="text" name="username" id="username" placeholder="Username">
        
            <input type="password" name="password" id="password" placeholder = "Password">
    </div>
        <button type="submit" name="login">Login</button> 
            <h3>Don't have an account?</h3>
        <button type="submit" name="register">
            <a>CREATE ACCOUNT</a>
        </button>
    </div>
</form>
    </section>

</body>
</html>