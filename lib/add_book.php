<?php include("conn.php");


$msg="";

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sub']))

{

  $bookname=$_POST['booksname'];
  $authorname=$_POST['authorname'];
  $id=$_POST['book_id'];  
  $copy=$_POST['copies'];
  $dept=$_POST['dept'];
  $avl_cpy=$copy;
  

  if($bookname!="" && $authorname!="" && $id!="" && $copy!="")
  {  
     
  
     $file_name = $_FILES['file']['name'];
	 $new_file_name=$id.".pdf";
     $file_tmp_loc = $_FILES['file']['tmp_name'];
	 $file_store = "ebooks/";
     $fpath=$file_store.$new_file_name;
	 $accepted=array("pdf");

	 
	 
	if(!in_array(pathinfo($file_name,PATHINFO_EXTENSION),$accepted))
	{
	$msg= $file_name."<br> is not acceptable file type";
	}
	else
	{
	  
	  move_uploaded_file($_FILES['file']['tmp_name'],$file_store.$new_file_name);
	  
	 }

       
      
      $insert="INSERT INTO `book`(`b_id`,`booksname`,`authorname`,`copies`,`avl_cpy`,`dept`,`file_name`,`path`) VALUES('".$id."','".$bookname."','".$authorname."','".$copy."','".$avl_cpy."','".$dept."','".$new_file_name."','".$fpath."')";
      $data=mysqli_query($conn,$insert); 
      if($data)
	  {
	  
	  
	    $msg= "Sccessfully Added";
	  }
      else{
          $msg="Something Went Wrong";
      }
   }
	  else
	  {
	    $msg= "All field are required";
	  }

	
}

?>
<html>
<head>
<title>Add_Book</title>


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
   border:solid 1px #CF0403;
  border-radius: 12px;
}

	 .header{
	         width:400px;
			color:#FFFFFF;
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
	           background:#FFBF00;
			   border:none;
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
				background:#DAA520;
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
			background:#FFBF00;
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
  background-color: #daa520;
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
  background-color: #FFBF00;
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
        <td style="color:black;"><h1 align="center">Welcome To St.Joseph College Digital Library</h1></td>
      </tr>
      <tr>
        <td style="color:black;" align="center"><b><i>Add Books to Database</i></b></td>
      </tr>
    </table>
  </div>
<div class="nav">
<ul>
  <li><a href = "admin.php"><B>Home</B></a></li>
  <li ><a href = "add_book.php"  style="background-color:#FFBF00;border-radius: 12px"><B>Add Book</B></a></li>
  <li><a href = "edit_book.php"><B>Edit Book</B></a></li>
    <li><a href = "delbook.php"><B>Delete Book</B></a></li>
  <li><a href = "index.php"><B>Logout</B></a></li>
</ul>
<br><br><br>
</div>

<form action="" method="POST" enctype="multipart/form-data">
<div class = "header">


  <div class = "container">
    <div class="title">
    <h2>ADD BOOK</h2>
      </div>

  <table style= "color:#000000;padding-top:10px;">
   <tr>
     <td>BOOK NAME:</td>
     <td><input type="text" name="booksname" placeholder="books name"/></td>
     </tr>
	<tr>
	  <td>AUTHOR NAME:</td>
	 <td><input type="text" name="authorname" placeholder="books author name"/></td>
        <td style="color:red;font-weight:bold;text-align:center"><?php echo $msg; ?></td>
	</tr>
   <tr>
     <td>BOOK ID:</td>
     <td><input type="text" name="book_id" placeholder="books ID"/></td>
	</tr>
	<tr>
	  <td>NO OF COPIES:</td>
	 <td><input type="text" name="copies" placeholder="Available copies"/></td>
	</tr>
   
   <tr>
	  <td>DEPARTMENT:</td>
	 <td>
	 <select name="dept">
	  <option value="cse">Computer science</option>
	    <option value="env">Environment</option>
	   <option value="eng">Engineering</option>
	   <option value="med">Medical</option>
	   <option value="geo">Geography</option>
	   <option value="his">History</option>
	   <option value="psy">Psychology</option>
	   <option value="lan">Language</option> 
	   <option value="soc">Sociology</option>
	   <option value="eco">Economics</option> 
	  <option value="sci">Science</option>
	    <option value="bio">Biography</option>
	   <option value="art">Art Books</option>
	   <option value="cod">Coding Books</option>
	<option value="sel">Self Development</option>
	   </select>
	   
	 </td>
	</tr>

	<tr>
	 <td>UPLOAD EBOOK:</td>
	 <td><input type="file" name="file"  /></td>
	</tr>
      <tr>
	  <td><h2><input style="margin-left:180%;margin-top:10%;" type="submit" name="sub" value="SUBMIT"/></h2></td>
	  </tr>
   </table>

 </form>
</div>
</div>
</body>
</html>
