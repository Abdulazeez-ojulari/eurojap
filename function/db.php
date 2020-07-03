<?php 

$conn = mysqli_connect('localhost', 'root', '', 'eurojap');


function row_count($result){

	return mysqli_num_rows($result);

}


function query($sql){
	global $conn;
	return mysqli_query($conn, $sql);
}

function escape($string){
	global $conn;
	return mysqli_real_escape_string($conn, $string);
}


function fetch_array($result){
	global $conn;
	return mysqli_fetch_array($result);
}


function confirm($result){
	global $conn;
	if (!$result) {
		die("query failed".mysqli_error($conn));
	}
}




 ?>