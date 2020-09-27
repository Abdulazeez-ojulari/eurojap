<?php include('function/init.php') ;

if (isset($_POST['item_id']) && $_POST['item_id']!=""){
$item_id = $_POST['item_id'];
$sql = "SELECT * FROM items WHERE item_id = '$item_id'";
    $result = query($sql);
    confirm($result);
    $row = fetch_array($result);
    $item_id = $row['item_id'];
    $name = $row['item_name'];
    $price = $row['item_price'];
    $image = $row['item_image'];
    $cartArray = array(
        $item_id=>array(
        'name'=>$name,
        'item_id'=>$item_id,
        'price'=>$price,
        'quantity'=>1,
        'image'=>$image)
    );

if(!empty($_SESSION['cart'])) {
    $array_keys = array_keys($_SESSION['cart']);
    if(in_array($item_id,$array_keys)) {
        set_message("<p class=bg-success text-center>Product is already added to your cart!</p>");
    } else {
        $_SESSION['cart'] = array_merge($_SESSION['cart'],$cartArray);
        set_message("<p class=bg-success text-center>Product is added to your cart!</p>");
    }
}else{
    $_SESSION['cart'] = $cartArray;
    set_message("<p class=bg-success text-center>Product is added to your cart!</p>");
    }
}

?>
<?php
    require 'top.php';
?>
            <?php
                require 'header.php';
            ?>


            <div id="pager" class="container">
                <ul class="pager">
                    <li class="previous"><a href="#" onclick="goback()"><span class="glyphicon glyphicon-chevron-left"></span>Back</a></li>
                </ul>
            </div>


            <div id="con" class="container">
                <div class="jumbotron">
                    <?php display_message(); ?>
                    <h1>Cway Dispensers</h1>
                    <ol>
                        <li>12 Months Warranty On All Dispensers.</li>
                        <li>Dispensers at Competitive Price</li>
                        <li>Quality and Durable Water Dispensers</li>
                    </ol>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="thumbnail">
                            <a href="dispenser/executive2c.php">
                                <img src="image/executive2c.jpg" alt="Cannon">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Executive 2C</h3>
                                    <p>Price: #34500.00</p>
                                    <?php
                                            if(check_if_added_to_cart("CWM25HC")){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <form method='post' action=''>
                                                  <input type='hidden' name='item_id' value="CWM25HC" />
                                                  
                                                  <button type='submit' class="btn btn-block btn-primary">Add to cart</button>
                                                </form>
                                                <?php
                                            }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="thumbnail">
                            <a href="dispenser/ruby4f.php">
                                <img src="image/ruby4f3.jpg" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ruby 4F</h3>
                                    <p>Price: #52500.00</p>
                                    <?php 
                                            if(check_if_added_to_cart("BYB72")){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <form method='post' action=''>
                                                  <input type='hidden' name='item_id' value="BYB72" />
                                                  
                                                  <button type='submit' class="btn btn-block btn-primary">Add to cart</button>
                                                </form>
                                                <?php
                                            }
                                        
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="thumbnail">
                            <a href="dispenser/arctic1b.php">
                                <img src="image/arctic1b2.jpg" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Arctic 1B</h3>
                                    <p>Price: #58000.00</p>
                                    <?php
                                            if(check_if_added_to_cart("CWM16BLB")){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <form method='post' action=''>
                                                  <input type='hidden' name='item_id' value="CWM16BLB" />
                                                  
                                                  <button type='submit' class="btn btn-block btn-primary">Add to cart</button>
                                                </form>
                                                <?php
                                            }
                                        
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="thumbnail">
                            <a href="dispenser/executive1c.php">
                                <img src="image/executive1c2.jpg" alt="Olympus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Executive 1C</h3>
                                    <p>Price: #38000.00</p>
                                    <?php 
                                            if(check_if_added_to_cart("58B24HL")){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <form method='post' action=''>
                                                  <input type='hidden' name='item_id' value="58B24HL" />
                                                  
                                                  <button type='submit' class="btn btn-block btn-primary">Add to cart</button>
                                                </form>
                                                <?php
                                            }
                                        
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="dispenser/executive2f.php">
                                <img src="image/executive2f.jpg" alt="Titan 301">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Executive 2F</h3>
                                    <p>Price: #52500.00</p>
                                    <?php 
                                            if(check_if_added_to_cart("58B15HL")){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <form method='post' action=''>
                                                  <input type='hidden' name='item_id' value="58B15HL" />
                                                  
                                                  <button type='submit' class="btn btn-block btn-primary">Add to cart</button>
                                                </form>
                                                <?php
                                            }
                                        
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="dispenser/executive3s.php">
                                <img src="image/executive3s.jpg" alt="Titan 201">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Executive 3S</h3>
                                    <p>Price: #47000.00</p>
                                    <?php 
                                            if(check_if_added_to_cart("58B1XH")){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <form method='post' action=''>
                                                  <input type='hidden' name='item_id' value="58B1XH" />
                                                  
                                                  <button type='submit' class="btn btn-block btn-primary">Add to cart</button>
                                                </form>
                                                <?php
                                            }
                                        
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="dispenser/executive5f.php">
                                <img src="image/executive5f.jpg" alt="htm milan">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Executive 5F</h3>
                                    <p>Price: #52500.00</p>
                                    <?php 
                                            if(check_if_added_to_cart("58B22HL")){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <form method='post' action=''>
                                                  <input type='hidden' name='item_id' value="58B22HL" />
                                                  
                                                  <button type='submit' class="btn btn-block btn-primary">Add to cart</button>
                                                </form>
                                                <?php
                                            }
                                        
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="dispenser/ruby2f.php">
                                <img src="image/ruby2fblue.jpg" alt="Favre Leuba">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ruby 2F</h3>
                                    <p>Price: #52500.00</p>
                                    <?php 
                                            if(check_if_added_to_cart("BYB87")){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                               <form method='post' action=''>
                                                  <input type='hidden' name='item_id' value="BYB87" />
                                                  
                                                  <button type='submit' class="btn btn-block btn-primary">Add to cart</button>
                                                </form>
                                                <?php
                                            }
                                        
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="dispenser/ruby3f.php">
                                <img src="image/ruby3f.jpg" alt="Raymond shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ruby 3F</h3>
                                    <p>Price: #47000.00</p>
                                    <?php 
                                            if(check_if_added_to_cart("58B20HL")){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <form method='post' action=''>
                                                  <input type='hidden' name='item_id' value="58B20HL" />
                                                  
                                                  <button type='submit' class="btn btn-block btn-primary">Add to cart</button>
                                                </form>
                                                <?php
                                            }
                                        
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="dispenser/ruby2s.php">
                                <img src="image/ruby2fred.jpg" alt="Raymond shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ruby 2S</h3>
                                    <p>Price: #47000.00</p>
                                    <?php 
                                            if(check_if_added_to_cart("BY87")){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <form method='post' action=''>
                                                  <input type='hidden' name='item_id' value="BY87" />
                                                  
                                                  <button type='submit' class="btn btn-block btn-primary">Add to cart</button>
                                                </form>
                                                <?php
                                            }
                                        
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                   
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="index.php">Eurojap</a> Store. All Rights Reserved.</p>
                   <p>This website is developed by abdulazeez</p>
               </center>
               </div>
           </footer>
        </div>
        <script type="text/javascript">
            function goback(){
                window.history.back();
            }
        </script>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <!-- Latest compiled JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </body>
</html>
