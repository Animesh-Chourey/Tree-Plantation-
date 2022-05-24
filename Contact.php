<!DOCTYPE html>
<html>
<head>
	<style>
		#container{
			    height: 800px;
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
                height: 310px;
                width: 250px;
                float: left;
              }
        #mpart{
                height: 600px;
                width: 900px;
                float: left;
              }
        #rpart{
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
                 <li> <a href="Home.php"> Home </a></li> 
                 <li> <a href="Plants.php"> Plants </a> </li>
                 <li> <a href="LoginPage.php"> SignUp </a> </li>
                 <li id="select"> <a href="Contact.php"> Contact </a> </li>
                </h3> 
             </ol>
		</div>

		<div id="PicSection">
			<p> <br> You Don’t Know What You’ve Got <br> ‘Till It’s Gone.</p>
			<h2> <br> Plant A Tree. <br> Grow A Tree. <br> <span style="color: yellow;font-size: 34px;"> Save The Future. </span> </h2>
		</div>
		<br>

		<div id="lpart">
			<center style="margin-top: 5px;color: white;text-shadow:2px 1px 1px black;"> Contact Us </center>
			<div style="margin-left: 10px;height: 310px;width: 230px;margin-top: 10px;color: white;font-style: italic;text-shadow:1px 1px 1px black">
                <br>For further inquiries, help or suggestions. You may contact us through the following:<br><br><br>
                Phone: <p style="margin-top: -17px;margin-left: 50px;color: black;font-style: normal;text-shadow: none;">8989430759  <br>9824383111
                       </p>
                Mail: <p style="margin-top: -18px;margin-left: 45px;color: black;font-style: normal;text-shadow: none;">anichourey@gmail.com  <br>risshukla@gmail.com
                       </p>
                Address: <p style="margin-top: -18px;margin-left: 60px;color: black;font-style: normal;text-shadow: none;">HB-101/102 Khajuri Nagar, Near Palasiya Sq, Indore
                       </p>
            </div>
		</div>

		<div id="mpart">
            <div style="margin-left: 20px;margin-top: 20px;height: 500px;width: 850px;">
                <center><h2> Send us a Message </h2> </center>
                <form method="post" action="<?php $_PHP_SELF ?>">
                    <div style="width: 350px;height: 200px;float: left;margin-top: 30px;margin-left: 150px;">
                        First Name <br><br><input type="text" name="fname" id="fname" placeholder="Enter First Name"><span id="span_fname"></span><br><br><br>
                        Email <br><br><input type="email" name="email" id="email" placeholder="Enter Mail"><span id="span_email"></span>
                    </div>
                    <div style="width: 300px;height: 200px;float: left;margin-top: 30px;margin-left: 10px">
                        Last Name <br><br><input type="text" name="lname" id="lname" placeholder="Enter Last Name"><span id="span_lname"></span><br><br><br>
                        Contact Number <br><br><input type="text" name="cont_no" id="cont_no" placeholder="Enter Contact Number"><span id="span_contact">
                    </div>
                    <p style="margin-left: 240px;">
                    Message <br><br><textarea name="message" id="message" cols="50" rows="7" placeholder="Enter your query"></textarea><span id="span_message"></p>
                    <center><br><br><input type="submit" name="sub_mit" onclick="return contact_validate()"><input type="reset" value="Reset"></center>
                </form>
            </div>
		</div>
		

		<div id="rpart">
			
		</div>

	</div>

	<script>
		function contact_validate()
		 {
			var f_name=document.getElementById('fname');
            var l_name=document.getElementById('lname');
            var e_mail=document.getElementById('email');
            var cont_num=document.getElementById('cont_no');
            var mess_age=document.getElementById('message');
			
            if(f_name.value.trim()==="")
          {
            var span_fname=document.getElementById('span_fname');
            span_fname.innerHTML="Name is required";
            span_fname.style.color="red";
            f_name.focus();
            return false;
          }
          else
          {
            regu=/^[A-Za-z]+$/;
            if(regu.test(f_name.value))
            {
              var span_fname=document.getElementById('span_fname');
              span_fname.innerHTML="Valid";
              span_fname.style.color="white";
            }
            else
            {
              var span_fname=document.getElementById('span_fname');
              span_fname.innerHTML="Invalid";
              span_fname.style.color="red";
              f_name.focus();
              return false;
            }
          }

          if(l_name.value.trim()==="")
          {
            var span_lname=document.getElementById('span_lname');
            span_lname.innerHTML="Can't leave blank";
            span_lname.style.color="red";
            l_name.focus();
            return false;
          }
          else
          {
            regu1=/^[A-Za-z]+$/;
            if(regu1.test(l_name.value))
            {
              var span_lname=document.getElementById('span_lname');
              span_lname.innerHTML="Valid";
              span_lname.style.color="white";
            }
            else
            {
              var span_lname=document.getElementById('span_lname');
              span_lname.innerHTML="Invalid";
              span_lname.style.color="red";
              l_name.focus();
              return false;
            }
          }

          if(e_mail.value.trim()==="")
          {
            var span_email=document.getElementById('span_email');
            span_email.innerHTML="Can't leave blank";
            span_email.style.color="red";
            e_mail.focus();
            return false;
          }
          else
          {
            var regu2=/^\w+([\._]?\w+)*@\w+([\._]?\w+)*(\.\w{2,3})+$/;
            if(regu2.test(e_mail.value))
            {
              var span_email=document.getElementById('span_email');
              span_email.innerHTML="Valid";
              span_email.style.color="white";           
            }
            else
            {
              var span_email=document.getElementById('span_email');
              span_email.innerHTML="InValid";
              span_email.style.color="red";
              e_mail.focus();
              return false;
            }
          }

          if(cont_num.value.trim()==="")
          {
            var span_contact=document.getElementById('span_contact');
            span_contact.innerHTML="Can't Leave Blank";
            span_contact.style.color="red";
            cont_num.focus();
            return false;
          }
          else
          {
            regu6=/^[789][0-9]{9}$/;
            if(regu6.test(cont_num.value))
            {
              var span_contact=document.getElementById('span_contact');
              span_contact.innerHTML="Valid";
              span_contact.style.color="white";
            }
            else
            {
              var span_contact=document.getElementById('span_contact');
              span_contact.innerHTML="Invalid";
              span_contact.style.color="red";
              cont_num.focus();
              return false;
            }
          }

          if(mess_age.value.trim()==="")
          {
            var span_message=document.getElementById('span_message');
            span_message.innerHTML="Enter your query";
            span_message.style.color="red";
            mess_age.focus();
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

    if (isset($_POST['email']))
    {
     	$fna_me=$_POST['fname'];
      $lna_me=$_POST['lname'];
      $ma_il=$_POST['email'];
      $cont=$_POST['cont_no'];
      $msg=$_POST['message'];

     	$sql="INSERT INTO Contact_Info (Cont_FirstName,Cont_LastName,Cont_Email,Cont_Number,Cont_Message) VALUES ('$fna_me','$lna_me','$ma_il','$cont','$msg')";
      	$result=$conn->query($sql);

    	if ($result === TRUE)
    	{
        	echo '<script>';
        	echo 'alert("Thanks for your feedback!!")';
        	echo '</script>';
    	}
    	else
    	{
        	echo "Error: " . $sql . "<br>" . $conn->error;
    	}
 
    }
     $conn->close();
?>