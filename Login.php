 
 <?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
<TITLE>My </TITLE>
<meta name="author" content="Jake Colleran" />
<meta name="description" content="about the author" />
<meta name="keywords" content="HTML, CT310" />




<link rel="stylesheet"
	href="./project1.css"
	type="text/css" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="project1.css">
</head>
<body>


		<div class="jumbotron">
		
        <br></br> <br></br> <br></br> <br></br><br></br><br></br>
        
		</div>



<?php include('inc.navbar.php');?>
    		<div class="container-fluid">
	
		<div class="row1">
            <h1>Welcome</h1>
            <p>Choose from our three ingredients to help you spice up your life!</p>
		</div>

<div>
    
       

<div class="row">
	<br></br> 	
<?php 

    if (isset ( $_GET ['name'] ) && ($_GET ['name'] == "ct310")  && (isset ( $_GET['Pass']  )) && (md5( $_GET['Pass']) == "48f2f942692b08ec9de1ef9ada5230a3")): ?>
    <p>Login success! </p> 
    <?php elseif (isset ( $_GET ['name'] ) && ($_GET ['name'] == "jcollera")  && (isset ( $_GET['Pass']  )) && (md5( $_GET['Pass']) == "4fe42f949ec7c09c8e5e1f44cf963b94")): ?>
    <p>Login success! </p> 
    <?php elseif (isset ( $_GET ['name'] ) && ($_GET ['name'] == "George")  && (isset ( $_GET['Pass']  )) && (md5( $_GET['Pass']) == "5f4dcc3b5aa765d61d8327deb882cf99")): ?>
    <p>Login success! </p> 
    <?php else: ?>
    
    <form action="#" method="GET">
    <input type="text" name="name" placeholder="Username"><br/>
        <input type="text" name="Pass" placeholder="Password"><br/>
        
    <input type="submit" value="login">
    
                   <p>Login Failed! </p>
                   <?php
                   $nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 days; 24 hours; 60 mins; 60 secs
                echo 'Date:       '. date('Y-m-d') ."\n";
                echo 'Time:       '. time() ."\n";
                ?>
    </form>




    <?php endif; ?>

</div>
					


	<div class="footer">
		<nav class="navigation">

	</nav>
	&copy; Copyright 2017,
	
	</div>


</div>


</html>
