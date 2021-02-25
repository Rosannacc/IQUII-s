<html>
	<head>
    
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Latest News</title>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>
	<body>
	<?php
	define("LOCALHOST", "http://localhost/");
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "iquiis";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$search = $_POST['wish'];
	 
	$sql = "SELECT id, title, tag, text, wishlist FROM articolo WHERE wishlist = 1";
	$s = $conn->query($sql);		
	
	?>
		<section class="home-blog bg-sand">
			<div class="container">
				
				<div class="row ">
					<form action="search.php" method="post"> 
						<div class="col-lg-7 col-md-7 col-sm-7"></div>
						<div class="col-lg-4 col-md-4 col-sm-4 p-0">
							<input type="text" placeholder="Search..." class="form-control" id="search" name="search">
						</div>
						<div class="col-lg-1 col-md-1 col-sm-1">
							<button type="submit" class="btn btn-base" value="Submit">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
							</button>
						</div>
					</form>
				</div>
				<!-- section title -->
				<div class="row justify-content-md-center">
					<div class="col-xl-12 col-lg-13 col-md-13">
						<div class="section-title text-center title-ex1">
							<h2>News Preferite</h2>
						</div>
					</div>
				</div>
				<div class="row ">
					<?php while($row = $s->fetch_assoc()) { ?>
						
						<div class="col-md-6">
							<div class="media blog-media">						  
								<div class="media-body">
									<h5 class="mt-0 titolo"><a href="<?php echo LOCALHOST."singolarticle.php?id=".$row['id'] ?>" class="post-link"> <?php echo $row['title'] ?></h5></a>
									
									<?php echo substr($row["text"],0,100) ?>...
									
									<div class="row tag">
										<div class="col-xl-10 col-lg-10 col-md-10">
											<span class= "btn btn-default btn-rounded waves-effect m-b-5" ><?php echo $row["tag"] ?></span>
										</div>										
										<div class="col-xl-2 col-lg-2 col-md-2">
										<?php if($row["wishlist"] == 0){ ?>
											<img src="img/heart_gray.svg" class="heartmini" id="<?php echo $row["id"] ?>"/>
										<?php }else{ ?>
											<img src="img/heart.svg" class="heartmini" id="<?php echo $row["id"] ?>"/>
										<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div><br>
				<div class="row ">
					<div class="col-md-10"></div>
					<div class="col-md-2"><a onclick="location.href='article.php';" class="btn btn-info center-block">Home</a></div>
				</div>
			</div>			
		</div>	
	</body>
	<script>
	$('.heartmini').click(function(){

		var artID = $(this).attr("id");
		
		 $.ajax({
			 type: "POST",
			 url: "model.php",
			 data: {
				 artID: artID
			 },
			 cache: false,
			 success: function(data) {
				 var obj = jQuery.parseJSON(data);
				 location.reload();				
				
			 },
			 
		 });
		
	});
	</script>