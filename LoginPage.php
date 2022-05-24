<!DOCTYPE html>
<html>
<head>

<style>
        #container{
          height: 1220px;
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
                height: 700px;
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
<?php session_start();?>
<body>
  <div id="container">
    <div class="menu">
      <div style="height: 15px"></div>
      <div id="nm"> <a href="Home.php"> <h1> Go Green <br> <h3 style="color: white"> Save Trees Plant Trees </h3> </h1> </a> </div>
      <ol id="pages">
        <h3>
                 <li> <a href="Home.php"> Home </a></li> 
                 <li> <a href="Plants.php"> Plants </a> </li>
                 <li id="select"> <a href="LoginPage.php"> SignUp </a> </li>
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
      <form method="post" action="<?php $_PHP_SELF ?>">
        <table align="center" cellpadding="10px" cellspacing="10px">
        <caption><h1 style="color: blue"> Create An Account </h1></caption>

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

          if(pass_word.value.trim()==="")
          {
            var span_password=document.getElementById('span_password');
            span_password.innerHTML="Can't Leave Blank";
            span_password.style.color="red";
            pass_word.focus();
            return false;
          }
          else
          {
            var regu3=/^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[!@#$%^&*()_+]).{8,}$/;
            if(regu3.test(pass_word.value))
            {
              var span_password=document.getElementById('span_password');
              span_password.innerHTML="Valid";
              span_password.style.color="white"; 
            }
            else
            {
              var span_password=document.getElementById('span_password');
              span_password.innerHTML="InValid";
              span_password.style.color="red"; 
              pass_word.focus();
              return false;
            }   
          }

          if(re_pass.value.trim()==="")
          {
            var span_repassword=document.getElementById('span_repassword');
            span_repassword.innerHTML="Can't Leave Blank";
            span_repassword.style.color="red";
            re_pass.focus();
            return false;
          }
          else
          {
            var regu4=/^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[!@#$%^&*()_+]).{8,}$/;
            if(regu4.test(re_pass.value))
            {
              var span_repassword=document.getElementById('span_repassword');
              span_repassword.innerHTML="Valid";
              span_repassword.style.color="white"; 
            }
            else
            {
              var span_repassword=document.getElementById('span_repassword');
              span_repassword.innerHTML="InValid";
              span_repassword.style.color="red"; 
              re_pass.focus();
              return false;
            }   
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
    
    if(isset($_POST['pass']))
    {
      $fna_me=$_POST['fname'];
      $lna_me=$_POST['lname'];
      $ma_il=$_POST['email'];
      $pa_ss=$_POST['pass'];
      $gen_der=$_POST['gender'];
      $cont=$_POST['cont_no'];
      $addr=$_POST['address'];
      $s_tate=$POST['state'];

      $sql="INSERT INTO User_Info (User_FirstName,User_LastName,User_Email,User_Password,User_Gender,User_Contact,User_Address,User_State) VALUES ('$fna_me',
              '$lna_me','$ma_il','$pa_ss','$gen_der','$cont','$addr','$s_tate')";
      $result=$conn->query($sql);

      if ($result === TRUE)
      {
        echo '<script>';
        echo 'alert("Account Created Successfully!!")';
        echo '</script>';
      }
      else
      {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
    //else
      //echo "Not set a";
    
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