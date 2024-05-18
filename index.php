<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=":UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <img src="images/cart.png" width="30px" height="30px">
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col_2">
                    <h1>Give Your Workout<br>a New Style!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.<br>Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="allrecords.php" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col_2">
                    <img src="images/image.png">
                </div>
            </div>
        </div>
    </div>

    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col_3">
                    <img src="images/category-1.jpg">
                </div>
                <div class="col_3">
                    <img src="images/category-2.jpg">
                </div>
                <div class="col_3">
                    <img src="images/exclusive.png">
                </div>
            </div>
        </div>

    </div>

    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col_4">
                <img src="images/product-1.jpg">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col_4">
                <img src="images/product-2.jpg">
                <h4>Black Sneakers</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$70.00</p>
            </div>
            <div class="col_4">
                <img src="images/product-3.jpg">
                <h4>Grey Sweatpants</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$40.00</p>
            </div>
            <div class="col_4">
                <img src="images/product-4.jpg">
                <h4>Blue Polo T-shirt</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col_4">
                <img src="images/product-5.jpg">
                <h4>Grey Sneakers</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col_4">
                <img src="images/product-6.jpg">
                <h4>Black T-Shirt</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$70.00</p>
            </div>
            <div class="col_4">
                <img src="images/product-7.jpg">
                <h4>Pack of Three Socks</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$40.00</p>
            </div>
            <div class="col_4">
                <img src="images/product-8.jpg">
                <h4>Fossil Analog Watch</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
        <div class="row">
            <div class="col_4">
                <img src="images/product-9.jpg">
                <h4>Roadster Analog Watch</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col_4">
                <img src="images/product-10.jpg">
                <h4>Black Sneakers</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$70.00</p>
            </div>
            <div class="col_4">
                <img src="images/product-11.jpg">
                <h4>Grey Sneakers</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$40.00</p>
            </div>
            <div class="col_4">
                <img src="images/product-12.jpg">
                <h4>Black Sweatpants</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
    </div>

    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col_2">
                    <img src="images/exclusive.png" class="offer-img">
                </div>
                <div class="col_2">
                    <p>Exclusively Available</p>
                    <h1>Smart Band 4</h1>
                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.<br>Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</small>
                    <a href="allrecords.php" class="btn">Buy Now &#8594</a>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col_3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.<br>Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-2.png">
                    <h3>Sam Brown</h3>
                </div>
                <div class="col_3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.<br>Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-2.png">
                    <h3>Sam Brown</h3>
                </div>
                <div class="col_3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.<br>Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-2.png">
                    <h3>Sam Brown</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col_5">
                    <img src="images/logo-godrej.png">
                </div>
                <div class="col_5">
                    <img src="images/logo-oppo.png">
                </div>
                <div class="col_5">
                    <img src="images/logo-coca-cola.png">
                </div>
                <div class="col_5">
                    <img src="images/logo-paypal.png">
                </div>
                <div class="col_5">
                    <img src="images/logo-philips.png">
                </div>
            </div>
        </div>
    </div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download our App</h3>
                <p>Download for Android and iOS</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images/logo-white.png">
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Twitter</li>
                    <li>Youtube</li>
                </ul>
        </div>
    </div>
    <hr>
    <p class="copyright">Copyright 2023</p>
</div>

<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
        else
            {
                MenuItems.style.maxHeight = "0px";
            }
    }
</script>

</body>
</html>