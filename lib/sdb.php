<?php include("conn.php");

session_start();

$name=$_SESSION["sname"];
$email=$_SESSION["semail"];
$gender=$_SESSION["sgender"];

$namecap=ucwords($name);

?>

<!DOCTYPE html>
<html>
<style>
    
    
    
    body{
  background: url("backforall.jpg");
}
.box{
  width:74%;
  height:160px;

  background-image: url("headback2.jpg");
  background-size: cover;
  margin-left: 13%;
  opacity: .9;
  box-shadow:0px 0px 15px black;
  border-radius:12px;
   border:solid 1px #000000;
}
.boxtwo{
  background-image: url("headback2.jpg");
  background-size: cover;
  box-shadow:0px 0px 15px black;
   border:solid 1px #000000;

}
ul{
  padding: 0  ;
  list-style: none;
}
ul li{
  float: left;
  width: 248px;
  height: 40px;
  background-color: #ffc000;
  opacity: .8;
  line-height: 40px;
  text-align: center;
  font-size: 20px;
  margin-right: 2px;
  border-radius: 5px;
}
ul li a{
  text-decoration: none;
  color: black;
  display: block;
}
ul li a:hover{
  background-color: #daa520;
}
ul li ul li{
  display: none;
}
ul li:hover ul li{
  display: block;

}
.nav{
  padding-left:13%;

}
.box-cnt{

  box-shadow: 0px 0px 15px black;
  background:ffc000;
  float:left;
  border-radius:12px;
  overflow: auto;
  height:400px;
  width:45%;
  margin: 2% 2%;
    float: left;

}
    .box-cnt-h{
        color:black;
       text-align: center;
        padding-top:2px;
        padding-bottom: 2px;
        background:#ffc000;
        border-radius:12px;
        
    }

    .box-table{
        color: black;
        text-align: center;
        border-collapse: collapse;
        margin:1%;
        box-shadow: 0px 0px 10px white;
        height: auto;
        
    }
    .box-table td,tr{
        border: 1px solid black;
    }
    
    a{
        color: black;
    }
    .searchbox{
       height: 30px;
    }
      .button{
        height: 20px;
      }
    
    
    </style>
    
    
    
    
  
    
    
    
<head><title>Student_DashBoard</title></head>
<body>
  <div class="box">
   <table  style =" font-size:16pt"  align="center" width="100%" height="100%">
      <tr>
        <td style="color:Black"><h1 align="center"><i>Welcome To St.Joesph College Digital Library</i></h1></td>
      </tr>
      <tr>
        <td ><mark style="color:black;background-color:#daa520;border-colour:Black;border-radius: 12px;"> &nbsp;Welcome 
            
            <?php if($gender=="m")
                {
                    echo "Mr. ";
                } 
               else{
                echo "Ms. ";
               }
            ?><b><?php echo $namecap; ?> &nbsp;</b></mark></td>
      </tr>
    </table>
  </div>
  <div class="nav">
    <ul>
      <li><a style="background-color: #ffc00;border-radius: 2ps" href="sdb.php">HOME</a></li>
      <li><a href="aboutus.php">ABOUT US</a></li>
      <li><a href="index.php">LOGOUT</a></li>
      
    </ul>
  
<br><br>

</div>

  <div class="boxtwo" style="border-radius: 10px; width:73.5%; height:3600px; margin-left:13%;margin-top:10px;background-color:white">
      
      
      
      
    <div class="box-cnt">
      <h3 class="box-cnt-h">COMPUTER SCIENCE</h3>
         <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["dept"]=="cse"){
                        echo "<tr>";
                          $bookid_cse=NULL;
                          $bookid_cse=$row["b_id"];
                          $lg1="<a href='view_book.php?id=$bookid_cse'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg1"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_cse=NULL;
                      }
                    }

	            ?>
                </table>


    </div>

    <div class="box-cnt">
      <h3 class="box-cnt-h">ENVIRONMENT</h3>
         <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["dept"]=="env"){
                        echo "<tr>";
                          $bookid_env=NULL;
                          $bookid_env=$row["b_id"];
                          $lg1="<a href='view_book.php?id=$bookid_env'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg1"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_env=NULL;
                      }
                    }

              ?>
                </table>


    </div>


    <div class="box-cnt">
      <h3 class="box-cnt-h">ENGINEERING</h3>
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["dept"]=="eng"){
                        echo "<tr>";
                          $bookid_eng=NULL;
                          $bookid_eng=$row["b_id"];
                          $lg2="<a href='view_book.php?id=$bookid_eng'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg2"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_eng=NULL;
                      }
                    }

	            ?>
                </table>


    </div>

    <div class="box-cnt">
      <h3 class="box-cnt-h">MEDICAL</h3>
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["dept"]=="med"){
                        echo "<tr>";
                          $bookid_med=NULL;
                          $bookid_med=$row["b_id"];
                          $lg3="<a href='view_book.php?id=$bookid_med'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg3"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_med=NULL;
                      }
                    }

	            ?>
                </table>


    </div>

    <div class="box-cnt">
      <h3 class="box-cnt-h">GEOGRAPHY</h3>
        
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["dept"]=="geo"){
                        echo "<tr>";
                          $bookid_geo=NULL;
                          $bookid_geo=$row["b_id"];
                          $lg4="<a href='view_book.php?id=$bookid_geo'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg4"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_geo=NULL;
                      }
                    }

	            ?>
                </table>


    </div>
    <div class="box-cnt">
      <h3 class="box-cnt-h">HISTORY</h3>
        
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["dept"]=="his"){
                        echo "<tr>";
                          $bookid_his=NULL;
                          $bookid_his=$row["b_id"];
                          $lg4="<a href='view_book.php?id=$bookid_his'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg4"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_his=NULL;
                      }
                    }

              ?>
                </table>
              </div>

                <div class="box-cnt">
      <h3 class="box-cnt-h">PSYCHOLOGY</h3>
        
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["dept"]=="psy"){
                        echo "<tr>";
                          $bookid_psy=NULL;
                          $bookid_psy=$row["b_id"];
                          $lg4="<a href='view_book.php?id=$bookid_psy'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg4"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_psy=NULL;
                      }
                    }

              ?>
                </table>
                </div> 
                <div class="box-cnt">
      <h3 class="box-cnt-h">LANGUAGE</h3>
        
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["dept"]=="lan"){
                        echo "<tr>";
                          $bookid_lan=NULL;
                          $bookid_lan=$row["b_id"];
                          $lg4="<a href='view_book.php?id=$bookid_lan'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg4"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_lan=NULL;
                      }
                    }

              ?>
                </table>
              </div>
                <div class="box-cnt">
      <h3 class="box-cnt-h">SOCIOLOGY</h3>
        
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["dept"]=="soc"){
                        echo "<tr>";
                          $bookid_soc=NULL;
                          $bookid_soc=$row["b_id"];
                          $lg4="<a href='view_book.php?id=$bookid_soc'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg4"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_soc=NULL;
                      }
                    }

              ?>
                </table>
                </div>
                <div class="box-cnt">
      <h3 class="box-cnt-h">ECONOMIC</h3>
        
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["dept"]=="eco"){
                        echo "<tr>";
                          $bookid_eco=NULL;
                          $bookid_eco=$row["b_id"];
                          $lg4="<a href='view_book.php?id=$bookid_eco'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg4"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_eco=NULL;
                      }
                    }

              ?>
                </table>
                </div>
                <div class="box-cnt">
      <h3 class="box-cnt-h">SCIENCE</h3>
        
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["dept"]=="sci"){
                        echo "<tr>";
                          $bookid_sci=NULL;
                          $bookid_sci=$row["b_id"];
                          $lg4="<a href='view_book.php?id=$bookid_sci'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg4"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_sci=NULL;
                      }
                    }

              ?>
                </table>
                </div>
                <div class="box-cnt">
      <h3 class="box-cnt-h">BIOGRAPHY</h3>
        
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["dept"]=="bio"){
                        echo "<tr>";
                          $bookid_bio=NULL;
                          $bookid_bio=$row["b_id"];
                          $lg4="<a href='view_book.php?id=$bookid_bio'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg4"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_bio=NULL;
                      }
                    }

              ?>
                </table>
                </div>
                <div class="box-cnt">
      <h3 class="box-cnt-h">Art Books</h3>
        
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["dept"]=="art"){
                        echo "<tr>";
                          $bookid_art=NULL;
                          $bookid_art=$row["b_id"];
                          $lg4="<a href='view_book.php?id=$bookid_art'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg4"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_art=NULL;
                      }
                    }

              ?>
                </table>      
              </div>
              <div class="box-cnt">
      <h3 class="box-cnt-h">CODING BOOKS</h3>
        
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["dept"]=="cod"){
                        echo "<tr>";
                          $bookid_cod=NULL;
                          $bookid_cod=$row["b_id"];
                          $lg4="<a href='view_book.php?id=$bookid_cod'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg4"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_cod=NULL;
                      }
                    }

              ?>
                </table>
              </div>
              <div class="box-cnt">
      <h3 class="box-cnt-h">SELF DEVELOPMENT</h3>
        
        
        <table class="box-table">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["dept"]=="sel"){
                        echo "<tr>";
                          $bookid_sel=NULL;
                          $bookid_sel=$row["b_id"];
                          $lg4="<a href='view_book.php?id=$bookid_sel'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg4"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_sel=NULL;
                      }
                    }

              ?>
                </table>
          </br/clear>
  </div>



      <div class="boxthree" style="background-color:orange; border:solid 2px orange;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
        <marquee behavior="alternate" direction="right" loop="1" style="margin-right:38%" align="center"><h6 style="line-height:1px;">Thank You For Using This System.</h6></marquee>


      </div>

</body>
<html>
