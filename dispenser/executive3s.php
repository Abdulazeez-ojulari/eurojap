<?php include('../function/init.php') ;

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
require '../top2.php';
?>
           <?php
            require '../header2.php';
           ?>

           
            <div id="con" class="container">
                <?php display_message(); ?>
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-5">
                        <div class="thumbnail">
                            <a href="executive3s.php">
                                <img src="../image/executive3s.jpg" alt="Cannon">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Executive 3S</h3>
                                    <p>Price: #60,000.00</p>
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
                    <div class="col-lg-4 col-md-3 col-sm-5">
                        <div class="thumbnail">
                            <h2>Features</h2>
                              <ul class="list-group">
                                <li class="list-group-item">Single door</li>
                                <li class="list-group-item">Sterilizer</li>
                                <li class="list-group-item">Hot/Cold water</li>
                                <li class="list-group-item">Silver</li>
                                <li class="list-group-item">Child lock</li>
                                <li class="list-group-item">Water Tray</li>
                              </ul>
                        </div>
                        
                        <a href="tel:+2348181908138">
                            <!-- <button type="button" class="btn btn-primary"> -->
                                <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-earphone"></span></button>
                                <button type="button" class="btn btn-primary"><span class="badge">Call To Order</span></button>
                            <!-- </button> -->
                        </a>

                    </div>

                </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href="../index.php">Eurojap</a> Store. All Rights Reserved.</p>
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