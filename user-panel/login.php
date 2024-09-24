<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Web-App</title>

    <!-- Linking CSS File -->
     <link rel="stylesheet" href="../css/style.css">

     <!-- Boxicon Icons -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body id="loginbody">
    <?php
        if(isset($_REQUEST["status"])){
            if($_REQUEST["status"]==0){
                header("location:user-panel/user.php");
            }elseif($_REQUEST["status"]==1){
               header("location:admin-panel/admin.php");
            }else{
                echo "Login Failed";
            }
        } 
    ?>
    <div class="login">
        <h1>LogIn</h1>
        <form action="./checkLogin.php" method="post">
            <div class="input-box">
                <input type="text" name="user"  placeholder="Enter Your Username">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="pass"  placeholder="Enter Your Password">
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="">Forgot Password?</a>
            </div>
            <button type="submit">Login</button>
            <div class="register-box">
                <p>Don't Have an  Account? <a href="">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>