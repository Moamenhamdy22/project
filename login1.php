<?php
include('server1.php');?>
<!DOCTYPE>
<html>
<head>
<title>Google</title> <link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css" />
</head>
<body>
  <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" width="125px">
                </div>
                <nav> 
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="allrecords.php">Products</a></li>
                        <li><a href="register.php">Registeratio</a></li>
                        <li><a href="login1.php">login</a></li>
                      
                    </ul>
                </nav>


<header><h2>Login</h2></header>
<form method="post" action="login1.php">
<?php
if(count($error)>0):?>
<div class="error">
<?php
foreach($error as $error1){
echo $error1;
echo "<br>";
}
?>
</div>
<?php endif ?>
<div class="inp"><label>Username</label>
<input type="text" name="unn" required></div>
<div class="inp"><label>Password</label>
<input type="password" name="psw11" required></div>
<div class="inp">
<button type="submit" name="login" class="btn">sign in</button>
</div><p>Not yet a member?<a href="register.php">Sign up</a></p>
</form>
</body>
</html>
