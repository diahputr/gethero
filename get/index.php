<!DOCTYPE html>
<html>
  <head>
    <title>GET Method</title>
    <link rel="stylesheet" href="css/style.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/metode.js"></script>
  
  </head>	
  <body>
	<div class="container">
		<div class="main">
	      <form  method="get" action="index.php" id="form">
			<h2>Form Pemesanan GoBluebird</h2><hr/>		
			
			<label>Nama :</label>
			<input type="text" name="fnama" id="fnama" />
			
			<label>Alamat Penjemputan:</label>
			<input type="text" name="lalamat" id="lalamat" />
		      	
		      	<label>Alamat Tujuan:</label>
			<input type="text" name="talamat" id="talamat" />
			
			<input type="submit" name="submit" id="submit" value="Submit">
		  </form>
		<?php include "proses.php";?>
		</div>
   </div>
 
  </body>
</html>
