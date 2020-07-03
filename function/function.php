<?php 


function clean($string){

	return htmlentities($string);
}

function redirect($location){

	return header("location: $location");
}


function set_message($message){

	if (!empty($message)) {
		$_SESSION['message'] = $message;
	}else{
		$message = '';
	}
}

function display_message(){

	if (isset($_SESSION['message'])) {

		echo $_SESSION['message'];

		unset($_SESSION['message']);
	}
}

function token_generator(){

	$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));

	return $token;


}

function validate_error($error){

	$message = <<<DELIMITER
				<div class='alert alert-danger alert-dismissible' role ='alert'>
				<button type = 'button' class='close' data-dismiss='alert' aria-lebel='close'><span aria-hidden='true'>&times</span></button>
				<strong>Warning!</strong>$error
				</div>
DELIMITER;
				echo $message;

}



function email_exist($email){

	$sql = "SELECT id FROM user WHERE email = '$email'";
	$result = query($sql);

	if (row_count($result) == 1) {
		return true;
	}else{
		return false;
	}


}

function username_exist($username){

	$sql = "SELECT id FROM user WHERE username = '$username'";
	$result = query($sql);

	if (row_count($result) == 1) {
		return true;
	}else{
		return false;
	}


}

function send_email($to, $subject, $message, $header){


	return mail($to, $subject, $message, $header);
}




/*********************validate service_booking function*****************************/

function service_booking_registertion(){


	$errors = [];
	

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

	

		if (empty($_POST['name'])) {
			$errors[] ="Name is required";
		}else {
		   	$name = clean($_POST['name']);
		}

		if (empty($_POST['email'])) {
			$errors[] ="Email is required";
		}else {
		   	$email = clean($_POST['email']);
		}

		if (empty($_POST['address'])) {
			$errors[] ="Address is required";
		}else {
		   	$address = clean($_POST['address']);
		}

		if (empty($_POST['number'])) {
			$errors[] ="Phone Number is required";
		}else {
		   	$number = $_POST['number'];
		}


		if ($_POST['sev'] == "Repair only" or $_POST['sev'] == "Servicing and repair only" ) {
			if (empty($_POST["complaint"])){
				$errors[] = "Complaint is required";

			}else{
				$complaint = clean($_POST["complaint"]);
			}
			$service = $_POST['sev'];
		}else {

		   	$service = $_POST['sev'];
		}

		if (empty($_POST['hmservice'])) {
			$_POST['hmservice'] = 'No';
			$hmservice = $_POST['hmservice'];
		}else {
		   	$hmservice = $_POST['hmservice'];
		}


		if (!empty($errors)) {

			foreach ($errors as $error) {
				
				validate_error($error);

			}
		}else{
			if(service_booking($name, $complaint, $email, $address, $number, $service, $hmservice)){
 
				set_message("<p class='bg-success text-center'>Your service has been booked.</p><p class='bg-success text-center'>We would give you feedback within the next 24 hours </p>");
			redirect('repair.php');

			}else{

			set_message("<p class='bg-danger text-center'>sorry your service has not been booked </p><p class='bg-danger text-center'>Try Again</p>");

			redirect('service.php');
			}

		}


	}



}


/*********************service booking function*****************************/

function service_booking($name, $complaint, $email, $address, $number, $service, $hmservice){


		$email 					= escape($_POST['email']);
		

		$sql = "INSERT INTO sevicing(service_name, service_email, service_phone, service_address, complaint, homeService, service) VALUE('$name','$email', '$number', '$address', '$complaint', '$hmservice', '$service') " ;

		$result = query($sql);
		confirm($result);


		$to = 'eurojap@gmail.com';

		$subject = 'Service Booking';

		$headers = "FROM: norreply@eurojap.com \r\n";


		$message = '<html><body>';
		$message .= '</body></html>';

		$message = '<html><body>';
		$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
		$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . escape($_POST['name']) . "</td></tr>";
		$message .= "<tr><td><strong>Email:</strong> </td><td>" . escape($_POST['email']) . "</td></tr>";
		$message .= "<tr><td><strong>Phone Number:</strong> </td><td>" . escape($_POST['number']) . "</td></tr>";
		$message .= "<tr><td><strong>Address:</strong> </td><td>" . escape($_POST['address']) . "</td></tr>";
		$message .= "<tr><td><strong>Home Service:</strong> </td><td>" . escape($_POST['hmservice']) . "</td></tr>";
		$message .= "<tr><td><strong>Type of Service:</strong> </td><td>" . escape($_POST['sev']) . "</td></tr>";
		$message .= "<tr><td><strong>Nature of Complaint:</strong> </td><td>" . escape($_POST["complaint"]) . "</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";


		send_email($to, $subject, $message, $header);

		return true;



		/*$subject = "Activate account";
		$msg = "please click the link below to activate your account
		http://localhost/activate.php?email=$mail&code=$validation_code
		";
		$header = "FROM: norreply@youwebsite.com";


		send_email($email, $subject, $msg, $header);

		return true;*/

	
}


/*********************validate service_booking function*****************************/

function contact_form_validation(){


	$errors = [];
	

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

	

		if (empty($_POST['name'])) {
			$errors[] ="Name is required";
		}else {
		   	$name = clean($_POST['name']);
		}

		if (empty($_POST['email'])) {
			$errors[] ="Email is required";
		}else {
		   	$email = clean($_POST['email']);
		}

		if (empty($_POST['subject'])) {
			$errors[] ="Subject is required";
		}else {
		   	$subject = clean($_POST['subject']);
		}

		if (empty($_POST['number'])) {
			$errors[] ="Phone Number is required";
		}else {
		   	$number = $_POST['number'];
		}


		
		if (!empty($errors)) {

			foreach ($errors as $error) {
				
				validate_error($error);

			}
		}else{
			if(contact_form($name, $email, $number, $subject)){
 
				set_message("<p class='bg-success text-center'>Your message has been sent.</p><p class='bg-success text-center'>We would give you feedback within the next 24 hours </p>");
			redirect('repair.php');

			}else{

			set_message("<p class='bg-danger text-center'>Sorry your message was not sent</p><p class='bg-danger text-center'>Please try Again</p>");

			redirect('contact.php');
			}

		}


	}



}


/*********************service booking function*****************************/

function contact_form($name, $email, $number, $subject){


		$email 					= escape($_POST['email']);
		

		$sql = "INSERT INTO contact(contact_name, contact_email, contact_number, subject) VALUE('$name','$email', '$number', '$subject') " ;

		$result = query($sql);
		confirm($result);


		$to = 'eurojap@gmail.com';

		$subject = 'Contact us page';

		$headers = "FROM: norreply@eurojap.com \r\n";


		$message = '<html><body>';
		$message .= '</body></html>';

		$message = '<html><body>';
		$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
		$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . escape($_POST['name']) . "</td></tr>";
		$message .= "<tr><td><strong>Email:</strong> </td><td>" . escape($_POST['email']) . "</td></tr>";
		$message .= "<tr><td><strong>Phone Number:</strong> </td><td>" . escape($_POST['number']) . "</td></tr>";
		$message .= "<tr><td><strong>Nature of Complaint:</strong> </td><td>" . escape($_POST["subject"]) . "</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";


		send_email($to, $subject, $message, $header);

		return true;



		/*$subject = "Activate account";
		$msg = "please click the link below to activate your account
		http://localhost/activate.php?email=$mail&code=$validation_code
		";
		$header = "FROM: norreply@youwebsite.com";


		send_email($email, $subject, $msg, $header);

		return true;*/

	
}



/*********************validate order_booking function*****************************/

function order_booking_registertion(){


	$errors = [];
	

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

	

		if (empty($_POST['name'])) {
			$errors[] ="Name is required";
		}else {
		   	$name = clean($_POST['name']);
		}

		if (empty($_POST['email'])) {
			$errors[] ="Email is required";
		}else {
		   	$email = clean($_POST['email']);
		}

		if (empty($_POST['address'])) {
			$errors[] ="Address is required";
		}else {
		   	$address = clean($_POST['address']);
		}

		if (empty($_POST['number'])) {
			$errors[] ="Phone Number is required";
		}else {
		   	$number = $_POST['number'];
		}


	


		if (!empty($errors)) {

			foreach ($errors as $error) {
				
				validate_error($error);

			}
		}else{
			if(order_booking($name, $email, $address, $number)){
 
				set_message("<p class='bg-success text-center'>Your order has been booked.</p><p class='bg-success text-center'>We would give you a feedback within the next 24 hours </p>");

			redirect('cart.php');
			unset($_SESSION['cart']);

			}else{

			set_message("<p class='bg-danger text-center'>Sorry we could not place your order</p><p class='bg-danger text-center'>Try Again</p>");

			redirect('cart.php');
			}

		}


	}



}


/*********************order booking function*****************************/

function order_booking($name, $email, $address, $number){
			session_start();
		if (!empty($_SESSION['cart'])) {
			$session=session_id();

		$email 					= escape($_POST['email']);
		

		$sql = "INSERT INTO orders(user_id, order_name, order_email, order_phone, order_address, order_date) VALUE('$session', '$name','$email', '$number', '$address', now()) " ;

		$result = query($sql);
		confirm($result);


		$to = 'eurojap@gmail.com';

		$subject = 'Order Booking';

		$headers = "FROM: norreply@eurojap.com \r\n";


		$message = '<html><body>';
		$message .= '</body></html>';

		$message = '<html><body>';
		$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
		$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . escape($_POST['name']) . "</td></tr>";
		$message .= "<tr><td><strong>Email:</strong> </td><td>" . escape($_POST['email']) . "</td></tr>";
		$message .= "<tr><td><strong>Phone Number:</strong> </td><td>" . escape($_POST['number']) . "</td></tr>";
		$message .= "<tr><td><strong>Address:</strong> </td><td>" . escape($_POST['address']) . "</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";


		send_email($to, $subject, $message, $header);




		 foreach ($_SESSION['cart'] as $key) {
		 	$item_id = $key["item_id"];
			$quantity =  $key["quantity"];	 	
		 	$session = session_id();
		    $sql = "SELECT * FROM items WHERE item_id = '$item_id'";
		    $result = query($sql);
		    confirm($result);
		    $row = fetch_array($result);




		    $item_id = $row['item_id'];
		    $item_name = $row['item_name'];
		    $price = $row['item_price'];

		    $to = 'eurojap@gmail.com';

			$subject = 'Order Booking';

			$header = "FROM: norreply@eurojap.com \r\n";


			$message = '<html><body>';
			$message .= '</body></html>';

			$message = '<html><body>';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>S/N</strong> </td><td>  echo $i  </td></tr>";
			$message .= "<tr style='background: #eee;'><td><strong>Item_Id</strong> </td><td> echo $item_id </td></tr>";
			$message .= "<tr><td><strong>Item_Name</strong> </td><td> echo $nam </td></tr>";
			$message .= "<tr><td><strong>Price</strong> </td><td> echo $price </td></tr>";
			$message .= "<tr><td><strong>Quantity</strong> </td><td> echo $quantity </td></tr>";
			$message .= "</table>";
			$message .= "</body></html>";

			$sql = "INSERT INTO user_carts (user_id, user_name, user_email, user_items, item_name, quantity, price, order_date) VALUES ('$session', '$name', '$email', '$item_id', '$item_name', '$quantity', '$price', now())";
			$result = query($sql);
		    confirm($result);
            
 
		    
		    if (!send_email($to, $subject, $message, $header)) {
					
					echo validate_error("email could not be sent");
				}else{
					set_message("<p class='bg-success text-center'>Message sent.</p>");
				}


    		} 
		

		return true;
}


		/*$subject = "Activate account";
		$msg = "please click the link below to activate your account
		http://localhost/activate.php?email=$mail&code=$validation_code
		";
		$header = "FROM: norreply@youwebsite.com";


		send_email($email, $subject, $msg, $header);

		return true;*/

	
}

/*********************cart add function*****************************/

function check_if_added_to_cart($item_id){
if (!empty($_SESSION['cart'])) {
	$array_keys = array_keys($_SESSION['cart']);
    if(in_array($item_id,$array_keys)) {
		return true;
	}else{
		return false;
	
	}
}else{
	$_SESSION['cart'] = "";
}


	/*$sql = "SELECT * FROM users_items where item_id ='$item_id' and status ='Added to cart'";
	$result = query($sql);
	confirm($result);
        
    if (row_count($result) == 1) {
       	return 1;
        
    }else{
    	return 0;
    }*/
}



    





 ?>














