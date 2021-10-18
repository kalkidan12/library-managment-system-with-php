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

	 
	 
	/*
if(!in_array(pathinfo($file_name,PATHINFO_EXTENSION),$accepted))
	{
	
	 $msg= $file_name."<br> is not acceptable file type";
	}
	else
	{
	  
	  move_uploaded_file($_FILES['file']['tmp_name'],$file_store.$new_file_name);
	  
	 }
	*/
      
    
      $sql="UPDATE `book` SET". "`booksname` ='$bookname',"."`authorname` = '$authorname',"."`copies` = '$copy',". "`avl_cpy` = '$avl_cpy',"."`dept` = '$dept',"."`file_name` = '$new_file_name',"."`path` = '$fpath'". " WHERE `book`.`b_id` ="."'$id'";
      

	$data1 = mysqli_query($conn,$sql);
	
      if($data1)
	  {
	    $msg= "Successfully Edit";
	  }
	  else
	  {
	    $msg= "Something Went Wrong..";
	  }
}
    else
	  {
	   $msg="all field are required";
	  }
}
?>
<html>
<head>
<title>Edit_Book</title>
<link rel="stylesheet" type="text/css" href="css/edit_book.css">
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
        <td style="color:orange" align="center"><b><i>Add Books to Database</i></b></td>
      </tr>
    </table>
  </div>
<div class="nav">
<ul>
  <li><a href = "admin.php">Home</a></li>
  <li ><a href = "add_book.php" >Add Book</a></li>
  <li><a href = "edit_book.php"  style="background-color:green">Edit Book</a></li>
  <li><a href = "delbook.php">Delete Book</a></li>
  <li><a href = "index.php">Logout</a></li>
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
     <td>BOOK ID:</td>
     <td><input type="text" name="book_id" placeholder="books ID"/></td>
	</tr>
      
       <tr>
     <td>BOOK NAME:</td>
     <td><input type="text" name="booksname" placeholder="books name"/></td>
     </tr>
      
      
         
	<tr>
	  <td>AUTHOR NAME:</td>
	 <td><input type="text" name="authorname" placeholder="books author name"/></td>
        <td style="color:white;font-weight:bold;text-align:center"><?php echo $msg; ?></td>
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
	   <option value="tt">Communication</option>
	   <option value="me">Mechanical</option>
	   <option value="ee">Electrical</option>
	   </select>
	   
	 </td>
	</tr>

	<tr>
	 <td>UPLOAD EBOOK:</td>
	 <td><input type="file" name="file"  /></td>
	</tr>
      <tr>
	  <td><h2><input style="margin-left:180%;margin-top:10%;" type="submit" name="sub" value="RE-UPLOAD"/></h2></td>
	  </tr>
    </table>
    </div>
   </div> 
 </form>
</body>
</html>