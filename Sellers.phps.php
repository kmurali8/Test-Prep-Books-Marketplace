<?php
     $link = mysqli_connect("sql3.freemysqlhosting.net:3306", "sql380308", "yY2%eE1*", "sql380308");
     if(isset($_POST["submit"])){
        $seller = $_POST["inputSeller"];
        $title = $_POST["inputTitle"];
        $publisher = $_POST["inputPublisher"];
        $condition = $_POST["inputCondition"];
        $price = $_POST["inputPrice"];
        $query = "INSERT INTO `sql380308`.`entries` (`seller`,`title`, `publisher`, `condition`, `price`)VALUES('$seller', '$title', '$publisher', '$condition', '$price')";
        mysqli_query($link, $query);
     }
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- <style type="text/css"> -->
	<link href = "css/styles.css" rel = "stylesheet">
	
	
		
		
		
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
	
	
	
	<div class = "navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class ="navbar-header">
				<button type = "button" class="navbar-toggle"   data-toggle="collapse" data-target=".navbar-collapse"> 
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Book MarketPlace</a>
				
				
			
			</div>
			<div class="navbar-collapse collapse">
				<ul class ="nav navbar-nav navbar-right">
					<li><a href="Marketplace.php">Home</a></li>
					<li><a href="Buyers.php">Buyer</a></li>
					<li class = "active"><a href="Sellers.php">Seller</a></li>
					
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Theme Layout<b class="caret"></b></a>
						
					<ul class = "dropdown-menu">
						<li class="dropdown-header">Admin & Dashboard</li>
						<li><a href = "#">Standard</a></li>
						<li><a href = "#">Night Mode</a></li>
					</ul>
					
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class = "container">
		
		<div class ="jumbotron">
		
			<center><h2> TJHSST Book Marketplace: </h2>
			<p> </p>
			<p> </p>
			<p> </p>
			<p> </p>
			<p> Sellers</p>
			
			
			<a class = "btn btn-success" href="Buyers.php">Buyers</a>
			
			<a class = "btn btn-success" href="Sellers.php">Sellers</a> </center>
			
		</div>
	</div> 
	
	
	<form class="form-horizontal" method="post">
    <div class="form-group">
        <label for="inputSeller" class="control-label col-xs-2">Seller Name (Your Name)</label>
        <div class="col-xs-5">
            <input type="Seller" class="form-control" name="inputSeller" placeholder="Seller">
        </div>
    </div>
    <div class="form-group">
        <label for="inputTitle" class="control-label col-xs-2">Book Title</label>
        <div class="col-xs-5">
            <input type="Title" class="form-control" name="inputTitle" placeholder="Title">
        </div>
    </div>

    <div class="form-group">
        <label for="inputPublisher" class="control-label col-xs-2">Publisher</label>
        <div class="col-xs-5">
            <input type="Publisher" class="form-control" name="inputPublisher" placeholder="Publisher">
        </div>
    </div>
    <div class="form-group">
        <label for="inputCondition" class="control-label col-xs-2">Condition (Heavily Used, Moderately Used, Lighly Used, New)</label>
        <div class="col-xs-5">
            <input type="Condition" class="form-control" name="inputCondition" placeholder="Condition">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPrice" class="control-label col-xs-2">Price (Input Decimal)</label>
        <div class="col-xs-5">
            <input type="Price" class="form-control" name="inputPrice" placeholder="Price">
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-5">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </div>
</form>

	
	
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>