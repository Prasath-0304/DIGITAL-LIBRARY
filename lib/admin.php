<?php 
include("conn.php");?>

<html>
<head>
<style>
body{
  background: url("backforall.jpg");
}
    table{
                width: 100%;
                border-collapse: collapse;
                height: auto;
        text-align: center;
        color: black;
        font-weight: bold;

            }
    
    th{
        font-size: 17px;
        text-decoration: underline;
        font-style: italic;
    }
    
    .main{
        width: 80%;
        box-shadow: black;
        border-radius: 20px;
        overflow: auto;
        margin-left: 10%;
        margin-top: 2%;
        height:270px;
        background: #ffbf00;
        border-color: black;
        border: 2px;
    }
.box{
  width:74%;
  height:160px;
  background-image: url("headback2.jpg");
  background-size: cover;
  margin-left: 13%;
  opacity: .9;
 border:solid 1px #000000;
  border-radius: 12px;

}
.boxtwo{
  background-image: url("headback2.jpg");
  background-size: cover;
  box-shadow:0px 0px 15px black;
  border-radius:12px;

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
  background-color: #DAA520;
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
.three{
  margin-left: 60%;
  margin-top: 5px;
  box-shadow:0px 0px 15px black;
}
    button{
        margin-top: 10px;
    }
</style>


<title>Admin Dasboard</title>
</head>
<body>

  
    <div class="box">
     <table  style =" font-size:16pt"  align="center" width="100%" height="100%">
        <tr>
            <td style="color:black;"><h1 align="center"><i>Welcome To St.Joseph College Digital Library </i></h1></td></tr>
        <tr>
          <td align="down"><b><i><mark style="color:black;background-color:#daa520;";>ADMIN PANEL</mark></i></b></td>
        </tr>
      </table>
    </div>



      <div class="nav">
        <ul>
          <li><a style="background-color: #ffc000; border-radius: 12px;"  href="admin.php">Home</a></li>
          <li><a href="add_book.php">Add Book</a></li>
          <li><a href="edit_book.php">Edit Book</a></li>
            <li><a href="delbook.php">Delete Book</a></li>
          <li><a href="index.php">Logout</a></li>
        </ul>
           </div>
    <br><br>
          
          
  <div class="boxtwo" style="border:solid 1px #000000;border-radius: 10px; width:84%; height:360px; margin-left:9%;margin-top:10px;background-color:white">
      
  <!-- <input type="text" placeholder="search by book id"><button type="button">search</button> -->  
       <p style="text-align:center;color:black;font-weight:bold">ALL BOOKS</p>
   <div class="main">
      
       <table>
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Actual Copy</th>
                    <th>Available Copy</th>
                    <th>Depertment</th>
                    <th>Ebook Name</th>
                </tr>
                
                
                
                    
                    
                    
            <?php 
           
           $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                        echo "<tr>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo $row["booksname"]; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["copies"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["dept"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                    }

	            ?>
                </table>
      
      </div>   
   

  </div>
      
      
      
      
 




        <div  style="background-color:orange; border:solid 2px black;border-radius: 10px; width:84%; height:40px; margin-left:9%; margin-top:15px" >
          <marquee behavior="alternate" direction="right" loop="1" style="margin-right:38%" align="center"><h6 style="line-height:1px;">Thank You.</h6></marquee>


        </div>

   
    </body>
  
</html>
