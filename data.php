<?php
	$name = $_POST['Name'];
	$email = $_POST['Email'];
	$input_date = $_POST['DOB'];
	//$DOB = date("Y-m-d",strtotime($input_date));
	echo $name." ".$email." ".$input_date;
		//db connection
		$connect = new mysqli('localhost','root','','empolyee');
		
		if($connect->connect_error){
			die('Connection Failed :'.connect_error);
		}
		
		$data = "INSERT INTO registration(Name, Email, DateOfBirth) VALUES('$name', '$email', '$input_date')";
		$res = mysqli_query($connect, $data);
		if($res==true) {
			echo "data inserted sucessfully.";
			
		}
		else {
			exit ("error in data inserting.");
		}
?>