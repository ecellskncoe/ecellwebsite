<!DOCTYPE html>
<html>
<head>
  <title>SKNCOE E-Conclave</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="It's Free Online QR Code Generator to make your own QR Codes.No sign-up required. Create unlimited non-expiring free QR codes for a website URL, YouTube video etc.">

<meta name="keywords" content="qr code,QR CODE,QR,CODE,HTML, CSS, XML, JavaScript,php,mysql,bootstrap">

 

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit]{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    text-align: auto;
    text-decoration: none;

}


input[type=submit]:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
     /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
#qrSucc
{
  width: 90%;
  margin:  auto;
  text-align: center;
}
#qrSucc a
{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    text-align: center;
    text-decoration: none;
}
</style>
</head>
<body>
    <?php 
    $servername="localhost";
    $username="root";
    $password="";
    $db="howtoqr";
    $conn = mysqli_connect($servername,$username,$password,$db);

  include "meRaviQr/qrlib.php";
  include "config.php";
  if(isset($_POST['create']))
  {
    $query=mysqli_query($conn,'SELECT qrEmail from qrcodes');
    $check=mysqli_fetch_all($query,MYSQLI_ASSOC);

    $qc =  mysqli_real_escape_string($conn,$_POST['qrContent']);
    $qrUname = mysqli_real_escape_string($conn,$_POST['qrUname']);
    $qrEmail = mysqli_real_escape_string($conn,$_POST['qrEmail']);

    $qrImgName = "QRcode".rand();
    if($qc=="" && $qrUname=="")
    {
      echo "<script>alert('Please Enter Your Name And College Name For QR Code');</script>";
    }
    elseif($qc=="")
    {
      echo "<script>alert('Please Enter Name for QR Code');</script>";
    }
    elseif($qrUname=="")
    {
      echo "<script>alert('Please Enter Your College Name');</script>";
    }
    elseif($qrEmail == $check)
    {
      echo "<script>alert('E-mail ID Already Exists');</script>";
    }
    else
    {
    $dev = " QR code Ready . $qrUname";
    $final = $qc.$dev;
    $qrs = QRcode::png($final,"userQr/$qrImgName.png","H","3","3");
    $qrimage = $qrImgName.".png";
    $workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode".$qrImgName.".png";
    
       
    $qrContact = mysqli_real_escape_string($conn,$_POST['qrContact']);
    $qrBranch = mysqli_real_escape_string($conn,$_POST['qrBranch']);
    $qrYear = mysqli_real_escape_string($conn,$_POST['qrYear']);
    $qrUid = mysqli_real_escape_string($conn,$_POST['qrUid']);

    $insQr = $qrvar->insertQr($qrUname,$final,$qrimage,$qrlink,$qrEmail,$qrContact,$qrBranch,$qrYear,$qrUid);
    if($insQr==true)
    {
      echo "<script>alert('Thank You for Registration. $qc. '); window.location='index.php?success=$qrimage';</script>";

    }
    else
    {
      echo "<script>alert('cant create QR Code');</script>";
    }
  }
 }
  ?>
  <?php 
  if(isset($_GET['success']))
  {
  ?>
  <div id="qrSucc">
  <div class="modal-content animate container">
    <?php 
    ?>
 
    <!--<img src="userQr/<?php echo $_GET['success']; ?>" alt="">
    <?php 
$workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode/userQr/".$_GET['success'];
    ?>-->
     
    <!--<input type="text" value="<?php echo $qrlink; ?>" readonly>-->

    <br><br>
<!--<a href="download.php?download=<?php echo $_GET['success']; ?>">Download Now</a>-->
<br>
 <br><br>
    <a href="#">Thank You! for Registration. Please be present with your College ID or Fee Receipt on 23rd and 24th September @ #, for verification.</a>
    
     </div></div>
  <?php
}
else
{
  ?>
<div id="id01" class="modal">
 
  <script>
function validateForm() {
  var x = document.forms["registration"]["qrEmail"].value;
  var atpos = x.indexOf("@");
  var dotpos = x.lastIndexOf(".");
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
    alert("Entered E-mail Address is Not Valid. Please Enter Valid E-mail Address.");
    return false;
  }
}
</script>

  <form class="modal-content animate" method="post" name="registration" enctype="multipart/form-data" onsubmit="return validateForm();">
    <div class="container">
      <h2 align="center">Register here for E-Conclave</h2>
      <label for="uname"><b>Enter College Name <font color="red">*</font></b></label>
      <input type="text" name="qrUname" value="<?php if(isset($_POST['create'])){ echo $_POST['qrUname']; } ?>" required="">
<!-- Contact, Email Id, Branch, Year -->
      <label for="psw"><b> Enter Your Name <font color="red">*</font></b></label>
      <input type="text" name="qrContent" required="" value="<?php if(isset($_POST['create'])){ echo $_POST['qrContent']; } ?>">
     
     <label for="psw"><b> Enter Your E-mail Id <font color="red">*</font></b></label>
      <input type="text" name="qrEmail" required=""  >
      
      <!-- value="<?php if(isset($_POST['create'])){ echo $_POST['qrEmail']; } ?>" -->
       <SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      function isCharacterKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode < 31 && (charCode > 48 || charCode < 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

     <label for="psw"><b> Enter Your Contact Number <font color="red">*</font></b></label>
<input type="text" name="qrContact" maxlength="10" onkeypress="return isNumberKey(event)" required="" value="<?php if(isset($_POST['create'])){ echo $_POST['qrContact'];} ?>">
          
    <label for="psw"><b> Enter Your Branch <font color="red">*</font></b></label>
      <input type="text" name="qrBranch" maxlength="50" onkeypress="return isCharacterKey(event)" required="" value="<?php if(isset($_POST['create'])){ echo $_POST['qrBranch']; } ?>">
    
    <label for="psw"><b>Select Your Current Studying Year <font color="red">*</font></b></label>
    <select name="qrYear" required="">
      <option>--Select Year--</option>
      <option value="First_Year">First Year</option>
      <option value="Second_Year">Second Year</option>
      <option value="Third_Year">Third Year</option>
      <option value="Last_Year">Last Year</option>
    </select>
<br><br>
      

    <label for="psw"><b> Enter Unique ID or College Fee Receipt Number <font color="red">*</font></b></label>
    <input type="text" name="qrUid" required="" value="<?php if(isset($_POST['create'])){ echo $_POST['qrUid']; } ?>">
     
      <input type="reset" name="reset" value="reset">        
      <center><input type="submit" value="Register for E-Conclave" name="create"></center>
    
    </div>
  </form>
    <?php 
}
   ?>
</div>

</body>
</html>
