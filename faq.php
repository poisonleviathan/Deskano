<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  .product-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

.card-content {
  margin-top: auto; /* Pushes the content to the top */
}
</style>
  <!-- 
    - primary meta tag
  -->
  <title>DESKANO - The Largest Job Platform</title>
  <meta name="title" content="Kitter - Hight Quality Pet Food">
  <meta name="description" content="">

  <!-- 
    - favicon
  -->

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./css/plusbanner.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./images/abc.png">


</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container" style="float:right; padding-right: 250px;">

      <a href="#" class="logo"></a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.php" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
              <a href="learnguest.php" class="navbar-link" data-nav-link>Learn</a>
          </li>

          <li class="navbar-item">
              <a href="shop.php" class="navbar-link" data-nav-link>Deskano Shop</a>
          </li>

          <li class="navbar-item">
              <a href="plusbanner.php"class="navbar-link" data-nav-link>Deskano Plus</a>
          </li>

          <li class="navbar-item">
              <a href="blogIndex.php" class="navbar-link" data-nav-link>Blog</a>
          </li>

          <li class="navbar-item">
            <a href="contact.php" class="navbar-link" data-nav-link>Contact</a>
          </li>

          <li class="navbar-item">
              <a href="faq.php" class="navbar-link" data-nav-link>FAQ</a>
          </li>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="toggle manu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" aria-label="true" class="close-icon"></ion-icon>
      </button>

    </div>
  </header>

  <main>
      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('./images/faq.png')">
        <div class="container">

          <h1 class="h1 hero-title">
            <span class="span">F.A.Q </span>
          </h1>

          <p class="hero-text">Get Answers Quickly!</p>

          <a href="#faq" class="btn">See Now</a>

        </div>
      </section>


<style>
    .faq-container{
        border-radius:10px;
        background-color:gray;
        padding:10px;
    }
    .faq{
        background-color:#f8f8f8;
        border:solid black;
    }
</style>

<link rel="stylesheet" href="css/faq.css">

    <div id="faq" style="margin-bottom:30px;">
        <h2 id="h1">Frequently Asked Questions</h2>
        <div class="faq-container"  style="background-color:#cccccc;">
            <div class="faq" style="background-color:gray;">
                <h5 class="faq-title">What is DESKANO and how does it differ from other job finding platforms?</h5>
                <p class="faq-text" style="color:#f8f8f8;">DESKANO is a comprehensive job finding platform designed to connect job seekers with potential employers. Unlike other platforms, DESKANO offers unique features, making the job search process more efficient and tailored to individual needs.</p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="faq " style="background-color:gray;">
                <h5 class="faq-title">How can I create a profile on DESKANO?</h5>
                <p class="faq-text" style="color:#f8f8f8;">To create a profile on DESKANO, follow these simple steps: <br>
                Visit the DESKANO website. <br>
                Click on the "Sign Up" button. <br>
                Fill in the required information, including your personal details, skills, and work experience. <br>
                Upload your resume and any relevant documents. <br>
                Complete the registration process and start exploring job opportunities.</p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="faq " style="background-color:gray;">
                <h5 class="faq-title">What types of jobs are available on DESKANO?</h5>
                <p class="faq-text" style="color:#f8f8f8;">DESKANO caters to a diverse range of industries and job categories. Whether you're looking for entry-level positions, internships, or executive roles, DESKANO offers a wide variety of job opportunities to suit your preferences and skills.</p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="faq " style="background-color:gray;">
                <h5 class="faq-title">How does DESKANO match candidates with suitable job openings?</h5>
                <p class="faq-text" style="color:#f8f8f8;">DESKANO employs advanced algorithms that analyze your profile, skills, and preferences to match you with relevant job listings. The platform uses a sophisticated matching system to ensure that you receive job recommendations that align with your qualifications and career goals.</p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="faq " style="background-color:gray;">
                <h5 class="faq-title">Can I customize job alerts on DESKANO?</h5>
                <p class="faq-text" style="color:#f8f8f8;">Yes, DESKANO allows you to customize job alerts based on your preferred criteria. You can set filters such as location, job type, and industry to receive notifications for the most relevant job opportunities.</p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="faq " style="background-color:gray;">
                <h5 class="faq-title">Is DESKANO free for job seekers?</h5>
                <p class="faq-text" style="color:#f8f8f8;">TYes, DESKANO is free for job seekers. You can create a profile, search for jobs, and apply to positions without any cost.</p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="faq " style="background-color:gray;">
                <h5 class="faq-title">How can I increase my visibility to employers on DESKANO?</h5>
                <p class="faq-text" style="color:#f8f8f8;">To enhance your visibility on DESKANO, make sure to: <br>
                Complete your profile with detailed information. <br>
                Highlight your skills and accomplishments. <br>
                Upload a professional-looking photo. <br>
                Regularly update your profile with new experiences and skills.</p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="faq " style="background-color:gray;">
                <h5 class="faq-title">What sets DESKANO apart in terms of user experience for job seekers?</h5>
                <p class="faq-text" style="color:#f8f8f8;">DESKANO prioritizes user experience by offering an intuitive interface, easy navigation, and a user-friendly design. The platform is designed to make the job search process efficient and enjoyable.</p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="faq " style="background-color:gray;">
                <h5 class="faq-title">How can I track the status of my job applications on DESKANO?</h5>
                <p class="faq-text" style="color:#f8f8f8;">You can track your job applications on DESKANO by logging into your account and visiting the "Applications" section. Here, you'll find updates on the status of each application, including whether it's under review, shortlisted, or declined.</p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="faq " style="background-color:gray;">
                <h5 class="faq-title">Does DESKANO provide resources for improving my job search skills?</h5>
                <p class="faq-text" style="color:#f8f8f8;">Yes, DESKANO offers resources such as articles, webinars, and guides to help you enhance your job search skills. These resources cover topics like resume writing, interview preparation, and career development.</p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>

<!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.jpg')">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">DESKANO FAQ</a>

          <p class="footer-text">
            If you have any question, please contact our customer support <a href="mailto:support@gmail.com"
              class="link">deskano.official@gmail.com</a>
          </p>

          <ul class="contact-list">

            <li class="contact-item">
              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

              <address class="address">
                542 Peradeniya Rd, Kandy 20500
              </address>
            </li>

            <li class="contact-item">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

              <a href="tel:+16234567891011" class="contact-link">+94-778-358-111</a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Corporate</p>
          </li>

          <li>
            <a href="#" class="footer-link">Careers</a>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQs</a>
          </li>

          <li>
            <a href="#" class="footer-link">Vendors</a>
          </li>

          <li>
            <a href="#" class="footer-link">Affiliate Program</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Information</p>
          </li>

          <li>
            <a href="#" class="footer-link">Online Store</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Refund Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Shipping Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms of Service</a>
          </li>

         
        </ul>

       

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 Made with ♥ by <a href="#" class="copyright-link">DESKANO</a>
        </p>


      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <script src="js/script.js"></script>
</body>

</html>