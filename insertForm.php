<?php

			$server="localhost";
			$user="id6462985_shreyagarg10";
			$pass="shreyagarg10";
			$db="id6462985_websitedata";
			$t="";
			$conn=mysqli_connect($server,$user,$pass,$db);
			
?>			
			
		<html>
	<head>
	<meta charset="utf-8">
 		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 
		<style>
		.container
		{
			height:800px;
			width:800px;
			border-spacing:15px;
			border-width:10px;
			border-color:white;
			background-color: #DCF5DF;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		}
		.btn
			{
				background-color: #6CC777;
				color:white;
				font-size: 20px;
				font-weight: 400;
				width:500px;
			}
		</style>
	</head>
	<body>
		<h1 align="center">PLANTS DATABASE</h1>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
		<form method="post" action="insert.php" enctype="multipart/form-data">
			<div class="form-group"> 
			<label for="plantname" class="control-label">Plant Name</label>
		<input type="text" onblur="content(this.value)" class="form-control" id="plantname" placeholder="Plant's Name" name="plantsName" required>
			<span id="span1" class="text-danger"></span>
			</div>
			<div class="form-group"> 
			<label for="commonname" class="control-label">Common Name</label>
			<input type="text"  placeholder="Common name " class="form-control" id="commonname" name="commonName" required>
				<span id="span2" class="text-danger"></span>
			</div>
			<div class="form-group"> 
			<label for="family" class="control-label">Family</label>
			<input type="text"   placeholder="Family to which plant belongs " class="form-control" id="family" name="family" required>
				<span id="span3" class="text-danger"></span>
			</div>
			<div class="form-group"> 
			<label for="chemical" class="control-label">Chemical Constituents</label>
			<input type="text"  placeholder="Chemical constituent" class="form-control" id="chemical" name="chemical" required>
				<span id="span4" class="text-danger"></span>
			</div>
			<div class="form-group"> 
			<label for="partsused" class="control-label">Parts Used</label>
			<input type="text"  placeholder="Parts used" class="form-control" id="partsused" name="partsUsed" required>
				<span id="span5" class="text-danger"></span>
			</div>
			<div class="form-group"> 
			<label for="disease" class="control-label">Treatment of disease</label>
			<input type="text"  placeholder="Diseses cured" class="form-control" id="disease" name="disease" required>
				
			<p class="text-muted" >Enter the disease name separated by commas</p>
			</div>
			<div class="form-group"> 
			<label for="geographic" class="control-label">Geographic distribution</label>
			<input type="text"  placeholder="Geographic Distribution" class="form-control" id="geographic" name="geographic" required>
				<p class="text-muted" >Enter the geographic location name separated by commas</p>
			
			</div>
			<div class="form-group"> 
			<label for="image" class="control-label">Select the images</label>
		<input type="file" id="image" name="img[]"  value="" multiple> </div>
			<div class="form-group" required> 
			<button type="submit" name="submit"  class="btn ">SUBMIT</button>
			</div> 
		</form>
			
		</div>
			</div>
				</div>
		
		
		
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		
		<script>
		function content(value)
			{
				console.log(value);
				var req=new XMLHttpRequest;
	req.open("get","https://plantswebsite.000webhostapp.com/ajax.php?plantsName="+value,true);
				req.send();
				req.onreadystatechange=function()
				{
					if(req.readyState==4 && req.status==200)
						{
							document.getElementById("span1").innerHTML=req.responseText;
						}
					else 
						return null;
				};
				
			}
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	</body>


</html>