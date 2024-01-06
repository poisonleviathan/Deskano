<?php
    include('include/tutor_header.php');
?>

<div class="hero-wrap js-fullheight" style="background-image: url(images/Home.png);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutsters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
        <!-- <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have <span class="number" data-number="850000">0</span> great job offers you deserve!</p> -->
        <h1 style="font-family: 'Poppins Medium', sans-serif;" class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">"Learn with Deskano"</h1>
        </div>
    </div>
    </div>
</div>

<main role="main" style="margin-left: auto; margin-right: auto" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <!-- Header section -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Upload to Learn</h1>
    </div>

    <!-- Form section -->
    <div style="width: 60%; padding: 3%; margin-left: 20%; margin-right: 20%; background-color: #F2F4F4; border-radius: 15px;">
        <div id="msg"></div>
        <form action="video_add.php" method="post" style="margin: 5%; padding: 3%;" enctype="multipart/form-data" name="customer_form" id="customer_form">
            <input type="hidden" name="user_email" value="<?php echo $_SESSION['email']; ?>">

            <div class="form-group">
                <label for="video-title">Enter the Video Title</label>
                <input name="des" id="des" placeholder="PHP Web Developing" class="form-control">
            </div>

            <div class="form-group">
                <label for="category">Select the Category</label>
                <select name="category" class="form-control" id="category">
                    <?php 
                    $query = mysqli_query($conn, "SELECT * FROM video_category");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['category'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="video-file">Choose a Video</label>
                <input type="file" class="form-control" name="video" id="video" style="border: solid black 1px; padding-top: 1%; padding-bottom: 1%" onchange="updateVideo()">
            </div>

            <div style="text-align: center;" class="form-group">
                <video width="80%" height="50%" controls id="videoPlayer">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-block btn-success" value="Update" name="submit" id="submit">
            </div>
        </form>

        <!-- JavaScript to update video preview -->
        <script>
            function updateVideo() {
                var videoInput = document.getElementById('video');
                var videoPlayer = document.getElementById('videoPlayer');

                // Check if a file is selected
                if (videoInput.files.length > 0) {
                    var selectedVideo = URL.createObjectURL(videoInput.files[0]);
                    // Update the video source dynamically
                    videoPlayer.innerHTML = '<source src="' + selectedVideo + '" type="video/mp4">';
                }
            }
        </script>
    </div>

    <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
    <div class="table-responsive">
        <!-- Content for the table goes here -->
    </div>
</main>

      </div>
    </div>

<!--loader-->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>