<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            z-index: 2;
        }

        .modal p {
            margin-bottom: 20px;
        }

        .modal button {
            border: none;
            padding: 10px;
            background-color: #696969; /* Dark Gray Button */
            color: #fff;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        .modal button:hover {
            background-color: #484848; /* Darker Gray on Hover */
        }
  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Deskano - Hey, we’re DESKANO. See our thoughts, stories and ideas.</title>
  <meta name="title" content="Deskano - Hey, we’re DESKANO. See our thoughts, stories and ideas.">
  <meta name="description" content="This is a blog by Deskano">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header section" data-header>
    <div class="container">

   

    <nav class="navbar" style="width:100%;" data-navbar>
      <ul class="navbar-list" style="display: flex; align-items: center; padding: 0;">

          <li class="navbar-item" style="list-style: none; margin-right: auto;">
              <a href="index.php" class="navbar-link hover:underline" data-nav-link>Back</a>
          </li>

          <li class="navbar-item" style="list-style: none;">
              <a href="#" class="navbar-link hover:underline" data-nav-link>Home</a>
          </li>

          <li class="navbar-item" style="list-style: none;">
              <a href="#" class="navbar-link hover:underline" data-nav-link>Recent</a>
          </li>

          <li class="navbar-item" style="list-style: none;">
              <a href="member.php" class="navbar-link hover:underline" data-nav-link>Membership</a>
          </li>

      </ul>
    </nav>


      <div class="wrapper">

        <button class="search-btn" aria-label="search" data-search-toggler>
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>

          <span class="span">Search</span>
        </button>

        <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
          <span class="span one"></span>
          <span class="span two"></span>
          <span class="span three"></span>
        </button>


      </div>

    </div>
  </header>





  <!-- 
    - #SEARCH BAR
  -->

  <div class="search-bar" data-search-bar>

    <div class="input-wrapper">
      <input type="search" name="search" placeholder="Search" class="input-field">

      <button class="search-close-btn" aria-label="close search bar" data-search-toggler>
        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
      </button>

    </div>

  

  </div>

  <div class="overlay" data-overlay data-search-toggler></div>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="home">
        <div class="container">

          <h1 class="h1 hero-title">
            <strong class="strong">Hey, we’re DESKANO.</strong> Share your thoughts and ideas.
          </h1>

          <div class="wrapper">

            <form action="" class="newsletter-form" onsubmit="showThankYouMessage(event)">
              <input type="email" name="email_address" placeholder="Your email address" class="email-field">
              <button type="submit" class="btn">Subscribe</button>
          </form>
      
          <div class="overlay" id="overlay"></div>
          <div class="modal" id="myModal">
              <p>Thank you for subscribing!</p>
              <button onclick="closeModal()">Close</button>
          </div>
      
          <script>
              function showThankYouMessage(event) {
                  event.preventDefault(); // Prevent the form from actually submitting
      
                  document.getElementById('overlay').style.display = 'block';
                  document.getElementById('myModal').style.display = 'block';
              }
      
              function closeModal() {
                  document.getElementById('overlay').style.display = 'none';
                  document.getElementById('myModal').style.display = 'none';
              }
          </script>

            <p class="newsletter-text">
              Get the email newsletter and unlock access to members-only content and updates
            </p>

          </div>

        </div>
      </section>





      <!-- 
        - #FEATURED POST
      -->

      <section class="section featured" aria-label="featured post">
        <div class="container">

          <p class="section-subtitle">
            Get started with DESKANOs' <strong class="strong">Best Stories</strong>
          </p>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                  <img src="./assets/images/featured-1.jpg" width="500" height="600" loading="lazy"
                    alt="New technology is not good or evil in and of itself" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-1.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-2.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Design</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Idea</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Review</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="blog1.php" class="card-title hover:underline">
                      New technology is not good or evil 
                    </a>
                  </h3>

                  <p class="card-text">
                    New technology is inherently neutral, devoid of any intrinsic moral value. Whether a technological advancement is perceived as good or evil depends entirely on how it is used and the intentions behind its implementation. The responsibility for the ethical implications of technology lies with its creators, users, and the broader societal context in which it operates.

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                  <img src="./assets/images/featured-2.jpg" width="500" height="600" loading="lazy"
                    alt="It’s a new era in design, there are no rules" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Creative</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Product</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="blog2.php" class="card-title hover:underline">
                      It’s a new era in design, there are no rules
                    </a>
                  </h3>

                  <p class="card-text">
                    In the contemporary landscape of design, we find ourselves in a thrilling new era where the traditional boundaries and rules are being redefined. The notion that "there are no rules" encapsulates the spirit of innovation and creativity that is flourishing in the design world.
                  </p>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                  <img src="./assets/images/featured-3.jpg" width="500" height="600" loading="lazy"
                    alt="Perfection has to do with the end product" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-4.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Design</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Creative</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Idea</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="blog3.php" class="card-title hover:underline">
                      Perfection has to do with the end product
                    </a>
                  </h3>

                  <p class="card-text">
                    The concept of perfection is often associated with the end product, encapsulating the idea that the ultimate measure of success lies in the final result. This perspective suggests that perfection is a standard achieved when a task or creation reaches its culmination, displaying an ideal state of completeness and excellence.
                  </p>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                  <img src="./assets/images/featured-4.jpg" width="500" height="600" loading="lazy"
                    alt="Everyone has a different life story" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-2.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">People</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Story</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="blog4.php" class="card-title hover:underline">
                      Everyone has a different life story
                    </a>
                  </h3>

                  <p class="card-text">
                    Indeed, the tapestry of human existence is woven with the unique threads of individual life stories. Each person's journey is a narrative shaped by diverse experiences, challenges, triumphs, and the countless moments that constitute the chapters of their lives. The beauty of this diversity lies in the fact that no two life stories are identical.
                  </p>

                </div>

              </div>
            </li>

            

        </div>
      </section>





      <!-- 
        - #RECENT POST
      -->

      <section class="section recent" aria-label="recent post">
        <div class="container">

          <div class="title-wrapper">

            <h2 class="h2 section-title">
              See What's <strong class="strong">Coming Soon.....</strong>
            </h2>

            <div class="top-author">
              <ul class="avatar-list">

                <li class="avatar-item">
                  <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/author-1.jpg" width="100" height="100" alt="top author" class="img-cover">
                  </a>
                </li>

                <li class="avatar-item">
                  <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/author-2.jpg" width="100" height="100" alt="top author" class="img-cover">
                  </a>
                </li>

                <li class="avatar-item">
                  <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/author-3.jpg" width="100" height="100" alt="top author" class="img-cover">
                  </a>
                </li>

                <li class="avatar-item">
                  <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/author-4.jpg" width="100" height="100" alt="top author" class="img-cover">
                  </a>
                </li>

                <li class="avatar-item">
                  <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/author-5.jpg" width="100" height="100" alt="top author" class="img-cover">
                  </a>
                </li>

              </ul>

              <span class="span">Meet our top authors</span>
            </div>

          </div>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
                  <img src="./assets/images/recent-1.jpg" width="550" height="660" loading="lazy"
                    alt="Creating is a privilege but it’s also a gift" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Lifestyle</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">People</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Review</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                      Creating is a privilege but it’s also a gift
                    </a>
                  </h3>

                  <p class="card-text">
                    Coming Soon..
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
                  <img src="./assets/images/recent-2.jpg" width="550" height="660" loading="lazy"
                    alt="Being unique is better than being perfect" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Design</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Product</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Idea</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                      Being unique is better than being perfect
                    </a>
                  </h3>

                  <p class="card-text">
                    Coming Soon..
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
                  <img src="./assets/images/recent-3.jpg" width="550" height="660" loading="lazy"
                    alt="Now we’re getting somewhere" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-2.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-1.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Idea</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Product</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Review</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                      Now we’re getting somewhere
                    </a>
                  </h3>

                  <p class="card-text">
                    Coming Soon..
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
                  <img src="./assets/images/recent-4.jpg" width="550" height="660" loading="lazy"
                    alt="The trick to getting more done is to have the freedom to roam around" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Lifestyle</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Design</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                      The trick to getting more done is to have the freedom to roam around
                    </a>
                  </h3>

                  <p class="card-text">
                    Coming Soon..
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
                  <img src="./assets/images/recent-5.jpg" width="550" height="660" loading="lazy"
                    alt="Every day, in every city and town across the country" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-1.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-6.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">People</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Story</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Lifestyle</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                      Every day, in every city and town across the country
                    </a>
                  </h3>

                  <p class="card-text">
                    Coming Soon..
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
                  <img src="./assets/images/recent-6.jpg" width="550" height="660" loading="lazy"
                    alt="Your voice, your mind, your story, your vision" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-6.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">People</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Review</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Story</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                      Your voice, your mind, your story, your vision
                    </a>
                  </h3>

                  <p class="card-text">
                    Coming Soon..
                  </p>

                </div>

              </div>
            </li>

          </ul>


        </div>
      </section>





      <!-- 
        - #RECOMMENDED POST
      -->

      <section class="section recommended" aria-label="recommended post">
        <div class="container">

          <p class="section-subtitle">
            <strong class="strong">Recommended</strong>
          </p>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                  <img src="./assets/images/recommended-1.jpg" width="300" height="360" loading="lazy"
                    alt="The trick to getting more done is to have the freedom to roam around " class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-2.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h5">
                    <a href="#" class="card-title hover:underline">
                      The trick to getting more done is to have the freedom to roam around
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                  <img src="./assets/images/recommended-2.jpg" width="300" height="360" loading="lazy"
                    alt="Every day, in every city and town across the country " class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h5">
                    <a href="#" class="card-title hover:underline">
                      Every day, in every city and town across the country
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                  <img src="./assets/images/recommended-3.jpg" width="300" height="360" loading="lazy"
                    alt="I work best when my space is filled with inspiration " class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-1.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h5">
                    <a href="#" class="card-title hover:underline">
                      I work best when my space is filled with inspiration
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                  <img src="./assets/images/recommended-4.jpg" width="300" height="360" loading="lazy"
                    alt="I have my own definition of minimalism " class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-4.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h5">
                    <a href="#" class="card-title hover:underline">
                      I have my own definition of minimalism
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                  <img src="./assets/images/recommended-5.jpg" width="300" height="360" loading="lazy"
                    alt="Change your look and your attitude " class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-6.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h5">
                    <a href="#" class="card-title hover:underline">
                      Change your look and your attitude
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                  <img src="./assets/images/recommended-6.jpg" width="300" height="360" loading="lazy"
                    alt="The difference is quality " class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h5">
                    <a href="#" class="card-title hover:underline">
                      The difference is quality
                    </a>
                  </h3>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter">

        <h2 class="h2 section-title">
          Subscribe to <strong class="strong">new posts</strong>
        </h2>

        <form action="" class="newsletter-form">
          <input type="email" name="email_address" placeholder="Your email address" required class="email-field">

          <button type="submit" class="btn">Subscribe</button>
        </form>

      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

 
        

          

        

      </div>

      <div class="section footer-bottom">

        <p class="copyright" style="text-align: center;">
          &copy; DESKANO-Blog 2024. Published by <a href="#" class="copyright-link" style="text-decoration: underline;">DESKANO</a>.
      </p>
      
      </div>

    </div>
  </footer>






  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>