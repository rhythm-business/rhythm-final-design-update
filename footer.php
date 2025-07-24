<div class="floatdBx">
    <a href="https://api.whatsapp.com/send?phone=919830083880&amp;text=Hey, I was just exploring your website and would love some help." target="_blank">
      <i class="bi bi-whatsapp"></i>
	</a>
	<a href="tel:+919830083880" target="_blank">
      <i class="bi bi-telephone"></i>
	</a>
  </div>

  <footer class="footer">
    <div class="container">
			<div class="row">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <div class="footer-logo">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-8 w-8 text-rhythm-gold mr-2" data-lov-id="src/components/Footer.tsx:18:12" data-lov-name="Clock" data-component-path="src/components/Footer.tsx" data-component-line="18" data-component-file="Footer.tsx" data-component-name="Clock" data-component-content="%7B%22className%22%3A%22h-8%20w-8%20text-rhythm-gold%20mr-2%22%7D"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
              <span>Rhythm</span>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-9">
          <div class="widget">
            <div class="footer-nav">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="collection.php">Collection</a></li>
                <li><a href="wall-clocks.php">Wall Clocks</a></li>
                <li><a href="repairs.php">Repairs</a></li>
                <li><a href="why-us.php">Why Us</a></li>
                <li><a href="contact-us.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="widget">
            <div class="footer-copy">
              <p>© 2025 Rhythm. All rights reserved.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="widget">
            <div class="up-btn">
				<nav class="nav social social-white">
				  <a href="https://www.instagram.com/rhythm__southcity?igsh=dnF1bnRkM2c0ZDBq" target="_blank">
					  <i class="bi bi-instagram"></i>
					</a>
				  <a href="https://www.facebook.com/share/19PTLaSzNJ/?mibextid=wwXIfr" target="_blank">
					  <i class="bi bi-facebook"></i>
					</a>
				  <a href="https://g.co/kgs/PgfN7ah" target="_blank">
					  <i class="bi bi-google"></i>
					</a>
				 <a href="https://www.linkedin.com/company/rhythm-clocks/" target="_blank">
					  <i class="bi bi-linkedin"></i>
					</a>
			  	</nav>
              <a href="#Hero">Back to top <i class="bi bi-arrow-up"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/theme.js"></script>

  <script>
    function updateClock() {
      const now = new Date();
      const seconds = now.getSeconds();
      const minutes = now.getMinutes();
      const hours = now.getHours();

      const secondDeg = seconds * 6;
      const minuteDeg = minutes * 6 + seconds * 0.1;
      const hourDeg = (hours % 12) * 30 + minutes * 0.5;

      document.getElementById("second").style.transform = `rotate(${secondDeg}deg)`;
      document.getElementById("minute").style.transform = `rotate(${minuteDeg}deg)`;
      document.getElementById("hour").style.transform = `rotate(${hourDeg}deg)`;
    }

    setInterval(updateClock, 1000);
    updateClock();
  </script>

  <script>
    const scrollElements = document.querySelectorAll(".js-scroll");
    const elementInView = (el, dividend = 1) => {
      const elementTop = el.getBoundingClientRect().top;
      return (
        elementTop <=
        (window.innerHeight || document.documentElement.clientHeight) / dividend
      );
    };
    const elementOutofView = (el) => {
      const elementTop = el.getBoundingClientRect().top;
      return (
        elementTop > (window.innerHeight || document.documentElement.clientHeight)
      );
    };
    const displayScrollElement = (element) => {
      element.classList.add("scrolled");
    };
    const hideScrollElement = (element) => {
      element.classList.remove("scrolled");
    };
    const handleScrollAnimation = () => {
      scrollElements.forEach((el) => {
        if (elementInView(el, 1.25)) {
          displayScrollElement(el);
        } else if (elementOutofView(el)) {
          hideScrollElement(el)
        }
      })
    }
    window.addEventListener("scroll", () => { 
      handleScrollAnimation();
    });
  </script>

</body>

</html>