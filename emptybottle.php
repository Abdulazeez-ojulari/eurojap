<?php
include('function/init.php');
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
           
            <div id="con" class="container" >
                <div class="row">
                    <!-- <div class="col-lg-4 col-md-3 col-sm-5">
                        <div class="thumbnail">
                            <a href="executive2c.php">
                                <img src="../image/executive2c.jpg" alt="Cannon">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Executive 2C</h3>
                                    <p>Price: #36000.00</p>
                                    <?php
                                            if(check_if_added_to_cart("CWM25HC")){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="../cart_add.php?id=CWM25HC" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <li class="list-group-item">Hot/Warm/Cold water</li>
                                <li class="list-group-item">Water tray</li>
                                <li class="list-group-item">3 nozzle outlets</li>
                              </ul>
                        </div>
                        
                        <a href="tel:+2348181908138">
                             <button type="button" class="btn btn-primary"> -->
                                <!-- <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-earphone"></span></button>
                                <button type="button" class="btn btn-primary"><span class="badge">Call To Order</span></button> -->
                            <!-- </button> -->
                        <!-- </a>

                    </div>

                </div>  -->
           </div>
            <br><br> <br><br><br><br>
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