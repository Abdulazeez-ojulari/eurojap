<?php
include('function/init.php');
    require 'top.php';
?>

           <?php
            require 'header.php';
           ?>


           <div id="co" class="container">
           
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                  <div class="item active">
                    <img src="image/erujap_free_cway2.jpg" alt="Los Angeles">
                    <!-- <div class="carousel-caption">
                      <h3>Los Angeles</h3>
                      <p>LA is always so much fun!</p>
                    </div> -->
                  </div>

                  <div class="item">
                    <img src="image/dispenserbg.jpg" alt="Chicago" >
                    <div class="carousel-caption">
                      <h3>DCDE SERVICE</h3>
                      <p>(Dispenser Disinfecting & Cleaning Service )</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="image/drinks.jpg" alt="Chicago" >
                    <div class="carousel-caption">
                      <h3>Cway Drinks</h3>
                      <p>Call any of our numbers to order for your drinks</p>
                    </div>
                  </div>
                
                  
              
                </div>

                <!-- Left and right controls -->
                <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a> -->
              </div>
            </div>
          <!--  <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell .</h1>
                       <p>Flat 40% OFF on all premium brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div> -->
           <div class="container" style="margin-top: 6vh">
               <div class="row">
                   <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <a href="dispenser.php">
                                <img src="image/dispensercon.jpg" alt="Titan 201">
                            
                            <center>
                                <div class="caption">
                                    <p id="autoResize">Cway Dispensers</p>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </center>
                            </a>
                        </div>
                    </div>
                   <div class="col-md-4 col-sm-6">
                       <div class="thumbnail">
                           <a href="emptybottle.php">
                               <img src="image/emptybottle.jpg" alt="Watch">
                           
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Empty Bottles And Caps</p>
                                    <p>New Dispenser empty bottles with caps.</p>
                                </div>
                           </center>
                           </a>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-6">
                       <div class="thumbnail">
                           <a href="repair.php">
                               <img src="image/repair.png" alt="Shirt">
                           
                           <center>
                               <div class="caption">
                                   <p id="autoResize">DCDE SERVICE</p>
                                   <p>(Disinfecting Service & Dispenser Cleaning )</p>
                               </div>
                           </center>
                           </a>
                       </div>
                   </div>
               </div>
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