<link rel="stylesheet" href="{{ asset('frontend/css/footer-style.css') }}">
<footer>
    <div class="footer-sections">
      <div class="footer-section">
        <div class="footer-right">
          <div class="footer-logo">
            <img src="{{ asset("frontend/image/logo-white-bg-circle.png") }}"/>
          </div>
          <div class="footer-text">
            In recent years, Management education has witnessed an exponential
            rise in popularity and significance. Keeping in mind this steady
            craze for management studies, a well managed educatio...
          </div>
        </div>
        <div class="quick-links">
          <div class="quick-link">Quick Link</div>
          <div class="middle-1">
            <div class="about-us-footer">
              <a href="#"> &#10095; About Us </a>
            </div>
            <div class="courses-footer">
              <a href="#"> &#10095; Courses </a>
            </div>
            <div class="gallery-footer">
              <a href="#"> &#10095; Gallery </a>
            </div>
            <div class="contact-footer">
              <a href="#"> &#10095; Contact Us </a>
            </div>
          </div>
        </div>
        <div class="quick-contacts">
          <div class="quick-contact">Quick Contact</div>
          <div class="quick-address middle-2">
            <i class="fa-solid fa-location-dot"></i>
            Mayalbari-12, Teku, Kathmandu, Nepal
          </div>
          <div class="postbox middle-2">
            <i class="fa-solid fa-tty"></i>
            POB : 929, Kathmandu, Nepal
          </div>
          <div class="quick-tel middle-2">
            <i class="fa-solid fa-phone"></i>
            01-5922111
          </div>
          <div class="quick-mail middle-2">
            <i class="fa-solid fa-envelope"></i>
            info@systembull.edu.np
          </div>
        </div>
        <div class="news-letter-section">
          <div class="news-letter">Newsletter</div>
          <div class="email-box-text">
            Email subscription is an opportunity to receive an interesting
            newsletter from a website.
          </div>
          <div>
            <input
              type="text"
              placeholder="Enter your email"
              class="email-box"
              required
            />
          </div>
        </div>
      </div>
      <hr />
      <div class="end-line">
        <div class="copy-right">
          © Copyright 2024 Schools. All rights reserved.
        </div>
        <div class="designer">
          Design and Developed By:
          <a href="http://facebook.com/ashim.adhikari.9809" target="_blank">
            <abbr title="Click here to contact me."> Ashim Adhiakri </abbr>
          </a>
        </div>
      </div>
    </div>
  </footer>
  <script src="{{ asset('frontend/script/index-style.js') }}"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
    integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script>
  <script>
    $(document).ready(function () {
      $(".owl-carousel").owlCarousel({
        loop: true,
        lazyLoad: true,
        autoplay: 5,
      });
    });
  </script>
</body>
</html>
