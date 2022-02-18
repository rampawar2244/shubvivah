<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>शुभ विवाह</title>	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <style>
        * {
          box-sizing: border-box;
        }
        
        /* Style the body */
        body {
         
          margin: 0;
        }
        
        /* Header/logo Title */
        .header {
          padding: 80px;
          text-align: center;
          background: crimson;
          color: white;
        }
        
        /* Increase the font size of the heading */
        .header h1 {
          font-size: 40px;
        }
        
        
        /* Style the navigation bar links */
       
        .row {  
          display: -ms-flexbox; /* IE10 */
          display: flex;
          -ms-flex-wrap: wrap; /* IE10 */
          flex-wrap: wrap;
        }
        
        /* Create two unequal columns that sits next to each other */
        /* Sidebar/left column */
        .side {
          -ms-flex: 40%; /* IE10 */
          flex: 40%;
          background-color: #f1f1f1;
          padding: 20px;
        }
        
        /* Main column */
        .main {   
          -ms-flex: 60%; /* IE10 */
          flex: 60%;
          background-color: white;
          padding: 20px;
        }
        
        /* Fake image, just for this example */
        .fakeimg {
          background-color: #aaa;
          width: 100%;
          padding: 20px;
        }
        
        /* Footer */
        .footer {
          padding: 20px;
          text-align: center;
          background: #ddd;
        }
        
        /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 700px) {
          .row {   
            flex-direction: column;
          }
        }
        
        /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
        @media screen and (max-width: 400px) {
          .navbar a {
            float: none;
            width: 100%;
          }
        }
        </style>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	
	<div id="fh5co-couple" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<br>
				</div>
            </div>
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'wedding');
                $search=isset($_POST['search']) ? $_POST['search']  : '';
                $query = "SELECT * FROM profile WHERE email='$search'";
                $query_run = mysqli_query($connection, $query);
            ?>

            <?php
                        if($query_run)
                        {
                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>
			<div class="row">
                <div class="side">
                  <h2><?php echo $row['name']; ?></h2>
                  <h5>Photo:</h5>
                  <img class="card" src="images/<?php echo $row['image']; ?>" alt="" height="150px" width="150px">
                  
                  <h3></h3>
                  <p></p>
                    <p>Age: <a href="#"> <?php echo $row['age']; ?> Years. </a></p>
                    <p>Gender: <a href="#"> <?php echo $row['gender']; ?></a></p>
                    <p>Contact No.: <a href="#"> <?php echo $row['contact']; ?> </a></p>
                    <p>Email: <a href="#"><?php echo $row['email']; ?></a></p>
                    <p>Location: <a href="#"><?php echo $row['city']; ?>, <?php echo $row['state']; ?> </a></p>
                    <hr>
                </div>
                <div class="main">
                    <h3>Personal Information</h3>
                    <p><?php echo $row['about']; ?></p>
                    <hr>
                    <p>Live with your family ?: <a href="#"><?php echo $row['withfamily']; ?></a></p>
                    <p>Marital Status: <a href="#"> <?php echo $row['maritalstatus']; ?> </a></p>
                    <p>Do have any children ?: <a href="#"><?php echo $row['child']; ?></a></p>
                    <p>Height: <a href="#"><?php echo $row['height']; ?></a></p>
                    <p>Weight: <a href="#"><?php echo $row['weight']; ?> KG</a></p>
                    <hr>
                    <p>Religion: <a href="#"><?php echo $row['religion']; ?></a></p>
                    <p>Community: <a href="#"><?php echo $row['community']; ?></a></p>
                    <p>Sub-community: <a href="#"> <?php echo $row['subcommunity']; ?></a></p>
                    <hr>
                    <p>Highest Qualification: <a href="#"><?php echo $row['qualification']; ?></a></p>
                    <p>College/School Name (Highest Qualification): <a href="#"><?php echo $row['clg']; ?></a></p>
                    <p>Works With: <a href="#"><?php echo $row['workswith']; ?></a></p>
                    <p>Current Company Name: <a href="#"><?php echo $row['company']; ?></a></p>
                    <p>Works As: <a href="#"><?php echo $row['aas']; ?></a></p>
                    <p>Yearly Income: <a href="#"> <?php echo $row['income']; ?>  </a></p>
                   </div>
              </div>
		</div>
    </div>

    <?php
                                }
                            }
                            else
                            {
                                ?>
                                    <tr>    
                                        <th colspan="6"> No Record Found </th>
                                    </th>
                                <?php
                            }
                        ?>
    <footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
					
					
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>