<?php
	
	if( isset($_REQUEST['submit'])){
		$uname = $_REQUEST['uname'];
		$date= $_REQUEST['date'];
		$uid = $_REQUEST['uid'];
		$email = $_REQUEST['email'];
		$gender	=$_REQUEST['gender'];
		
		
		
		if(empty(trim($uname))){
			echo "<b>Name:</b>";
			echo "Null submission found!<br>";
		}
		
			
		else
		{echo "<b>Name:</b>";
			echo $uname."<br>";
		}
		
		if(empty(trim($gender))){
			echo "<b>Gender:</b>";
			echo "Null submission found!<br>";
		}
		else
		{
			echo "<b>Gender:</b>";
			//echo $gender.<br>;
		}
		
	if(empty(trim($date)))
	{
		echo "<b>Date:</b>";
		echo "Null submission found!<br>";
	}
	else{
		echo "<b>Date:</b>";
		echo $date."<br>";

	}
	if(empty(trim($uid))){
			echo "<b>Id:</b>";
			echo "Null submission found!<br>";
		}
		else{
			
			echo "<b>ID:</b>";
			echo $uid."<br>";
		}
		if(empty(trim($date)))
	{
		echo "<b>Date:</b>";
		echo "Null submission found!<br>";
	}
	else
	{
		
			echo "<b>Email:</b>";
			echo $email."<br>";
		
	}
	}
	
	
	
	
		 
	
?>