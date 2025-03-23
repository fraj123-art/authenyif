<?php
$name="errr";
$servername="localhost";
$database="product";
$username="root";
$password="";
$conn=new PDO("mysql:host=$servername;dbname=$database",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name="errr1";
    $useremail=$_POST["email"]??"";
    $userpassword=$_POST["Password"]??"";
    $userusename=$_POST["username"]??"";
    if(!$useremail=="" && !$userpassword==""){
        $stmt=$conn->prepare("select * from user where email='$useremail'");
        $stmt->execute();
        $res=$stmt->fetchALL(PDO::FETCH_ASSOC);
        if($res){
            
            echo "errrrrrrrrrrrrrrrrrrrrr";
        }
        else{
            
            $stmt=$conn->prepare("INSERT INTO user(email, pasword,name) VALUES ('$useremail','$userpassword','$userusename')");
            $stmt->execute();
            $res=$stmt->fetchALL(PDO::FETCH_ASSOC);
            $name=$res[0]["name"];
            echo "od5ol mr7bee";
        } 
    }
    
  }
?>
  <form method="post"  class="register">
    <div class="content"> 
     <h2>register</h2>
     <div class="form"> 
      <div class="inputBox"> 
       <input name="email" type="text" required> <i>email</i> 
      </div> 
      <div class="inputBox"> 
       <input name="Password" type="password" required> <i>Password</i> 
      </div>
      <div class="inputBox"> 
       <input name="username" type="text" required> <i>username</i> 
      </div> 
      <div class="links"> <a href="#">Forgot Password</a> <a href="#">Signup</a> 
      </div> 
      <div class="inputBox"> 
       <input type="submit" value="register" > 
       <h1><?php echo $name ?></h1>
      </div> 
     </div> 
    </div> 
   </form>
  </section>
