<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Art</title>
    <link rel="stylesheet" href="../style/project.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Database Connection -->
    <?php
    $con = mysqli_connect('localhost', 'id18789108_root', 'Usama29may1997!', 'id18789108_portfolio');
    ?>

  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar">
      <div class="nav-logo">
        <span class="name"><a href="../index.php">Usama <span class="clr">Riaz</span></a> </span>
        <span class="occupation"
          >/Graphic <span class="clr">Designer</span></span>
      </div>
      <button class="hamburger" id="hamburger">
        <i class="fas fa-bars"></i>
      </button>
          
      <div class="site-links" id="site-links">
        <span><a href="../index.php#mywork" target="blank">My Work</a> </span>
        <span><a href="../resume/functionalSample.pdf" target="blank">Resume</a></span>
        <span><a href="https://www.linkedin.com/in/usamariaz1997/" target="blank">LinkedIn</a></span>
      </div>
    </nav>


    <!-- Main Container -->
    <div class="main-container animated animatedFadeInUp fadeInUp">
      <div class="hd">
        <h1>Art</h1>
      </div>
      <!-- Works -->
      <div class="works">
        

        <?php
                    $get_works = "select * from arts order by rand() LIMIT 0,50";
                    $run_works = mysqli_query($con, $get_works);

                    while ($row_works = mysqli_fetch_array($run_works)) {
                        $id = $row_works['id'];
                        $title = $row_works['title'];
                        $desc = $row_works['description'];
                        $img = $row_works['img'];
                        




                        echo "
                        <div class= 'work'>
          <img src='../adminpanel/db_images/arts/$img' >
          <div class='title'>$title</div>
          <div class='description'>$desc</div>


        </div>
        ";
                    }?>
        
        <img src="../adminpanel/db_images/arts/" alt="">
       
      </div>
    </div>
                 <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
    <hr>

<!-- Footer section -->
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
  </body>

  <!-- Navbar Script -->
  <script>

    // for hamburger menu

    const hamburger = document.getElementById('hamburger');
    const siteLinks = document.getElementById('site-links');

    hamburger.addEventListener('click', ()=>{
      siteLinks.classList.toggle('show');
      siteLinks.classList.toggle('change');
    }
    
    );

    // for image popup

document.querySelectorAll('.work img').forEach(image => {
  image.onclick = () => {
  document.querySelector('.modal').style.display = 'block';
  document.querySelector('.modal img').src = image.getAttribute('src');

  }
});
document.querySelector('.modal span').onclick = () => {
  document.querySelector('.modal').style.display = 'none';

};

  </script>
</html>
