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
  <link rel="preload" as="image" href="./images/abcdef.png">


</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container" style="float:right; padding-right: 250px;">

    <a href="#" style="color:white; padding-left:30px;" class="logo">DESKANO-CONTACT</a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.php" class="navbar-link" data-nav-link>Jobs</a>
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
        style="background-image: url('./images/abcdef.png')">
        <div class="container">

          <h1 class="h1 hero-title">
            <span class="span">Contact Us</span>
          </h1>

          <p class="hero-text">24/7 Customer Service</p>

          <a href="#cntct" class="btn">Contact Now</a>

        </div>
      </section>

      <?php
$page = 'contact';

require 'admin/email/vendor/autoload.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];

    // Insert data into the database
    $query = "INSERT INTO contact_form (name, email, subject, msg) VALUES ('$name', '$email', '$subject', '$msg')";

    if (mysqli_query($conn, $query)) {
            echo "<script>alert('Thanks for contacting us. We will get back to you soon.')</script>";
    } else {
        echo "<script>alert('Error inserting data. Please try again.')</script>";
    }
}
?>

<!-- HTML code for the contact form goes here -->

<section id="cntct" class="ftco-section contact-section bg-light">
  <div class="container">
      <div class="row block-9">
          <div class="col-md-6 d-flex">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.646098016557!2d80.61746657499991!3d7.281047492726175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3673f5e22ab3b%3A0xcbaef11262bec73!2sAPIIT%20Kandy%20Campus!5e0!3m2!1sen!2slk!4v1701073955204!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div id="form" class="col-md-6 order-md-last d-flex">
              <form action="contact.php" method="POST" class="bg-white p-5 contact-form">
              <h3>Contact Us</h3>
              <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea  id="" cols="30" rows="7" name="msg" class="form-control" placeholder="Message" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
              </form>
          </div>
      </div>
  </div>
</section>


<style>
  /* Add this CSS code for styling the contact form section */

.ftco-section.contact-section {
    padding: 7em 0;
}

#cntct{
  width:80%;
  margin-left:auto;
  margin-right:auto;
}

#form{
  text-align:center;
}

#form h3{
  padding-bottom:20px;
}

.contact-form {
    width: 90%;
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    padding: 30px;
    transition: transform 0.3s ease-in-out;
}

.contact-form:hover {
    transform: translateY(-5px);
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    border: 2px solid #ccc;
    border-radius: 10px;
    padding: 10px;
    transition: border-color 0.3s ease-in-out;
}

.form-control:focus {
    border-color: #6c757d;
}

.btn-primary {
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 10px;
    padding: 12px 20px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

.btn-primary:hover {
    background-color: #217dbb;
}

/* Add this CSS code to style the map and ensure it is responsive */

iframe {
    width: 90%;
    height: 100%;
    border: none;
    border-radius: 15px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

/* Add this CSS code to make the form and map in the same row on larger screens */

@media (min-width: 768px) {
    .block-9 {
        display: flex;
    }

    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-md-6 iframe {
        margin-left: 30px; /* Adjust the margin as needed */
    }
}


</style>

		<style>
      .ftco-section-parallax .parallax-img{
        background:#CF9966;
      }
    </style>
      
  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.jpg')">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">DESKANO CONTACT</a>

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
