<?php 

?>
<!DOCTYPE html>
<html>
<head>
<title>te amo</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
  <script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
	
  </script>
    <script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
</head>
<body>
    <!-- header-section-starts -->
	<div class="header-slider" id="home">
		<div class="slider">
			<div class="callbacks_container">
			  <ul class="rslides" id="slider">
				<li>
				  <img src="images/2.jpg" alt="">
				  <div class="banner-info text-center">
					<div class="container">
						<div class="top-menu">
						  <span class="menu"> </span>
							<ul class="cl-effect-16">
								<li><a class="active" href="index.php"><i class="heart"></i>Portada</a></li>
				
								<li><a href="blog.php" data-hover="Blog">Fotos y mas</a></li>
								
					
								<div class="clearfix"></div>
							</ul>
						</div>	
						<div class="birds">
					        <img src="images/logo.png" alt="" />
				        </div>
				   
					<h1>Te amo</h1>
					</div>
				  </div>
				</li>
				<li>
				  <img src="images/1.jpg" alt="" />
					<div class="banner-info text-center">
					<div class="container">
						<div class="top-menu">
						<span class="menu"> </span>
						<ul class="cl-effect-16">
								<li><a class="active" href="index.php"><i class="heart"></i>Home</a></li>
				
								<li><a href="blog.php" data-hover="Blog">Fotos y mas</a></li>
							
								<div class="clearfix"></div>
							</ul>
						</div>							
						     <div class="birds">
					        <img src="images/logo.png" alt="" />
				        </div>
			
						<h1></h1>
					</div>
				  </div>
				</li>
				<li>
				  <img src="images/3.jpg" alt="" />
				  <div class="banner-info text-center">
					<div class="container">
						<div class="top-menu">
						<span class="menu"> </span>
							<ul class="cl-effect-16">
								<li><a class="active" href="index.php"><i class="heart"></i>Home</a></li>
					
								<li><a href="blog.php" data-hover="Blog">Fotos y mas</a></li>
			
								<div class="clearfix"></div>
							</ul>
						</div>
						<!-- script-for-menu -->
						<script>
							$("span.menu").click(function(){
								$(".top-menu ul").slideToggle("slow" , function(){
								});
							});
						</script>
						<!-- script-for-menu -->
						    
						        <div class="birds">
					        <img src="images/logo.png" alt="" />
				        </div>
				
						
					</div>
				  </div>
				</li>
			  </ul>
		  </div>
	    </div>
	 </div>
	 <!-- header-section-ends -->
	 <!-- content-section-starts -->
	 <div class="content">
		<div class="happy-couple">
			<div class="happy-couple-head text-center">
				<h3>Hermosa pareja</h3>
			</div>
			<div class="happy-couple-grids">
				<div class="col-md-6 happy-couple-grid text-center">
					<img src="images/zz.jpg" style="width: 200px" alt="" />
			
					<h4>El osito</h4>
					<p>Se hace el duro pero es un flansito y ama intensamente , en especial los cachetitos de la osita</p>
				</div>
				<div class="col-md-6 happy-couple-grid text-center">
					<img src="images/z.jpg" style="width: 200px" alt="" />
					<h4>La osita</h4>
					<p>Hay miradas que aman y miradas que odian. Hay miradas que alegran y miradas que matan. Su mirada delata lo que su corazon siente</p>
				</div>
				<div class="clearfix"></div>
			</div>

	    </div>
	  
              <img src="images/wrapper-img.gif" alt="Img">
              <img src="images/b.gif" style="width: 300px" alt="Img">
              <img src="images/a.gif" style="width: 310px" alt="Img">
              <img src="images/m.gif" alt="Img">
         
         
        
</body>
</html>
<?php 

?>