<head>

 
 <style>
     @import 'css/sticky_menu.css';
 </style>
 
 <script>
// Add active class to the current button (highlight it)
// var header = document.getElementById("header");
// var btns = header.getElementsByClassName("action");
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//   var current = document.getElementsByClassName("active");
//   current[0].className = current[0].className.replace(" active", "");
//   this.className += " active";
//   });
// }


</script>

 <script>
        // $(".action").click(function() {
            
        //     // Select all list items
        //     var listItems = $(".action");
            
        //     // Remove 'active' tag for all list items
        //     for (let i = 0; i < listItems.length; i++) {
        //         listItems[i].classList.remove("active");
        //     }
            
        //     // Add 'active' tag for currently selected item
        //     this.classList.add("active");
        // });
        
//          $(document).ready(function($){
//     var url = window.location.href;
//     $('.nav li a[href="'+url+'"]').addClass('active');
// });
    </script>

 </head>
 
 
 
<header class="site-header mo-left header fullwidth">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix d-flex justify-content-center">
                    <!-- website logo -->
                    <div class="logo-header mostion trans_logo">
					 <a href="home"><img src="images/logo/Logo.png" class="logo" alt="">
						</a>
						<!-- <a href="#">Shashvat Agronomics</a> -->
					</div>
                    <!-- nav toggle button -->
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                        <ul class="nav navbar-nav" id="header">
							<li class="active action">
								<a href="home"  >Home </a>
								
							</li>

							<li class="action"><a href="services"  >Services</a></li>
							<li class="action"><a href="about-us"  >About Us</a></li>
							<li class="action"><a href="contact" >Contact Us</a></li>
							
							
							<li class="action"><a href="blog">Blog</a>
								<!-- <a href="#">Blog <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="blog-classic.html" class="dez-page">Classic</a></li>
									
									<li><a href="blog-details.html" class="dez-page">Blog Details</a></li>
								</ul> -->
							</li>
						</ul>			
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    
    <header class="sticky_menu ">
        
         
          <div class="navigation-card">
            <div class="card-margin m-2">
            <a href="home" class="tab">
              <svg
                class="svgIcon"
                viewBox="0 0 104 100"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M100.5 40.75V96.5H66V68.5V65H62.5H43H39.5V68.5V96.5H3.5V40.75L52 4.375L100.5 40.75Z"
                  stroke="black"
                  stroke-width="7"
                ></path>
              </svg>
            </a>
            <p class="text-light">HOME</p>
          </div>
          <div class="card-margin m-2">
            <a href="services" class="tab">
              <img src="images/headphones.png">
            </a>
            <p class="text-light">SERVICES</p>
          </div>
          <div style="" class="card-margin m-2">
            <a href="about-us" class="tab">
              <svg
                width="104"
                height="100"
                viewBox="0 0 104 100"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  x="21.5"
                  y="3.5"
                  width="60"
                  height="60"
                  rx="30"
                  stroke="black"
                  stroke-width="7"
                ></rect>
                <g clip-path="url(#clip0_41_27)">
                  <mask
                    id="mask0_41_27"
                    style="mask-type:luminance"
                    maskUnits="userSpaceOnUse"
                    x="0"
                    y="61"
                    width="104"
                    height="52"
                  >
                    <path
                      d="M0 113C0 84.2812 23.4071 61 52.1259 61C80.706 61 104 84.4199 104 113H0Z"
                      fill="white"
                    ></path>
                  </mask>
                  <g mask="url(#mask0_41_27)">
                    <path
                      d="M-7 113C-7 80.4152 19.4152 54 52 54H52.2512C84.6973 54 111 80.3027 111 112.749H97C97 88.0347 76.9653 68 52.2512 68H52C27.1472 68 7 88.1472 7 113H-7ZM-7 113C-7 80.4152 19.4152 54 52 54V68C27.1472 68 7 88.1472 7 113H-7ZM52.2512 54C84.6973 54 111 80.3027 111 112.749V113H97V112.749C97 88.0347 76.9653 68 52.2512 68V54Z"
                      fill="black"
                    ></path>
                  </g>
                </g>
                <defs>
                  <clipPath id="clip0_41_27">
                    <rect
                      width="104"
                      height="39"
                      fill="white"
                      transform="translate(0 61)"
                    ></rect>
                  </clipPath>
                </defs>
              </svg>
             
            </a>
            <p class="text-light">ABOUT</p>
          </div>
          <div style="" class="card-margin m-2">
            <a href="contact" class="tab">
              <img src="images/telephone.png">
             
            </a>
            <p class="text-light">CONTACT</p>
          </div>
          <div style="" class="card-margin m-2">
            <a href="blog" class="tab">
              <img src="images/blog.png">
             
            </a>
            <p class="text-light">BLOG</p>
          </div>
          </div>
        
    </header>
    
    <script>
// Add active class to the current button (highlight it)
var header = document.getElementById("header");
var btns = header.getElementsByClassName("action");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>