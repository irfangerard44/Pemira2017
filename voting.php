<?php

session_start();
include("functions/functions.php");

if (!isset($_SESSION['username'])) {
  echo "<script>window.open('index.php','_self')</script>";
}
//else {
  //echo "";
//}


 ?>
<html>
<head>
  <title>Vote | Pemira KM ITERA 2017</title>
</head>

<link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flash Registration Form  Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'></head>
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<body>
<script src="_so/js?//stackoverflow.com/questions/17541614/use-thumbnail-image-instead-of-radio-button" id="so"></script>
<meta charset=utf-8 />

	<style>
		img {
    		border-radius: 5px;
			z-index:3;
		}
		label > input{ /* HIDE RADIO */
  			visibility: hidden; /* Makes input not-clickable */
  			position: absolute; /* Remove input from document flow */
		}
		label > input + img{ /* IMAGE STYLES */
  			cursor:pointer;
  			border:5px solid transparent;
  			-webkit-transition-duration: 0.4s; /* Safari */
		}
		label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
  		border:5px solid #4CAF50;
		}
	</style>
</head>
	<div class="header">
			<h1>Pemira 2017</h1><br>
      <h2>Keluarga Mahasiswa</h2><br>
      <h2>Institut Teknologi Sumatera</h2>

<body>
			<div class="main">
				<div class="main-section">
					<div class="login-section">
						<h2>Kandidat</h2>
						<form action="" method="post">                      
   							<label>                                              
                        		<input type="radio" name="kandidat" value="1" >
                        		<img src="img/DP5.JPG" alt="Paris" width="300" height="300" id="imgClickAndChange" onClick="changeImage()" >
        					</label>
                        	<label>
                        		<input type="radio" name="kandidat" value="2">
                        		<img src="img/ADP3.JPG" alt="Paris" width="300" height="300" id="imgClickAndChange1" onClick="changeImage1()">
                        	</label>
                        		<input type="submit" name="vote" value="vote" style="width: 150px; margin: 0 auto;">
                        	</form>
                        </div>
						<script language="javascript">
    						function changeImage() {
                    			document.getElementById("imgClickAndChange").src = "img/DP1.JPG";
								document.getElementById("imgClickAndChange1").src = "img/ADP3.JPG";
							}
							function changeImage1() {
								document.getElementById("imgClickAndChange").src = "img/DP5.JPG";
								document.getElementById("imgClickAndChange1").src = "img/ADP4.JPG";
           					}
						</script>

				<div class="footer">
						<p>&copy 2017 Departemen Teknokreator. <br> Himpunan Mahasiswa Elektro Informatika <br> Institut Teknologi Sumatera</p>
			</div>
	</div>
 <?php voting(); ?>
</body>
</html>
