<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- <HTML>
   <HEAD>

   $message='<img src="userQr/<?php echo $row["qrImg"]; ?>" >' ;
			echo $message;
   
   <SCRIPT language=Javascript>
      
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      
   </SCRIPT>
   </HEAD>
   <BODY>
      <INPUT id="txtChar" onkeypress="return isNumberKey(event)" type="text" name="txtChar" maxlength="10">
   </BODY>
</HTML>//-->

<form action="search.php" method="POST" >
	Enter UiD = <input type="text" name="search">
	<br><br>

	<input type="Submit" name="Submit" value="Search Data and Send Mail">

 	<br>
</form>
</body>
</html>
<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$database="howtoqr";
	
	$conn=mysqli_connect($servername,$username,$password,$database);
	
	if(!$conn)
	{
		echo "Server Error. Connection Cannot be established" . mysqli_connect_error();
	}
	if(isset($_POST['Submit']))
	{	
	$uid=$_POST['search'];
	$sql="SELECT * FROM qrcodes WHERE qrUid='$uid' ";
	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) > 0)
	{
		while ($row=mysqli_fetch_assoc($result))
		{
			echo "<br>- 	<b>College Name: </b>".$row["qrCollege"];
			echo " <br>- <b>Name: </b>" . $row["qrName"] ;
			?>
			<br><br>
			<b>QR Code:&nbsp;&nbsp;</b><img src="userQr/<?php echo $row['qrImg']; ?>" > <!-- 	height="auto" width="150px" -->
			<br>
			<?php 
			//echo "<br>".$row["qrImg"] ;  
			//echo " <br>- Image Link/ Location: " . $row["qrlink"] ;
			echo " <br>- <b>Email:  </b>" . $row["qrEmail"] ;
			echo " <br>- <b>Contact:  </b>" . $row["qrContact"] ; 
			echo " <br>- <b>Branch:  </b>" . $row["qrBranch"] ;
			echo " <br>- <b>Year:  </b>".$row['qrYear'] ; 
			echo " <br>- <b>qrUid:  </b>".$row["qrUid"];
			
			$to=$row["qrEmail"];	
			$subject="E-Conclave Registration by E-CELL, SKNCOE, Pune";
			
			$var1='<img src="'.'userQr/'.$row['qrImg'].'">';
			echo "<br><br>QR code fetched from variable=".$var1;

		    
			$header="From : krishnaramchandanirk@gmail.com";
			if( mail($to, $subject, $var1, $header) )
			{
			echo "Mail Sent Successfully!!";
			}
			else
			{
			echo "Mail Server is not Connected !";
			}
		}
	}
	else
	{
		echo "<font color='red'>Data of ID $uid Not Found!</font>";
	}
	}
	

	 
	mysqli_close($conn);
?>
  