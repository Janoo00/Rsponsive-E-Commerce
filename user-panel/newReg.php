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
        if($_REQUEST["status"] == "0"){
            echo "<script>alert('Registration Successfull')</script>";
        }else{
            echo "<script>alert('Registration Failed')</script>";
        }
    }
    
    
    ?>
    <div class="login">
        <h1>SingUp</h1>
        <form action="./checkReg.php" method="post">
            <div class="input-box">
                <input type="text" name="name1"  placeholder="Enter First Name" required>
            </div>
            <div class="input-box">
                <input type="text" name="name2"  placeholder="Enter Last  Name" required>  
            </div>
            <div class="input-box">
                <input type="text" name="user"  placeholder="Enter Your User Name" required>  
            </div>
            <div class="input-box">
                <input type="text" name="pass"  placeholder="Create Password" required>  
            </div>
            <div class="input-box">
                <input type="text" name="email"  placeholder="Enter Your Email-id" required>  
            </div>
            <div class="input-box">
                <input type="text" name="contact"  placeholder="Add Contact" required>  
            </div>
            <button type="submit">SingUp</button>
        </form>
    </div>
</body>
</html>