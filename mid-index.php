<section class="wrapper hero" id="Hero">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content js-scroll fade-in-top scrolled">
              <!--<img src="assets/img/logo.webp" alt="" />-->
              <!--<h1 class="title">Watches & Clock Store<br>in Kolkata</h1>-->
			  <h1 class="title">Watch & Clock Boutique<br>in Kolkata</h1>
			  <!--<h4 class="subtitle">Elegance. Precision. Craftsmanship.</h4>-->
			  <h4 class="subtitle">Timeless Design. Unmatched Precision. Crafted Excellence.</h4>
              <!--<p class="desc">At Rhythm, we bring you premium timepieces that redefine style and precision. Since 1970, we’ve been South Kolkata’s destination for sophisticated watches, statement clocks, and expert servicing. From our luxury watch shop near Ballygunge to premium wristwatch showrooms near Gariahat, we curate timeless pieces — perfect for birthdays, weddings, and home delivery of designer wall clocks.</p>-->
				<p class="desc">Welcome to a world where time is more than just a measurement; it's a message.  Our premium watch boutique in Kolkata features an exclusive assortment of luxury watches that exemplify sophistication, creativity, and artisanal craftsmanship.</p>
<p class="desc">Since 1970, we've been Kolkata's go-to place for high-end watches, iconic clocks, and skilled service. Discover watches and clocks created for birthdays, weddings, and sophisticated living—delivered to your home with care and grace.</p>
              <div class="d-flex">
                <span><a class="btn btn-custom me-2" href="collection.php">Explore Collection <i class="bi bi-arrow-right"></i></a></span>
                <span><a class="btn btn-custom2 rounded" href="contact-us.php">Visit Showroom</a></span>
              </div>
            </div>
          </div>
          <div class="col-lg-1">
            <div class="explore-box">
              <div class="bar"></div>
              <h5><a href="#Collection">Scroll to explore</a></h5>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="hero-image js-scroll slide-left scrolled">
              <div class="clock">
                <div class="hand hour" id="hour"></div>
                <div class="hand minute" id="minute"></div>
                <div class="hand second" id="second"></div>
                <div class="center-dot"></div>
                <div class="brand">RHYTHM</div>
              </div>
            </div>
          </div>
		</div>
      </div>
    </section>
    <!--/Hero -->
    <section class="wrapper brands" id="Collection">
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center mb-10 js-scroll fade-in-bottom scrolled">
            <h2 class="subTitle"><img src="assets/img/icon/watch.png">Exclusive Collection</h2>
            <h3 class="title">Best Premium Watch Brands in Kolkata</h3>
            <p class="desc">Explore top watch brands in Kolkata like Fossil, Armani Exchange, Seiko, Casio, Guess, G-Shock, Titan, and Timex. Find men’s branded watches, ladies watch collections, and luxury wristwatches — perfect for gifting or personal style. Rhythm has it all.</p>
          </div>
        </div>
		<div class="row">
        	<div class="col-md-12 col-lg-12 js-scroll fade-in-bottom scrolled">
				<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet">
    			<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" rel="stylesheet">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
				<style>
					.brand-box {padding: 20px;background: #ffffff;border-radius: 10px;box-shadow: 0 1px 2px 0 rgb(0, 0, 0, .05);display: flex;flex-direction: column;align-items: center;gap: 30px;text-align: center;margin-bottom: 30px;width: 100%;height: 100px;}
					.brand-box img {width: 100%;height: 100%;object-fit:content;}
					.slider_active .owl-dots {display: flex;align-items: center;justify-content: center;}
					.slider_active .owl-dots .owl-dot {display: inline-block;width: .5rem;height: .5rem;margin: 0 .3rem;padding: 0;background: #aab0bc;opacity: .5;border-radius: 100%;border: 3px solid transparent;transform: scale(.6);}
					.slider_active .owl-dots .owl-dot.active {transform: scale(1);background: 0 0;border-color: #aab0bc;}
				</style>
        		<div class="owl-carousel slider_active">
    				<div class="item">
            			<div class="brand-box js-scroll fade-in-bottom scrolled">
              				<img src="./assets/img/brand/3.webp" alt="" />
            			</div>
          			</div>
          			<div class="item">
            			<div class="brand-box js-scroll fade-in-bottom scrolled">
              				<img src="./assets/img/brand/4.webp" alt="" />
            			</div>
          			</div>
					<div class="item">
            			<div class="brand-box js-scroll fade-in-bottom scrolled">
              				<img src="./assets/img/brand/8.webp" alt="" />
            			</div>
          			</div>
					<div class="item">
            			<div class="brand-box js-scroll fade-in-bottom scrolled">
              				<img src="./assets/img/brand/5.webp" alt="" />
            			</div>
          			</div>
          			<div class="item">
            			<div class="brand-box js-scroll fade-in-bottom scrolled">
              				<img src="./assets/img/brand/10.webp" alt="" />
            			</div>
          			</div>
					<div class="item">
            			<div class="brand-box js-scroll fade-in-bottom scrolled">
              				<img src="./assets/img/brand/11.webp" alt="" />
            			</div>
          			</div>
					<div class="item">
            			<div class="brand-box js-scroll fade-in-bottom scrolled">
              				<img src="./assets/img/brand/12.webp" alt="" />
            			</div>
          			</div>
					<div class="item">
            			<div class="brand-box js-scroll fade-in-bottom scrolled">
              				<img src="./assets/img/brand/13.webp" alt="" />
            			</div>
          			</div>
        		</div>
    			<script>
					function company_carouselInit() {
						$('.owl-carousel.slider_active').owlCarousel({
							loop: true,
							margin: 30,
							stagePadding: 0,
							smartSpeed:2500,
							autoplay: true,
							autoplayTimeout: 2500,
							autoplayHoverPause: false,
							responsive: {
								0: {
									items: 2
								},
								768: {
									items: 2,
								},
								992: {
									items: 6
								}
							}
						});
					}
					company_carouselInit();
    			</script>
			</div>
		</div>
      </div>
    </section>
    <!--/Brands -->
    <section class="wrapper cta js-scroll fade-in-bottom scrolled">
      <div class="container">
        <div class="cta-area">                
          <div class="left-box">
            <h3>Looking for a Specific Watch Brand?</h3>
            <p>Can’t find your favourite model? Ask us about Swiss watches in Kolkata, couple watches for anniversary gifts, or automatic watch servicing. We accept pre-orders for rare watches and unique gifting pieces across Kolkata.</p>
          </div>
          <div class="right-box">
            <a class="btn btn-custom me-2" href="https://api.whatsapp.com/send?phone=919830083880&amp;text=Hi! I'm looking for a specific watch. Can I share the brand and model details here?" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card mr-2 h-4 w-4" data-lov-id="src/components/BrandsSection.tsx:140:18" data-lov-name="CreditCard" data-component-path="src/components/BrandsSection.tsx" data-component-line="140" data-component-file="BrandsSection.tsx" data-component-name="CreditCard" data-component-content="%7B%22className%22%3A%22mr-2%20h-4%20w-4%22%7D"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>Enquire now</a>
          </div>
        </div>
      </div>
    </section>
    <!--/CTA -->
    <section class="wrapper service" id="WallClocks">
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center mb-10 js-scroll fade-in-bottom scrolled">
            <h2 class="subTitle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3 mr-1.5" data-lov-id="src/components/ClocksSection.tsx:40:14" data-lov-name="Clock" data-component-path="src/components/ClocksSection.tsx" data-component-line="40" data-component-file="ClocksSection.tsx" data-component-name="Clock" data-component-content="%7B%22className%22%3A%22h-3%20w-3%20mr-1.5%22%7D"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>Exclusive Collection</h2>
            <h3 class="title">Premium Clock Collection in Kolkata</h3>
            <p class="lead">Check out our designer wall clocks in Kolkata — now available online with home delivery. Choose from vintage, musical, and premium clocks that add style and charm. Visit our wall clock shop in Kolkata or order from home to upgrade your space.</p>
          </div>
        </div>
        <div class="swiper-container dots-closer" data-margin="10" data-dots="true" data-items-md="4" data-items-xs="1">
  			<div class="swiper">
    			<div class="swiper-wrapper">
      				<div class="swiper-slide">
						<div class="service-box js-scroll fade-in-bottom scrolled">
						  <figure class="overlay overlay-1 hover-scale">
							<img src="./assets/img/resourses/service-img1.webp" alt="" />
						  </figure>
						  <div class="inner">
							<figcaption>
							  <h4>Black Forest Cuckoo Clocks</h4>
							  <p>Expertly hand-carved in the Black Forest, these traditional timepieces feature intricate moving figures and the iconic cuckoo sound—  directly imported from Germany.</p>
							</figcaption>
							<a href="assets/data/Black-Forest-Cuckoo-Clocks.pdf" target="blank">View Collection
							<i class="bi bi-chevron-right"></i></a>
						  </div>
						</div>
          			</div>
          			<div class="swiper-slide">
						<div class="service-box js-scroll fade-in-bottom scrolled">
						  <figure class="overlay overlay-1 hover-scale">
							<img src="./assets/img/resourses/service-img2.webp" alt="" />
						  </figure>
						  <div class="inner">
							<figcaption>
							  <h4>Rhythm Musical Clocks</h4>
							  <p>From Japan’s No. 1 clock brand, Rhythm offers precision-crafted wall clocks featuring smooth motion and enchanting melodies—where technology meets timeless beauty.</p>
							</figcaption>
							<a href="assets/data/Rhythm-Musical-Clocks.pdf" target="blank">View Collection
								<i class="bi bi-chevron-right"></i></a>
						  </div>
						</div>
					 </div>
					  <div class="swiper-slide">
						<div class="service-box js-scroll fade-in-bottom scrolled">
						  <figure class="overlay overlay-1 hover-scale">
							<img src="./assets/img/resourses/service-img3.webp" alt="" />
						  </figure>
						  <div class="inner">
							<figcaption>
							  <h4>Seiko Wall Clocks</h4>
							  <p>Renowned Japanese craftsmanship, Seiko combines precision timekeeping with innovative design—ideal for homes, offices, and thoughtful gifting.</p>
							</figcaption>
							<a href="assets/data/Seiko-Clocks-Catalogue.pdf" target="blank">View Collection
								<i class="bi bi-chevron-right"></i></a>
						  </div>
						</div>
					  </div>
					  <div class="swiper-slide">
						<div class="service-box js-scroll fade-in-bottom scrolled">
						  <figure class="overlay overlay-1 hover-scale">
							<img src="./assets/img/resourses/service-img4.webp" alt="" />
						  </figure>
						  <div class="inner">
							<figcaption>
							  <h4>Antique-Looking Clocks</h4>
							  <p>Handcrafted with timeless elegance, these vintage-inspired clocks come in a variety of designs—from rich wood finishes to classic brass—bringing historical charm to any space.</p>
							</figcaption>
							<a href="assets/data/Antique-Looking-Clocks.pdf" target="blank">View Collection
								<i class="bi bi-chevron-right"></i></a>
						  </div>
						</div>
					  </div>
					</div>
				</div>
			</div>
        </div>
        <div class="row mt-10">
          <div class="col-lg-12">
            <div class="btn-box text-center js-scroll fade-in-bottom scrolled">
              <a href="wall-clocks.php">Explore Full Clock Collection</a>
            </div>
          </div>
        </div>
    </section>
    <section class="wrapper repairs" id="Repairs">
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center mb-10 js-scroll fade-in-bottom scrolled">
            <h2 class="subTitle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench h-3 w-3 mr-1.5" data-lov-id="src/components/RepairsSection.tsx:76:14" data-lov-name="Wrench" data-component-path="src/components/RepairsSection.tsx" data-component-line="76" data-component-file="RepairsSection.tsx" data-component-name="Wrench" data-component-content="%7B%22className%22%3A%22h-3%20w-3%20mr-1.5%22%7D"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>Expert Services</h2>
            <h3 class="title">Professional Watch & Clock Repairs in Kolkata</h3>
            <p class="lead">We offer expert watch repairs in Kolkata and service all major clock brands. From automatic and vintage watch repair to water-resistance testing and wall clock tuning, we do it all. With 50+ years of experience, we’re trusted for precise work — even for Rolex watch repair in Kolkata.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-6">
            <div class="repairs-box card shadow-lg js-scroll fade-in-bottom scrolled">
              <div class="image-box">
                <img src="./assets/img/resourses/repair-img1.webp" alt="" />
              </div>
              <div class="content-box">
                <h4>Watch Battery Replacement</h4>
                <p>Quick, quality battery changes (recommended every 2 years).</p>
				<a href="https://api.whatsapp.com/send?phone=919830083880&amp;text=Hi, I’d like to get a *battery replacement* done for my watch. Can you assist?" target="_blank">Contact Us <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="repairs-box card shadow-lg js-scroll fade-in-bottom scrolled">
              <div class="image-box">
                <img src="./assets/img/resourses/repair-img2.webp" alt="" />
              </div>
              <div class="content-box">
                <h4>Watch Strap Change</h4>
                <p>Refresh your watch with new leather, metal, or premium straps.</p>
				<a href="https://api.whatsapp.com/send?phone=919830083880&amp;text=Hi, I need a *strap change* for my watch. Could you guide me?" target="_blank">Contact Us <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <!--<div class="col-md-6 col-lg-6">
            <div class="repairs-box card shadow-lg js-scroll fade-in-bottom scrolled">
              <div class="image-box">
                <img src="./assets/img/resourses/repair-img3.webp" alt="" />
              </div>
              <div class="content-box">
                <h4>REPLACEMENT OF PARTS</h4>
                <p>After a thorough analysis of your watch, if our team finds any part damaged, we offer replacement of all watch parts.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="repairs-box card shadow-lg js-scroll fade-in-bottom scrolled">
              <div class="image-box">
                <img src="./assets/img/resourses/repair-img4.webp" alt="" />
              </div>
              <div class="content-box">
                <h4>PERFORMANCE TEST</h4>
                <p>We analyze the amplitude, time rate, power reserve, and beat error for mechanical watches whereas the quartz watches tests.</p>
              </div>
            </div>
          </div>-->
          <div class="col-md-6 col-lg-6">
            <div class="repairs-box card shadow-lg js-scroll fade-in-bottom scrolled">
              <div class="image-box">
                <img src="./assets/img/resourses/repair-img5.webp" alt="" />
              </div>
              <div class="content-box">
                <h4>Watch Movement Overhaul</h4>
                <p>Full internal servicing for long-lasting performance and precision.</p>
				<a href="https://api.whatsapp.com/send?phone=919830083880&amp;text=Hi, I need help with a *watch repair* but not sure what’s wrong. Can you assist?" target="_blank">Contact Us <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="repairs-box card shadow-lg js-scroll fade-in-bottom scrolled">
              <div class="image-box">
                <img src="./assets/img/resourses/repair-img6.webp" alt="" />
              </div>
              <div class="content-box">
                <h4>Watch Polishing & Buffing</h4>
                <p>Restore shine and remove scratches for a like-new finish.</p>
				<a href="https://api.whatsapp.com/send?phone=919830083880&amp;text=Hello! I would like to have my watch polished and buffed. Can you help?" target="_blank">Contact Us <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <!--<div class="col-md-6 col-lg-6">
            <div class="repairs-box card shadow-lg js-scroll fade-in-bottom scrolled">
              <div class="image-box">
                <img src="./assets/img/resourses/repair-img7.webp" alt="" />
              </div>
              <div class="content-box">
                <h4>ULTRASONIC CLEANING</h4>
                <p>Ultrasonic Cleaning is the deep cleaning of watches, we get into the most difficult of places and get rid of that...</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="repairs-box card shadow-lg js-scroll fade-in-bottom scrolled">
              <div class="image-box">
                <img src="./assets/img/resourses/repair-img8.webp" alt="" />
              </div>
              <div class="content-box">
                <h4>LUXURY WATCH SERVICING</h4>
                <p>Complete servicing for luxury and branded watches, including movement cleaning and calibration.</p>
              </div>
            </div>
          </div>-->
        </div>
		<div class="row mt-10">
          <div class="col-lg-12">
            <div class="btn-box text-center js-scroll fade-in-bottom scrolled">
              <a href="repairs.php">View All Details</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Repairs section -->
    <section class="wrapper process js-scroll fade-in-bottom scrolled">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card shadow-lg process-wraper">
              <div class="row">
                <div class="col-lg-6">
                  <h2 class="title">Our Repair Process</h2>
                    <div class="process-box">
                      <div class="icon">
                        <span>01</span>
                      </div>
                      <div class="content">
                        <h4>Collect Ideas</h4>
                        <p>Free initial assessment and detailed examination of your timepiece by our expert technicians.</p>
                      </div>
                    </div>
                    <div class="process-box">
                      <div class="icon">
                        <span>02</span>
                      </div>
                      <div class="content">
                        <h4>Transparent Quote</h4>
                        <p>Clear, no-obligation cost estimate before proceeding with any repairs or services.</p>
                      </div>
                    </div>
                    <div class="process-box">
                      <div class="icon">
                        <span>03</span>
                      </div>
                      <div class="content">
                        <h4>Expert Repair</h4>
                        <p>Skilled technicians use genuine parts and precision tools for meticulous repair work.</p>
                      </div>
                    </div>
                    <div class="process-box">
                      <div class="icon">
                        <span>04</span>
                      </div>
                      <div class="content">
                        <h4>Quality Assurance</h4>
                        <p>Rigorous testing and final quality check to ensure perfect functioning before delivery.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="promise-box">
                      <h2 class="title">Our Quality Promise</h2>
                      <p>We pride ourselves on restoring vintage and high-end watches that other service centers may reject. With state-of-the-art equipment and decades of experience, we guarantee precision and excellence in every repair.</p>
                      <hr>
                      <ul class="progress-list">
                        <li>
                          <p>Expert Technicians</p>
                          <div class="progressbar line bg-custom" data-value="100"></div>
                        </li>
                        <li>
                          <p>Genuine Parts</p>
                          <div class="progressbar line bg-custom" data-value="100"></div>
                        </li>
                        <li>
                          <p>Warranty Backed</p>
                          <div class="progressbar line bg-custom" data-value="100"></div>
                        </li>
                      </ul>
                      <hr>
                      <a href="https://api.whatsapp.com/send?phone=919830083880&amp;text=Hello! I need to get my watch repaired — could you guide me on how to proceed?" target="_blank">Schedule a Repair Consultation</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Process section -->
      <section class="wrapper choose-us" id="WhyUs">
        <div class="container">
          <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center mb-10 js-scroll fade-in-bottom scrolled">
              <h2 class="subTitle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-3 w-3 mr-1.5" data-lov-id="src/components/WhyChooseUs.tsx:42:14" data-lov-name="Star" data-component-path="src/components/WhyChooseUs.tsx" data-component-line="42" data-component-file="WhyChooseUs.tsx" data-component-name="Star" data-component-content="%7B%22className%22%3A%22h-3%20w-3%20mr-1.5%22%7D"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>Expert Services</h2>
              <h3 class="title">Why Rhythm is Kolkata’s Trusted Watch Store</h3>
              <p class="lead">Our skilled technicians handle repairs for all major brands — from battery changes and strap replacements to movement overhauls and polishing. For luxury or antique watch repair in Kolkata, Rhythm is the trusted choice.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="choose-box js-scroll fade-in-bottom scrolled">
                <div class="icon"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-8 w-8" data-lov-id="src/components/WhyChooseUs.tsx:9:12" data-lov-name="Star" data-component-path="src/components/WhyChooseUs.tsx" data-component-line="9" data-component-file="WhyChooseUs.tsx" data-component-name="Star" data-component-content="%7B%22className%22%3A%22h-8%20w-8%22%7D"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg> 
                </div>
                <h4>4.9★ Google Rating</h4>
                <p><b>India’s  highest-rated watch and clock store</b> with 4.9 stars. Over 11,000 happy customers have reviewed us positively. We’re known for our trusted service and attention to detail. Your timepieces are always in expert hands with us.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="choose-box js-scroll fade-in-bottom scrolled">
                <div class="icon"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-8 w-8" data-lov-id="src/components/WhyChooseUs.tsx:14:12" data-lov-name="Users" data-component-path="src/components/WhyChooseUs.tsx" data-component-line="14" data-component-file="WhyChooseUs.tsx" data-component-name="Users" data-component-content="%7B%22className%22%3A%22h-8%20w-8%22%7D"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <h4>100,000+ Happy Customers</h4>
                <p>We’ve proudly served over 1,00,000 satisfied customers in Kolkata. People trust us for honest, fast, and reliable service. Our customers return because we care for their watches like our own. Your trust is the reason we keep ticking.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="choose-box js-scroll fade-in-bottom scrolled">
                <div class="icon"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-8 w-8" data-lov-id="src/components/WhyChooseUs.tsx:19:12" data-lov-name="Clock" data-component-path="src/components/WhyChooseUs.tsx" data-component-line="19" data-component-file="WhyChooseUs.tsx" data-component-name="Clock" data-component-content="%7B%22className%22%3A%22h-8%20w-8%22%7D"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </div>
                <h4>50+ Years of Expertise</h4>
                <p>With 50+ years of experience, we’ve seen every kind of watch. Our skills have been passed down through generations in Kolkata. From vintage clocks to modern watches, we fix them all. We keep the city’s time running right.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="choose-box js-scroll fade-in-bottom scrolled">
                <div class="icon"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award h-8 w-8" data-lov-id="src/components/WhyChooseUs.tsx:24:12" data-lov-name="Award" data-component-path="src/components/WhyChooseUs.tsx" data-component-line="24" data-component-file="WhyChooseUs.tsx" data-component-name="Award" data-component-content="%7B%22className%22%3A%22h-8%20w-8%22%7D"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path><circle cx="12" cy="8" r="6"></circle></svg>
                </div>
                <h4>Authorized Watch Dealers in Kolkata</h4>
                <p>We provide genuine parts and authorised services for premium watch brands. Our work meets brand standards for quality, precision, and reliability. Your watches are repaired by trained professionals with expert care. Trusted by Kolkata for authentic service you can count on.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <div class="customers-box js-scroll fade-in-bottom scrolled">
                <div class="row">
                  <div class="col-md-7 col-lg-7">
                    <div class="left-box">
                      <h3>What Our Customers Say</h3>
					  <p>Check out real reviews from our happy clients:</p>
                      <div class="swiper-container" data-margin="30" data-dots="true" data-items-xl="2" data-items-md="1" data-items-xs="1">
                        <div class="swiper">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <div class="quote-box">
								  <div class="top-box">
									  <div class="info">
										  <img class="image" src="assets/img/testi-img1.png" alt="">
                        				<h5 class="name">Ritesh Singh</h5>
                    				  </div>
									  <div class="google">
                        				<svg style="width:20px;height:20px;" viewBox="-3 0 262 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4"></path><path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853"></path><path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05"></path><path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335"></path></g></svg>
                    				  </div>
								</div>
                                <p>Their services are amusing and their collection is jaw-dropping!! They managed to repair my 150 year old "antique" clock which none of the other shops were ablee to do...They also do all types of battery, strap, glass, repairing and servicing under a single roof (which is very difficult to find elsewhere) !! Once again a solid "HATTS OFF" to them for their work!!</p>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="quote-box">
								  <div class="top-box">
									  <div class="info">
										<img class="image" src="assets/img/testi-img2.png" alt="">
                        				<h5 class="name">Ira Kapoor</h5>
                    				  </div>
									  <div class="google">
                        				<svg style="width:20px;height:20px;" viewBox="-3 0 262 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4"></path><path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853"></path><path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05"></path><path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335"></path></g></svg>
                    				  </div>
								</div>
                                <p>Excellent work, very prompt. Beautifully restored my grandmother's watch when all other stores refused.</p>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class="quote-box">
								  <div class="top-box">
									  <div class="info">
										<img class="image" src="assets/img/testi-img3.png" alt="">
                        				<h5 class="name">Sohini Pal</h5>
                    				  </div>
									  <div class="google">
                        				<svg style="width:20px;height:20px;" viewBox="-3 0 262 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4"></path><path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853"></path><path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05"></path><path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335"></path></g></svg>
                    				  </div>
								</div>
                                <p>Great experience at the store - the staff was very knowledgeable and experienced and helped us with the buying process! They even were able to repair a vintage watch that we were unable to get repaired anywhere else.<br>Would recommend.</p>
                              </div>
                            </div>
							<div class="swiper-slide">
                              <div class="quote-box">
								  <div class="top-box">
									  <div class="info">
										  <img class="image" src="assets/img/testi-img4.png" alt="">
                        				<h5 class="name">abhinanda rudra</h5>
                    				  </div>
									  <div class="google">
                        				<svg style="width:20px;height:20px;" viewBox="-3 0 262 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4"></path><path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853"></path><path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05"></path><path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335"></path></g></svg>
                    				  </div>
								</div>
                                <p>While the other shops said that two of my fav watches would take one month to repair, rhythm did it in 48 hrs. I am going back a happy customer. Would highly recommend this shop for buying watches and clocks and also for repairs.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5 col-lg-5">
                    <div class="right-box">
                      <div class="rating">
						<img src="assets/img/google-review.png">
                        <ul class="stars">
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                          <li><i class="bi bi-star-fill"></i></li>
                        </ul>
                        <div class="review">
							<span>11,000+</span>
							<small>Review</small>
						</div>
                      </div>
                      <ul class="progress-list">
                        <li>
                          <p>Service Quality</p>
                          <div class="progressbar line bg-custom" data-value="95"></div>
                        </li>
                        <li>
                          <p>Product Selection</p>
                          <div class="progressbar line bg-custom" data-value="90"></div>
                        </li>
                        <li>
                          <p>Customer Support</p>
                          <div class="progressbar line bg-custom" data-value="100"></div>
                        </li>
                      </ul>
                      <hr>
                      <a href="https://www.google.com/search?hl=en-IN&gl=in&q=Ground+Floor,+Rhythm,+South+City+Mall,+375,+Prince+Anwar+Shah+Rd,+opposite+Starbucks,+South+City+Complex,+Jadavpur,+Kolkata,+West+Bengal+700068&ludocid=13151233787441309636&lsig=AB86z5WpJApYeQK1E9pD2TGtL8gX&hl=en&gl=IN#lrd=0x3a0270d87bfa325b:0xb6829173928de7c4,1" target="_blank">Read all Google Reviews<i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	  <!-- /Instagram section -->
    <section class="wrapper instragram js-scroll fade-in-bottom scrolled">
      <div class="container">
		  <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center mb-10 js-scroll fade-in-bottom scrolled">
              <!--<h2 class="subTitle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin h-3 w-3 mr-1.5" data-lov-id="src/components/ContactSection.tsx:17:14" data-lov-name="MapPin" data-component-path="src/components/ContactSection.tsx" data-component-line="17" data-component-file="ContactSection.tsx" data-component-name="MapPin" data-component-content="%7B%22className%22%3A%22h-3%20w-3%20mr-1.5%22%7D"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>Instagram</h2>-->
              <h3 class="title">Follow Rhythm for exclusive collection</h3>
			  <p class="lead">Stay updated on our latest watch collections in Kolkata, designer wall clocks, and expert watch repair services. Check out new arrivals, repairs, and exclusive offers.</p>
            </div>
          </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="swiper-container" data-margin="30" data-dots="true" data-items-xl="4" data-items-md="2" data-items-xs="1">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="item">
                    			<figure class="overlay overlay-1 hover-scale rounded">
									<a href="https://www.youtube.com/shorts/ybVSEMnOsFM" target="blank"> 
										<img src="assets/img/video-thumb-img1.webp" alt="">
										<span class="bg"></span>
									</a>
                    			</figure>
                  			</div>
						</div>
						<div class="swiper-slide">
							<div class="item">
								<figure class="overlay overlay-1 hover-scale rounded">
									<a href="https://www.youtube.com/shorts/SZBAimdkZio" target="blank"> 
										<img src="assets/img/video-thumb-img5.webp" alt="">
										<span class="bg"></span>
									</a>
                    			</figure>
                  			</div>
						</div>
						<div class="swiper-slide">
							<div class="item">
                    			<figure class="overlay overlay-1 hover-scale rounded">
									<a href="https://www.youtube.com/shorts/maVEj73MSgc" target="blank"> 
										<img src="assets/img/video-thumb-img2.webp" alt="">
										<span class="bg"></span>
									</a>
                    			</figure>
                  			</div>
						</div>
						<div class="swiper-slide">
							<div class="item">
                    			<figure class="overlay overlay-1 hover-scale rounded">
									<a href="https://www.youtube.com/shorts/WuGH9bJpaGI" target="blank"> 
										<img src="assets/img/video-thumb-img3.webp" alt="">
										<span class="bg"></span>
									</a>
                    			</figure>
                  			</div>
						</div>
						<div class="swiper-slide">
							<div class="item">
								<figure class="overlay overlay-1 hover-scale rounded">
									<a href="https://www.youtube.com/shorts/9zSriv_j1qA" target="blank"> 
										<img src="assets/img/video-thumb-img4.webp" alt="">
										<span class="bg"></span>
									</a>
                    			</figure>
                  			</div>
						</div>
					</div>
				</div>
			  </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Choose Us section -->
      <section class="wrapper contact-us" id="Contact">
        <div class="container">
          <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center mb-10 js-scroll fade-in-bottom scrolled">
              <h2 class="subTitle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin h-3 w-3 mr-1.5" data-lov-id="src/components/ContactSection.tsx:17:14" data-lov-name="MapPin" data-component-path="src/components/ContactSection.tsx" data-component-line="17" data-component-file="ContactSection.tsx" data-component-name="MapPin" data-component-content="%7B%22className%22%3A%22h-3%20w-3%20mr-1.5%22%7D"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>Visit Rhythm Store</h2>
              <h3 class="title">Visit Our Watch Showrooms in Kolkata</h3>
              <p class="lead">Visit our South City Mall and Avani Riverside Mall stores to explore premium watches and clocks. Our team is here to help with expert advice and great service.</p>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="contat-box card shadow-lg js-scroll slide-left scrolled">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.071062162984!2d88.35914807518935!3d22.501516835572037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0270d87bfa325b%3A0xb6829173928de7c4!2sRhythm!5e0!3m2!1sen!2sin!4v1752124184847!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h3 class="heading mt-3">Contact Information</h3>
                <div class="item">
                  <div class="icon">
                    <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="content">
                    <h5>Address</h5>
                    <p>Ground Floor, South City Mall, 375, Prince Anwar Shah Rd, opposite Starbucks, South City Complex, Jadavpur, Kolkata, West Bengal 700068</p>
                  </div>
                </div>
                <div class="item">
                  <div class="icon">
                    <i class="bi bi-phone"></i>
                  </div>
                  <div class="content">
                    <h5>Phone</h5>
                    <p><a href="tel:+919830083880">+91 98300 83880</a></p>
                  </div>
                </div>
                <div class="item last">
                  <div class="icon">
                    <i class="bi bi-envelope"></i>
                  </div>
                  <div class="content">
                    <h5>E-mail</h5>
                    <p><a href="mailto:support@rhythmwatches.in">support@rhythmwatches.in</a></p>
                  </div>
                </div>
                <hr>
                <h5>Business Hours</h5>
                <p>All days: <span>11:00 AM - 9:00 PM</span></p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="contat-box card shadow-lg js-scroll slide-left scrolled">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.421575211374!2d88.3237401!3d22.563330699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0279d554f75991%3A0x56c8980612ef4a77!2sRhythm%20%E2%80%93%20Sadani%20Watch%20World!5e0!3m2!1sen!2sin!4v1751350504449!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h3 class="heading mt-3">Contact Information</h3>
                <div class="item">
                  <div class="icon">
                    <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="content">
                    <h5>Address</h5>
                    <p>Avani Riverside Mall, 32, Jagat Banerjee Ghat Rd, Choura Bustee, Shibpur, Howrah, West Bengal 711102</p>
                  </div>
                </div>
                <div class="item">
                  <div class="icon">
                    <i class="bi bi-phone"></i>
                  </div>
                  <div class="content">
                    <h5>Phone</h5>
                    <p><a href="tel:+919830083880">+91 98300 83880</a></p>
                  </div>
                </div>
                <div class="item last">
                  <div class="icon">
                    <i class="bi bi-envelope"></i>
                  </div>
                  <div class="content">
                    <h5>E-mail</h5>
                    <p><a href="mailto:support@rhythmwatches.in">support@rhythmwatches.in</a></p>
                  </div>
                </div>
                <hr>
                <h5>Business Hours</h5>
                <p>All days: <span>11:00 AM - 9:00 PM</span></p>
              </div>
            </div>
          </div>
          <div class="row mt-10">
            <div class="col-lg-12">
              <div class="btn-box text-center js-scroll fade-in-bottom scrolled">
                <a href="contact-us.php">Visit Rhythm – Where Every Second Counts!</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Contact section -->
    </div>
  <!-- /.content-wrapper -->