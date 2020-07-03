

        
        <!-- latest compiled and minified CSS -->

        <!-- jquery library -->
        <!-- <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>  -->
        <!-- Latest compiled and minified javascript -->
        <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
        <!-- External CSS -->

        <link rel="icon" type="image/png" href="image/logo2.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css" >
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
        <link rel="stylesheet" href="css/mystyle.css" >
    </head>
    <body>
        <div>



<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">

                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <button type="button" class="navbar-toggle" style="border: none;" >
                         <?php
                                if(!empty($_SESSION['cart'])) {
                                    $cart_count = count(array_keys($_SESSION['cart']));
                            ?>
                           <a href="cart.php" class="nav-bar" style="color: yellow;"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge"><?php echo $cart_count; ?></span></a>
                           <?php
                            }else{
                                ?>
                                <a href="cart.php" class="nav-bar" style="color: yellow;"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
                            <?php
                            }
                            ?>
                    </button>

                      
                       <a href="index.php" class="navbar-brand"><img src="image/logo2.png"></a>

                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">

                        
                          
                           <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                           <li><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                           <li><a href="contact.php"><i class="far fa-address-book" ></i> Contact Us</a></li>
                           <?php
                                if(!empty($_SESSION['cart'])) {
                                    $cart_count = count(array_keys($_SESSION['cart']));
                            ?>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge"><?php echo $cart_count; ?></span></a></li>

                           <?php
                            }else{
                                ?>
                                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                                <?php
                            }
                            ?>
                           
                       </ul>
                   </div>
               </div>
</nav>