<?php
include('connection/db.php');

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['search'])) {

    // Retrieve the selected category ID
    $selectedCategory = $_POST['category'];

    // Fetch all videos for the selected category
    
?>



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
  <title>DESKANO-LEARN</title>

  <!-- 
    - favicon
  -->

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./css/video.css">
    
  

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./images/hero-banner.png">
  <header id="top" class="header" data-header>
    <div class="container row col-md-12" id="top">

      <button class="nav-toggle-btn" aria-label="toggle manu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" aria-label="true" class="close-icon"></ion-icon>
      </button>
      <a href="#" class="logo-learn" style="color:black; padding-left:30px;">DESKANO-SHOP</a>

        <nav class="navbar" data-navbar>
            <ul class="navbar-list">

                <li class="navbar-item">
                    <a href="index.php" style="color:black;" class="navbar-link" data-nav-link>Home</a>
                </li>    
            
                <li class="navbar-item">
                    <a href="learnguest.php" style="color:black;" class="navbar-link" data-nav-link>Learn</a>
                </li>

                <li class="navbar-item">
                    <a href="shop.php" style="color:black;" class="navbar-link" data-nav-link>Deskano Shop</a>
                </li>

                <li class="navbar-item">
                    <a href="plusbanner.php" style="color:black;" class="navbar-link" data-nav-link>Deskano Plus</a>
                </li>

                <li class="navbar-item">
                    <a href="blogIndex.php" style="color:black;" class="navbar-link" data-nav-link>Blog</a>
                </li>

                <li class="navbar-item">
                    <a href="contact.php" style="color:black;" class="navbar-link" data-nav-link>Contact</a>
                </li>

                <li class="navbar-item">
                    <a href="faq.php" style="color:black;" class="navbar-link" data-nav-link>FAQ</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->
      <section class="section hero has-bg-image" id="home" aria-label="home" style="background-image: url('./images/hero-banner.png')">
        
        
        <div class="container">

          <h1 class="h1-learn hero-title-learn">
            <span class="span_learn">High Quality</span>Content
          </h1>

          <p class="hero-text-learn">Watch all for 100% free</p>

          <a href="#watch" class="btn-learn">Watch Now</a>

        </div>
      </section>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
    }

    .ftco-search {
        background-color: #ececec;
        padding: 20px;
        border-radius: 15px;
        margin: 20px auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .category_center{
        border-radius: 15px;
        margin: 20px auto;
        text-align:center;
        justify-content:center;
    }

    .center{
            display: flex;
            justify-content: center;
        }

    .text-center{
        border-radius: 15px;
        justify-content:center;
    }

    .nav-link {
        color: #333;
        font-weight: bold;
    }

    .nav-link.active {
        background-color: #6c757d;
        color: #fff;
        border-radius: 8px;
    }


    .btn-primary {
        width: 100px;
        height: 40px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .video-container {
        width: 60%;
        padding: 3%;
        margin: 20px auto;
        background-color: #ececec;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h3 {
        color: #333;
    }

    .category-container{
        width:400px;
    }

    @media (max-width: 445px) {
        .category-container{
            width:250px;
        }

        .center{
            display: flex;
            justify-content: center;
        }
        
    }
</style>

<!-- 
        - #CATEGORY
      -->

      <section class="section category" aria-label="category">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Top categories</span>
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="./images/category-1.png" width="330" height="300" loading="lazy" alt="Cat Food"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Graphic Designing</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="./images/category-2.png" width="330" height="300" loading="lazy" alt="Cat Toys"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Digital Marketing</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="./images/category-3.png" width="330" height="300" loading="lazy" alt="Dog Food"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Web Development</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="./images/category-4.png" width="330" height="300" loading="lazy" alt="Dog Toys"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Marketing</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="./images/category-5.png" width="330" height="300" loading="lazy"
                    alt="Dog Sumpplements" class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Stock Trading</a>
                </h3>

              </div>
            </li>

          </ul>

        </div>
      </section>

      
      <h2 class="h2 section-title">
        <span class="span">Select a Category</span>
      </h2>

<div class="ftco-search col-md-6" style="width:50%;" id="watch">
    <div class="row col-md-6 category_center">
        <div class="tab-content p-4" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                <form action="categoryVideo.php" method="post" class="search-job">
                    <div class="row category-container center" style="margin-left:auto; margin-right:auto;">
                        <div class="col-md" style="margin:10px;">
                            <div class="form-group center">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="category" style="width:200px; height:35px; cursor:pointer; padding-left:10px;" id="category" style="width:200px;" class="form-control">
                                            <option value="">Category</option>
                                            <?php 
                                            include('connection/db.php');
                                            $query=mysqli_query($conn,"select * from video_category");
                                            while ($row=mysqli_fetch_array($query)) { ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['category']; ?></option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="icon"><span class="icon-map-marker"></span></div>
                                    <input type="text" class="form-control" placeholder="Location">
                                    </div>
                                </div>
                        </div>  -->
                        <div class="col-md" style="margin:10px;">
                            <div class="form-group center">
                                <div class="form-field">
                                    <input  style="width:100px; height:40px;"  type="submit" value="Search" name="search" id="search" class="form-control btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$query = mysqli_query($conn, "SELECT * FROM learn WHERE TRIM(category) = '$selectedCategory'");
    // Check if there are any results
    if (!$query) {
        die("Query failed: " . mysqli_error($conn));
    } elseif (mysqli_num_rows($query) > 0) {
        // Loop through the results and display each video
        while ($row = mysqli_fetch_array($query)) {
            $title = $row['title'];
            $videoFileName = $row['video']; ?>

            <div class="video-container">
                <div id="msg"></div>
                <form action="video_add.php" method="post" style="margin: 5%; padding: 3%;" enctype="multipart/form-data" name="customer_form" id="customer_form">
                    <div style="text-align: center;" class="form-group">
                        <h3><?php echo $title?></h3>
                        <video width="80%" height="50%" controls>
                            <source src="videos/<?php echo $videoFileName; ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </form>
            </div>
    <?php  }
    } else {
        echo "<p style='text-align:center;'>No videos found for the selected category.</p>";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

 <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.jpg')">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">DESKANO-LEARN</a>

          <p class="footer-text">
            If you have any question, please contact us at <a href="mailto:support@gmail.com"
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

          <li>
            <a href="#" class="footer-link">Track Order</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Services</p>
          </li>

          <li>
            <a href="#" class="footer-link">Course Metirials</a>
          </li>

          <li>
            <a href="#" class="footer-link">Recorded Sessions</a>
          </li>

          <li>
            <a href="#" class="footer-link">Live Webinars</a>
          </li>

          <li>
            <a href="#" class="footer-link">Quizes</a>
          </li>

          <li>
            <a href="#" class="footer-link">One-On-One Guidence</a>
          </li>

          <li>
            <a href="#" class="footer-link">Resource Center</a>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 Made with ♥ by <a href="#" class="copyright-link">DESKANO</a>
        </p>

        <img src="./shop_assets/images/payment.png" width="397" height="32" loading="lazy" alt="payment method" class="img">

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
