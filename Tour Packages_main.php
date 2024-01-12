<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="A tour package website. SE102.3 project by Group 13 of batch 23.1.">
	<meta name="Keywords" content="Website, Tour packages, NSBM, SE102.3, Sri Lanka, Travel, Holiday, Explore, Tour">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    Ceylon Odyssey | Tour Packages</title>
	 <link rel="shortcut icon" href="images/Logo.png">
	 <link rel="preconnect" href="https://fonts.googleapis.com">
	 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	 <link href="https://fonts.googleapis.com/css2?family=Ysabeau&family=Ysabeau+SC:wght@500&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
<link href="style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  </head>
	
	
  <body style="padding-top: 70px">
  <div class="container-fluid">
    <div class="container">
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light container-fluid"> <a class="navbar-brand" href="index.html"><img src="images/Logo.png" width="100" alt="Logo of Ceylon Odyssey"/>&nbsp;</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active"> <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a></li>
            <li class="nav-item"> <a class="nav-link"  href="Tour Packages_main.html">Tour Packages</a></li>
            <li class="nav-item"> <a class="nav-link"  href="aboutUs.html">About us</a></li>
            <li class="nav-item"> <a class="nav-link"  href="customer_reviews.html">Customer Reviews</a></li>
            <li class="nav-item"> <a class="nav-link"  href="contactUs.html">Contact us</a></li>
            <li class="nav-item"> <a class="nav-link"  href="careers.html">Careers</a></li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            
            <button class="btn btn-outline-dark my-2 my-sm-0" style="font-family: 'Ysabeau SC', sans-serif;" type="submit">Sign In</button>
          </form>
        </div>
      </nav>
		<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel"></div>
     
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active"> 
	    <img src="images/TP_carousel.jpeg" alt="carouselTP" width="100%" height="auto">  
		  
      </div>
      </div>		
	  <br/><br/><br/><br/>
		
			
		<div class="bg-light shadow" style="padding: 30px; text-align: center;">
		<div class="row align-items-center" style="min-height: 60px;">
		<div class="col-md-10">
			
<div class="row">
            <div class="col-md-12">
                                
				<select class="custom-select px-4" id="select-box" style="height: 47px" onClick="selectBox()">
					<option selected disabled>Destination</option>
					<option value="0">All destinations</option>
					<option value="1">Anuradhapura</option>
					<option value="2">Colombo</option>
					<option value="3">Dambulla</option>
					<option value="4">Galle</option>
					<option value="5">Hikkaduwa</option>
					<option value="6">Jaffna</option>
					<option value="7">Kandy</option>
					<option value="8">Nuwara Eliya</option>
					<option value="9">Ratnapura</option>
					<option value="10">Trincomalee</option>
					<option value="11">Yala</option>
				</select>
                                
							</div>
                           
							
							
													
			</div></div></div></div>
        <div class="pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <p1> <strong> TOUR PACKAGES FOR YOU</strong></p1>
            </div>
            </div>
	  </div>
		
	  <div class="tp_gallery">
		  <figure data-title="Kandy">
			  <div class="tp_container">
			  <img src="images/TP_3.jpg" class="tp_img">
			  <div class="overlay">Kandy's mix of culture, history, and natural beauty makes it a must-visit destination in Sri Lanka, offering a unique and enriching experience for travelers.</div></div>
		    <figcaption><strong>Kandy 2 Days Tour Package</strong></figcaption>   
		 		 <button  class="tp_button"><span><a href="booking tours/tpt_Kandy_3.php">More Details</a></span></button>
		  </figure>
		  
		  <figure data-title="Kandy">
			  <div class="tp_container">
			  <img src="images/TP_9.jpg" class="tp_img">
			  <div class="overlay">Kandy's mix of culture, history, and natural beauty makes it a must-visit destination in Sri Lanka, offering a unique and enriching experience for travelers.</div></div>
		    <figcaption><strong>Kandy 4 Days Tour Package</strong></figcaption>   
		 		 <button  class="tp_button"><span><a href="booking tours/tpt_Kandy_3.php">More Details</a></span></button>
		  </figure>
			
      
      <figure data-title="Galle">
		  <div class="tp_container">
        <img src="images/TP_12.jpg" class="tp_img">
			  <div class="overlay">Galle is the provincial capital and largest city of Southern Province in Sri Lanka. Back in the 16th century, it was the main port on the island.</div></div>
        <figcaption><strong>Galle 2 Days Tour Package</strong></figcaption>
		  <button  class="tp_button"><span><a href="booking tours/tpt_Galle_2.php">More Details</a></span></button>
      </figure>
		  
		  <figure data-title="Galle">
		  <div class="tp_container">
        <img src="images/TP_16.jpeg" class="tp_img">
			  <div class="overlay">Galle is the provincial capital and largest city of Southern Province in Sri Lanka. Back in the 16th century, it was the main port on the island.</div></div>
        <figcaption><strong>Galle 3 Days Tour Package</strong></figcaption>
		  <button  class="tp_button"><span><a href="booking tours/tpt_Galle_2.php">More Details</a></span></button>
      </figure>
		  
      <figure data-title="Dambulla">
		  <div class="tp_container">
        <img src="images/TP_4.jpg" class="tp_img">
			  <div class="overlay">A captivating journey through time and a chance to better understand Sri Lanka's unique and complex history.</div></div>
        <figcaption><strong>Dambulla 2 Days Tour Package</strong></figcaption>
		  <button  class="tp_button"><span><a href="booking tours/tpt_Dambulla_2.php">More Details</a></span></button>
      </figure>
		  
		  <figure data-title="Dambulla">
		   <div class="tp_container">
        <img src="images/TP_10.jpg" class="tp_img">
		   <div class="overlay">A captivating journey through time and a chance to better understand Sri Lanka's unique and complex history.</div></div>
        <figcaption><strong>Dambulla 3 Days Tour Package</strong></figcaption>
		  <button  class="tp_button"><span><a href="booking tours/tpt_Dambulla_2.php">More Details</a></span></button> 
      </figure>
		  
       <figure data-title="Dambulla">
		   <div class="tp_container">
        <img src="images/TP_8.jpg" class="tp_img">
		   <div class="overlay">A captivating journey through time and a chance to better understand Sri Lanka's unique and complex history.</div></div>
        <figcaption><strong>Dambulla 4 Days Tour Package</strong></figcaption>
		  <button  class="tp_button"><span><a href="booking tours/tpt_Dambulla_4.php">More Details</a></span></button> 
      </figure>
		  
		  <figure data-title="Yala">
		   <div class="tp_container">
        <img src="images/TP_1.jpg" class="tp_img">
		   <div class="overlay">Sri Lanka's jeep safaris are a captivating way to connect with nature and witness the country's incredible biodiversity.</div></div>
        <figcaption><strong>Yala 2 Days Tour Package</strong></figcaption>
		  <button  class="tp_button"><span><a href="booking tours/tpt_Yala_3.php">More Details</a></span></button>
		  </figure>
      
      
		  <figure data-title="Hikkaduwa">
				<div class="tp_container">
        <img src="images/TP_13.jpg" class="tp_img">
				<div class="overlay">Hikkaduwa Coral Sanctuary provides an opportunity for deep-sea diving or glass-bottom boat rides to explore colorful coral formations and a diverse array of marine life.</div></div>
        <figcaption><strong>Hikkaduwa 2 Days Tour Package</strong></figcaption>
		  <button  class="tp_button"><span><a href="booking tours/tpt_Hikkaduwa_2.php">More Details</a></span></button> 
      </figure>
     
		  <figure data-title="Jaffna">
				<div class="tp_container">
        <img src="images/TP_14.jpg" class="tp_img">
				<div class="overlay">Jaffna's islands, including Delft and Nagadeepa, provide tranquil escapes with ancient ruins, wild horses, and sacred shrines.</div></div>
        <figcaption><strong>Jaffna 4 Days Tour Package</strong></figcaption>
		  <button  class="tp_button"><span><a href="booking tours/tpt_Jaffna_5.php">More Details</a></span></button> 
      </figure>
		  
		  <figure data-title="Jaffna">
				<div class="tp_container">
        <img src="images/TP_17.jpg" class="tp_img">
				<div class="overlay">Jaffna's islands, including Delft and Nagadeepa, provide tranquil escapes with ancient ruins, wild horses, and sacred shrines.</div></div>
        <figcaption><strong>Jaffna 5 Days Tour Package</strong></figcaption>
		  <button  class="tp_button"><span><a href="booking tours/tpt_Jaffna_5.php">More Details</a></span></button> 
      </figure>
    
	  
	  
		
      <figure data-title="Custom">      
        <figcaption>
			<h4 class="card-title"><strong>Customize Your Tour Package</strong></h4>
<p>You have the flexibility to customize your tour package to suit your preferences and needs.</p></figcaption>
		  <button  class="tp_button"><span><a href="contactUs.php">Customize</a></span></button>
      </figure>
    </div>
	  </div>
		
        <div class="pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <p1> <strong>Special Tour Packages</strong></p1>
            </div>
            </div>
	  
		
<div class="tp_gallery" id="special_packages" style="scroll-margin-top: 14rem;">
		  <figure data-title="Nuwara Eliya">
			  <div class="tp_container">
			  <img src="images/TP_15.jpg" class="tp_img">
			  <div class="overlay">Nuwara Eliya's luxury tours blend the enchantment of the colonial era with modern luxuries, providing visitors with an elegant sanctuary in the centre of Sri Lanka's hill country.</div></div>
			  <figcaption><strong>Nuwara Eliya Luxury Tour Package</strong></figcaption>
		 		 <button  class="tp_button"><span><a href="booking tours/tpt_NuwaraEliya_LT.php">More Details</a></span></button>
		  </figure>
			
      
      <figure data-title="Hikkaduwa" id="Hikkaduwa">
		  <div class="tp_container">
        <img src="images/TP_18.jpg" class="tp_img">
			  <div class="overlay">Hikkaduwa honeymoon tour in Sri Lanka offers a perfect blend of romance, relaxation, and adventure for newlyweds.</div></div>
		  <figcaption><strong>Hikkaduwa Honeymoon Tour Package</strong></figcaption>
		  <button  class="tp_button"><span><a href="booking tours/tpt_Hikkaduwa_2.php">More Details</a></span></button>
      </figure>
	
	<figure data-title="Kandy">
		  <div class="tp_container">
        <img src="images/TP_19.jpeg" class="tp_img">
			  <div class="overlay">Luxury tours in Kandy offer a harmonious blend of cultural immersion, natural beauty and refined hospitality, ensuring every moment is an epitome of travel indulgence.</div></div>
		  <figcaption><strong>Kandy Luxury Tour Package</strong></figcaption>
		  <button  class="tp_button"><span><a href="booking tours/tpt_Kandy_3.php">More Details</a></span></button>
      </figure>
	
	<figure data-title="Yala">
		  <div class="tp_container">
        <img src="images/TP_11.png" class="tp_img">
			  <div class="overlay">Yala's safari tours are not just  wildlife expeditions, but rather captivating journeys into the heart of nature.</div></div>
		  <figcaption><strong>Yala Wild Safari Tour Package</strong></figcaption>
		  <button  class="tp_button"><span><a href="booking tours/tpt_Yala_3.php">More Details</a></span></button>
      </figure>
	
	
      <figure data-title="Dambulla">
		  <div class="tp_container">
        <img src="images/TP_2.jpg" class="tp_img">
			  <div class="overlay">Jeep safaris in Dambulla are a captivating way to connect with nature and witness the country's incredible biodiversity.</div></div>
		  <figcaption><strong>Dambulla Wild Safari Tour Package</strong></figcaption>
		  <button  class="tp_button"><span><a href="booking tours/tpt_Dambulla_2.php">More Details</a></span></button>
      </figure>
	
	
	
	  </div>
	  <br/>
		
		
<footer>
	<div class="row">
	  <div class="col-md-4" style="text-align: center">
		  <h4>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;MENU</h4>
		  <br/>
		  <ul type="none">
		      <li><a class="footer-link" href="Tour Packages_main.php">TOUR PACKAGES</a></li>
			  <li><a class="footer-link" href="aboutUs.php">ABOUT US</a></li>
			  <li><a class="footer-link" href="bookingForm.php">BOOK NOW</a></li>
			  <li><a class="footer-link" href="customer_reviews.php">CUSTOMER REVIEWS</a></li>
			  <li><a class="footer-link" href="contactUs.php">CONTACT US</a></li>
			  <li><a class="footer-link" href="careers.php">CAREERS</a></li>
		  </ul>
	  </div>
	  <div class="col-md-4">
		  <h4  style="text-align: center">WHERE TO FIND US</h4><br/>
		  <ul type="none">
		  	<li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
  <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
</svg>&emsp;<a href="mailto:ceylonodyssey@gmail.com" class="footer-link">ceylonodyssey@gmail.com</a></li>
		  	<li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>&emsp;<a href="tel:+94713131313" class="footer-link">+94 713 131 313</a></li>
		  </ul>
		  <br/>&emsp;&emsp;&emsp;
		  <a class="footer-link" href=""><svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
		  </svg></a>&emsp;
		  <a class="footer-link" href=""><svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></a>&emsp;
		  <a href="" class="footer-link"><svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
</svg></a>&emsp;
		  <a href="" class="footer-link"><svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg></a>
	  </div>
	  <div class="col-md-4"><img src="images/Logo.png" style="float: right; margin: 2% 5% 2% 0;" width="200"  alt="Logo of Ceylon Odyssey"/></div>
</div>
	<div class="row copyright-info">
		<div class="col-md-4" style="text-align: center">Copyright &copy; 2023 C<span style="font-variant: small-caps">eylon</span> O<span style="font-variant: small-caps">dyssey</span> (Pvt) Ltd.</div>
	  <div class="col-md-3" style="text-align: center">All Rights Reserved</div>
	  <div class="col-md-3" style="text-align: center">Terms and Conditions</div>
    <div class="col-md-2" style="text-align: center">Privacy Policy</div>
    </div>

    </footer>
</div>
  
  <!-- body code goes here -->
	<script language="javascript" type="text/javascript">

			let selectBox = document.querySelector('#select-box');
			let packages = document.querySelectorAll('.tp_gallery figure');
		
			selectBox.oninput = () => {
				packages.forEach(hide => hide.style.display = 'none');
				let value = selectBox.value;
				let destination = selectBox.options[selectBox.selectedIndex].text;
				packages.forEach(filter => {
					let title = filter.getAttribute('data-title');
					if (destination == title) {
						filter.style.display = 'block';
					}
					if (title == "Custom") {
						filter.style.display = 'block';
					}

					if (selectBox.value == '' || destination == 'All destinations') {
						filter.style.display = 'block';
					}
				});
			};
		
	</script>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.4.1.js"></script>
  
</body>
	
	
</html>

