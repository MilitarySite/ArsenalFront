<!DOCTYPE html>
<html lang="en" >
<head>
  <?php include 'head.php'?>

</head>
<body>
<!-- partial:index.partial.html -->
<nav class="fixed-nav-bar logo span scrolled ">
    <?php include 'navbar.php'?>
</nav>

<h2>Automatic Slideshow</h2>
<p>Change image every 2 seconds:</p>
<div class="slideshow-container rela-block deer-section">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="src/img/Head_Logo.jpg">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="src/img/Military_Army_Logo.jpg">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="src/img/Head_Logo.jpg">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div class="container rela-block second-section cover-before">
        <div class="box">
            <img src="path/to/your/image1.jpg" alt="Image 1">
            <p>Your text content goes here.</p>
        </div>

        <div class="box">
            <img src="path/to/your/image2.jpg" alt="Image 2">
            <p>Additional text goes here.</p>
        </div>

        <!-- Add more boxes as needed -->

    </div>
<div class="rela-block third-section cover-before">
    <p class="absolute-center-text">Look at that concept art!<br><br>Dope stuff!</p>
</div>
<div class="rela-block fourth-section">
    <p class="hover-pointer">Hover! --></p>
    <div class="rela-block color-square-container">
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
        <div class="color-changing-square"></div>
    </div>
    <div class="rela-block big-back-text-container">
        <h1 class="big-back-text">THIS IS BOLD TEXT</h1>
    </div>
</div>
<div class="rela-block footer">
    <div class="rela-block social-buttons-container">
        <div class="social-button facebook-button"></div>
        <div class="social-button insta-button"></div>
        <div class="social-button twitter-button"></div>
        <div class="social-button pinterest-button"></div>
    </div>
    <div class="rela-block footer-links-container">
        <div class="footer-flex-column">
            <ul> Projects
                <li>Chillwave</li>
                <li>Gluten-free</li>
                <li>Kitsch Cardigan</li>
            </ul>
        </div>
        <div class="footer-flex-column">
            <ul> About us
                <li>Fingerstache</li>
                <li>Lumbersexual</li>
                <li>Lo-Fi Aesthitic</li>
            </ul>
        </div>
        <div class="footer-flex-column">
            <ul> Community
                <li>Kale Chips</li>
                <li>Church Key</li>
                <li>Longboarding</li>
            </ul>
        </div>
        <div class="footer-flex-column">
            <ul> Connect
                <li>Pinterest</li>
                <li>Etsy</li>
                <li>Blog Swag</li>
            </ul>
        </div>
    </div>
</div>
<footer class="footer">
    <?php include 'footer.php' ?>
</footer>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<script>
        document.addEventListener("DOMContentLoaded", function () {
            window.addEventListener("scroll", function () {
                var boxes = document.querySelectorAll(".box");
                
                boxes.forEach(function (box) {
                    if (isElementInViewport(box)) {
                        box.style.animationPlayState = "running";
                    } else {
                        box.style.animationPlayState = "paused";
                    }
                });
            });

            function isElementInViewport(el) {
                var rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }
        });
    </script>
</body>
</html>