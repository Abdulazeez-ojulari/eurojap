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


            <div id="con" class="container">
                <div class="jumbotron">
                    <?php display_message(); ?>
                    <h1>Eurojap Dispensers Disinfecting and Cleaning Service</h1>
                    <ol>
                        <li>Disinfect and Clean Dispenser at least once in every 3 months to keep your machine hygienic for use.</li>
                        <li>Switch off Dispenser. if water is exhausted</li>
                    </ol>
                    <h2>General Services(Disinfecting Service)</h2>
                    <p>The importance of disinfecting services of your water dispenser cannot be over emphasized.</p>
                    <p>The hygenic level your water dispenser is as important as your drinking water, Therefore because of our commitment to <strong>Total Quality Service(QTS)</strong> to all our clients we introduce <strong>Dispenser Cleaning and Disinfecting Equipments(DCDE)</strong> to ensure safe hygenic condition of your water dispenser through a professional process.</p>

                    <p>The machine employs the usage of harmless special chemical formulation,capable of dissolving and disinfecting harmful substances that might be locked up within the interior and the peripheral part of your water dispensing maching. This activity is called general servicing which includes flushing, steaming and sterilization with ozone.</p>


                    <h2>Categories</h2>

                    <ol>
                        <li>Individual Service.</li>
                        <li>Cooperate Service.</li>
                    </ol>

                    
                   <p class="pbook">Click for <a href="service.php"><button type="button" class="btn btn-primary"><span class="badge">Service booking</span></button></a> and call for enquiry: 0706 478 7402, 0818 123 5504</p>
                   
                
                </div>

            </div>



            <div class="container"">
                
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
