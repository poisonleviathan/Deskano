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
  <title>DESKANO-PLUS</title>
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
    <div class="container" style="margin-left:auto; margin-right:auto;">

      <a href="#" class="logo"></a>

      <nav class="navbar" style="margin-left:auto; margin-right:250px;" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a style="cursor:pointer; text-decoration:underline;" onclick="goBack()" class="navbar-link" data-nav-link>Back</a>
          </li>

          <script>
            function goBack() {
                window.history.back();
            }
        </script>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="toggle manu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" aria-label="true" class="close-icon"></ion-icon>
      </button>

    </div>
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('./images/abcd.png')">
        <div class="container">

          <h1 class="h1 hero-title">
            <span class="span">DESKANO</span>PLUS
          </h1>

          <p class="hero-text">We value Your Future</p>

          <a href="employerPlus.php" class="btn">Buy Now</a>

        </div>
      </section>

      <!-- 
        - #OFFERS
      -->
      <h2 class="h2 section-title">
        <span class="span">What We</span> Offer
      </h2>

      <section class="section offer" aria-label="offer">
        <div class="container">

          <ul class="grid-list">

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('./images/ppt.png'); --width: 540; --height: 374;">

                <p class="card-subtitle"></p>

                <h3 class="h3 card-title">
                  Prioritize Your<span class="span">Posts</span>
                </h3>

                <a href="#" class="btn">Read More</a>

              </div>
            </li>

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('./images/laa.png'); --width: 540; --height: 374;">

                <p class="card-subtitle"></p>

                <h3 class="h3 card-title">
                  Get More <span class="span">Reach</span>
                </h3>

                <a href="#" class="btn">Read More</a>

              </div>
            </li>

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('./images/bee.png'); --width: 540; --height: 374;">

                <p class="card-subtitle"></p>

                <h3 class="h3 card-title">
                  VIP Customer<span class="span">Service</span>
                </h3>

                <a href="#" class="btn">Read More</a>

              </div>
            </li>

          </ul>

        </div>
      </section>
  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.jpg')">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">DESKANO PLUS</a>

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

</body>

</html>
