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
                    <div class="company_address">
                        <h1>Eurojap Address</h1>
                                <p>500, Lagos Abeokuta Expressway,</p>
                                <p>Opp. Total Filling Station, Amadiyyah,</p>
                                <p>Lagos State</p>
                        <p>Phone:(+234) 818 123 5504, (+234) 706 478 7402</p>
                        <p>Email: <span>codeprojectsorg@gmail.com</span></p>

                   </div>
                    <h2>Contact Us</h2>
                    <?php contact_form_validation(); ?>
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
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                              <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Subject:</label>
                            <div class="col-sm-10">
                              <textarea name="subject" id="subject" class="form-control"></textarea>
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
