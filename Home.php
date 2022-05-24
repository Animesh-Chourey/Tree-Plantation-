<!DOCTYPE html>
<html>
<head>
	<style>
		#container{
			    height: 1000px;
			    width: 1200px;
                margin: auto;
                margin-top: 10px;
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
                height: 950px;
                width: 700px;
                float: left;
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
        #PicSection{
        	background-image: url("PicSection.jpg");
        	height:370px;
        }
        #PicSection p{
        	color: white;
        	text-align:left;
        	padding-left: 127px;
        	padding-top: 13px;
        	margin: 0px;
        	font-size:25px;
        	text-shadow:2px 1px 1px black;
        }
        #PicSection h2{
        	color: white;
        	text-align:left;
        	padding-left: 127px;
        	padding-top: 13px;
        	margin: 0px;
        	font-size: 30px;
        	text-shadow:2px 1px 1px black;
        }
	</style>
</head>
<?php  session_start();?>
<body>
	<div id="container">
		<div class="menu">
			<div style="height: 15px"></div>
			<div id="nm"> <a href="Home.php"> <h1> Go Green <br> <h3 style="color: white"> Save Trees Plant Trees </h3> </h1> </a> </div>
			<ol id="pages">
				<h3>
                 <li id="select"> <a href="Home.php"> Home </a></li> 
                 <li> <a href="Plants.php"> Plants </a> </li>
                 <li> <a href="LoginPage.php"> SignUp </a> </li>
                 <li> <a href="Contact.php"> Contact </a> </li>
                </h3> 
             </ol>
		</div>

		<div id="PicSection">
			<p> <br> You Don’t Know What You’ve Got <br> ‘Till It’s Gone.</p>
			<h2> <br> Plant A Tree. <br> Grow A Tree. <br> <span style="color: yellow;font-size: 34px;"> Save The Future. </span> </h2>
		</div>
		<br>

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
			<div style="float: left;width: 625px;height: 950px;margin-left: 35px;">
			<h1 align="center"> "One touch of nature makes the whole world kin." </h1>
			<h3 align="center"> ― William Shakespeare </h3>
			<h1 align="center"> "The care of the Earth is our most ancient and most worthy, and after all, our most pleasing responsibility." </h1>
			<h3 align="center"> ― Wendell Berry </h3>
			<h1 align="center"> "A nation that destroys its soils destroys itself. Forests are the lungs of our land, purifying the air and giving fresh strength to our people." </h1>
			<h3 align="center"> ― Franklin D. Roosevelt  </h3>
			<h1 align="center"> "Someone's sitting in the shade today because someone planted a tree a long time ago." </h1>
			<h3 align="center"> ― Warren Buffett </h3> <br>
			<p>
				<h3>Our resources finite,Our need for those resources infinite.
				<br>Plantating the trees and nurturing them is one of the most important constituents and criteria that should be made a priority.
				<br></h3>  
			</p>
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
    }

     if(!empty($ma_il))
     {	
     	if (!empty($pa_ss)) {
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
     elseif ($temp==0) {
     	# code...
     	#echo "empty";
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