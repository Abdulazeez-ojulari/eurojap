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
                    <h3>Please fill this form to place order for servicing or repairing of dispenser</h3>
                    <?php service_booking_registertion(); ?>
                    <form class="form-horizontal" method="post" id="myForm">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Name:</label>
                            <div class="col-sm-10">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="number">Phone Number:</label>
                            <div class="col-sm-10">
                              <input type="text" name="number" class="form-control" id="number" placeholder="Enter number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="address">Address:</label>
                            <div class="col-sm-10">
                              <input type="address" name="address" class="form-control" id="address" placeholder="Enter address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                              <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="hmservice">Home Service:</label>
                            <div class="col-sm-10">
                                 <label class="radio-inline"><input type="radio" name="hmservice" value="yes">Yes</label>
                                <label class="radio-inline"><input type="radio" name="hmservice" value="no">No</label>
                            </div>
                        </div>
                        <div class="form-group" >
                            <label class="control-label col-sm-2" for="sev">Type of Service:</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="sev" id="sev">
                                    <option value="Repair only">Repair only</option>
                                    <option value="Servicing only">Servicing only</option>
                                    <option value="Servicing and repair only">Servicing and repair only</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="complaint" style="display: none;">
                            <label class="control-label col-sm-2" for="complaint">Nature of Complaint:</label>
                            <div class="col-sm-10" id="complaint">
                              <input type="text" name="complaint" class="form-control" id="complaint" placeholder="Enter your complaint">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-primary" onclick="submit()">Submit</button>
                            </div>
                        </div>
                    </form>
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
        <script type="text/javascript">
            $(document).ready(function (){
                $("#complaint").show();
                $("#sev").change(function() {
                    // foo is the id of the other select box 
                    if ($(this).val() == "Repair only") {
                        $("#complaint").show();

                    }else if ($(this).val() == "Servicing and repair only") {
                        $("#complaint").show();

                    }else if ($(this).val() == "Servicing only") {
                        $("#complaint").hide();

                    }
                });
            });
        </script>
    </body>
</html>
