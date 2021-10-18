<?php 
include("conn.php");?>

<html>
<head>
<title>Admin Dasboard</title>
<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>

        <div>
            <button style="color:white; background-color: blueviolet; font-weight:bold;  border-bottom-right-radius:5px; font-size:22px; border:none; position:absolute; left:0; top:0; width: 100px; height:40px "><a href="index.php" style="text-decoration:none; color:white">Home</a></button>
        </div>
    <div class="box">
     <table  style =" font-size:16pt"  align="center" width="100%" height="100%">
        <tr>
            <td style="color:orange"><h1 align="center">Welcome To online Library System</h1></td></tr>
        <tr>
          <td align="center"><b style="color:orange">ADMIN PANEL</style=></i></b></td>
        </tr>
      </table>
    </div>



      <div class="nav">
        <ul>
          <li><a style="background-color: green" href="admin.php">Home</a></li>
          <li><a href="add_book.php">Add Book</a></li>
          <li><a href="edit_book.php">Edit Book</a></li>
            <li><a href="delbook.php">Delete Book</a></li>
          <li><a href="login.php">Logout</a></li>
        </ul>
           </div>
    <br><br>
          
          
  <div class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:84%; height:360px; margin-left:9%;margin-top:10px;background-color:white">
      
<!--    <input type="text" placeholder="search by book id"><button type="button">search</button>  -->
       <p style="text-align:center;color:yellow;font-weight:bold">ALL BOOKS</p>
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
      
      
      
      
 




        <div  style="background-color:orange; border:solid 2px orange;border-radius: 10px; width:84%; height:40px; margin-left:9%; margin-top:15px" >
          <marquee behavior="alternate" direction="right" loop="1" style="margin-right:38%" align="center"><h6 style="line-height:1px;">Thank You.</h6></marquee>


        </div>

   
    </body>
  
</html>
