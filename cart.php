<?php include('function/init.php') ;

 $status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION['cart'])) {
	foreach($_SESSION['cart'] as $key => $value) {
		if($_POST["item_id"] == $key){
		unset($_SESSION['cart'][$key]);
		set_message("<p class=bg-success text-center>Product is removed from your cart!</p>");
		}
		if(empty($_SESSION['cart'])){
		unset($_SESSION['cart']);
			}		
		}
}

}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION['cart'] as &$value){
    if($value['item_id'] === $_POST["item_id"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
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
                <?php display_message(); 

                if (!empty($_SESSION['cart'])) {
                	$total_price = 0;

                ?>

                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Item Id</th>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Unit Cost(#)</th>
                            <th>Total(#)</th>
                            <th></th>
                        </tr>
                    </thead>
                       <?php 
                        
                        $sum=0;
						$i=1;

							foreach ($_SESSION['cart'] as $product){
						?>      
						    <tbody>
						        <tr>
						            <th><?php echo $i ?></th>
						            <th><?php echo $product["item_id"];?></th>
						            <th><?php echo $product["name"];?></th>
						            <th>
						            	<form method='post' action=''>
											<input type='hidden' name='item_id' value="<?php echo $product["item_id"]; ?>" />
											<input type='hidden' name='action' value="change" />
											<select name='quantity' style="width: 10vw;" class='quantity' onchange="this.form.submit()">
											<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
											<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
											<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
											<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
											<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
											</select>
										</form>
						            </th>
						            <th><?php echo "#".$product["price"];?></th>
						                            
						            <th><?php echo "#".$product["price"]*$product["quantity"];?></th>
						            <th>
						            	<form method='post' action=''>
											<input type='hidden' name='item_id' value="<?php echo $product["item_id"]; ?>" />
											<input type='hidden' name='action' value="remove" />
											<button type='submit' class='remove'>Remove Item</button>
										</form>
						            </th>
						        </tr>
						    </tbody>
						<?php 
						    $total_price += ($product["price"]*$product["quantity"]);
						    $i++; 
						    } 
						?>

						<tfoot>
					    <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Grand Total</th>
                            <th><?php echo "#".$total_price;?>/-</th>
                            <?php

                        
                        $sum=0;
						$i=1;
							$item_id = $product["item_id"];

						    $sql = "SELECT * FROM items WHERE item_id = '$item_id'";
						    $result = query($sql);

                                            if($result != null){
                                                echo '<th class="comfirm"><a href="order.php" class="btn btn-primary">Comfirm Order</a></th>';
                                            }
                                        
                                    
                                        ?>
                           
                        </tr>
                    </tfoot>
                </table>
                <?php
            		}else{
           		 ?>

           		 <p class='bg-default text-center'>No items in the cart!!</p>
           		 <p class='bg-default text-center'><a href="dispenser.php" class="btn btn-info" role="button">Continue Shopping</a></p>
           		 <?php
           		}
           		?>

            </div>


            <br><br><br><br><br><br><br><br><br><br>


            <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="index.php">Eurojap</a> Store. All Rights Reserved.</p>
                   <p>This website is developed by abdulazeez</p>
               </center>
               </div>
           </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
        
<script>
	
	/*$(document).ready(function() {*/
    // jQuery methods go here...
	    /*var $tblrows = $("#table tbody tr");
		$tblrows.each(function (index) {
		    var $tblrow = $(this);
		    $tblrow.find(".quantity").on("change", function () {
	 
			var qty = $tblrow.find("[name=quantity]").val();

			var price = $tblrow.find("#price").html();
			
			var subTotal = parseInt(qty,10) * parseFloat(price);
			console.log(subTotal);
	 
			    if (!isNaN(subTotal)) {
			 
			    $tblrow.find(".total").html(subTotal.toFixed(2));
			    var grandTotal = 0;
			 
			    $(".total").each(function () {
			        var stval = parseFloat($(this).html());
			        grandTotal += isNaN(stval) ? 0 : stval;
			    });
			 
			    $("#Grand").html(grandTotal.toFixed(2));
			}

			});
		});
	});*/
</script>

        
        <script type="text/javascript">

            function goback(){
                window.history.back();
            }
        </script>
        <!-- <script type="text/javascript">
            $(document).ready(function(){
                $("p").on({
                    mouseenter: function(){
                        $(this).css("background-color", "pink");
                    },

                    mouseleave: function(){
                        $(this).css("background-color", "yellow");
                    },

                    click: function(){
                        $(this).css("background-color", "cyan");
                    }
                });

                $("#hidden").click(function(){
                    $("p").hide(1000);
                });

                $("#show").click(function(){
                    $("p").show(1000);
                });

                $(function(){
                    $(".accod").accordion()
                })
            });
        </script> -->
        <!-- jQuery library -->
        
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
    </body>
</html>
