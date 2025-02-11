<?php include("conn.php");
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))

{
  $name=$_POST['name1'];
  $roll=$_POST['roll'];
  $gender=$_POST['gender'];  
  $dept=$_POST['department'];
  $year=$_POST['year'];
  $email=$_POST['email'];
  $password=$_POST['password'];
    
  $_SESSION["sname"]=$name;
  $_SESSION["semail"]=$email;
    
    
    
    if($name!="" && $roll!="" && $dept!="" && $year!="" && $email!="" && $password!="" )
  { 
        $insert="INSERT INTO `student_registration`(`roll`,`gender`,`name`,`dept`,`year`,`emailid`,`password`) VALUES('".$roll."','".$gender."','".$name."','".$dept."','".$year."','".$email."','".$password."')";
      $data=mysqli_query($conn,$insert); 
      if($data)
	  {
	  
	  
          header("Location:thnk.php"); 
	  }
        else
        {
            echo "Something Wrong Occurs..!! Please Try Again";
        }
        
    }
    else{
        echo "Fields Should Not Be Empty..!!";
    }
}


?>

<!DOCTYPE html>
<html>

<style type="text/css">
body{
  background: url("backforall.jpg");
}
.box{
  width:74%;
  height:165px;
 border:solid 1px #000000;
  background-image: url("headback2.jpg");
  background-size: cover;
  margin-left: 13%;
  opacity: .9;
  border-radius:12px;
}
.title h2{
           background:#ffbf00;
       border:none;
       margin-left:-10px;
      margin-top: -05px;
      padding-top:3px;
      padding-bottom: 2px;
        padding-left:120px;
      border-radius:15px;
      width:77.2%;
      color:#000000;
           }
.one{
  margin-top: 1.5%;
  margin-left:52%;
  margin-right:2%;
  opacity: .9;
  box-shadow:black;
  height:320px;
  background:#daa520;
}
.boxtwo{
  background-image: url("headback2.jpg");
  background-size: cover;
  box-shadow:#000000;
  border-radius:12px;
}
.boxtwo input[type="submit"]
       {

     font-size:25px;
     text-align:center;
   border:1px black;
   height:40px;
   margin-left:60% ;
   margin-top: 10px;
   background:#ffbf00;
   color:#000000;
   border-radius:18px;
   }

</style>




<head><title>REGISTRATION</title></head>
<body>
  <div class="box">
   <table  style =" font-size:16pt" align="center" width="100%" height="100%">
      <tr>
        <td style="color:black;"><h1 align="center"><i>Welcome To St.Joseph College Digital Library </i>  </marquee></h1></td>
      </tr>
      <tr>
          <td  align="center"><b><i><mark style="color:black;background-color:#ffbf00";>REGISTRATION PAGE</mark></i></b></td>
      </tr>
    </table>
  </div>
  <br><br>
  <div  class="boxtwo" style="border:solid 1px #000000;border-radius: 10px; width:73.5%; height:370px; margin-left:13%;margin-top:10px;background-color:black;border-radius: 12px;">

<fieldset align="center" style="color:blue;" class="one">
  <div class="title">
  <h2>YOUR DETAILS</h2>
    </div>

<form action="" method="post">
<table align="Right" style="color:white;font-size:13pt">
	  <tr>
			<td>NAME:</td>
 <td ><input type="text" required="required" name="name1" size="17"
 maxlength="30" style="color:blue"/></td>

	  </tr>
    <tr>
      <td>GENDER.:</td>
      <td>
<input type="radio" name="gender" value="m" checked> Male
<input type="radio" name="gender" value="f"> Female</td>
    </tr>
<tr>
<td>UNIVERSITY ROLL NO.:</td>
 <td><input type="text" name="roll" required="required" size="17"
 maxlength="30" style="color:blue"/></td></tr>

<tr>
<td>DEPARTMENT:</td>
 <td><select required name="department">
 <option value="cse">Computer science</option>
     <option value="env">Environment</option>
     <option value="eng">Engineering</option>
     <option value="tam">Tamil Books</option>
     <option value="geo">Geography</option>
     <option value="his">History</option>
     <option value="psy">Psychology</option>
     <option value="lan">Language</option>
</select></td></tr>
<tr>
<td>
YEAR:</td>
 <td>
   <select required name="year">
     <option value="1st_year">1st Year</option>
     <option value="2nd_year">2nd Year</option>
     <option value="3rd_year">3rd Year</option>
    </select>
 </td></tr>
<tr><td>E-MAIL ID:</td>
 <td><input type="email" name="email" required="required" size="17"
 maxlength="30" style="color:blue"/></td></tr>
<tr>
<td>
PASSWORD:</td>
 <td><input type="text" name="password" required="required" size="17"
 maxlength="30" style="color:blue"/>
</td></tr>

 <tr>
  <td><input type="submit" name="submit"
   value="REGISTER"></td>
</tr>
 </table>
</form>
 </fieldset>
</div>



  <div class="boxthree" style="background-color:orange; border:solid 2px orange;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
    <marquee behavior="alternate" direction="right" loop="1" style="margin-right:38%" align="center"><h6 style="line-height:1px;">For any query please <a href="aboutus.php">contact us</a>.Thank You.</h6></marquee>


  </div>

 </body>
</html>
