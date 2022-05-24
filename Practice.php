<!DOCTYPE html>
<html>
<head>

	<style>
	* {
 		 box-sizing: border-box;
	}
	body, html
	{
  		height: 100%;
  		margin: 0;
  		font-family: Arial, Helvetica, sans-serif;
	}
	#whole
	{
		width: 100%;
		height: 100%;
	}
		#container{

			    height: 1000px;
			    width: 1200px;
                margin: auto;
                margin-top: 20px;
            }
         #container #menu{
                background-color: chocolate;
                height: 200px;
                width: 800px;
                margin-left: 190px;
              }   
		#container #lpart{
                background-color: plum;
                height: 400px;
                width: 250px;
                float: left;
              }
        #container #mpart{
                background-color: blueviolet;
                height: 150px;
                width: 700px;
                float: left;
              }
        #container #rpart{
                background-color:plum;
                height: 400px;
                width: 250px;
                float: left;
             }
        #container #firstimage{
        	width: 300px;
        	height: 100px;
        	float: left;
        }
        #container #secondimage{
        	float: left;
        	height: 100px;
        	width: 200px;
        }
        #container #thirdimage{
        	float: left;
        	height: 100px;
        	width: 294px;
        }

       #whole #bg_img{
  			background-image: url("Green.jpg");
  			background-repeat: no-repeat;
  			background-attachment: fixed;
  			background-position: center;
  			background-size: cover;

  			height: 100%;
  			width: 100%;

  			filter: blur(4px);
  			/*-webkit-filter: blur(8px);*/
		}

	</style>
	
	<title></title>
</head>
<body>
	<div id="whole">
		<div id="bg_img">
	<div id="container">
		<div id="menu">
			<table>
				<tr> 
					<td colspan="4"><div id="firstimage"><img src="ABC.jpg" width="300px" height="100px"></div><div id="secondimage"><img src="ABC.jpg" width="200px" height="100px"></div><div id="thirdimage"><img src="ABC.jpg" width="295px" height="100px"></div></td>  
				</tr>
				<tr>
					<th> <a href="Home.php" target="_parent"> <b> Home </b></a> </th>
					<th> <a href="Plants.php" target="_parent"> <b> Home </b></a> </th>
					<th> <a href="Fruits.php" target="_parent"> <b> Home </b></a> </th>
					<th> <a href="About.php" target="_parent"> <b> About Us </b></a> </th>
				</tr>	
			</table>
		</div><br>

		<div id="lpart"></div>

		<div id="mpart">
				<table>
					<tr> 
						<td colspan="4"><div id="firstimage"><img src="ABC.jpg" width="300px" height="100px"></div><div id="secondimage"><img src="ABC.jpg" width="200px" height="100px"></div></td>  
					</tr>
					<tr>
						<th> <a href="Home.php" target="_parent"> <b> Home </b></a> </th>
						<th> <a href="Plants.php" target="_parent"> <b> Home </b></a> </th>
						<th> <a href="Fruits.php" target="_parent"> <b> Home </b></a> </th>
						<th> <a href="About.php" target="_parent"> <b> About Us </b></a> </th>
					</tr>	
				</table>
		</div>
		<br>
		<div id="rpart">
			Subscribe:
			<div style="background-color: white;height: 200px;width: 200px;margin-left: 20px;margin-top: 10px">
				Your Name<br><input type="text" name="Subscibe_Name"><br>
				Your Email<br><input type="text" name="Subscribe_Email"><br>
				<input type="submit" name="Subs" value="Subscribe"><br>
			</div>
		</div>

	</div>
	</div>
</div>
</body>
</html>

