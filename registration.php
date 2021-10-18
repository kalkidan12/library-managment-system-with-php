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
<head>
  <title>REGISTRATION</title>
  <link rel="stylesheet" type="text/css" href="css/registration.css">
</head>
<body>
        <div>
            <button style="color:white; background-color: blueviolet; font-weight:bold;  border-bottom-right-radius:5px; font-size:22px; border:none; position:absolute; left:0; top:0; width: 100px; height:40px "><a href="index.php" style="text-decoration:none; color:white">Home</a></button>
        </div>
  <div class="box">
   <table  style =" font-size:16pt" align="center" width="100%" height="100%">
      <tr>
        <td style="color:blue"><h1 align="center">Welcome To online Library System</h1></td>
      </tr>
      <tr>
          <td  align="center" style="color:blue"><b>REGISTRATION PAGE</b></td>
      </tr>
    </table>
  </div>
  <br><br>
  <div  class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:73.5%; height:390px; margin-left:13%;margin-top:10px;background-color:white">

<fieldset align="center" style="color:blue;" class="one">
  <div class="title">
  <h2>Register</h2>
    </div>

<form action="" method="post">
<table align="Right" style="color:white">
	  <tr>
			<td>NAME:</td>
 <td ><input class="input" type="text" required="required" name="name1" size="17"
 maxlength="30" style="color:blue"/></td>

	  </tr>
    <tr>
      <td>GENDER.:</td>
      <td>
<input type="radio" name="gender" value="m" checked> Male
<input type="radio" name="gender" value="f"> Female</td>
    </tr>
<tr>
<td>SCHOOL ID:</td>
 <td><input class="input" type="text" name="roll" required="required" size="17"
 maxlength="30" style="color:blue"/></td></tr>

<tr>
<td>DEPARTMENT:</td>
 <td><select class="input" required name="department">
  <option value="cse">Computer Science Engineering</option>
  <option value="tt">Communication and Electronic </option>
  <option value="me">Mechanical Engineering</option>
  <option value="ee">Power and Control</option>
</select></td></tr>
<tr>
<td>
YEAR:</td>
 <td>
   <select class="input" required name="year">
     <option value="1st_year">1st Year</option>
     <option value="2nd_year">2nd Year</option>
     <option value="3rd_year">3rd Year</option>
     <option value="4th_year">4th Year</option>
    </select>
 </td></tr>
<tr><td>E-MAIL ID:</td>
 <td><input class="input" type="email" name="email" required="required" size="17"
 maxlength="30" style="color:blue"/></td></tr>
<tr>
<td>
PASSWORD:</td>
 <td><input class="input" type="text" name="password" required="required" size="17"
 maxlength="30" style="color:blue"/>
</td></tr>

 <tr>
  <td><input type="submit" name="submit"
   value="Register"></td>
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
