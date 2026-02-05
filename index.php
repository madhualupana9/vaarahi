<?php 

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$siteurl = $protocol . $_SERVER['HTTP_HOST'] . "/"; 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
       <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKL8PFHP');</script>
<!-- End Google Tag Manager -->

    <!-- Basic Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta name="robots" content="index, follow, max-image-preview:large" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <!-- Primary Meta Tags -->
    <title>Vaarahi Diagnostics - Best Diagnostic Centre in Hyderabad | Blood Test Lab</title>
    <meta name="description" content="Vaarahi Diagnostics: Advanced diagnostic centre in Hyderabad. Best blood testing lab with home sample collection. X-Ray, CT Scan, Mammography, ECG, Ultrasound services. Call 9090135135." />
    <meta name="keywords" content="diagnostic centre hyderabad, blood test lab, home sample collection, CT scan, X-Ray, mammography, ECG, ultrasound, pathology lab, health checkup" />
    
    <!-- Canonical -->
    <link rel="canonical" href="<?php echo $siteurl; ?>" />
    
    <!-- Open Graph / Facebook -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Vaarahi Diagnostics - Best Diagnostic Centre in Hyderabad | Blood Test Lab" />
    <meta property="og:description" content="Advanced diagnostic centre in Hyderabad with home sample collection. X-Ray, CT Scan, Mammography, ECG, Ultrasound services. Call 9090135135." />
    <meta property="og:url" content="<?php echo $siteurl; ?>" />
    <meta property="og:site_name" content="Vaarahi Diagnostics" />
    <meta property="og:image" content="<?php echo $siteurl; ?>images/Vaarahi-logo.png" />
    <meta property="og:image:width" content="1039" />
    <meta property="og:image:height" content="261" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:alt" content="Vaarahi Diagnostics - Best Diagnostic Centre in Hyderabad" />
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Vaarahihyd" />
    <meta name="twitter:creator" content="@Vaarahihyd" />
    <meta name="twitter:title" content="Vaarahi Diagnostics - Best Diagnostic Centre in Hyderabad" />
    <meta name="twitter:description" content="Advanced diagnostic centre in Hyderabad with home sample collection. X-Ray, CT Scan, Mammography, ECG, Ultrasound services." />
    <meta name="twitter:image" content="<?php echo $siteurl; ?>images/Vaarahi-logo.png" />
    <meta name="twitter:image:alt" content="Vaarahi Diagnostics - Best Diagnostic Centre in Hyderabad" />
    
    <link rel="icon" type="image/png" href="<?php echo $siteurl; ?>images/vaarahi-icon.png" />
    <link rel="apple-touch-icon" href="<?php echo $siteurl; ?>images/vaarahi-icon.png" />
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalBusiness",
      "name": "Vaarahi Diagnostics",
      "alternateName": "Vaarahi",
      "url": "<?php echo $siteurl; ?>",
      "logo": "<?php echo $siteurl; ?>images/Vaarahi-logo.png",
      "description": "Vaarahi Diagnostics is a leading provider of diagnostic services in Hyderabad, offering a full range of lab tests, scannings, diagnostic tests, blood sample testing and collection.",
      "medicalSpecialty": "Diagnostics",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Plot No. 8-2, Check Post, 293/A/1268, Rd Number 36",
        "addressLocality": "Jubilee Hills",
        "addressRegion": "Hyderabad",
        "postalCode": "500033",
        "addressCountry": "India"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "17.4254",
        "longitude": "78.3915"
      },
      "openingHours": "Mo-Su 00:00-23:59",
      "telephone": "+91 9090135135",
      "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
          "@type": "GeoCoordinates",
          "latitude": "17.4254",
          "longitude": "78.3915"
        },
        "geoRadius": "50000"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Diagnostic Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "X-Ray & Dental X-Ray"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Mammography"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "ECG & TMT"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "CT Scan"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Ultrasound"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Blood Tests & Sample Collection"
            }
          }
        ]
      },
      "sameAs": [
        "https://www.facebook.com/Vaarahidiagnostics/",
        "https://twitter.com/Vaarahihyd",
        "https://instagram.com/Vaarahidiagnostics/",
        "https://www.youtube.com/channel/UCTItKGIgHA7kj6jNN6EPuBg",
        "https://in.linkedin.com/company/Vaarahi-diagnostics-official"
      ]
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "@id": "<?php echo $siteurl; ?>#website",
      "url": "<?php echo $siteurl; ?>",
      "name": "Vaarahi Diagnostics",
      "description": "Vaarahi Diagnostics is a leading provider of diagnostic services in Hyderabad.",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "<?php echo $siteurl; ?>/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo $siteurl; ?>"
        }
      ]
    }
    </script>

    <!-- CSS and JS Resources -->
    <link rel="stylesheet" href="<?php echo $siteurl; ?>css/stylesheet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="<?php echo $siteurl; ?>js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <meta name="google-site-verification" content="bfqiMikalvwDnHf1PP4Ir1fCOtdlfjobK-faLTKVfJw" />
  </head>

  <body>
   <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKL8PFHP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header id="header" class="overflow-visible" >
      <div
        class="container d-flex justify-content-end justify-content-sm-between align-items-center"
      >
        <div class="logo me-auto me-sm-0">
          <a href="<?php echo $siteurl; ?>"
            ><img
              src="<?php echo $siteurl; ?>images/Vaarahi-logo.png"
              width="1039"
              height="261"
              alt="Vaarahi Diagnostics"
              class="img-fluid"
          /></a>
        </div>
       
        <ul class="menu-ul-class">
            <!-- <li><a href="<?php echo $siteurl; ?>">Home</a></li> -->
            <li>
              <a href="<?php echo $siteurl; ?>#hero-slider">Home</a>
            </li>
            <li>
              <a href="<?php echo $siteurl; ?>#about">About Us</a>
            </li>
            <li>
              <a href="<?php echo $siteurl; ?>#our_services">Our Services</a>
            </li>
           
            <li><a href="<?php echo $siteurl; ?>#blog/">Blog</a></li>

            <li>
              <a href="<?php echo $siteurl; ?>#contact-location">Contact Us</a>
            </li>
            
          </ul>
        
        <div class="menus_btns">
          <ul class="d-flex align-items-center">
            <li class="d-lg-block">
              <a
                href="<?php echo $siteurl; ?>#book-a-test"
                title="Book a Test"
                class="readmore appointment-btn"
                ><i class="bi bi-calendar-check me-2"></i> Book a Test</a
              >
            </li>
          </ul>
        </div>

        <div class="menus_btns">
          <ul class="d-flex align-items-center">
            <li class="d-none d-lg-block">
             
            </li>

            <li class="d-lg-none">
              <button
                type="button"
                aria-label="mobileToggle"
                class="mob-toggle"
              >
                <img
                  src="<?php echo $siteurl; ?>images/icon-menu-toggle.svg"
                  width="22"
                  height="18"
                  alt="Menu Toggle"
                  class="img-fluid"
                />
              </button>
            </li>
          </ul>
        </div>
      </div>
    </header>
   

    

    <div class="side-menu transition">
      <button type="button" aria-label="sideMenuclose" class="close-menu">
        <i class="bi bi-x"></i>
      </button>
     
     
      <ul>
        <!-- <li><a href="<?php echo $siteurl; ?>">Home</a></li> -->
        <li>
          <a href="<?php echo $siteurl; ?>#hero-slider">Home</a>
        </li>
         <li>
           <a href="<?php echo $siteurl; ?>#about">About Us</a>
        </li>
        <li>
           <a href="<?php echo $siteurl; ?>#our_services">Our Services</a>
        </li>

           <li><a href="<?php echo $siteurl; ?>#book-a-test">Blog</a></li>

            <li> <a href="<?php echo $siteurl; ?>#contactus">Contact Us</a></li>

        
      </ul>
    </div>

    <script type="text/javascript">
      $(document).ready(function () {
        // Function to handle regular search input
        $("#searchInput").on("input", function () {
          var inputVal = $(this).val();
          var closeIcon = $(this).siblings(".close-icon");

          if (inputVal.length || $("#voiceOverlay").is(":visible")) {
            closeIcon.show(); // Show close icon if input has value or voice overlay is visible
          } else {
            closeIcon.hide(); // Hide close icon if input is empty and voice overlay is not visible
          }
        });

        // Function to handle click on close icon
        $(".close-icon").click(function () {
          $(this).siblings('input[type="text"]').val("").focus(); // Clear input field and focus
          $(this).hide(); // Hide close icon
        });

        // Function to handle click on close icon
        $(".close-icon").click(function () {
          var inputField = $(this).siblings('input[type="text"]');
          inputField.val("").focus(); // Clear input field and focus
          $(this).hide(); // Hide close icon
          inputField.siblings(".result").empty(); // Clear search results
        });

        

        // Function to handle click on regular search result
        $(document).on("click", ".result p", function () {
          $(this)
            .closest("form")
            .find('input[type="text"]')
            .val($(this).text());
          $(this).parent(".result").empty();
        });

        // Voice search button click event handler
        $("#voiceSearchButton").click(function (event) {
          event.preventDefault(); // Prevent default link behavior

          // Toggle the display of the voice overlay
          var voiceOverlay = $("#voiceOverlay");
          voiceOverlay.toggle();
          if (voiceOverlay.is(":visible")) {
            startVoiceRecognition();
          }
        });

        // Start voice recognition
        function startVoiceRecognition() {
          const recognition = new webkitSpeechRecognition(); // For Chrome
          // const recognition = new SpeechRecognition(); // For other browsers

          recognition.onstart = function () {
            document.getElementById("voiceMessage").innerText = "Listening...";
            document.getElementById("voiceResults").innerText = ""; // Clear previous results
          };

          recognition.onresult = function (event) {
            const transcript = event.results[0][0].transcript;
            document.getElementById("searchInput").value = transcript;

            // Trigger search when voice input is recognized
            $('.form-group input[type="text"]').trigger("input");

            document.getElementById("voiceMessage").innerText =
              "Results: " + transcript;
            // Close the voice overlay after displaying the result in the search bar
            document.getElementById("voiceOverlay").style.display = "none";
          };

          recognition.onerror = function (event) {
            document.getElementById("voiceMessage").innerText =
              "Error occurred. Please try again.";
          };

          recognition.start();
        }

        // Function to hide close icon initially
        $(".close-icon").hide();
      });

      // Function to populate search bar with clicked item
      function populateSearchBar(item) {
        document.getElementById("searchInput").value = item.textContent.trim();
        document.querySelector(".dropdown-menu").style.display = "none";
      }

      // Add click event listener to all list items
      document.querySelectorAll(".search_ul li").forEach((item) => {
        item.addEventListener("click", () => {
          populateSearchBar(item);
        });
      });

      // Function to populate search bar with clicked item
      function populateSearchBar(item) {
        // Check if the clicked item is within the dropdown menu
        if (!item.closest(".dropdown-menu")) {
          document.getElementById("searchInput").value =
            item.textContent.trim();
        }
        document.querySelector(".dropdown-menu").style.display = "none";
      }

      // Show dropdown menu when search input is focused
      const searchInput = document.getElementById("searchInput");
      const voiceSearchButton = document.getElementById("voiceSearchButton");
      const dropdownMenu = document.querySelector(".dropdown-menu");

      if (searchInput && dropdownMenu) {
        searchInput.addEventListener("focus", () => {
          dropdownMenu.style.display = "block";
        });

        // Close dropdown menu and display search results when a keyword is entered
        searchInput.addEventListener("input", () => {
          dropdownMenu.style.display = "none";
          // You can add code here to display search results based on the entered keyword
        });
      }

      // Close dropdown menu when voice search mic is clicked
      if (voiceSearchButton && dropdownMenu) {
        voiceSearchButton.addEventListener("click", () => {
          dropdownMenu.style.display = "none";
        });
      }

      // Close dropdown menu when clicking anywhere outside
      if (dropdownMenu && searchInput) {
        document.body.addEventListener("click", (event) => {
          if (
            !dropdownMenu.contains(event.target) &&
            event.target !== searchInput
          ) {
            dropdownMenu.style.display = "none";
          }
        });
      }
      $(document).ready(function () {
        $(".dropdown").hover(
          function () {
            $(this)
              .find(".dropdown-menu")
              .stop(true, true)
              .delay(100)
              .fadeIn(200);
          },
          function () {
            $(this)
              .find(".dropdown-menu")
              .stop(true, true)
              .delay(100)
              .fadeOut(200);
          }
        );
      });

      // Initialize AOS (Animate On Scroll) when DOM is loaded
      document.addEventListener('DOMContentLoaded', function() {
        if (typeof AOS !== 'undefined') {
          AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            offset: 100
          });
        }

        // Modern Hero Slider Enhancements
        // Smooth scroll for scroll down indicator
        const scrollIndicator = document.querySelector('.scroll-down-indicator');
        if (scrollIndicator) {
          scrollIndicator.addEventListener('click', function() {
            const nextSection = document.querySelector('#trust-section') || document.querySelector('#best-diagnostic');
            if (nextSection) {
              nextSection.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
              });
            }
          });
        }

        // Parallax effect for hero slides
        let ticking = false;
        function updateParallax() {
          const scrolled = window.pageYOffset;
          const heroSlides = document.querySelectorAll('.hero-image img');

          heroSlides.forEach(img => {
            const speed = 2;
            img.style.transform = `translateY(${scrolled * speed}px) scale(1.1)`;
          });

          ticking = false;
        }

        function requestParallaxUpdate() {
          if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
          }
        }

        window.addEventListener('scroll', requestParallaxUpdate);

        // Enhanced carousel controls
        const carousel = document.querySelector('#modernSlider');
        if (carousel) {
          // Pause on hover
          carousel.addEventListener('mouseenter', function() {
            const carouselInstance = bootstrap.Carousel.getInstance(carousel);
            if (carouselInstance) {
              carouselInstance.pause();
            }
          });

          // Resume on mouse leave
          carousel.addEventListener('mouseleave', function() {
            const carouselInstance = bootstrap.Carousel.getInstance(carousel);
            if (carouselInstance) {
              carouselInstance.cycle();
            }
          });

          // Keyboard navigation
          document.addEventListener('keydown', function(e) {
            const carouselInstance = bootstrap.Carousel.getInstance(carousel);
            if (carouselInstance) {
              if (e.key === 'ArrowLeft') {
                e.preventDefault();
                carouselInstance.prev();
              } else if (e.key === 'ArrowRight') {
                e.preventDefault();
                carouselInstance.next();
              }
            }
          });
        }

        // Animate elements on slide change
        const carouselElement = document.querySelector('#modernSlider');
        if (carouselElement) {
          carouselElement.addEventListener('slide.bs.carousel', function() {
            // Add slide-out animation to current slide
            const activeSlide = this.querySelector('.carousel-item.active .hero-text');
            if (activeSlide) {
              activeSlide.style.animation = 'slideOutDown 0.5s ease-in';
            }
          });

          carouselElement.addEventListener('slid.bs.carousel', function() {
            // Add slide-in animation to new slide
            const activeSlide = this.querySelector('.carousel-item.active .hero-text');
            if (activeSlide) {
              activeSlide.style.animation = 'slideInUp 1s ease-out';
            }
          });
        }
      });
    </script>
    <style>
      .img-free {
        width: 40px;
        margin-top: -5px;
      }
      #header .menus_btns > ul > li:first-child {
        border-right: 0;
      }
      #header .menus_btns li a.readmore {
        padding: 0 40px;
      }
    </style>
    <style>
      .healths .container.bg-hero-banner.bg-hero-banner-moblie {
        max-width: auto;
        border-radius: 20px;
      }

      .bg-hero-banner {
        background-image: url("<?php echo $siteurl; ?>images/blood_sample_for_desktop.webp");
        background-repeat: no-repeat;
        background-size: cover;
        /* background-position: left center; */
        border-radius: 20px;
        min-height: 320px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding: 2rem;
        position: relative;
      }

      .banner-content {
        color: #fff;
        max-width: 635px;
        padding: 1rem;
      }

      .banner-content h2 {
        font-size: 22px;
        margin-bottom: 1rem;
        font-weight: bold;
        margin-top: 4px;
        width: 86%;
      }

      .tags {
        margin-bottom: 1rem;
      }

      .tags span {
        display: inline-block;
        margin: 0.3rem 0.4rem 0.3rem 0;
        padding: 0.4rem 0.9rem;
        border: 1px solid #120000;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 500;
        color: black;
      }

      .banner-content p {
        font-size: 1rem;
        margin: 1rem 0;
        line-height: 1.5;
      }

      .specific_icons {
        width: 78%;
        height: auto;
        margin-right: 15px;
        vertical-align: middle;
      }

      .specific_icons:last-child {
        margin-right: 0;
      }

      @media (max-width: 768px) {
        .bg-hero-banner {
          background-image: url("<?php echo $siteurl; ?>images/blood_sample_for_mobile.webp");
          flex-direction: column;
          align-items: flex-start;
          justify-content: center;
          background-position: center top;
          padding: 1rem;
          background-size: cover;
          background-position: 50%;
        }

        .banner-content {
          max-width: 100%;
          text-align: center;
          padding: 0;
        }

        .tags span {
          margin: 0.2rem;
          font-size: 0.85rem;
        }

        .banner-content h2 {
          font-size: 24px;
        }

        .banner-content p {
          font-size: 15px;
        }

        .specific_icons {
          width: 50px;
          margin: 5px;
        }
      }

      @media (max-width: 525px) {
        .bg-hero-banner {
          max-width: 100% !important;
          min-height: 750px;
          flex-direction: row;
          padding-top: 100px;
        }

        .banner-content h2 {
          font-size: 19px;
          width: 100%;
        }

        .specific_icons {
          width: 90%;
          margin: 5px;
        }
      }

      /* New Sections Styles */

      /* Trust Section */
      #trust-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      }

      .trust-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
      }

      .trust-subtitle {
        font-size: 1.5rem;
        color: #34495e;
        font-weight: 600;
      }

      .trust-description {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #5a6c7d;
      }

      .trust-image img {
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      }

      /* Features Section */
      .feature-card {
        background: white;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border-left: 4px solid #1d5a80;
      }

      .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
      }

      .feature-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #1d5b80, #1e5b80);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
      }

      .feature-icon i {
        font-size: 2rem;
        color: white;
      }

      .feature-title {
        font-size: 1.3rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 1rem;
      }

      .feature-description {
        color: #5a6c7d;
        line-height: 1.6;
      }

      /* Services Section */
      #comprehensive-services {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      }

      .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 1rem;
      }

      .section-subtitle {
        font-size: 1.3rem;
        color: #1e5b80;
        font-weight: 600;
        margin-bottom: 1rem;
      }

      .section-description {
        font-size: 1.1rem;
        color: #5a6c7d;
        line-height: 1.7;
        max-width: 800px;
        margin: 0 auto;
      }

      .service-card {
        background: white;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
      }

      .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
      }

      .service-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #28a745, #20c997);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
      }

      .service-icon i {
        font-size: 2.2rem;
        color: white;
      }

      .service-title {
        font-size: 1.3rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 1rem;
      }

      .service-description {
        color: #5a6c7d;
        line-height: 1.6;
      }

      /* How We Work Section */
      .process-step {
        position: relative;
        padding: 2rem 1rem;
      }

      .step-number {
        position: absolute;
        top: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #dc3545, #c82333);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.2rem;
        z-index: 2;
      }

      .step-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #1d5b80, #1d5a80);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 2rem auto 1.5rem;
      }

      .step-icon i {
        font-size: 2.2rem;
        color: white;
      }

      .step-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 1rem;
      }

      .step-description {
        color: #5a6c7d;
        line-height: 1.6;
        font-size: 0.95rem;
      }

      .process-note {
        font-size: 1.1rem;
        color: #162150;
        font-style: italic;
        max-width: 600px;
        margin: 0 auto;
      }

      /* Contact Section */
      #contact-location {
            background: linear-gradient(135deg, #1e5b80 0%, #1e5b80 100%);
      }

      .contact-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 2rem;
      }

      .contact-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
      }

      .contact-icon {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
      }

      .contact-icon i {
        font-size: 1.3rem;
        color: white;
      }

      .contact-details h5 {
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #fff;
      }

      .contact-details p {
        margin: 0;
        opacity: 0.9;
      }

      .contact-details a {
        text-decoration: none;
        transition: opacity 0.3s ease;
      }

      .contact-details a:hover {
        opacity: 0.8;
      }

      .map-container h4 {
        color: white;
        font-weight: 600;
      }

      .map-embed {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .trust-title, .section-title, .contact-title {
          font-size: 2rem;
        }

        .trust-subtitle, .section-subtitle {
          font-size: 1.2rem;
        }

        .feature-card, .service-card {
          padding: 1.5rem;
        }

        .process-step {
          padding: 1.5rem 0.5rem;
        }

        .contact-item {
          margin-bottom: 1.5rem !important;
        }
      }

      @media (max-width: 576px) {
        .trust-title, .section-title, .contact-title {
          font-size: 1.8rem;
        }

        .feature-icon, .service-icon, .step-icon {
          width: 60px;
          height: 60px;
        }

        .feature-icon i, .service-icon i, .step-icon i {
          font-size: 1.8rem;
        }
      }

      h2.contact-title.mb-4 {
    color: #ffffff;
      }

      @media (max-width: 768px) {
        .menu-ul-class {
          display: none !important;
        }
      }

      /* Modern Hero Slider Styles */
      .hero-slider-section {
        position: relative;
        overflow: hidden;
        height: 100vh;
        min-height: 600px;
      }

      .hero-slide {
        position: relative;
        height: 100vh;
        min-height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .hero-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
      }

      .hero-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
      }

      .hero-image2 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
      }

      .hero-image2 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
      }

      .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 123, 255, 0.8) 0%, rgba(40, 167, 69, 0.6) 100%);
        z-index: 2;
      }

      .hero-content {
        position: relative;
        z-index: 3;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
      }

      .hero-text {
        animation: slideInUp 1s ease-out;
      }

      .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 1.5rem;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      }

      .text-gradient {
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      }

      .hero-subtitle {
        font-size: 1.3rem;
        line-height: 1.6;
        margin-bottom: 2.5rem;
        color: white;
        opacity: 0.95;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        font-weight: 300;
      }

      .hero-buttons {
        margin-bottom: 3rem;
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
      }

      .btn-hero {
        padding: 15px 35px;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 50px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        min-width: 200px;
        justify-content: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      }

      .btn-hero:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
      }

      .btn-primary.btn-hero {
        background: linear-gradient(45deg, #1d5b80, #1e5b80);
        border: none;
        color: white;
      }

      .btn-primary.btn-hero:hover {
        background: linear-gradient(45deg, #0056b3, #004085);
        color: white;
      }

      .btn-outline-light.btn-hero {
        border: 2px solid rgba(255, 255, 255, 0.8);
        color: white;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
      }

      .btn-outline-light.btn-hero:hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: white;
        color: white;
      }

      .hero-features {
        display: flex;
        justify-content: center;
        gap: 2rem;
        flex-wrap: wrap;
      }

      .feature-badge {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(255, 255, 255, 0.15);
        padding: 10px 20px;
        border-radius: 25px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
      }

      .feature-badge:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-2px);
      }

      .feature-badge i {
        font-size: 1.2rem;
        color: #ffd700;
      }

      .hero-stats {
        display: flex;
        justify-content: center;
        gap: 3rem;
        flex-wrap: wrap;
      }

      .stat-item {
        text-align: center;
        background: rgba(255, 255, 255, 0.1);
        padding: 20px;
        border-radius: 15px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        min-width: 120px;
      }

      .stat-item h3 {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0 0 5px 0;
        color: #ffd700;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      }

      .stat-item span {
        font-size: 0.9rem;
        opacity: 0.9;
      }

      /* Modern Navigation Buttons */
      .modern-nav-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        width: 60px;
        height: 60px;
        border-radius: 50%;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
        z-index: 10;
      }

      .modern-nav-btn:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-50%) scale(1.1);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
      }

      .nav-btn-content {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        color: white;
        font-size: 1.2rem;
      }

      .carousel-control-prev {
        left: 30px;
      }

      .carousel-control-next {
        right: 30px;
      }

      /* Modern Indicators */
      .modern-indicators {
        position: absolute;
        bottom: 30px;
        left: 35%;
        transform: translateX(-50%);
        display: flex;
        gap: 15px;
        z-index: 10;
      }

      .modern-indicators button {
        width: 50px;
        height: 4px;
        border: none;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 2px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
      }

      .modern-indicators button.active {
        background: rgba(255, 255, 255, 0.8);
      }

      .indicator-line {
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.8), transparent);
        animation: shimmer 2s infinite;
      }

      .modern-indicators button.active .indicator-line {
        animation: none;
        left: 0;
        background: rgba(255, 255, 255, 0.9);
      }

      @keyframes shimmer {
        0% { left: -100%; }
        100% { left: 100%; }
      }

      /* Scroll Down Indicator */
      .scroll-down-indicator {
        position: absolute;
        bottom: 30px;
        right: 30px;
        text-align: center;
        color: white;
        z-index: 10;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      .scroll-down-indicator:hover {
        transform: translateY(-5px);
      }

      .scroll-arrow {
        width: 40px;
        height: 40px;
        border: 2px solid rgba(255, 255, 255, 0.7);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 10px;
        animation: bounce 2s infinite;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
      }

      .scroll-text {
        font-size: 0.8rem;
        opacity: 0.8;
        font-weight: 500;
      }

      @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
        40% { transform: translateY(-10px); }
        60% { transform: translateY(-5px); }
      }

      @keyframes slideInUp {
        from {
          opacity: 0;
          transform: translateY(50px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .hero-slider-section,
        .hero-slide {
          height: 100vh;
          min-height: 500px;
        }

        .hero-title {
          font-size: 2.5rem;
        }

        .hero-subtitle {
          font-size: 1.1rem;
          margin-bottom: 2rem;
        }

        .hero-buttons {
          flex-direction: column;
          align-items: center;
          margin-bottom: 2rem;
        }

        .btn-hero {
          width: 100%;
          max-width: 280px;
        }

        .hero-features,
        .hero-stats {
          gap: 1rem;
        }

        .feature-badge {
          padding: 8px 15px;
          font-size: 0.9rem;
        }

        .stat-item {
          padding: 15px;
          min-width: 100px;
        }

        .stat-item h3 {
          font-size: 2rem;
        }

        .modern-nav-btn {
          width: 50px;
          height: 50px;
        }

        .carousel-control-prev {
          left: 15px;
        }

        .carousel-control-next {
          right: 15px;
        }

        .scroll-down-indicator {
          display: none;
        }
      }

      @media (max-width: 576px) {
        .hero-title {
          font-size: 2rem;
        }

        .hero-subtitle {
          font-size: 1rem;
        }

        .hero-features {
          flex-direction: column;
          align-items: center;
        }

        .hero-stats {
          gap: 1.5rem;
        }

        .stat-item h3 {
          font-size: 1.8rem;
        }
      }

      section#hero-slider {
    padding: 0px 0 !important;
     }
     
     
     
    /* Modern CEO Section Styles */
#ceo-section {
  background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
  position: relative;
  overflow: hidden;
}

#ceo-section::before {
  content: '';
  position: absolute;
  top: -100px;
  right: -100px;
  width: 300px;
  height: 300px;
  background: linear-gradient(135deg, rgba(0, 123, 255, 0.1) 0%, rgba(40, 167, 69, 0.1) 100%);
  border-radius: 50%;
  z-index: 0;
}

.ceo-card {
  background: white;
  border-radius: 20px;
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.08);
  padding: 40px;
  position: relative;
  z-index: 1;
}

.ceo-image-wrapper {
  position: relative;
}

.ceo-image {
  position: relative;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
}

.ceo-image img {
  width: 100%;
  height: auto;
  transition: transform 0.3s ease;
}

.ceo-image:hover img {
  transform: scale(1.05);
}

.ceo-image-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
  padding: 30px 20px 20px;
  color: white;
}

.ceo-badge {
  text-align: center;
}

.ceo-badge h5 {
  font-weight: 700;
  margin-bottom: 5px;
  color: white;
}

.ceo-badge p {
  opacity: 0.9;
  margin: 0;
}

.section-header {
  position: relative;
}

.section-label {
  display: inline-block;
  background: linear-gradient(135deg, #1d5a7f, #1d5b80);
  color: white;
  padding: 8px 20px;
  border-radius: 25px;
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 15px;
}

.section-title {
  font-size: 2.5rem;
  font-weight: 700;
  color: #2c3e50;
  margin-bottom: 0;
}

.ceo-quote {
  position: relative;
  background: #f8f9fa;
  padding: 30px;
  border-radius: 15px;
  border-left: 4px solid #1d5a80;
}

.quote-icon {
  position: absolute;
  top: -15px;
  left: 30px;
  background: #1d5a80;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 18px;
}

.ceo-quote blockquote {
  margin: 0;
  font-style: italic;
  color: #495057;
  line-height: 1.7;
  font-size: 1.1rem;
}

.ceo-intro {
  font-size: 1.1rem;
  line-height: 1.8;
  color: #5a6c7d;
  margin-bottom: 30px;
}

.highlight-card {
  display: flex;
  align-items: flex-start;
  background: white;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  height: 100%;
}

.highlight-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.highlight-icon {
  flex-shrink: 0;
  width: 50px;
  height: 50px;
  background: linear-gradient(135deg, #1e5b80, #1e5b80);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 15px;
  color: white;
  font-size: 1.2rem;
}

.highlight-content h6 {
  font-weight: 700;
  color: #2c3e50;
  margin-bottom: 5px;
  font-size: 1rem;
}

.highlight-content p {
  color: #5a6c7d;
  margin-bottom: 8px;
  font-size: 0.9rem;
}

.badge, .experience-badge, .membership, .specialty {
  display: inline-block;
  background: rgba(40, 167, 69, 0.1);
  color: #28a745;
  padding: 4px 12px;
  border-radius: 15px;
  font-size: 0.8rem;
  font-weight: 600;
}

.experience-badge {
  background: rgba(0, 123, 255, 0.1);
  color: #1d5a80;
}

.membership {
  background: rgba(108, 117, 125, 0.1);
  color: #6c757d;
}

.specialty {
  background: rgba(255, 193, 7, 0.1);
  color: #ffc107;
}

.ceo-bio {
  margin-top: 30px;
}

.ceo-bio p {
  color: #5a6c7d;
  line-height: 1.8;
  margin-bottom: 20px;
}

.expertise-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.expertise-tag {
  background: linear-gradient(135deg, #1d5a7f, #1e5b80);
  color: white;
  padding: 8px 16px;
  border-radius: 20px;
  font-size: 0.9rem;
  font-weight: 500;
}

/* Responsive Design */
@media (max-width: 992px) {
  .ceo-card {
    padding: 30px;
  }
  
  .section-title {
    font-size: 2rem;
  }
}

@media (max-width: 768px) {
  .ceo-card {
    padding: 25px 20px;
  }
  
  .section-title {
    font-size: 1.8rem;
  }
  
  .ceo-quote {
    padding: 25px 20px;
  }
  
  .highlight-card {
    flex-direction: column;
    text-align: center;
    padding: 15px;
  }
  
  .highlight-icon {
    margin-right: 0;
    margin-bottom: 15px;
  }
  
  .expertise-tags {
    justify-content: center;
  }
}

@media (max-width: 576px) {
  .section-title {
    font-size: 1.6rem;
  }
  
  .ceo-quote blockquote {
    font-size: 1rem;
  }
  
  .highlight-card {
    padding: 15px 10px;
  }
}
    </style>

    <!-- Modern Hero Slider Section -->
    <section id="hero-slider" class="hero-slider-section">
      <div id="modernSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">

        <!-- adv slider -->
          <div class="carousel-item active">
            <div class="hero-slide">
              <div class="hero-image2">
                <img src="<?php echo $siteurl; ?>images/banner/Vaarahi-offer-banner.webp"
                     class=""
                     alt="Vaarahi Diagnostics - Your Trusted Healthcare Partner"
                     loading="lazy">
              </div>
            <!-- <div class="hero-overlay"></div>
              <div class="hero-content">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                      <div class="hero-text" data-aos="fade-up" data-aos-duration="1000">
                        <h1 class="hero-title">
                          <span class="text-gradient">Vaarahi Diagnostics</span><br>
                          <span style="font-size: 48px;"> Your Trusted Healthcare Partner</span>
                        </h1>
                        
                        <div class="hero-buttons">
                          <a href="<?php echo $siteurl; ?>#book-a-test" class="btn btn-primary btn-hero">
                            <i class="fas fa-calendar-check me-2"></i>
                            Book Test Now
                          </a>
                          <a href="tel:+919090135135" class="btn btn-outline-light btn-hero">
                            <i class="fas fa-stethoscope me-2"></i>
                            Call Now
                          </a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>

          <!-- Slide 1 -->
          <!-- <div class="carousel-item active">
            <div class="hero-slide">
              <div class="hero-image">
                <img src="<?php echo $siteurl; ?>images/banner/banner1.jpg"
                     class="d-block w-100"
                     alt="Vaarahi Diagnostics - Your Trusted Healthcare Partner"
                     loading="lazy">
              </div>
              <div class="hero-overlay"></div>
              <div class="hero-content">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                      <div class="hero-text" data-aos="fade-up" data-aos-duration="1000">
                        <h1 class="hero-title">
                          <span class="text-gradient">Vaarahi Diagnostics</span><br>
                          <span style="font-size: 48px;"> Your Trusted Healthcare Partner</span>
                        </h1>
                        <p class="hero-subtitle">
                          Advanced diagnostic services with state-of-the-art technology,
                          experienced professionals, and 24/7 availability in Hyderabad.
                        </p>
                        <div class="hero-buttons">
                          <a href="<?php echo $siteurl; ?>#book-a-test" class="btn btn-primary btn-hero">
                            <i class="fas fa-calendar-check me-2"></i>
                            Book Test Now
                          </a>
                          <a href="tel:+919090135135" class="btn btn-outline-light btn-hero">
                            <i class="fas fa-stethoscope me-2"></i>
                            Call Now
                          </a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="hero-slide">
              <div class="hero-image">
                <img src="<?php echo $siteurl; ?>images/banner/banner2.jpg"
                     class="d-block w-100"
                     alt="Comprehensive Health Checkup Packages"
                     loading="lazy">
              </div>
              <div class="hero-overlay"></div>
              <div class="hero-content">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                      <div class="hero-text" data-aos="fade-up" data-aos-duration="1000">
                        <h1 class="hero-title">
                          <span class="text-gradient">Comprehensive</span><br>
                          Health Checkup Packages
                        </h1>
                        <p class="hero-subtitle">
                          Preventive healthcare made affordable with our complete health
                          screening packages designed for every age group and lifestyle.
                        </p>
                        <div class="hero-buttons">
                          <a href="<?php echo $siteurl; ?>#contactus" class="btn btn-primary btn-hero">
                            <i class="fas fa-heart me-2"></i>
                           Book Test Now
                          </a>
                          <a href="tel:+919090135135" class="btn btn-outline-light btn-hero">
                            <i class="fas fa-phone me-2"></i>
                            Call Now
                          </a>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <!-- <div class="carousel-item">
            <div class="hero-slide">
              <div class="hero-image">
                <img src="<?php echo $siteurl; ?>images/banner/banner7.jpg"
                     class="d-block w-100"
                     alt="Comprehensive Health Checkup Packages"
                     loading="lazy">
              </div>
              <div class="hero-overlay"></div>
              <div class="hero-content">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                      <div class="hero-text" data-aos="fade-up" data-aos-duration="1000">
                        <h1 class="hero-title">
                          <span class="text-gradient"></span><br>
                          
                        </h1>
                        <p class="hero-subtitle">
                         
                        </p>
                        <div class="hero-buttons" style="margin-top: 202px;">
                          <a href="<?php echo $siteurl; ?>#contactus" class="btn btn-primary btn-hero">
                            <i class="fas fa-heart me-2"></i>
                           Book Test Now
                          </a>
                          <a href="tel:+919090135135" class="btn btn-outline-light btn-hero">
                            <i class="fas fa-phone me-2"></i>
                            Call Now
                          </a>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          
          
          <!-- Slide 4 -->
          <div class="carousel-item">
            <div class="hero-slide">
              <div class="hero-image">
                <img src="<?php echo $siteurl; ?>images/banner/banner8.jpg"
                     class="d-block w-100"
                     alt="Comprehensive Health Checkup Packages"
                     loading="lazy">
              </div>
              <div class="hero-overlay"></div>
              <div class="hero-content">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                      <div class="hero-text" data-aos="fade-up" data-aos-duration="1000">
                        <h1 class="hero-title">
                          <span class="text-gradient">Comprehensive</span><br>
                          Health Checkup Packages
                        </h1>
                        <p class="hero-subtitle">
                          Preventive healthcare made affordable with our complete health
                          screening packages designed for every age group and lifestyle.
                        </p>
                        <div class="hero-buttons">
                          <a href="<?php echo $siteurl; ?>#book-a-test" class="btn btn-primary btn-hero">
                            <i class="fas fa-heart me-2"></i>
                           Book Test Now
                          </a>
                          <a href="tel:+919090135135" class="btn btn-outline-light btn-hero">
                            <i class="fas fa-phone me-2"></i>
                            Call Now
                          </a>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Modern Navigation Controls -->
        <button class="carousel-control-prev modern-nav-btn" type="button" data-bs-target="#modernSlider" data-bs-slide="prev">
          <div class="nav-btn-content">
            <i class="fas fa-chevron-left"></i>
          </div>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next modern-nav-btn" type="button" data-bs-target="#modernSlider" data-bs-slide="next">
          <div class="nav-btn-content">
            <i class="fas fa-chevron-right"></i>
          </div>
          <span class="visually-hidden">Next</span>
        </button>

        <!-- Modern Indicators -->
        <div class="carousel-indicators modern-indicators">
          <button type="button" data-bs-target="#modernSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
            <span class="indicator-line"></span>
          </button>
          <button type="button" data-bs-target="#modernSlider" data-bs-slide-to="1" aria-label="Slide 2">
            <span class="indicator-line"></span>
          </button>

           <button type="button" data-bs-target="#modernSlider" data-bs-slide-to="2" aria-label="Slide 3">
            <span class="indicator-line"></span>
          </button>
          
          <button type="button" data-bs-target="#modernSlider" data-bs-slide-to="3" aria-label="Slide 4">
            <span class="indicator-line"></span>
          </button>

        </div>

        <!-- Scroll Down Indicator -->
        <div class="scroll-down-indicator">
          <div class="scroll-arrow">
            <i class="fas fa-chevron-down"></i>
          </div>
          <span class="scroll-text">Scroll Down</span>
        </div>
      </div>
    </section>

    
    
    <section id="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 about_img mb-4 mb-lg-0 pt-4 pt-lg-0">
            <figure>
              <img
                src="<?php echo $siteurl; ?>images/about_img.webp"
                alt="Laboratory"
                width="640"
                height="554"
                loading="lazy"
                class="img-fluid"
              />
            </figure>
          </div>
          <div class="col-lg-6 about_info ps-lg-5">
            <div class="section-title mb-3">
              <div class="h1">About Us</div>
              <p class="section-subtitle">Experience you can trust, care you can feel</p>
            </div>
            <p>
              At Vaarahi Diagnostics, we may be new to Beeramguda, but the expertise behind us is built on years of trusted healthcare experience. Our team is led by seasoned professionals who have dedicated their careers to serving patients with compassion and precision.
            </p>
            <p>
              We believe diagnostics is more than just running testsâ€”itâ€™s about delivering clarity, trust, and peace of mind when you need it most. With advanced technology, skilled experts, and a patient-first approach, we ensure every test is conducted with the highest level of accuracy, efficiency, and care.
            </p>
            <p>
              Our mission is simple: to combine modern medical innovation with personalized human care, so you feel supported at every step of your health journey.
            <ul class="bullets">
              <li>
                <span style="font-size: 1.5em;">âš¡</span>
                <p>
                  <strong> Advanced Diagnostics
                    We use the latest technology to deliver fast, highly accurate, and dependable results that empower better healthcare decisions.
                </p>
              </li>
              <li>
                <span style="font-size: 1.5em;">ðŸ¥</span>
                <p>
                  <strong> Next-Generation Laboratory
                    Our hi-tech lab is equipped with world-class diagnostic systems, designed to meet international standards of quality, safety, and excellence.
                </p>
              </li>
              <li>
                <span style="font-size: 1.5em;">ðŸ’›</span>
                <p>
                  <strong> Compassionate Care
                    At Vaarahi, we treat every patient with empathy and respect, making your diagnostic journey smooth, stress-free, and supportive.
                </p>
              </li>
            </ul>
           
          </div>
        </div>
      </div>
    </section>
    
    <!-- Trust Section -->
    <section id="trust-section" class="py-5 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="trust-content">
              <h2 class="trust-title mb-4">
                <span class="text-primary">The Name You Can Trust</span> 
              </h2>
              <h3 class="trust-subtitle mb-4">
                Expert care, advanced diagnostics, right here in Beeramguda
              </h3>
              <p class="trust-description">
                At Vaarahi Diagnostics, we believe that healthcare should be simple, accurate, and reassuring.
                Every test is more than just a report; it's about your health, your clarity, and your peace of mind.
                With advanced technology, empathetic staff, and timely reports, we make sure you always feel supported.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="trust-image">
              <img src="<?php echo $siteurl; ?>images/about-vaarahi.jfif" alt="Vaarahi Diagnostics Trust" class="img-fluid rounded shadow">
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="our_services" class="gray-bg">
      <div class="container">
        <div class="section-title mb-3 mb-xl-4">
          <h2 class="h1">Our Services</h2>
        </div>
        <div class="owl-carousel health-checkup-slider pt-3 pt-xl-2">
            
            <div class="item">
            <div class="checkup_box">
              <figure>
                <a
                  href="<?php echo $siteurl; ?>#contactus"
                  ><img
                    src="<?php echo $siteurl; ?>images/services/CT Scan.jfif"
                    alt="Heart checkup"
                    width="620"
                    height="544"
                    title="CT Scan"
                    class="img-fluid"
                    loading="lazy"
                /></a>
              </figure>
              <div class="checkup_info">
                <div class="h4">
                  <a
                    href="<?php echo $siteurl; ?>#contactus"
                    >CT Scan</a
                  >
                </div>
                <p>High-resolution scans offering detailed insights for confident medical decisions.</p>
                <a
                  href="<?php echo $siteurl; ?>#book-a-test"
                  class="readmore small"
                  >Book Now<i class="bi bi-arrow-right ms-1"></i
                ></a>
              </div>
              <div class="number-tag transition"><span>1</span></div>
            </div>
          </div>
            
          
          
          <div class="item">
            <div class="checkup_box">
              <figure>
                <a
                  href="<?php echo $siteurl; ?>#book-a-test"
                  ><img
                    src="<?php echo $siteurl; ?>images/services/Mammography.jfif"
                    alt="Mammography"
                    title="Mammography"
                    width="620"
                    height="544"
                    loading="lazy"
                    class="img-fluid"
                /></a>
              </figure>
              <div class="checkup_info">
                <div class="h4">
                  <a
                    href="<?php echo $siteurl; ?>#book-a-test"
                    >Mammography</a
                  >
                </div>
                <p>Advanced breast imaging for early detection, because timely care makes all the difference.</p>
                <a
                  href="<?php echo $siteurl; ?>#book-a-test"
                  class="readmore small"
                  >Book Now<i class="bi bi-arrow-right ms-1"></i
                ></a>
              </div>
              <div class="number-tag transition"><span>2</span></div>
            </div>
          </div>
          
          <div class="item">
            <div class="checkup_box">
              <figure>
                <a
                  href="<?php echo $siteurl; ?>#contactus"
                  ><img style="height: 202px !important;"
                    src="<?php echo $siteurl; ?>images/services/ecg.jpeg"
                    width="620"
                    height="544"
                    alt="ECG & TMT"
                    title="ECG & TMT"
                    class="img-fluid"
                    loading="lazy"
                /></a>
              </figure>
              <div class="checkup_info">
                <div class="h4">
                  <a
                    href="<?php echo $siteurl; ?>#book-a-test"
                    >ECG & TMT</a
                  >
                </div>
                <p>Reliable cardiac monitoring that keeps track of your heartâ€™s well-being.</p>
                <a
                  href="<?php echo $siteurl; ?>#book-a-test"
                  class="readmore small"
                  >Book Now<i class="bi bi-arrow-right ms-1"></i
                ></a>
              </div>
              <div class="number-tag transition"><span>3</span></div>
            </div>
          </div>
          
          <div class="item">
            <div class="checkup_box">
              <figure>
                <a
                  href="<?php echo $siteurl; ?>#book-a-test"
                  ><img
                    src="<?php echo $siteurl; ?>images/services/X-Ray & Dental X-Ray.jfif"
                    alt="basic Health Checkup"
                    title="X-Ray & Dental X-Ray"
                    width="620"
                    height="544"
                    loading="lazy"
                    class="img-fluid"
                /></a>
              </figure>
              <div class="checkup_info">
                <div class="h4">
                  <a
                    href="<?php echo $siteurl; ?>#book-a-test"
                    >X-Ray & Dental X-Ray</a
                  >
                </div>
                <p>Digital imaging with crystal clarity, helping doctors detect and diagnose with precision.</p>
                <a
                  href="<?php echo $siteurl; ?>#book-a-test"
                  class="readmore small"
                  >Book Now<i class="bi bi-arrow-right ms-1"></i
                ></a>
              </div>
              <div class="number-tag transition"><span>4</span></div>
            </div>
          </div>
          
          <div class="item">
            <div class="checkup_box">
              <figure>
                <a
                  href="<?php echo $siteurl; ?>#book-a-test"
                  ><img
                    src="<?php echo $siteurl; ?>images/services/Sample Collection.jfif"
                    title="Sample Collection"
                    alt="Sample Collection"
                    width="620"
                    height="544"
                    class="img-fluid"
                    loading="lazy"
                /></a>
              </figure>
              <div class="checkup_info">
                <div class="h4">
                  <a
                    href="<?php echo $siteurl; ?>#book-a-test"
                    >Sample Collection</a
                  >
                </div>
                <p>Choose stress-free collection at home or visit our centre, convenience is always yours.</p>
                <a
                  href="<?php echo $siteurl; ?>#book-a-test"
                  class="readmore small"
                  >Book Now<i class="bi bi-arrow-right ms-1"></i
                ></a>
              </div>
              <div class="number-tag transition"><span>5</span></div>
            </div>
          </div>
          <div class="item">
            <div class="checkup_box">
              <figure>
                <a
                  href="<?php echo $siteurl; ?>#book-a-test"
                  ><img
                    src="<?php echo $siteurl; ?>images/services/Ultrasound.jfif"
                    title="Ultrasound"
                    alt="Ultrasound"
                    width="620"
                    height="544"
                    class="img-fluid"
                    loading="lazy"
                /></a>
              </figure>
              <div class="checkup_info">
                <div class="h4">
                  <a
                    href="<?php echo $siteurl; ?>#book-a-test"
                    >Ultrasound</a
                  >
                </div>
                <p>Safe, detailed imaging for abdominal, guided by expert professionals.</p>
                <a
                  href="<?php echo $siteurl; ?>#book-a-test"
                  class="readmore small"
                  >Book Now<i class="bi bi-arrow-right ms-1"></i
                ></a>
              </div>
              <div class="number-tag transition"><span>6</span></div>
            </div>
          </div>
          
          
        </div>
      </div>
    </section>

   


   


    <!--Top Book test--->

    <!-- Modern CEO Section -->
<section id="ceo-section" class="py-5">
  <div class="container">
    <div class="ceo-card">
      <div class="row align-items-center">
        <div class="col-lg-5 mb-4 mb-lg-0">
          <div class="ceo-image-wrapper">
            <div class="ceo-image">
              <img src="<?php echo $siteurl; ?>images/anvesh-reddy.jfif" 
                   alt="Dr. Chandiri Anvesh Reddy - Consultant Radiologist" 
                   class="img-fluid"
                   loading="lazy">
              <div class="ceo-image-overlay">
                <div class="ceo-badge">
                  <h5 class="mb-1">Dr. Chandiri Anvesh Reddy</h5>
                  <p class="mb-0" style="color: #ffffff;">Consultant Radiologist</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="ceo-content">
            <div class="section-header mb-4">
              <span class="section-label">Medical Leadership</span>
              <h2 class="section-title">Expertise You Can Trust</h2>
            </div>
            
            <div class="ceo-quote mb-4">
              <div class="quote-icon">
                <i class="fas fa-quote-left"></i>
              </div>
              <blockquote>
                <p>"Precision in diagnostics is the foundation of effective treatment. At Vaarahi, we combine advanced technology with compassionate care to deliver accurate results you can trust."</p>
              </blockquote>
            </div>
            
            <div class="ceo-details">
              <p class="ceo-intro">Dr. Chandiri Anvesh Reddy is a Consultant Radiologist with over five years of specialized experience in diagnostic imaging, focusing on cross-sectional imaging and ultrasound-guided procedures.</p>
              
              <div class="ceo-highlights mb-4">
                <div class="row g-3">
                 
                  <div class="col-md-6">
                    <div class="highlight-card">
                      <div class="highlight-icon">
                        <i class="fas fa-hospital"></i>
                      </div>
                      <div class="highlight-content">
                        <h6>Professional Experience</h6>
                        <p>Amrita Institute of Medical Sciences</p>
                        <span class="experience-badge">5+ Years</span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="highlight-card">
                      <div class="highlight-icon">
                        <i class="fas fa-users"></i>
                      </div>
                      <div class="highlight-content">
                        <h6>Professional Membership</h6>
                        <p>Indian Radiological & Imaging Association</p>
                        <span class="membership">Active Member</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="ceo-bio">
                <p>Dr. Anvesh Reddy's professional journey includes extensive experience at the prestigious Amrita Institute of Medical Sciences, where he refined his expertise in interpreting complex imaging studies and providing accurate diagnoses. His commitment to excellence and patient care has established him as a respected professional in the radiology community.</p>
                
                <div class="expertise-tags">
                  <span class="expertise-tag">Diagnostic Imaging</span>
                  <span class="expertise-tag">Ultrasound Guidance</span>
                  <span class="expertise-tag">Cross-sectional Analysis</span>
                  <span class="expertise-tag">Patient Care</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

 <!-- Features Section -->
    <section id="features-section" class="py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-6 col-md-6">
            <div class="feature-card h-100">
              <div class="feature-icon">
                <i class="fas fa-microscope"></i>
              </div>
              <h4 class="feature-title">Technology You Can Rely On</h4>
              <p class="feature-description">
                From X-rays and CT scans to mammography and ultrasounds, we use modern,
                high-precision machines that help doctors diagnose with confidence.
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="feature-card h-100">
              <div class="feature-icon">
                <i class="fas fa-heart"></i>
              </div>
              <h4 class="feature-title">Care Beyond the Test</h4>
              <p class="feature-description">
                Our team creates a clean, hygienic, and comforting environment so you
                feel safe and cared for at every step.
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="feature-card h-100">
              <div class="feature-icon">
                <i class="fas fa-clock"></i>
              </div>
              <h4 class="feature-title">Reports That Don't Keep You Waiting</h4>
              <p class="feature-description">
                Quick digital delivery ensures you get accurate results faster, helping you
                move forward with the right treatment without delay.
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="feature-card h-100">
              <div class="feature-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <h4 class="feature-title">Your Local Healthcare Partner</h4>
              <p class="feature-description">
                No long travels or waiting in crowded centres. Vaarahi brings trusted
                diagnostic care closer to your home in Beeramguda.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="best-diagnostic" class="pt-0 pb-4">
      <div class="container">
        <div class="row justify-content-center">
          <h1 class="header-text-center">
            Best Diagnostic Center in Hyderabad
          </h1>
        </div>
      </div>
    </section>


    <!-- How We Work Section -->
    <section id="how-we-work" class="py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="section-title">How We Work</h2>
          <p class="section-subtitle">A simple journey designed around your comfort</p>
          <p class="section-description">
            We know medical tests can sometimes feel overwhelming. That's why we've made the process at Vaarahi Diagnostics
            as easy and stress-free as possible. From booking to reports, every step is designed to give you convenience,
            clarity, and care. Here's how it works:
          </p>
        </div>

        <div class="row g-4">
          <div class="col-lg-3 col-md-6">
            <div class="process-step text-center">
             
              <div class="step-icon">
                <i class="fas fa-calendar-check"></i>
              </div>
              <h4 class="step-title">Book Your Slot</h4>
              <p class="step-description">
                Choose what's easiest for you: a quick phone call or a few clicks online.
                We make scheduling simple and flexible, so you don't have to worry about long waits.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="process-step text-center">
             
              <div class="step-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <h4 class="step-title">Visit Us or Opt for Home Collection</h4>
              <p class="step-description">
                Whether you prefer walking into our centre or getting your samples collected from
                the comfort of your home, the choice is yours. We value your time and convenience.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="process-step text-center">
             
              <div class="step-icon">
                <i class="fas fa-user-md"></i>
              </div>
              <h4 class="step-title">Get Tested with Care</h4>
              <p class="step-description">
                Our team ensures that every test is carried out in a hygienic, safe, and friendly environment.
                We take the extra step to make you feel comfortable, whether it's a simple scan or a detailed check.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="process-step text-center">
              
              <div class="step-icon">
                <i class="fas fa-file-medical"></i>
              </div>
              <h4 class="step-title">Receive Your Reports</h4>
              <p class="step-description">
                No waiting around. Once your tests are complete, you can access your reports digitally
                on your phone or collect them directly from our centre, fast, accurate, and hassle-free.
              </p>
            </div>
          </div>
        </div>

        <div class="text-center mt-5">
          <p class="process-note">
            At every stage, we focus on making your experience smooth, empathetic, and reliable,
            because diagnostics should bring peace of mind, not stress.
          </p>
        </div>
      </div>
    </section>

    

    

    

   <section id="about-two">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mb-5 mb-lg-0 about_img">
            <figure>
              <img
                src="<?php echo $siteurl; ?>images/beautiful-young-doctors.jfif"
                alt="Vaarahi-Imaging"
                width="795"
                height="882"
                loading="lazy"
                class="img-fluid"
              />
            </figure>
          </div>
          <div class="col-lg-7 about_info ps-lg-5">
            <div class="section-title mb-3">
              <div class="h1">Imaging</div>
            </div>
            <p>
              Welcome to Vaarahi Diagnostics, At Vaarahi Diagnostics, we believe imaging is more than just a scan â€” itâ€™s the window to clarity, precision, and confidence in your health journey. Located in the heart of Hyderabad, we bring you advanced diagnostic imaging services designed to deliver accurate answers when they matter most.
            </p>
            <p>
              From Ultrasound to Mammography, X-Ray to Bone Mineral Density (BMD) testing, our wide range of services ensures that every aspect of your diagnostic needs is met under one roof. Each scan is backed by cutting-edge equipment, world-class standards, and the expertise of seasoned radiologists and technicians.
            </p>
            <p>
              Step into our state-of-the-art imaging center, where technology meets compassionate care. Every detail â€” from high-resolution imaging to interventional diagnostic procedures â€” is tailored to provide you with results that are not only precise but also delivered with speed and reliability.
            </p>
            <p>
              What sets Vaarahi apart is our patient-first philosophy: we donâ€™t just focus on images, we focus on the people behind them. With every scan, we aim to provide peace of mind, early detection, and better treatment outcomes.
            </p>
            
          </div>
        </div>
      </div>
    </section>
    



    


        <section id="book-a-test">
      <div class="container">
        <div class="row">
<div class="enquiry_bx mt-4 mt-lg-5">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5 pe-xl-5 d-none d-md-block">
                    <figure>
                        <img src="images/contact-bg-new.jpg" alt="Quick Enquiry" class="img-fluid">
                    </figure>
                </div>
                <div class="col-md-6 col-lg-7">
                    <div class="section-title mb-2">
                        <div class="h1">Quick Enquiry</div>
                    </div>
                    <p>For general enquiries, please send us a message and we'll get right back to you. You can also call us directly to talk with a member of our customer care.</p>
                    <form action="" class="mt-4 pt-lg-2" onsubmit="submitForm(); return false;" method="post" autocomplete="off" id="dateForm">
                        <div class="form-group mb-2 mb-lg-3">
                           <input type="text" class="form-control" placeholder="Name" name="name" pattern="[a-zA-Z\s]*" maxlength="20" title="Only characters are allowed" required="" oninput="checkRepeatingCharacters(this)">
                        </div>
                        <div class="form-group mb-2 mb-lg-3">
                            <input type="tel" placeholder="Phone" id="phone" name="phone" class="form-control" maxlength="10" pattern="[6789][0-9]{9}" title="Only numbers are allowed" required="">
                        </div>
                        <div class="form-group select with-icon mb-2 mb-lg-3">
                             <select name="service" id="department" class="form-control" required="">
                                <option value="">Services</option>
                                <option value="X-Ray & Dental X-Ray">X-Ray & Dental X-Ray</option>
                                <option value="Mammography">Mammography</option>
                                <option value="ECG & TMT">ECG & TMT</option>
                                <option value="CT Scan">CT Scan</option>
                                <option value="Sample Collection">Sample Collection</option>
                                <option value="Ultrasound">Ultrasound</option>
                            </select>
                            <i class="bi bi-arrow-down-short"></i>
                        </div>
                        <div class="form-group mb-2 mb-lg-3">
                            <textarea class="form-control" placeholder="Message" name="message"></textarea>
                        </div>
                        <div class="form-group">
                             <button type="submit" name="btn-save" class="readmore w-100" onclick="validateFields()">Submit</button>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact & Location Section -->
    <section id="contact-location" class="py-5 bg-primary text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <h2 class="contact-title mb-4">Contact & Location</h2>
            <div class="contact-info">
              <div class="contact-item mb-3">
                <div class="contact-icon">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-details">
                  <h5>Address</h5>
                  <p style="color: aliceblue;">Door no : 16-113/3/11/G1/G2, Opp KFC , <br> Beerumguda -Krishna Reddy Pet Road, <br>Ameenpur municipality, Beeramguda, <br>Hyderabad, Telangana 502032</p>
                </div>
              </div>

              <div class="contact-item mb-3">
                <div class="contact-icon">
                  <i class="fas fa-phone"></i>
                </div>
                <div class="contact-details">
                  <h5>Phone</h5>
                  <p><a href="tel:+919090135135" class="text-white">+91-[9090135135]</a></p>
                </div>
              </div>

              <div class="contact-item mb-3">
                <div class="contact-icon">
                  <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-details">
                  <h5>Email</h5>
                  <p><a href="mailto:info@vaarahi.life" class="text-white">info@vaarahi.life</a></p>
                </div>
              </div>

              <div class="contact-item mb-3">
                <div class="contact-icon">
                  <i class="fas fa-clock"></i>
                </div>
                <div class="contact-details">
                  <h5>Timings</h5>
                  <p style="color: aliceblue;">24x7 available</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="map-container">
              <h4 class="mb-3">Find Us on Map</h4>
              <div class="map-embed">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.6613301258317!2d78.29868119999999!3d17.523673000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb8d0060e8630b%3A0x109673c74c1cbaa8!2sVaarahi%20Diagnostics!5e0!3m2!1sen!2sin!4v1759826947139!5m2!1sen!2sin"
                  width="100%"
                  height="300"
                  style="border:0; border-radius: 10px;"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer" class="p-0">
      

      <div class="btm_footer">
        <div class="container">
          <div class="row gy-3 gy-sm-4 gy-lg-0">
            <div class="col-lg-6 col-12">
              <div class="h4"><span>Quick Links</span></div>
              <ul class="mnus two_part">
                <li>
                  <a href="javascript:void(0);">Home</a>
                </li>
                <li>
                  <a href="javascript:void(0);">Privacy Policy</a>
                </li>
                <li>
                  <a href="javascript:void(0);">About Vaarahi</a>
                </li>
                <!-- <li><a href="<?php echo $siteurl; ?>accreditations">Accreditation</a></li> -->
                <li>
                  <a href="javascript:void(0);">Terms & Conditions</a>
                </li>
                <li>
                  <a href="javascript:void(0);"
                    >Our Services</a
                  >
                </li>
                <li>
                  <a href="javascript:void(0);"
                    ></a
                  >
                </li>
                <li>
                  <a href="javascript:void(0);">Blog</a>
                </li>
                <li>
                  <a href="javascript:void(0);"></a>
                </li>
               
                <li>
                  <a href="javascript:void(0);">Contact us</a>
                </li>
                <li>
                  <a href="javascript:void(0);"></a>
                </li>
              </ul>
            </div>
            <div class="col-lg-3 col-6">
              <div class="h4"><span>Our Services</span></div>
              <ul class="mnus">
                  
                   <li>
                  <a href="javascript:void(0);"
                    >CT Scan</a
                  >
                </li>
                
                <li>
                  <a href="javascript:void(0);"
                    >X-Ray & Dental X-Ray</a
                  >
                </li>
                <li>
                  <a href="javascript:void(0);"
                    >Mammography</a
                  >
                </li>
                <li>
                  <a href="javascript:void(0);"
                    >ECG & TMT</a
                  >
                </li>
               
                <li>
                  <a href="javascript:void(0);"
                    >Sample Collection</a
                  >
                </li>

                <li>
                  <a href="javascript:void(0);"
                    >Ultrasound</a
                  >
                </li>
              </ul>
            </div>
            <div class="col-lg-3 col-6">
              <div class="h4"><span>Our Centers</span></div>
              <ul class="mnus">
                <li>
                  <a href="javascript:void(0);">Beeramguda</a>
                </li>
               
              </ul>
            </div>
           
          </div>
        </div>
      </div>
      <div class="copyright">
        <div
          class="container d-flex align-items-center justify-content-between"
        >
          <p class="mb-0">Copyrights &copy; 2025 Vaarahi Diagnostics</p>
          <ul>
            <li>
              <a
                href="javascript:void(0);"
                target="_blank"
                class="facebook"
                ><img
                  src="<?php echo $siteurl; ?>images/icon-svg/icon-facebook.svg"
                  width="16"
                  height="16"
                  alt="Like Us on Facebook"
                  class="img-fluid"
                  loading="lazy"
              /></a>
            </li>
            <li>
              <a href="javascript:void(0);" class="twitter"
                ><img
                  src="<?php echo $siteurl; ?>images/icon-svg/icon-twitter.svg"
                  alt="Tweet Us on Twitter"
                  width="16"
                  height="16"
                  class="img-fluid"
                  loading="lazy"
              /></a>
            </li>
            <li>
              <a
                href="javascript:void(0);"
                target="_blank"
                class="instagram"
                ><img
                  src="<?php echo $siteurl; ?>images/icon-svg/icon-instagram.svg"
                  width="16"
                  height="16"
                  alt="Follow Us on Instagram"
                  loading="lazy"
                  class="img-fluid"
              /></a>
            </li>
            <li>
              <a
                href="javascript:void(0);"
                target="_blank"
                class="youtube"
                ><img
                  src="<?php echo $siteurl; ?>images/icon-svg/icon-youtube.svg"
                  width="16"
                  height="16"
                  loading="lazy"
                  alt="Watch Us on Youtube"
                  class="img-fluid"
              /></a>
            </li>
            <li>
              <a
                href="javascript:void(0);"
                target="_blank"
                class="linkedin"
                ><img
                  src="<?php echo $siteurl; ?>images/icon-svg/icon-linkedin.svg"
                  width="16"
                  height="16"
                  loading="lazy"
                  alt="Follow Us on Linkedin"
                  class="img-fluid"
              /></a>
            </li>
          </ul>
        </div>
      </div>
    </footer>

    

    <!-- <div class="chat-pop">
    <a href="<?php echo $siteurl; ?>live-chat"><i class="bi bi-chat-left-dots"></i></a>
</div> -->

    <div class="chat-pop whatsapp">
      <a
        href="https://api.whatsapp.com/send?phone=+919090135135&text=Vaarahi Diagnostics - I would like to book an appointment for Erythropoietin (EPO) test."
        target="_blank"
        aria-label="Whatsapp Message"
        ><i class="bi bi-whatsapp"></i
      ></a>
    </div>

    <div class="call-pop phone">
      <a href="tel:+919090135135" aria-label="Phone Number">
        <i class="bi bi-telephone"></i
      ></a>
    </div>
    <div
      class="modal fade custom-modal"
      id="bookModal"
      tabindex="-1"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content overflow-visible">
          <div class="modal-body">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <i class="bi bi-x"></i>
            </button>
            <div class="appointment_cnt">
              <div class="modal_title">
                <span>Book Appointment</span>
                <div class="h2">For Erythropoietin (EPO)</div>
              </div>
              <form action="">
                <div class="row row-cols-1 g-3 gx-md-4 gy-3">
                  <div class="col">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Patient Name"
                      />
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Mobile Number"
                      />
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group with-icon select">
                      <select class="form-control" required="">
                        <option value="Investigation">
                          Book for an investigation
                        </option>
                        <option value="Health Checkup Package">
                          Book for an Health Checkup Package
                        </option>
                        <option value="Home Sample Collection">
                          Book for Home Sample Collection
                        </option>
                      </select>
                      <i class="las la-angle-down"></i>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group with-icon select">
                      <textarea
                        class="form-control"
                        placeholder="Query"
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-12 text-end">
                    <div class="form-group">
                      <button type="button" class="readmore">
                        request call back now
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade custom-modal"
      id="writeReview"
      tabindex="-1"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content overflow-visible">
          <div class="modal-body">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <i class="bi bi-x"></i>
            </button>
            <div class="appointment_cnt">
              <div class="modal_title">
                <span>Write Review</span>
                <div class="h2">Write Your Opinion</div>
              </div>
              <form action="">
                <div class="row row-cols-1 g-3 gx-md-4 gy-3">
                  <div class="col">
                    <ul class="stars">
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star-fill"></i></li>
                      <li><i class="bi bi-star"></i></li>
                    </ul>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Full Name"
                      />
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Subject"
                      />
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group with-icon select">
                      <textarea
                        class="form-control"
                        placeholder="Write Review"
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-12 text-end">
                    <div class="form-group">
                      <button type="button" class="readmore">
                        Submit Your Review
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Add this modal HTML before the closing </body> tag -->
<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center p-5">
        <div class="success-animation">
          <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
          </svg>
        </div>
        <h3 class="mt-4">Your appointment has been booked</h3>
        <p class="text-muted">We'll contact you shortly to confirm your appointment.</p>
        <button type="button" class="btn btn-primary mt-3" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<style>
/* Success animation styles */
.success-animation {
  margin: 0 auto;
  width: 80px;
  height: 80px;
}

.checkmark {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  display: block;
  stroke-width: 2;
  stroke: #4bb71b;
  stroke-miterlimit: 10;
  box-shadow: 0 0 20px rgba(75, 183, 27, 0.3);
  animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
}

.checkmark__circle {
  stroke-dasharray: 166;
  stroke-dashoffset: 166;
  stroke-width: 2;
  stroke-miterlimit: 10;
  stroke: #4bb71b;
  fill: none;
  animation: stroke .6s cubic-bezier(0.650, 0.000, 0.450, 1.000) forwards;
}

.checkmark__check {
  transform-origin: 50% 50%;
  stroke-dasharray: 48;
  stroke-dashoffset: 48;
  animation: stroke .3s cubic-bezier(0.650, 0.000, 0.450, 1.000) .8s forwards;
}

@keyframes stroke {
  100% {
    stroke-dashoffset: 0;
  }
}

@keyframes scale {
  0%, 100% {
    transform: none;
  }
  50% {
    transform: scale3d(1.1, 1.1, 1);
  }
}

@keyframes fill {
  100% {
    box-shadow: inset 0px 0px 0px 30px rgba(75, 183, 27, 0.1);
  }
}
</style>

<script>
// Update your form submission function
function submitForm() {
  // Basic validation
  if (!validateFields()) {
    return false;
  }
  
  // Get form data
  var formData = new FormData(document.getElementById('dateForm'));
  
  // Show loading state
  var submitBtn = document.querySelector('#dateForm button[type="submit"]');
  var originalText = submitBtn.innerHTML;
  submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...';
  submitBtn.disabled = true;
  
  // Submit via AJAX
  fetch('submit_form.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
  if (data.status === 'success') {

    // Show success modal
    // var successModal = new bootstrap.Modal(
    //   document.getElementById('successModal')
    // );
    // successModal.show();

    // Reset form
    document.getElementById('dateForm').reset();

    // Redirect after 2 seconds
    // setTimeout(function () {
      window.location.href = "https://vaarahidiagnostics.com/thankyou.php";
    // }, 2000);

  } else {
    alert('Error: ' + data.message);
  }
})
  .catch(error => {
    console.error('Error:', error);
    alert('An error occurred. Please try again.');
  })
  .finally(() => {
    // Restore button state
    submitBtn.innerHTML = originalText;
    submitBtn.disabled = false;
  });
  
  return false;
}

function validateFields() {
  // Your existing validation logic
  var name = document.querySelector('input[name="name"]');
  var phone = document.querySelector('input[name="phone"]');
  
  if (!name.value.trim()) {
    alert('Please enter your name');
    name.focus();
    return false;
  }
  
  if (!phone.value.trim()) {
    alert('Please enter your phone number');
    phone.focus();
    return false;
  }
  
  var phonePattern = /[6789][0-9]{9}/;
  if (!phonePattern.test(phone.value)) {
    alert('Please enter a valid 10-digit phone number starting with 6,7,8, or 9');
    phone.focus();
    return false;
  }
  
  return true;
}

function checkRepeatingCharacters(input) {
  // Your existing character validation
  var value = input.value;
  if (/^(.)\1+$/.test(value)) {
    input.setCustomValidity('Repeating characters are not allowed');
  } else {
    input.setCustomValidity('');
  }
}
</script>

    <!-- Fix for missing elements that custom.js expects -->
    <script>
      // Create placeholder elements to prevent JavaScript errors
      document.addEventListener('DOMContentLoaded', function() {
        // Check if elements exist before custom.js tries to access them
        if (!document.getElementById('signUp')) {
          const signUpPlaceholder = document.createElement('div');
          signUpPlaceholder.id = 'signUp';
          signUpPlaceholder.style.display = 'none';
          document.body.appendChild(signUpPlaceholder);
        }

        if (!document.getElementById('signIn')) {
          const signInPlaceholder = document.createElement('div');
          signInPlaceholder.id = 'signIn';
          signInPlaceholder.style.display = 'none';
          document.body.appendChild(signInPlaceholder);
        }

        if (!document.getElementById('account-container')) {
          const containerPlaceholder = document.createElement('div');
          containerPlaceholder.id = 'account-container';
          containerPlaceholder.style.display = 'none';
          document.body.appendChild(containerPlaceholder);
        }
      });
    </script>
    <script src="<?php echo $siteurl; ?>public/js/custom.js"></script>
    <script src="<?php echo $siteurl; ?>lp/includes/common.js"></script>

  </body>
</html>
