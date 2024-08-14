
<?php $active ='Home'; ?>

<!DOCTYPE html>
<html lang="mar">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Shashivat" />
	<meta property="og:title" content="Shashivat" />
	<meta property="og:description" content="Shashivat" />
	<meta property="og:image" content="Shashivat" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" /> -->
	
	<!-- PAGE TITLE HERE -->
	<title>Shashivat</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<link rel="stylesheet" href="css/service_card.css">
	<link rel="stylesheet" href="css/service_card2.css">
	<link rel="stylesheet" href="css/service_card3.css">
	<link rel="stylesheet" href="css/home_about.css">


	<!-- bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<style>
		.grey{
			color: #BD9748;
			
		}
		.car_caption{
			left: 0;
            top: 220px;
            width: 50%;
		}
		.city-bx h5 , span
		{
			color:#000;
		}.city-bx span
		{
			color:#000;
		}
		.city-bx:after
		{
			/*background-color:white;*/
			color:#000000;
		}
		.city-bx:hover::after
		{
			color:#000000;
			background-color:white;
		}
		.image-icon
		{
			width: 7rem;
		}
		.ag-courses_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;

  padding: 50px 0;
}
.ag-courses_item {
  -ms-flex-preferred-size: calc(24.50% - 30px);
  flex-basis: calc(24.50% - 30px);

  margin: 0 15px 30px;

  overflow: hidden;

  border-radius: 28px;
}
.ag-courses-item_link {
  display: block;
  padding: 30px 20px;
  background-color: #ffffff;
  border:1px solid #000;
  overflow: hidden;
  height: 265px;
  position: relative;
}
.ag-courses-item_link:hover,
.ag-courses-item_link:hover .ag-courses-item_date {
  text-decoration: none;
  color: #000;
}
.ag-courses-item_link:hover .ag-courses-item_bg {
  -webkit-transform: scale(10);
  -ms-transform: scale(10);
  transform: scale(10);
}
.ag-courses-item_title {
  min-height: 87px;
  margin: 0 0 25px;

  overflow: hidden;

  font-weight: bold;
  font-size: 30px;
  color: #000;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date-box {
  font-size: 18px;
  color: #FFF;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date {
  font-weight: bold;
  color: #f9b234;

  -webkit-transition: color .5s ease;
  -o-transition: color .5s ease;
  transition: color .5s ease
}
.ag-courses-item_bg {
  height: 128px;
  width: 128px;
  background-color: #f9b234;

  z-index: 1;
  position: absolute;
  top: -75px;
  right: -75px;

  border-radius: 50%;

  -webkit-transition: all .5s ease;
  -o-transition: all .5s ease;
  transition: all .5s ease;
}
.ag-courses_item:nth-child(2n) .ag-courses-item_bg {
  background-color: #3ecd5e;
}
.ag-courses_item:nth-child(3n) .ag-courses-item_bg {
  background-color: #e44002;
}
.ag-courses_item:nth-child(4n) .ag-courses-item_bg {
  background-color: #952aff;
}
.ag-courses_item:nth-child(5n) .ag-courses-item_bg {
  background-color: #cd3e94;
}
.ag-courses_item:nth-child(6n) .ag-courses-item_bg {
  background-color: #4c49ea;
}



@media only screen and (max-width: 979px) {
  .ag-courses_item {
    -ms-flex-preferred-size: calc(50% - 30px);
    flex-basis: calc(50% - 30px);
  }
  .ag-courses-item_title {
    font-size: 24px;
  }
}

@media only screen and (max-width: 767px) {
  .ag-format-container {
    width: 96%;
  }

}
@media only screen and (max-width: 639px) {
  .ag-courses_item {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
  }
  .ag-courses-item_title {
    min-height: 72px;
    line-height: 1;

    font-size: 24px;
  }
  .ag-courses-item_link {
    padding: 22px 40px;
  }
  .ag-courses-item_date-box {
    font-size: 16px;
  }
}

/**/

/**/
	</style>
</head>
<body id="bg">
	<?php 
	require_once "loader.php";
?>
<div class="page-wraper">
	<!-- header -->
	<?php 
	require_once "header.php";
?>
    
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
		<!-- Section Banner -->
		<!-- <div class="dez-bnr-inr dez-bnr-inr-md" style="background-image:url(images/main-slider/slide2.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry align-m">
					<div class="find-job-bx">
						<a href="browse-job.html" class="site-button button-sm">Find Jobs, Employment & Career Opportunities</a>
						<h2>Search Between More Then <br/> <span class="text-primary">50,000</span> Open Jobs.</h2>
						<form class="dezPlaceAni">
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
										<label>Job Title, Keywords, or Phrase</label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="">
											<div class="input-group-append">
											  <span class="input-group-text"><i class="fa fa-search"></i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="form-group">
										<label>City, State or ZIP</label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="">
											<div class="input-group-append">
											  <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="form-group">
										<select>
											<option>Select Sector</option>
											<option>Construction</option>
											<option>Corodinator</option>
											<option>Employer</option>
											<option>Financial Career</option>
											<option>Information Technology</option>
											<option>Marketing</option>
											<option>Quality check</option>
											<option>Real Estate</option>
											<option>Sales</option>
											<option>Supporting</option>
											<option>Teaching</option> 
										</select>
									</div>
								</div>
								<div class="col-lg-2 col-md-6">
									<button type="submit" href="browse-job.html" class="site-button btn-block">Find Job</button>
								</div>
							</div>
						</form>
					</div>
				</div>
            </div>
        </div> -->

		<!-- carousel -->
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner  ">
    <div class="carousel-item active " >
      <!--<img src="images/banner/main-slider-1-2.jpg" class="d-block w-100" alt="...">-->
      <video class="img-fluid" autoplay loop>
	  <source src="images/agriculture(1).mp4" type="video/mp4">
	  </video>
	  <div class="carousel-caption d-none d-md-block  car_caption">
	   <!-- <h1 class="text-light">Creating radical change in agriculture</h1> -->
        <!--<p>Some representative placeholder content for the first slide.</p>-->
      
</div>
    </div>
   <!-- <div class="carousel-item " >-->
   <!--   <img src="images/banner/main-slider-1-3.jpg" class="d-block w-100" alt="...">-->
	  <!--<div class="carousel-caption d-none d-md-block car_caption">-->
   <!--     <h5 class="text-light">First slide label2</h5>-->
   <!--     <p>Some representative placeholder content for the first slide.</p>-->
   <!--   </div>-->

   <!-- </div>-->
   <!-- <div class="carousel-item  " >-->
   <!--   <img src="images/banner/main-slider-1-1.jpg" class="d-block w-100" alt="...">-->
	  <!--<div class="carousel-caption d-none d-md-block car_caption">-->
   <!--     <h5 class="text-light">First slide label3</h5>-->
   <!--     <p>Some representative placeholder content for the first slide.</p>-->
   <!--   </div>-->

   <!-- </div>-->
  </div>
  <!-- <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button> -->
</div>
		<!-- carousel -->
		<!-- Section Banner END -->
        <!-- About Us -->

		<!-- About Us END -->
		<!-- Call To Action -->
		<div class="section-full content-inner bg-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 section-head text-center">
						<h2 class="m-b5"><b>  आमच्या सेवा</b> </h2>
						
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6 col-md-6 m-b30">
						<a href="javascript:void(0);">
							<div class="city-bx justify-content-center  bg-white  d-flex">
								<div class="city-info text-center">
							
								<img src="images/Icon/seeding.gif" alt="seeding.gif" class="image-icon">
									<h6 style="font-size:14px;"><b>जमिनीची विश्लेषण आणि सुधारणा</b></h6>
									<a href="services" class="grey">More Details</a>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 col-md-6 m-b30">
						<a href="javascript:void(0);">
							<div class="city-bx  justify-content-center bg-white   d-flex" >
								<div class="city-info text-center">
								<img src="images/Icon/wheatt.gif" alt="wheatt.gif" class="image-icon">
								<h6 style="font-size:14px;"><b>पीक नियोजन आणि व्यवस्थापन</b></h6>
								<a href="services" class="grey">More Details</a>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 col-md-6 m-b30">
						<a href="javascript:void(0);">
						<div class="city-bx  justify-content-center bg-white   d-flex" >
								<div class="city-info text-center">
								<img src="images/Icon/sproutt.gif" alt="sproutt.gif" class="image-icon">
								<h6 style="font-size:14px;"><b>पिकांच्या संरक्षणासाठी सल्ला</b></h6>
								<a href="services" class="grey">More Details</a>
								</div>
							</div>
						</a>
					</div>
					
					<!--<div class="col-lg-3 col-sm-6 col-md-6 m-b30">-->
					<!--	<a href="javascript:void(0);">-->
					<!--	<div class="city-bx  justify-content-center bg-white   d-flex" >-->
					<!--			<div class="city-info text-center">-->
					<!--			<img src="images/Icon/evaporation.gif" alt="..." class="image-icon">-->
					<!--			<h6 style="font-size:14px;"><b>पाणी व्यवस्थापन</b></h6>-->
					<!--			<a href="services">More Details</a>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--	</a>-->
					<!--</div>-->
					<!--<div class="col-lg-3 col-sm-6 col-md-6 m-b30">-->
					<!--	<a href="javascript:void(0);">-->
					<!--	<div class="city-bx  justify-content-center bg-white   d-flex" >-->
					<!--			<div class="city-info text-center">-->
					<!--			<img src="images/Icon/wheat.gif" alt="wheat.gif" class="image-icon">-->
					<!--			<h6 style="font-size:14px;"><b>आर्थिक नियोजन आणि सहाय्य</b></h6>-->
					<!--			<a href="services">More Details</a>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--	</a>-->
					<!--</div>-->
					<div class="col-lg-4 col-sm-6 col-md-6 m-b30">
						<a href="javascript:void(0);">
						<div class="city-bx  justify-content-center bg-white   d-flex" >
								<div class="city-info text-center">
								<img src="images/Icon/tractorr.gif" alt="tractorr" class="image-icon">
								<h6 style="font-size:14px;"><b>शाश्वत शेती तंत्रज्ञान</b></h6>
								<a href="services" class="grey">More Details</a>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 col-md-6 m-b30">
						<a href="javascript:void(0);">
						<div class="city-bx  justify-content-center bg-white   d-flex" >
								<div class="city-info text-center">
								<img src="images/Icon/sprout.gif" alt="..." class="image-icon">
								<h6 style="font-size:14px;"><b>पीक नियोजन आणि व्यवस्थापन</b></h6>
								<a href="services" class="grey">More Details</a>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 col-md-6 m-b30">
						<a href="javascript:void(0);">
						<div class="city-bx  justify-content-center bg-white   d-flex" >
								<div class="city-info text-center">
								<img src="images/Icon/thermo.gif" alt="thermo.gif" class="image-icon">
								<h6 style="font-size:14px;"><b>आधुनिक तंत्रज्ञानाचे वापर</b></h6>
								<a href="services" class="grey">More Details</a>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Call To Action END -->
		<!-- about us -->
		<div class="content-block">
            <div class="section-full content-inner overlay-white-middle">
				<div class="container">
					<div class="row align-items-center m-b50">
						<div class="col-md-12 col-lg-6 m-b20 text-center">
							<h2 class="m-b5"> <b>  आमच्याबद्दल   </b>    </h2>
							
							<p class="m-b15" style="text-align:justify; font-size:16px;">Shashvat Agronomics Private Limited मध्ये, आम्ही केवळ सल्लागार नाही, तर तुमचे मित्र आणि मार्गदर्शक आहोत. आमचे उद्दिष्ट शेतकऱ्यांना सशक्त आणि समृद्ध बनवणे आहे. आम्ही तुम्हाला भेडसावणाऱ्या आव्हानांना समजतो आणि सर्वोत्तम उत्पन्न आणि शाश्वत वाढ साधण्यासाठी वैयक्तिक सल्ला आणि नाविन्यपूर्ण उपाय देण्यासाठी येथे आहोत.</p>
	                    </br><a href="about-us" class="site-button">Read More</a>
						</div>
						<div class="col-md-12 col-lg-6">
							<img src="images/Icon/24225330.jpg" alt=""/>
						</div>
					</div>
					

					<!-- new row -->
					<div class="row justify-content-center">
				
<div class="col-md-3 my-3 d-flex justify-content-center">
    
    <div id="content"  onclick="window.location.href='services';">
       
  <div id="blurer" class="mt"></div>
  <div class="blob"></div>
  <div class="blob"></div>
  <div class="blob"></div>
  <div class="blob"></div>
  <div id="article"><h2 class="mt-4 ml-4 d-block " style="color:brown;">  	<b>	वैयक्तिक मार्गदर्शन</b> </h2>
  <p style="font-size:16px;" class="position-relative"><b> आम्ही आमच्या शिफारसी तुमच्या विशिष्ट गरजेनुसार तयार करतो, प्रत्येक सल्ला तुमच्या अद्वितीय परिस्थितीसाठी संबंधित आणि व्यावहारिक आहे याची खात्री करतो.
							</b>	</p>
  
  </div>
 
</div>
</div>

<div class="col-md-3 my-3 d-flex justify-content-center">
    <div id="content" onclick="window.location.href='services';">
  <div id="blurer" class="mt"></div>
  <div class="blob"></div>
  <div class="blob"></div>
  <div class="blob"></div>
  <div class="blob"></div>
  <div id="article"><h2 style="height:75px; color:brown;" class="mt-4 ml-4 d-block " >  <b>	शाश्वत उपाय</b></h2>
			<p style="font-size:16px;"><b>  आमचे लक्ष शाश्वत शेती तंत्रज्ञानावर आहे जे केवळ उत्पादकता वाढवतेच नाही तर भविष्यातील पिढ्यांसाठी पर्यावरणाचे संरक्षण आणि संवर्धन देखील करते.
			</b></p>
  </div>
</div>
</div>

<div class="col-md-3 my-3 d-flex justify-content-center">
    <div id="content" onclick="window.location.href='services';">
  <div id="blurer" class="mt"></div>
  <div class="blob"></div>
  <div class="blob"></div>
  <div class="blob"></div>
  <div class="blob"></div>
  <div id="article"><h2  class="mt-4 ml-4 d-block " style="color:brown;">  <b>प्रत्येक टप्प्यावर समर्थन </b></h2>
				<p style="font-size:16px;"> <b> मातीची तयारीपासून ते काढणी नंतर व्यवस्थापनापर्यंत, आम्ही शेती प्रक्रियेच्या प्रत्येक टप्प्यावर तुम्हाला सातत्याने समर्थन आणि देखरेख देत आहोत.
				</b></p>
  </div>
</div>
</div>

<div class="col-md-3 my-3 d-flex justify-content-center">
    <div id="content" onclick="window.location.href='services';">
  <div id="blurer" class="mt"></div>
  <div class="blob"></div>
  <div class="blob"></div>
  <div class="blob"></div>
  <div class="blob"></div>
  <div id="article"><h2 style="height:75px; color:brown;" class="mt-4 ml-4 d-block " > 	<b>  योग्य काळजी </b>  </h2>
				<p style="font-size:16px;"><b>
				आमचे तुमच्याशी नाते व्यावसायिक सल्ल्यापलीकडे आहे. आम्ही तुमच्या यश आणि कल्याणासाठी समर्पित आहोत, तुमच्या समृद्धीसाठी शुद्ध उद्देशाने काम करतो.
			</b>
				</p>
  </div>
</div>
</div>
    
</div>
</div>

		<div class="section-full content-inner bg-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 section-head text-center">
						<h2 class="m-b5"><b>  पीक लागवड तंत्रज्ञान</b> </h2>
						
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6 col-md-6 m-b30">
						<a href="blog-details">
							<div class="city-bx justify-content-center  bg-white  d-flex" style="background:url('images/blog/cotton_logo.jpeg'); background-size:cover;">
								<div class="city-info text-center">
							
								<!-- <img src="images/blog/cotton_logo.jpegh" alt="seeding.gif" class="imagee-icon"> -->
									<!-- <h6 class="pt-4" style="font-size:14px;"><b> कापूस लागवड तंत्रज्ञान  </b></h6> -->
									<!-- <a href="blog-details">More Details</a> -->
								</div>
							</div>
						</a>
						<h6 class="pt-4 text-center" style="font-size:14px;"><b> कापूस लागवड तंत्रज्ञान  </b></h6>

					</div>
					<div class="col-lg-4 col-sm-6 col-md-6 m-b30">
						<a href="blog-details-1">
							<div class="city-bx justify-content-center  bg-white  d-flex" style="background:url('images/blog/Picture1.jpg');  background-size:cover;">
								<div class="city-info text-center">
							
								<!-- <img src="images/blog/cotton_logo.jpeg" alt="seeding.gif" class="imagee-icon"> -->
									<!-- <h6 class="pt-4" style="font-size:14px;"><b> धान  लागवड तंत्रज्ञान  </b></h6> -->
									<!-- <a href="blog-details-1">More Details</a> -->
								</div>
							</div>
						</a>
						<h6 class="pt-4 text-center"  style="font-size:14px;"><b> धान  लागवड तंत्रज्ञान  </b></h6>

					</div>
					<div class="col-lg-4 col-sm-6 col-md-6 m-b30">
						<a href="blog-details-2">
							<div class="city-bx justify-content-center  bg-white  d-flex" style="background:url('images/blog/Picture3.png');  background-size:cover;">
								<div class="city-info text-center">
							
								<!-- <img src="images/blog/cotton_logo.jpeg" alt="seeding.gif" class="imagee-icon"> -->
									<!-- <h6 class="pt-4" style="font-size:14px;"><b> सोयाबीन लागवड तंत्रज्ञान  </b></h6> -->
									<!-- <a href="blog-details-2">More Details</a> -->
								</div>
							</div>
						</a>
						<h6 class="pt-4 text-center" style="font-size:14px;"><b> सोयाबीन लागवड तंत्रज्ञान  </b></h6>

					</div>
					<div class="col-lg-4 col-sm-6 col-md-6 m-b30">
						<a href="blog-details-3">
							<div class="city-bx justify-content-center  bg-white  d-flex" style="background:url('images/blog/Picture4.jpg');  background-size:cover;">
								<div class="city-info text-center">
							
								<!-- <img src="images/blog/cotton_logo.jpeg" alt="seeding.gif" class="imagee-icon"> -->
									<!-- <h6 class="pt-4" style="font-size:14px;"><b> मिरची लागवड तंत्रज्ञान  </b></h6> -->
									<!-- <a href="blog-details-3">More Details</a> -->
								</div>
							</div>
							
						</a>
									<h6 class="pt-4 text-center" style="font-size:14px;"><b> मिरची लागवड तंत्रज्ञान  </b></h6>
					</div>
					<div class="col-lg-4 col-sm-6 col-md-6 m-b30">
						<a href="blog-details-4">
							<div class="city-bx justify-content-center  bg-white  d-flex" style="background:url('images/blog/picture16.jpg');  background-size:cover;">
								<div class="city-info text-center">
							
								<!-- <img src="images/blog/cotton_logo.jpeg" alt="seeding.gif" class="imagee-icon"> -->
									<!-- <h6 class="pt-4" style="font-size:14px;"><b>तूर पिकाचे सुधारीत लागवड तंत्रज्ञान  </b></h6> -->
									<!-- <a href="blog-details-4">More Details</a> -->
								</div>
							</div>
						</a>
						<h6 class="pt-4 text-center" style="font-size:14px;"><b>तूर पिकाचे सुधारीत लागवड तंत्रज्ञान  </b></h6>

					</div>
					</div>
					</div>
		

		

   

    

   


        
</div>
					 <!-- end of new row -->
				</div>
			</div>
				<!-- Call To Action -->
			<div class="section-full content-inner-2 call-to-action text-white text-center bg-img-fix" style="background-image: url(images/banner/main-slider-1-2.jpg);">
				<div class="container py-3" style=" background: rgba(255,255,255,0.6); margin-bottom: 50px;">
					<div class="row">
						<div class="col-lg-12">
							<h2 class="m-b10 text-dark">Have A Question ?</h2>
                              <button type="button" class="btn btn-dark btn-lg btn-"><i class="fa-solid fa-phone pr-2"></i>Call Us Now</button>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Call To Action END -->
			
        </div>
		
	</div>
	<!-- Content END-->
	<!-- Modal Box -->
	<div class="modal fade lead-form-modal" id="car-details" tabindex="-1" role="dialog" >
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="modal-body row m-a0 clearfix">
					<div class="col-lg-6 col-md-6 overlay-primary-dark d-flex p-a0" style="background-image: url(images/background/bg3.jpg);  background-position:center; background-size:cover;">
						<div class="form-info text-white align-self-center">
							<h3 class="m-b15">Login To You Now</h3>
							<p class="m-b15">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry.</p>
							<ul class="list-inline m-a0">
								<li><a href="#" class="m-r10 text-white"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="m-r10 text-white"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="m-r10 text-white"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="m-r10 text-white"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="m-r10 text-white"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 p-a0">
						<div class="lead-form browse-job text-left">
							<form>
								<h3 class="m-t0">Personal Details</h3>
								<div class="form-group">
									<input value="" class="form-control" placeholder="Name"/>
								</div>	
								<div class="form-group">
									<input value="" class="form-control" placeholder="Mobile Number"/>
								</div>
								<div class="clearfix">
									<button type="button" class="btn-primary site-button btn-block">Submit </button>
								</div>
							</form>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<!-- Modal Box End -->
	<!-- Footer -->
  
    <?php 
	require_once "footer.php";
?>
    <!-- Footer END -->


    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>

<!-- font awsome-->
<script src="https://kit.fontawesome.com/a34a653280.js" crossorigin="anonymous"></script>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->

<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->

</body>
</html>