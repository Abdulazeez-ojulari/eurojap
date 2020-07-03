<?php
require 'function/db.php';
    session_start();


// capture the sent value from tag and echo back
    $request = $_POST['quantity'];
    // code to act on the $request
    // echo back to the calling page
    $qtys = [];
    $qtys[]  = $_POST['quantity'];
    



if (!empty($qtys)) {

			foreach ($qtys as $qty) {
				
				validate_error($qty);

			}
		}else{
			foreach ($qtys as $qty) {
				$sql = "INSERT INTO user_carts set quantity = $qty ";
				$result = query($sql);
				confirm($result);
			}
		}

?>