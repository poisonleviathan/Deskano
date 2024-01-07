<?php
$page='home';
include('connection/db.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch video details from the database
$sql = "SELECT * FROM learn ";
$result = $conn->query($sql);
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
  <link rel="stylesheet" href="css/style.css">
    
  

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
                    <a href="plus.php" style="color:black;" class="navbar-link" data-nav-link>Deskano Plus</a>
                </li>

                <li class="navbar-item">
                    <a href="contact.php" style="color:black;" class="navbar-link" data-nav-link>Contact</a>
                </li>

                <li class="navbar-item">
                    <a href="faq.php" style="color:black;" class="navbar-link" data-nav-link>FAQ</a>
                </li>

                <li class="navbar-item" style="margin-left:100px;">
                    <a href="index.php" style="color:black;" class="navbar-link" data-nav-link>Back</a>
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
        background-color: #ffffff;
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

<body>

<div class="ftco-search col-md-6" id="watch">
    <div class="row col-md-6 category_center">
        <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Select a Category</a>
            </div>
        </div>
        <div class="tab-content p-4" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                <form action="categoryVideo.php" method="post" class="search-job">
                    <div class="row category-container center">
                        <div class="col-md">
                            <div class="form-group center">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="category" style="width:200px; height:35px; cursor:pointer; padding-left:10px;" id="category" class="form-control">
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
                        <div class="col-md">
                            <div class="form-group center">
                                <div class="form-field" style="width:100px; height:40px; background-color: #007bff; color: #007bff; border: none; border-radius: 5px; cursor: pointer;">
                                    <input type="submit"  value="Search" style="border: none;" name="search" id="search" class="form-control btn-learn btn-primary">
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
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $videoFileName = $row["video"];
        $title = $row['title'];
?>

    <div class="video-container">
        <div id="msg"></div>
        <form action="video_add.php" method="post" style="margin: 5%; padding: 3%;" enctype="multipart/form-data" name="customer_form" id="customer_form">
            <div style="text-align: center;" class="form-group">
                <h3 style="font-size:17pt; margin-bottom:10px;"><?php echo $title; ?></h3>
                <video width="80%" height="50%" controls>
                    <source src="videos/<?php echo $videoFileName; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </form>
    </div>
<?php
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>
