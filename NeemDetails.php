<!DOCTYPE html>
<html>
<head>

	<style>
/*	*{
		margin: 0px;
	}*/
		#container{
				/*background-color: green;*/
			         height: 1000px;
			         width: 1200px;
               margin: auto;
               margin-top: 20px;
            }
        .menu{
                background:url(MenuBackground.jpg);
                height: 130px;
             }
        .menu div{
				  width:900px;
				  overflow:hidden;
        	margin:auto;
				  position:relative;
        }      
        .menu #nm{
        		width: 200px;
        		margin-left: 200px;
        		text-align: center;
        		color: green;
        		float: left;
        }
        .menu #nm a{
        		color: green;
        		text-decoration: none;
        }
		
		    #lpart{
                background-color: yellowgreen;
                height: 170px;
                width: 250px;
                float: left;
              }
        #mpart{
                /*background-color: blueviolet;*/
                height: 800px;
                width: 700px;
                float: left;
              }

        #mpart #plant_image{
              float:left;
              margin:30px 15px;
              width: 380px;
              height: 380px;
        }
        #mpart #plant_image img{
                width: 380px;
                height: 380px;
                border: 1px solid black;
        }
        #mpart #plant_details{
              float:left;
              margin:30px 0px;
              width: 280px;
              height: 400px;
        }
        #rpart{
                background-color: yellowgreen;
                height: 170px;
                width: 250px;
                float: left;
             }
        
        .menu #pages{
        		     list-style: none;
                 position: relative;
                 margin-top: 80px;
                 color: white;
                 left: 130px;
        }

        .menu #pages li{
                  display: inline;
                  margin: 5px;
                  padding: 15px;
        }

        .menu #pages a{
               color: white;
               text-decoration: none;
               text-shadow:3px 3px 1px black;
        }

        .menu #pages li a:hover , .menu #pages li#select a{
               color: yellow;
        }
        
        body{
        	background-image: url("BodyBackgroundImage.jpg");
        	background-attachment: fixed;
        }
    </style>
    <title></title>
 </head>
 <?php session_start(); ?>
<body>
  <div id="container">
    <div class="menu">
      <div style="height: 15px"></div>
      <div id="nm"> <a href="Home.php"> <h1> Go Green <br> <h3 style="color: white"> Save Trees Plant Trees </h3> </h1> </a> </div>
        <ol id="pages">
          <h3>
              <li> <a href="Home.php"> Home </a></li> 
              <li id="select"> <a href="Plants.php"> Plants </a> </li>
              <li> <a href="LoginPage.php"> SignUp </a> </li>
              <li> <a href="Contact.php"> Contact </a> </li>
          </h3> 
        </ol>
    </div><br>

    <div id="lpart">
        <center style="margin-top: 5px;color: white;text-shadow:2px 1px 1px black;"> Login: </center>
      <div style="height: 170px;width: 215px;margin-left: 10px;margin-top: 10px">
        <form method="post" action="<?php $_PHP_SELF ?>">
          Email<br><input type="email" name="Login_Email" id="Login_Email"><span id="span_email"></span><br>
          Password<br><input type="password" name="Login_Password" id="Login_Password"><span id="span_password"></span><br><br>
          <input type="submit" name="Subs" value="Login" onclick="return login_validate()">
          <a href="LoginPage.php"><input type="button" name="" value="Sign Up"></a>
        </form>
      </div>
    </div>

    <div id="mpart">
      <div id="plant_image">
        <img src="p2.jpg">
      </div>
      <div id="plant_details">
        <h1> Neem Tree (Rs.231)</h1>
        <p>Azadirachta indica, commonly known as neem, nimtree or Indian lilac,Neemis a tree in the mahogany family Meliaceae. It is one of two species in the genus Azadirachta, and is native to the Indian subcontinent.</p>
        <p>
            Hair Comb: Wood of neem tree is used to handcraft hair combs and it is believed that regular use can control hair loss, dandruff and other scalp problems.
            Toiletries: Neem oil is used for preparing cosmetics such as soap, shampoo, balms, and creams as well as toothpaste.
        </p>
      </div><br>
      <div style="text-align: center;width: 100px;float: left;margin-left: 350px">
        <form method="post" action="<?php $_PHP_SELF ?>">
          <input type="submit" name="Donate" value="Donate">
        </form>
      </div>
    </div>
    

    <div id="rpart">
      <center style="margin-top: 5px;color: white;text-shadow:2px 1px 1px black;"> Subscribe: </center>
      <div style="height: 170px;width: 220px;margin-left: 18px;margin-top: 10px">
        <form method="post" action="<?php $_PHP_SELF ?>">
          Your Name<br> <input type="text" name="Subscibe_Name" id="Subscibe_Name"><span id="span_subs_nm"></span><br>
          Your Email<br><input type="email" name="Subscribe_Email" id="Subscribe_Email"><span id="span_subs_mail"></span><br>
                  <input type="checkbox" name="pri_policy" id="pri_policy">I accept privacy policy <span id="span_subs_policy"></span><br>
                  <input type="submit" name="Subs" value="Subscribe" onclick="return subscribe_validate()">
        </form>
      </div>
    </div>

  </div>

  <script>
    function login_validate()
     {
      var mail=document.getElementById('Login_Email');
      var pass=document.getElementById('Login_Password');

      if(mail.value.trim()==="")
      {
        var span_email=document.getElementById('span_email');
              span_email.innerHTML="Enter";
              span_email.style.color="red";
              mail.focus();
              return false;
      }

      if(pass.value.trim()==="")
      {
        var span_password=document.getElementById("span_password");
        span_password.innerHTML="Enter";
        span_password.style.color="red";
        pass.focus();
        return false;
      }
    }

    function subscribe_validate()
     {
      var subs_mail=document.getElementById('Subscribe_Email');
      var subs_policy=document.getElementById('pri_policy');

      if(subs_mail.value.trim()==="")
      {
        var span_subs_mail=document.getElementById("span_subs_mail");
        span_subs_mail.innerHTML="Enter";
        span_subs_mail.style.color="red";
        subs_mail.focus();
        return false;
      }
      else
      {
        var regu=/^\w+([\._]?\w+)*@\w+([\._]?\w+)*(\.\w{2,3})+$/;
              if(regu.test(subs_mail.value))
              {
                  var span_subs_mail=document.getElementById('span_subs_mail');
                  span_subs_mail.innerHTML="Valid";
                  span_subs_mail.style.color="white";           
              }
              else
              {
                  var span_subs_mail=document.getElementById('span_subs_mail');
                  span_subs_mail.innerHTML="InValid";
                  span_subs_mail.style.color="red";
                  subs_mail.focus();
                  return false;
              }
      }

      if(subs_policy.checked===false)
            {
              var span_subs_policy=document.getElementById('span_subs_policy');
              span_subs_policy.innerHTML="Select";
              span_subs_policy.style.color="red";
              return false;
            }
    }

  </script>

</body>
</html>

<?php
    
    $servername="localhost";
    $username="root";
    $password="animeshroot@123";
    $DBName="Plantation";
        
  $conn=new mysqli($servername, $username , $password, $DBName);

  if($conn->connect_error)
     {
      die("Connection Failed: ".$conn->connect_error);
     }

    if (isset($_POST['Login_Email']))
    {
      $ma_il = $_POST['Login_Email'];
      $pa_ss = $_POST['Login_Password'];
      $temp=0;
      $_SESSION['mail']=$ma_il;
      $_SESSION['pass']=$pa_ss;
    }

     if(!empty($ma_il))
     {  
      if (!empty($pa_ss)) 
      {
        # code...
        $temp=1;
      }
     }
     else 
      $temp=0;

     if($temp==1)
     {
      $sql="SELECT * FROM User_Info WHERE User_Email='$ma_il' AND User_Password='$pa_ss'";
      $result=$conn->query($sql);

      if ($result -> num_rows > 0)
      {
          $_SESSION['LOGIN']=1;
          echo '<script>';
          echo 'alert("Logged In!!")';
          echo '</script>';
      }
      else
      {
          echo '<script>';
          echo 'alert("Not the user!!")';
          echo '</script>';
      }
     }
     
     $conn->close();
?>

<?php
    $servername="localhost";
    $username="root";
    $password="animeshroot@123";
    $DBName="Plantation";
        
  $conn=new mysqli($servername, $username , $password, $DBName);

  if($conn->connect_error)
     {
      die("Connection Failed: ".$conn->connect_error);
     }

    if (isset($_POST['Subscribe_Email']))
    {
      $su_name = $_POST['Subscibe_Name'];
      $su_mail = $_POST['Subscribe_Email'];

      $sql="INSERT INTO User_Subscribe (Subs_Name,Subs_Email) VALUES ('$su_name','$su_mail')";
      $result=$conn->query($sql);

      if ($result === TRUE)
      {
          echo '<script>';
          echo 'alert("Thank You For Following Newsletter!!")';
          echo '</script>';
      }
      else
      {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
 
    }
     $conn->close();
?>

<?php
    $servername="localhost";
    $username="root";
    $password="animeshroot@123";
    $DBName="Plantation";
        
    $conn=new mysqli($servername, $username , $password, $DBName);

    if($conn->connect_error)
    {
      die("Connection Failed: ".$conn->connect_error);
    }

    if(isset($_POST['Donate']))
    {
    if(isset($_SESSION['LOGIN']))
    {
      $ma=$_SESSION['mail'];
      $pa=$_SESSION['pass'];
      $sql1="SELECT User_Id,User_FirstName,User_LastName,User_Email FROM User_Info WHERE User_Email='$ma' AND User_Password='$pa'";
      $result1=$conn->query($sql1);
      while($row=$result1->fetch_assoc())
      {
      $us_id=$row['User_Id'];
      $us_fnm=$row["User_FirstName"];
      $us_lnm=$row["User_LastName"];
      $us_em=$row["User_Email"];
      }

    $sql2="SELECT Plant_Id,Plant_Name,Plant_Price FROM Plants_Info WHERE Plant_Name='Neem Tree'";
    $result2=$conn->query($sql2);
    while($row=$result2->fetch_assoc())
    {
      $pl_id=$row["Plant_Id"];
      $pl_nm=$row["Plant_Name"];
      $pl_pr=$row["Plant_Price"];
    }

    $sql3="INSERT INTO Donations_Info(User_Id,User_FirstName,User_LastName,User_Email,Plant_Id,Plant_Name,Plant_Price) VALUES ('$us_id','$us_fnm','$us_lnm','$us_em','$pl_id','$pl_nm','$pl_pr')";
    $result3=$conn->query($sql3);

    if ($result3 === TRUE)
      {
          echo '<script>';
          echo 'alert("Thank You For Your Contribution!!")';
          echo '</script>';
      }
      else
      {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  else
  {
    echo '<script>';
    echo 'alert("Login First to make your Contribution")';
    echo '</script>';
  }
  }
?>