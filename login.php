<?php
include("conn.php");

$error="";
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))
{  
   $count=0;
   $data=mysqli_query($conn,"select * from student_registration where emailid='$_POST[username]' && password='$_POST[password]'");
   $count=mysqli_num_rows($data);
   $row = mysqli_fetch_array($data);
   
   if($count==0)
   {
      $error= "Invalid username or password";
   }
   
else 
    
    
{
        if($row["type"]=="admin")
         {
          header("Location:admin.php"); 
         }
       else{
           $_SESSION["sname"]=$row["name"];
           $_SESSION["semail"]=$row["emailid"];
           $_SESSION["sgender"]=$row["gender"];
           header("Location:sdb.php");
           }
}




   
}

 
?>

<!DOCTYPE html>
<html>

<head>
  <title>HOME PAGE</title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
        <div>
            <button style="color:white; background-color: blueviolet; font-weight:bold;  border-bottom-right-radius:5px; font-size:22px; border:none; position:absolute; left:0; top:0; width: 100px; height:40px "><a href="index.php" style="text-decoration:none; color:white">Home</a></button>
        </div>
  <div class="box">
   <table  style =" font-size:16pt"  align="center" width="100%" height="100%" >
      <tr>
        <td style="color:blue"><h1 align="center">Welcome To online Library System</td></h1>
      </tr>
      <tr>
        <td style="color:blue" align="center"><b>LOGIN PAGE</b></td>
      </tr>
    </table>
  </div>
    <br>
    <br>

    <form method="post" action="">
      <div  class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:73.5%; height:360px; margin-left:13%;margin-top:15px;background-color:white">

        <fieldset align="center" style="  background:rgba(0,0,0,0.38);color:blue;" class="five" class="one">
          <div class="boxfour">
            <h3 style="color:white;text-align:center;;padding-top:1px;padding-bottom: 1px;background:#660000;border-radius:12px;margin-top:-10px;margin-left:-10px;height:40px">Please Login Here</h3>


          </div>

        <table style="font-size:16pt;width:300px;height:50px;margin-right:45px;" align="Right">
          <tr>
            <td><br></td>
          </tr>
          <tr>
            <td><label style="color:white">Username:</label></td>
            <td><input class="input" type="text" name="username" placeholder="username"  style="color:red" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>"></td>
          </tr>

          <tr>
            <td><label style="color:white">Password:</label></td>
            <td><input class="input" type="password" name="password" placeholder="**********"  style="color:red" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>"></td>
          </tr>
          <tr>
            <td align="center" style="margin-left:200px"><input type="submit" name="submit" value="Login"></td>
            <td  style="color:white;  font-size:18px"><input class="remember" type="checkbox" name="remember" value="1" <?php if(isset($_COOKIE['username'])){ echo "checked='checked'";} ?>>Remember me</td>
          </tr>
          <p style="color:red;font-weight:bold;font-size:17px;text-align:center;background:rgba(255, 255, 255, 0.8)"><?php echo $error ?>
          
          <tr>
            <td ><br></td>
            <td><br></td>
          </tr>
   
           
            
          
    
        </table>
   
        
            <p class="acct" ><a style="font-size:18px; color:white;" href="registration.php">don't have an account?</a></p>
         
      </fieldset>
      </div >
    </form>


    <div class="boxthree" style="background-color:orange; border:solid 2px orange;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
      <marquee><h6 style="line-height:1px;">Thank You For Using This System.</h6></marquee>


    </div>

</body>
</html>


  


    
    
    