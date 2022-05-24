<!DOCTYPE html>
<html>
<head>

	<style>
/*	*{
		margin: 0px;
	}*/
		#container{
			          height: 1000px;
			          width: 1200px;
                margin: auto;
                margin-top: 20px;
            }
         #menu{
                /*background-color: chocolate;*/
                height: 200px;
                width: 800px;
                margin-left: 190px;
              }   
		    #lpart{
                background-color: plum;
                height: 400px;
                width: 250px;
                float: left;
              }
        #mpart{
                background-color: blueviolet;
                height: 700px;
                width: 700px;
                float: left;
              }
        #mpart table{
                border: 1px solid red;
                margin-top: 20px;
              }
        #rpart{
                background-color:plum;
                height: 400px;
                width: 250px;
                float: left;
             }
        #firstimage{
        	width: 300px;
        	height: 100px;
        	float: left;
        }
        #secondimage{
        	float: left;
        	height: 100px;
        	width: 200px;
        }
        #thirdimage{
        	float: left;
        	height: 100px;
        	width: 294px;
        }
        #menu tr th {
  			border: 3px solid white;
		}
        
        /*#menu td tr{
        	color: red;
        	border: solid palegreen 5px; 
        }*/

        #menu tr td:hover{
               color: red;        
         }

        body{
  			background-image: url("Green.jpg");
  			background-repeat: no-repeat;
  			background-attachment: fixed;
		}

	</style>
	
	<title></title>
</head>
<body>
	<div id="container">
		<div id="menu">
			<table>
				<tr></tr>
				<tr> 
					<td colspan="4"><div id="firstimage"><img src="ABC.jpg" width="300px" height="100px"></div><div id="secondimage"><img src="ABC.jpg" width="200px" height="100px"></div><div id="thirdimage"><img src="ABC.jpg" width="295px" height="100px"></div></td>  
				</tr>
				<tr>
					<th> <a href="Home.php" target="_parent"> <b> Home </b></a> </th>
					<th> <a href="Plants.php" target="_parent"> <b> Plants </b></a> </th>
					<th> <a href="LoginPage.php" target="_parent"> <b> Login </b></a> </th>
					<th> <a href="About.php" target="_parent"> <b> About Us </b></a> </th>
				</tr>	
			</table>
		</div><br>

		<div id="lpart">
    Login:
      <div style="background-color: white;height: 200px;width: 200px;margin-left: 20px;margin-top: 10px">
        Email<br><input type="email" name="Login_Email"><br>
        Password<br><input type="password" name="Login_Password"><br><br>
        <input type="submit" name="Subs" value="Login">
      </div>  
    </div>

		<div id="mpart">
      <form method="post" action="<?php $_PHP_SELF ?>">
        <table align="center">
        <caption><h1> Create An Account </h1></caption>

        <tr>
          <td>First Name</td>
          <td><input type="text" name="fname" id="fname" placeholder="Enter First Name"></td>
          <td><span id="span_fname"></span></td>
        </tr>
        
        <tr>
          <td>Last Name</td>
          <td><input type="text" name="lname" id="lname" placeholder="Enter Last Name"></td>
          <td><span id="span_lname"></span></td>
        </tr>
        
        <tr>
          <td>Email</td>
          <td><input type="email" name="email" id="email" placeholder="Enter Email"></td>
          <td><span id="span_email"></span></td>
        </tr>
        
        <tr>
          <td>Password</td>
          <td><input type="password" name="pass" id="pass" placeholder="Enter Password"></td>
          <td><span id="span_password"></td>
        </tr>
        
        <tr>
          <td>Re-Enter Password</td>
          <td><input type="password" name="repass" id="repass" placeholder="Re-enter Password"></td>
          <td><span id="span_repassword"></td>
        </tr>
        
        <tr>
          <td>Gender</td>
          <td>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
          </td>
          <td><span id="span_gender"></td>
        </tr>
        
        <tr>
          <td>Contact No</td>
          <td><input type="text" name="cont_no" id="cont_no" placeholder="Enter Contact Number"></td>
          <td><span id="span_contact"></td>
        </tr>
        
        <tr>
          <td>Address</td>
          <td><textarea name="address" id="address" cols="10" rows="4" placeholder="Enter Address here"></textarea></td>
          <td><span id="span_address"></td>
        </tr>
        
        <tr>
          <td>State</td>
          <td>
            <select name="state" id="state">
              <option selected>--------Select--------</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Delhi">Delhi</option>
              <option value="Gujrat">Gujrat</option>
            </select>
          </td>
          <td><span id="span_state"></td>
        </tr>

        <tr>
          <td></td>
          <td>
            <br><input type="submit" value="Sign Up" onclick="return validate()">
                <input type="reset" value="Reset">
          </td>
          <td></td>
        </tr>
      </table>
      </form>

      <script>
        function validate()
        {
          var f_name=document.getElementById('fname');
          var l_name=document.getElementById('lname');
          var e_mail=document.getElementById('email');
          var pass_word=document.getElementById('pass');
          var re_pass=document.getElementById('repass');
          var ma_le=document.getElementById('male');
          var fe_male=document.getElementById('female');
          var cont_num=document.getElementById('cont_no');
          var add_ress=document.getElementById('address');
          var sta_te=document.getElementById('state');
          
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
          /*else
          {
            regu2=/^/;
          }*/

          if(pass_word.value.trim()==="")
          {
            var span_password=document.getElementById('span_password');
            span_password.innerHTML="Can't Leave Blank";
            span_password.style.color="red";
            pass_word.focus();
            return false;
          }

          if(re_pass.value.trim()==="")
          {
            var span_repassword=document.getElementById('span_repassword');
            span_repassword.innerHTML="Can't Leave Blank";
            span_repassword.style.color="red";
            re_pass.focus();
            return false;
          }

          if(ma_le.checked===false && fe_male.checked===false)
          {
            var span_gender=document.getElementById('span_gender');
            span_gender.innerHTML="Select Gender";
            span_gender.style.color="red";
            ma_le.focus();
            return false;
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

          
          }
      </script>

		</div>
		<br>

		<div id="rpart">
			Subscribe:
			<div style="background-color: white;height: 200px;width: 200px;margin-left: 20px;margin-top: 10px">
				Your Name<br><input type="text" name="Subscibe_Name"><br>
				Your Email<br><input type="email" name="Subscribe_Email"><br>
				<input type="checkbox" name="pri_policy"> I accept privacy policy<br>
				<input type="submit" name="Subs" value="Subscribe">
			</div>
		</div>

	</div>
</body>
</html>