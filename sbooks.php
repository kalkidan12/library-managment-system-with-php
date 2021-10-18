<?php
session_start();
$name=$_SESSION["sname"];
$email=$_SESSION["semail"];
$gender=$_SESSION["sgender"];


include("conn.php");
?>

<html>
<head>
<title>book info</title>
<link rel="stylesheet" type="text/css" href="css/sbook.css">


</head>
<body>
        <div>
            <button style="color:white; background-color: blueviolet; font-weight:bold;  border-bottom-right-radius:5px; font-size:22px; border:none; position:absolute; left:0; top:0; width: 100px; height:40px "><a href="index.php" style="text-decoration:none; color:white">Home</a></button>
        </div>
  <head><title>LOGIN_PAGE</title></head>
  <body>
    <div class="box">
     <table  style =" font-size:16pt"  align="center" width="100%" height="100%">
        <tr>
          <td style="color:blue"><h1 align="center">Welcome To online Library System</h1></td>
        </tr>
        <tr>
          <td align="center"><b style="color:blue">YOUR BOOKS INFORMATION</b></td>
        </tr>
      </table>
    </div>



      <div class="nav">
        <ul>
          <li><a href="sdb.php">HOME</a></li>
          <li><a  style="background-color: green" href="sbooks.php">YOUR BOOKS INFO</a></li>
          <li><a href="aboutus.php">ABOUT US</a>
          </li>
          <li><a href="login.php">LOGOUT</a></li>
        </ul>
    <br><br>
          
          
  <div class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:84%; height:360px; margin-left:0%;margin-top:10px;background-color:white">
      
      
      
    <fieldset  style ="height:320px; width:650px;overflow:auto" class="three"  >
      <legend align="center" style="color:#00ff00"><b><u>Your Books</u></b></legend>

    <table width="100%" height="310px" border="1"  align="center" style="color:white;  background:rgba(0,0,0,0.38);box-shadow:0px 0px 15px lightblue;">
      <tr>
        <th height="50">BOOK ID</th>
        <th>BOOK NAME</th>
        <th>RECIEVE DATE </th>
        <th>SUBMISSION DATE</th>
      </tr>
      
        
        
        <?php $query1="SELECT * FROM `student_book`  where `student_book`.`emailid` = '$email'";
        
        $data=mysqli_query($conn,$query1);
        
	              $row = mysqli_fetch_array($data);
                      if($row[0]!=""){   
                      
                        echo "<tr>";
                        echo "<td>" ;echo $row["book_1_id"]; echo "</td>";
                        echo "<td>";echo $row["book_1"]; echo "</td>";
                        echo "<td>"; echo $row["recive_date_1"]; echo "</td>";
                        echo "<td>"; echo $row["submisson_date_1"]; echo "</td>";
                        echo "</tr>";
                      
                      
                      
                    }
        
        else{
                        echo "<tr>";
                        echo "<td>" ;echo "You"; echo "</td>";
                        echo "<td>";echo "Have"; echo "</td>";
                        echo "<td>"; echo "No"; echo "</td>";
                        echo "<td>"; echo "Book"; echo "</td>";
                        echo "</tr>";
                      }

	            ?>
            
        
         <?php
        $query1="SELECT * FROM `student_book`  where  `student_book`.`emailid` = '$email'";
        
        $data=mysqli_query($conn,$query1);
        
            
        
	              $row = mysqli_fetch_array($data);
                      if($row[0]!=""){
                      
	                 
                      
                        echo "<tr>";
                        echo "<td>" ;echo $row["book_2_id"]; echo "</td>";
                        echo "<td>";echo $row["book_2"]; echo "</td>";
                        echo "<td>"; echo $row["recive_date_2"]; echo "</td>";
                        echo "<td>"; echo $row["submisson_date_2"]; echo "</td>";
                        echo "</tr>";
                          
                     
                      
                    }
             else{
                        echo "<tr>";
                        echo "<td>" ;echo "You"; echo "</td>";
                        echo "<td>";echo "Have"; echo "</td>";
                        echo "<td>"; echo "No"; echo "</td>";
                        echo "<td>"; echo "Book"; echo "</td>";
                        echo "</tr>";
                      }
        

	            ?>
        
    </table>
    </fieldset>

  </div>



        <div  style="background-color:orange; border:solid 2px orange;border-radius: 10px; width:84%; height:40px; margin-left:0%; margin-top:15px" >
          <p ><h6 style="line-height:1px;">Thank You For Using This System.</h6></p>


        </div>


</body>
</html>
