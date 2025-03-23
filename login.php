







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>
</head>
<body>
  <link rel="stylesheet" href="style.css">
</body>
</html>
<?php
$name="errr";
  
if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $useremail=$_POST["email"]??"";
    $userpassword=$_POST["Password"]??"";

    if(!$useremail=="" && !$userpassword==""){

    $servername="localhost";
    $database="product";
    $username="root";
    $password="";
    $conn=new PDO("mysql:host=$servername;dbname=$database",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt=$conn->prepare("select * from user  where email='$useremail' and pasword='$userpassword';");
    $stmt->execute();
    $res=$stmt->fetchALL(PDO::FETCH_ASSOC);
    $name=$res[0]["name"];
    echo "errr";
    }
    
  }
?>

  <form method="post"  class="signin">
   

    <div class="content"> 

     <h2>Sign In</h2> 

     <div class="form"> 

      <div class="inputBox"> 

       <input name="email" type="text" required> <i>email</i> 

      </div> 

      <div class="inputBox"> 

       <input name="Password" type="password" required> <i>Password</i> 

      </div> 

      <div class="links"> <a href="#">Forgot Password</a> <a href="#">Signup</a> 

      </div> 

      <div class="inputBox"> 

       <input type="submit" value="Login" > 
       <h1><?php echo $name ?></h1>

      </div> 

     </div> 

    </div> 

 
   </form>
  </section>

