<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>STBI</title>

     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="brand">Information Retrieval
	</div>
    <nav class="navbar navbar-default" role="navigation">
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                     <li>
					 <a href="?menu=home">Home</a>
					 </li>
                     <li>
                        <a href="?menu=upload">Upload</a>
						 </li>
                    	 <li>
                        <a href="?menu=carikata">Cari Kata</a>
						</li>
						 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Query<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li>
                        <a href="?menu=query">Cari Query</a>
						 </li>
						  <li>
                        <a href="?menu=awalquery">Cari Query Tf</a>
                     </li>
						 </ul></li>
						  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Hitung<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li>
                        <a href="?menu=hitungbobot">Hitung Bobot</a>
                     </li>
						<li>
                        <a href="?menu=panjangvektor">Hitung Vektor</a>
                      </li>
						 </ul></li>							
					  <li>
                        <a href="?menu=download">Download</a>
                     </li>
					</ul>
            </div>
    </nav>
 <section>
                <div class="line">
            <div class="box margin-bottom">
               <div class="margin">
                  <!-- CONTENT -->
                  <article class="s-12 m-7 l-8">
                  <?php
				error_reporting(0);
				if($_GET[menu]=='')
					{
					include('home.php');
					}
				else
					{
					include($_GET[menu].'.php');
					}
			?>
			 </div>
            </div>
			 </div>
			
  </section>
      <script type="text/javascript" src="js/responsee.js"></script>               
      <script type="text/javascript" src="js/owl.carousel.js"></script>  
      <script type="text/javascript">
         jQuery(document).ready(function($) {	  
           $("#owl-demo").owlCarousel({		
           	navigation : true,
           	slideSpeed : 300,
           	paginationSpeed : 400,
           	autoPlay : true,
           	singleItem:true
           });
           $("#owl-demo2").owlCarousel({
        		items : 4,
           	lazyLoad : true,
           	autoPlay : true,
           	navigation : true,
           	pagination : false
           });
         });	 
      </script>
	  <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
	  </body>
 	  </html>
