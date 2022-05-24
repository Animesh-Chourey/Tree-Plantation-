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
                background-color: chocolate;
                height: 200px;
                width: 800px;
                margin-left: 190px;
              }   
		#lpart{
                background-color: plum;
                height: 300px;
                width: 250px;
                float: left;
              }
        #mpart{
                background-color: blueviolet;
                height: 150px;
                width: 700px;
                float: left;
              }
        #rpart{
                background-color:plum;
                height: 300px;
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

        #menu th:hover{
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
					<th> <a href="Fruits.php" target="_parent"> <b> Home </b></a> </th>
					<th> <a href="About.php" target="_parent"> <b> About Us </b></a> </th>
				</tr>	
			</table>
		</div><br>

		<div id="lpart"></div>

		<div id="mpart">
				
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