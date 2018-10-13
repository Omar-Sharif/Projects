<html>
<head>
    <link rel="stylesheet" type="text/css" href="personal_information.css">
    <link rel="stylesheet" type="text/css" href="css/lib/w3.css">
    <link rel="stylesheet" href="css/cdnjs.cloudflare.com/ajax/libs/font-awesome/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css">
    <script type="text/javascript" src="js/notify.js"></script>
     <script type="text/javascript" src="js/notify.min.js"></script>
</head>

<?php
	echo 1;
	if(isset('update_contact_information')){
		$conn=mysqli_connect("localhost", "root", "", "cse1to4");
		$pnum=$_POST["phone_number"];
		$address=$_POST["address"];
		if(strlen($pnum)>0 or strlen($address)){
			$sql="UPDATE user_information SET phone_number=$pnum, address='address' WHERE user_name='omar_sharif'";
			$rslt=mysqli_query($conn,$sql);
			echo "<script type='text/javascript'>$.notify('Your Contact has been Updated..','success')</script>";
		}
		else{
			echo "<script type='text/javascript'>$.notify('Modify Contact Information','warn')</script>";
		}
	}

?>
	
</html>