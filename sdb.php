<?php include("conn.php");

session_start();

$name=$_SESSION["sname"];
$email=$_SESSION["semail"];
$gender=$_SESSION["sgender"];

$namecap=ucwords($name);

/*
if(isset($_REQUEST['remember'])){
  $escapedRemember = mysqli_real_escape_string($conn, $_REQUEST['remember']);
  $_cookie_time = 60*60*24*30;
  $_cookie_time_Onset=$_cookie_time+ time();
  if(isset($escapedRemember)){
    setcookie("username", $usernameVal, $_cookie_time_Onset);
    setcookie("password", $escapedPW, $_cookie_time_Onset);
  } else{
    $_cookie_time_Onset = time() - $_cookie_time;
    setcookie("username", '',cookie_time_fromOffset);
    setcookie("password", '',cookie_time_fromOffset);
        }
}
*/

?>

<!DOCTYPE html>
<html>    
<head>
  <title>Student_DashBoard</title>
  <link rel="stylesheet" type="text/css" href="css/sdb.css">
</head>
<body>
        <div>
            <button style="color:white; background-color: blueviolet; font-weight:bold;  border-bottom-right-radius:5px; font-size:22px; border:none; position:absolute; left:0; top:0; width: 100px; height:40px "><a href="index.php" style="text-decoration:none; color:white">Home</a></button>
        </div>
  <div class="box">
   <table  style =" font-size:16pt"  align="center" width="100%" height="100%">
      <tr>
        <td style="color:blue"><h1 align="center">Welcome To online Library System</h1></td>
      </tr>
      <tr>
        <td ><mark style="color:white;background-color:maroon";> &nbsp;Welcome 
            
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
      <li><a style="background-color: green" href="sdb.php">HOME</a></li>
      <li><a href="sbooks.php">YOUR BOOKS INFO</a></li>
      <li><a href="aboutus.php">ABOUT US</a></li>
      <li><a href="login.php">LOGOUT</a></li>
    </ul>
  
<br><br>

</div>

  <div class="boxtwo" style="border-radius: 10px; width:73.5%; height:900px; margin-left:13%;margin-top:10px;background-color:white">
      
      
      
      
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
      <h3 class="box-cnt-h">COMMUNICATION</h3>
        
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
                      if($row["dept"]=="tt"){
                        echo "<tr>";
                          $bookid_tt=NULL;
                          $bookid_tt=$row["b_id"];
                          $lg2="<a href='view_book.php?id=$bookid_tt'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg2"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_tt=NULL;
                      }
                    }

	            ?>
                </table>


    </div>
      
    
    
      <br/clear="all">

    <div class="box-cnt">
      <h3 class="box-cnt-h">CHEMICAL</h3>
        
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
                      if($row["dept"]=="ee"){
                        echo "<tr>";
                          $bookid_ee=NULL;
                          $bookid_ee=$row["b_id"];
                          $lg3="<a href='view_book.php?id=$bookid_ee'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg3"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_ee=NULL;
                      }
                    }

	            ?>
                </table>


    </div>

    <div class="box-cnt">
      <h3 class="box-cnt-h">MECHANICAL</h3>
        
        
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
                      if($row["dept"]=="me"){
                        echo "<tr>";
                          $bookid_me=NULL;
                          $bookid_me=$row["b_id"];
                          $lg4="<a href='view_book.php?id=$bookid_me'>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg4"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_me=NULL;
                      }
                    }

	            ?>
                </table>


    </div>
          </br/clear>


  </div>


      <div class="boxthree" style="background-color:orange; border:solid 2px orange;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
        <marquee behavior="alternate" direction="right" loop="1" style="margin-right:38%" align="center"><h6 style="line-height:1px;">Thank You For Using This System.</h6></marquee>


      </div>

</body>
<html>
