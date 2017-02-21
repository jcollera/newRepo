<!DOCTYPE html>
<html lang="en">
	<head>
	
	<!-- Add appropriate required meta tags needed for the responsive webpage using bootstrap -->
	
	<!-- Add required bootstrap CDN links for style sheet and required scripts -->
		
		<meta charset="utf-8">
		<meta George Hatch>
        <meta Jacob Colleran>
		<meta CT310>
		<meta Home Page>
    <meta IFY>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="project1.css">
		<title>IFY</title>

	</head>


	<body>

	<!-- Use the jumbotron for creating the header for the webpage -->

		<div class="jumbotron">
		
        <br></br> <br></br> <br></br> <br></br><br></br><br></br>
        
		</div>
	
	<!-- Create the collapsing navigation bar -->
		
		
            <?php include('inc.navbar.php');?>
		
		<div class="container-fluid">
	
		<div class="row1">
            <h1>Welcome</h1>
            <p>Choose from our three ingredients to help you spice up your life!</p>
		</div>
		
			<div class="row">
			
	<!-- first ingredient-->
                <div class="col-xs-4">
                    <h3><center><strong>Shallots</strong></center></h3>
                    <center><img src="ing1.jpg" class="img-square" alt="ing1" width=70% height=70%></center>
                    <p><center>This tastes great on Chicken</center></p>
                    <br></br>
                </div>

	<!--second ingredient -->
                <div class="col-xs-4">
                    <h3><center><strong>Snap Peas</strong></center></h3>
                    <center><img src="ing2.jpg" class="img-square" alt="ing2" width=70% height=70%></center>
                    <p><center>This tastes great on Fish</center></p>
                    <br></br>
                </div>
   
	<!-- thrid ingredient -->				
                <div class="col-xs-4">
                    <h3><center><strong>Collard Greens</strong></center></h3>
                    <center><img src="ing3.jpg" class="img-square" alt="ing3" width=70% height=70%></center>
                    <p><center>This tastes great on Beef</center></p>
                    <br></br>
                </div>
			</div>
		</div>
		
        <?php include('inc.footer.php');?>
	</body>
</html>
