<?php


include ('db.php');

			
			$id =$_GET['eid'];		
			$newsql ="DELETE FROM `payment` WHERE id ='$id' ";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("delete success...") </script>';
				}
			header("Location: payment.php");
		
?>


