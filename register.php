 <?php include("server1.php");
 ?> 
<html>

 <head> <title>sign up</title> <link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css" />
 </head> <body>
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

 <h1>sign Up</h1>
 <form action="login1.php" method="post" >
 <div>
 <label for="name" >Name</label>
 <input type="text" id="name" name="un" required>
 </div>
 <div>
 <label for" email">Email</label>
 <input type="email" id="email" name="em" required>
 </div>
 <div>
 <label for="pass">Password</label>
<input type="password" id="password" name= "psw1" required>
 </div>


<div>
 <label for="pass_confirmation">Repeat Password</label>
 <input type ="password" id=password_confirmation" name="psw2" recuired>
 </div>
 <input type="submit" name="register">



 </form>

 </body>
 </html>