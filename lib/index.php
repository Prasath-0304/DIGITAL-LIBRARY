<?php
include("conn.php");

$error="";
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))
{  
   $count=0;
   $data=mysqli_query($conn,"select * from student_registration where emailid='$_POST[username]' && password='$_POST[password]'");
   $count=mysqli_num_rows($data);
   $row = mysqli_fetch_array($data);
   
   if($count==0)
   {
      $error= "Invalid username or password";
   }
   
else 
    
    
{
        if($row["type"]=="admin")
         {
          header("Location:admindas.php"); 
         }
       else{
           $_SESSION["sname"]=$row["name"];
           $_SESSION["semail"]=$row["emailid"];
           $_SESSION["sgender"]=$row["gender"];
           header("Location:sdb.php");
           }
}
   
}

 
?>

<!DOCTYPE html>
<html>

<head><title>HOME PAGE</title></head>
    
<style>
body{
  background: url(backforall.jpg);
}
  .box{
    width:74%;
    height:170px;
	
     border:solid 1px #000000;
    background-image: url("headback2.jpg");
    background-size: cover;
    margin-left: 13%;
    opacity: .9;
    border-radius:12px;
    box-shadow: black;

  }
  .boxtwo{
    background-image: url("headback2.jpg");
    background-size: cover;
    box-shadow: black;
    border-radius:20px;
    border:solid 1px #000000;
  }

.five{
  padding:10px 0px 10px 10px;
  margin-top: 30px;
  margin-left: 55%;
  border-radius:12px;
  margin-right: 5%;
  box-shadow: black;
  font-size:25px;
  border:solid 1px #000000;

}
   .five input[type="submit"]
          {

		    font-size:22px;
		    text-align:center;
			border:none;
			height:40px;
			margin-left:90% ;
            margin-top: 20px;
			background:#F4BB44;
			color:#000000;
			border-radius:18px;
			}


</style>





<body>
  <div class="box">
   <table  style =" font-size:16pt"  align="center" width="100%" height="100%" >
      <tr>
        <td style="color:black;"><h1 align="center"><b>Welcome To St.Joseph College Digital Library</b></td></h1>
      </tr>
      <tr>
        <td style="color:black;" align="center"><b>LOGIN PAGE</b></td>
      </tr>
    </table>
  </div>
    <br>
    <br>

    <form method="post" action="">
      <div  class="boxtwo" style="border:solid 1px #000000;border-radius: 10px; width:73.5%; height:380px; margin-left:13%;margin-top:15px;background-color:white">

        <fieldset align="center" style="  background:#daa520;color:black;" class="five" class="one">
          <div class="boxfour">
            <h3 style="color:black;text-align:center;;padding-top:1px;padding-bottom: 1px;background:#ffbf00;border-radius:12px;margin-top:-13px;margin-left:-12px;height:40px">Please Login Here</h3>


          </div>

        <table style="font-size:16pt;width:300px;height:50px;margin-right:45px;" align="Right">
          <tr>
            <td><br></td>
          </tr>
          <tr>
            <td><label style="color:black;">Username:</label></td>
            <td><input type="text" name="username" placeholder="username"  style="color:darkgray;"></td>
          </tr>

          <tr>
            <td><label style="color:black;">Password:</label></td>
            <td><input type="password" name="password" placeholder="**********"  style="color:darkgray;"></td>
          </tr>
          <tr>
            <td align="center" style="margin-left:200px"><input type="submit" name="submit" value="LOGIN"></td>
          </tr>
          <p style="color:black;font-weight:bold;font-size:17px;text-align:center;background:rgba(255, 255, 255, 0.8)"><?php echo $error ?>
          </p>
          <tr>
            <td style="font-size:12pt">If not register yet..!!!</td>
            <td style="font-size:12pt"><a href="registration.php" style="color:black;">Register Now</a></td>
          </tr>
          <tr>
            <td ><br></td>
            <td><br></td>
          </tr>
        </table>
      </fieldset>
      </div >
    </form>


    <div class="boxthree" style="background-color:orange; border:solid 2px orange;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
      <marquee><h6 style="line-height:1px;">Thank You For Using This System.</h6></marquee>


    </div>
