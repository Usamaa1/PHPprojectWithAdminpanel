<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Usama Portfolio</title>
    <link rel="stylesheet" href="style/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar">
      <div class="nav-logo">
        <span class="name"><a href="index.php">Usama <span class="clr">Riaz</span></a> </span>
        <span class="occupation"
          >/Graphic <span class="clr">Designer</span></span>
      </div>
      <button class="hamburger" id="hamburger">
        <i class="fas fa-bars"></i>
      </button>
          
      <div class="site-links" id="site-links">
        <span><a href="#mywork">My Work</a> </span>
        <span><a href="resume/functionalSample.pdf" target="blank">Resume</a></span>
        <span><a href="https://www.linkedin.com/in/usamariaz1997/" target="blank">LinkedIn</a></span>
      </div>
    </nav>

    <!-- Greeting Text -->
    <div class="main-content animated animatedFadeInUp fadeInUp">
      <div class="intro">
        <div class="greet">
          &#128075; Hello, I am <span class="clr">Usama!</span>
        </div>
        <div class="info">
          A Graphic Designer who creats elegant, innovative design solutions
          that excite consumers and grow iconic brands.
        </div>
      </div>
      <hr />

      <!-- Work Portfolio -->
      <div class="portfolio ">
        <div class="portfolio-heading" id="mywork">
          <h1>My Work</h1>
        </div>
        <div class="projects">
          <div class="first-proj project">
            <a href="project/Logos.php">

              <img src="img/Logos/Logos.png" alt="" srcset="" />

            <div class="proj-text">
              <div class="title">Logos</div>
              <div class="desc">
                Design Abstract, Mascot, Emblem, Lettermark, Wordmark, Pictorial
                and Combination Logos for businesses.
              </div>
            </div>
            </a>
            
          </div>
          <div class="second-proj project">
            <a href="project/Promotional.php">
              <img src="img/Promotions/promotional.jpg" alt="" srcset="" />

            <div class="proj-text">
              <div class="title">Promotional Stuff</div>
              <div class="desc">
                Design Business Cards, Posters, Movie Posters, Album Covers, Flyers, Brouchers and Pamphlet for advertisements.
              </div>
          </div>
            </a>
            
        </div>
          <div class="third-proj project">
            <a href="project/Ads.php">
              <img src="img/Ads/Ads.jpg" alt="" srcset="">
            <div class="proj-text">
              <div class="title">Ads Design</div>
              <div class="desc">
                Design Display Ads, Video Ads, Social media Ads and Outdoor Ads for Brand Promotions.
              </div>
          </div>
            </a>
            
          </div>
          <div class="fourth-proj project">
            <a href="project/Product.php">
              <img src="img/Products/Product.jpg" alt="" srcset="">

              <div class="proj-text">
                <div class="title">Product Design</div>
                <div class="desc">
                  Design Bottles, Soap, Perfumes, Medicines and many other products.
                </div>
            </div>
            </a>
           
          </div>

          <!-- Comming Soon Categories -->
          <!-- <div class="fifth-proj project">
            <div class="proj-text">
              <div class="title">Art Design</div>
              <div class="desc">
                Design NFT's, Cartoons, 3D Arts, Textures, Patterns and Backrounds.
              </div>
          </div>
          </div>
          <div class="sixth-proj project">
            <div class="proj-text">
              <div class="title">UI/UX Design</div>
              <div class="desc">
                Design Websites, Mobile Apps, Tablets, Watches User Interfaces.
              </div>
          </div>
          </div> -->
        </div>
      </div>

      <hr />

      <!-- footer -->
      <footer>
        <div class="footer-heading">
          <h1>Want a new Design? Lets Connect!</h1>
          <h3>
            I'd love to chat about new opportunities or anything design related!
          </h3>
        </div>

        <div class="social-icons">
          <a href="mailto:usamariz1997@gmail.com"><i class="fa-solid fa-envelope"></i></a>
          <a href="https://www.behance.net/usamariaz5" target="blank"><i class="fa-brands fa-behance-square"></i></a>
          <a href="https://twitter.com/usamariz1997" target="blank"><i class="fa-brands fa-twitter-square"></i></a>
        </div>
        <div class="footer-bottom">
          <div>Copyright © Usama Riaz 2022 | All Right Reserved</div>
        </div>
      </footer>
    </div>
  </body>



  <!-- Navbar Script -->
  <script>

    const hamburger = document.getElementById('hamburger');
    const siteLinks = document.getElementById('site-links');

    hamburger.addEventListener('click', ()=>{
      siteLinks.classList.toggle('show');
      siteLinks.classList.toggle('change');
    }
    
    );
  </script>

  
</html>
