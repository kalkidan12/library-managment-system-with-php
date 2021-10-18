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
<link rel="stylesheet" type="text/css" href="css/delbook.css">
</head>
<body>
        <div>
            <button style="color:white; background-color: blueviolet; font-weight:bold;  border-bottom-right-radius:5px; font-size:22px; border:none; position:absolute; left:0; top:0; width: 100px; height:40px "><a href="index.php" style="text-decoration:none; color:white">Home</a></button>
        </div>
  <div class="box">
   <table  style ="border-color:red; font-size:16pt"  align="center" width="100%" height="100%">
      <tr>
        <td style="color:orange"><h1 align="center">Welcome To online Library System</h1></td>
      </tr>
      <tr>
        <td style="color:orange" align="center"><b>Add Books to Database</i></b></td>
      </tr>
    </table>
  </div>
<div class="nav">
<ul>
  <li><a href = "admin.php">Home</a></li>
  <li ><a href = "add_book.php" >Add Book</a></li>
  <li><a href = "edit_book.php" >Edit Book</a></li>
    <li><a href = "delbook.php"  style="background-color:green">Delete Book</a></li>
  <li><a href = "login.php">Logout</a></li>
</ul>
<br><br><br>
</div>

<form action="" method="POST" enctype="multipart/form-data">
<div class = "header">


  <div class = "container">
    <div class="title">
    <h2>EDIT BOOK</h2>
      </div>

  <table style= "color:#FFFFFF;padding-top:10px;">
      
       <tr>
     <td style="width:250px;text-align:center">BOOK ID:</td>
     <td><input style="width:200px;" type="text" name="book_id" placeholder="books ID"/></td>
	</tr>
      
      <tr>
	  <td><h2><input style="margin-left:100%;margin-top:30%;" type="submit" name="sub" value="Delete"/></h2></td>
	  </tr>
      
      <tr><td  style="color:white;font-weight:bold;text-align:center"><?php echo $msg; ?></td></tr>
    </table>
    </div>
   </div> 
 </form>
</body>
</html>