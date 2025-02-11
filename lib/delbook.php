<?php include("conn.php");

$msg="";



if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sub']))

{


  $id=$_POST['book_id'];  
  

  if($id!="")
  {  
      $sql="DELETE FROM `book` WHERE `book`.`b_id` ="."'$id'";
      
	$data = mysqli_query($conn, $sql);
	
      if($data)
	  {
	    $msg= "Book Delete Successfully";
	  }
	  else
	  {
	    $msg= "Something Went Wrong..";
	  }
}
    else
	  {
	   $msg="Book ID Required";
	  }
}
?>
<html>
<head>
<title>Delete_Book</title>


<style>
body{
  background: url(backforall.jpg);
}
.box{
  width:74%;
  height:160px;

  background-image: url(headback2.jpg);
  background-size: cover;
  margin-left: 13%;
  opacity: .9;
  border-radius:12px;
  box-shadow:black;
   border:solid 1px #000000;
  border-radius: 12px;
}

	 .header{
	         width:400px;
			color:#000000;
			 display: inline-block;
			 width:73.5%;
			 height:370px;
			 margin-left:13%;
       background-image: url("headback2.jpg");
       background-size: cover;
			 box-shadow:black;
       border-radius:12px;
         border:solid 1px #000000;

			 }


	.title
	       {
				color:#000000;
			   font-size:20px;
			 	font-weight:10px;
				
				background:transparent;
                margin-top: 4%;
				margin-right:56%;
				padding-left:10%;
				font-style:italic;
				}
	.title h2{
	           background:#ffbf00;
			   border:1px black;
         margin-left:20px;
         margin-top: 10px;
			  padding-top:3px;
        padding-bottom: 2px;
			    padding-left:150px;
				border-radius:15px;
        width:280px;
	           }

	.container{
        margin-top: 15px;
	            margin-left:20%;

				font-weight:10px;
				height:350px;
				background:#daa520;
				padding-left:3%;
                width:600px;
        box-shadow:black;
        border-radius:18px;
        overflow:auto;
				}

   .header input[type="submit"]
          {

		    font-size:25px;
		    text-align:center;
			border:none;
			height:40px;
			margin-left:110% ;
            margin-top: 10px;
			background:#ffbf00;
			color:#000000;
			border-radius:18px;
			}



ul{
  padding: 0  ;
  list-style: none;
}
ul li{
  float: left;
  width: 200px;
  height: 40px;
  background-color: #ffbf00;
  opacity: .8;
  line-height: 40px;
  text-align: center;
  font-size: 20px;
  margin-right: 2px;
  border-radius: 12px;
}
ul li a{
  text-decoration: none;
  color: black;
  display: block;
}
ul li a:hover{
  background-color: #e49b0f;
  border-radius: 12px;
}
ul li ul li{
  display: none;
}
ul li:hover ul li{
  display: block;
}
.nav{
  padding-left:12%;

}


</style>
</head>
<body>
  <div class="box">
   <table  style ="border-color:black; font-size:16pt"  align="center" width="100%" height="100%">
      <tr>
        <td style="color:black;"><h1 align="center">Welcome To St.Joseph College Digital Library </h1></td>
      </tr>
      <tr>
        <td style="color:black;" align="center"><b><i>Add Books to Database</i></b></td>
      </tr>
    </table>
  </div>
<div class="nav">
<ul>
  <li><a href = "admin.php">Home</a></li>
  <li ><a href = "add_book.php" >Add Book</a></li>
  <li><a href = "edit_book.php" >Edit Book</a></li>
    <li><a href = "delbook.php"  style="background-color:#ffbf00;border-radius: 12px">Delete Book</a></li>
  <li><a href = "index.php">Logout</a></li>
</ul>
<br><br><br>
</div>

<form action="" method="POST" enctype="multipart/form-data">
<div class = "header">


  <div class = "container">
    <div class="title">
    <h2>DELETE BOOK</h2>
      </div>

  <table style= "color:#000000;padding-top:10px;">
      
       <tr>
     <td style="width:250px;text-align:center">BOOK ID:</td>
     <td><input style="width:200px;" type="text" name="book_id" placeholder="books ID"/></td>
	</tr>
      
      <tr>
	  <td><h2><input style="margin-left:100%;margin-top:30%;" type="submit" name="sub" value="Delete"/></h2></td>
	  </tr>
      
      <tr><td  style="color:black;font-weight:bold;text-align:center"><?php echo $msg; ?></td></tr>
    </table>
    </div>
   </div> 
 </form>
</body>
</html>