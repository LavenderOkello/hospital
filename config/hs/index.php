<!DOCTYPE html>
<html lang="en">
    <head>
    
        <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css">    
        <title>Hospital System</title>
     </head>
    <body>
        
     <h1>Afya Bora</h1>

     <?php include('login.php'); ?>
     <div class="container">
        <img src="login.png" alt="log in avatar" class="avatar">
        <form action="" method="POST">
        <?php echo $accountNotExistErr; ?>
                    <?php echo $emailPwdErr; ?>
                    <?php echo $email_empty_err; ?>
                    <?php echo $pass_empty_err; ?>
            
           <p>Select user type: <select name="usertype">
                <option value="admin">admin</option>
                <option value="doctor">doctor</option>
                <option value="patient">patient</option>
            </select> </p>
            <p>User ID</p>
            <input type="number" name="identification" id="identification" placeholder="Enter ID" required>
            <p>Email</p>
            <input type="email" name="email" placeholder="Enter Email" id="email_signin"   required>
            <p>Password</p>
            <input type="password"  name="password" placeholder="Enter Password" id="password_signin" required>
            <input type="submit" name="" id="sign_in" value="Log In" >
        </form>
     </div>
    </body>
</html>