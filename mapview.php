<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
			<title>HOME</title>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
			<meta name="viewport" content="initial-scale=1.0">
			<meta charset="utf-8">

			<link rel="stylesheet" href="css/style.css">
			
			
	<body>
		<h1>
			MONTSAMAISA
		</h1>
		<div class="form">
		
		<div class="tab-content">

		<ul class="tab-group">
			<table style="width:100%">
				<tr>
					<th><a href = "index.php"> HOME</a> </th>
					<th><a href = "help_mapview.php"> HELP </a> </th>
				</tr>

			</table>
		</ul>
		
		<h2><font color="grey"> MAP VIEW WITH PLOTTED ROUTE</h2>
		
		<iframe width="100%" height="400"		
		 frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJv6nuLDxbux4RoRGul5N2oUk&key=AIzaSyBH6rLsE6ls19YT_evVD3dti7qjUUqJTy8" allowfullscreen></iframe>
	<br> </br>
	<form name="map_view" method="post" action="arduino.php">
		<div class="subSearch">
			<input type="submit" name="submit" value="UPLOAD TO CANE" />
			<input type="hidden" name="submitted" value="TRUE" />
        </div>
	</form>
	
	</div>
		
	</div>
	</body>
</html>