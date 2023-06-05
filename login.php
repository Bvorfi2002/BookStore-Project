<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <title>Register</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      <div class="form-container">

      <form action="" method="post">
        <h3>Register now</h3>
        <input type="text" name="name" placeholder="Enter your name" required class="box">
        <input type="email" name="email" placeholder="Enter your email" required class="box">
        <input type="password" name="password" placeholder="Enter your password" required class="box">
        <input type="password" name="cpassword" placeholder="Confirm your password" required class="box">
        <select name="user_type">
            <option value="user">User</option>
            <option value="Admin">Admin</option>
        </select>
        <input type="submit" name="submit" value="Register now" class="btn">
        <p>Already have an account? <a href="login.php">login now</a> </p>

      </form>
      </div>

    </body>
</html>