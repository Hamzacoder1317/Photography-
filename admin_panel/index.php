<?php

require ("shared/config.php");

;

$service_sel = "SELECT * FROM `service`";
$service_disp = mysqli_query($conn , $service_sel);




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

  <!--=============== SWIPER CSS ===============-->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="assets/css/styles.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
  <div class="progress-container">
    <div class="progress-bar" id="progressBar"></div>
  </div>

  <nav class="navbar navbar-expand-lg fixed-top   navbar1" id="Navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#Home"><img src="assets/img/logo.png" class="navlogo" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">☰</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light" id="anav" href="#Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light " id="anav" href="#Skills">Album</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" id="anav" href="#team">Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" id="anav" href="#Contact">Contact <span class="celesh">/</span>About us</a>
          </li>
      </div>
      </ul>
    </div>
  </nav>

  <div class="container-fluid  overflow-hidden  bg">
    <!-- <div class="social">
      <ul>
        <li><a href=""><img src="assets/img/face.png" alt=""></a></li>
        <li><a href=""><img src="assets/img/inta.png" alt=""></a></li>
        <li><a href=""><img src="assets/img/twi.png" alt=""></a></li>
      </ul>
    </div> -->
    <div class="row " id="Home">
      <div class="col d-flex mt-auto  mb-auto align-items-center " id="text" style="z-index: 3;">
        <div class=" lh-1 text-cont ">
          <p class="fs-5">Hello , my name is
          <p>
          <p class="name10">Muhammad Javed
          <p>

          <p class="fs-3">And I'm a <span class="lin3"></span></p>
          <button type="button" class="btn1 me-2">Hire Me</button>
          <button type="button" class="btn2">Packages</button>
        </div>
      </div>
      <div class="col  " id="pic" style="z-index: 3;">
        <img src="assets/img/javed.png" class="img-fluid1 " style="margin-top: -5rem; ">


      </div>
    </div>
  </div>


  <section class="container-fluid">
    <div class="text d-flex  justify-content-center mt-5  align-items-center">
      <div class="mt-2 lh-1">
        <h2>Album</h2>
        <p class="line text-center fw-bold">Visual Diary</p>
      </div>
    </div>
    <div class="row">
      <div class="col-6  ">
        <div class="row album ">
          <div class="col-5 pe-2"><img
              src="https://images.unsplash.com/photo-1557678493-c54624d611fc?auto=format&fit=crop&q=80&w=1887&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              class="img-fluid shado"></div>
          <div class="col-7 album-img2"> <img
              src="https://images.unsplash.com/photo-1594028235803-abe34abeb671?auto=format&fit=crop&q=80&w=1702&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              class="img-fluid shado"></div>
        </div>
        <div class="row mt-2  ">
          <div class="col-6 pe-2"> <img
              src="https://images.unsplash.com/photo-1611121589696-10e27f469f48?auto=format&fit=crop&q=80&w=1740&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              class="img-fluid shado"></div>
          <div class="col-6"><img
              src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?auto=format&fit=crop&q=80&w=1680&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              class="img-fluid shado" alt=""></div>
        </div>




      </div>
      <div class="col-6 d-flex align-items-center  p-5 ">
        <div>
          <h3 class="fw-bold  fs-4">Capturing Life's Moments in Visual Stories <span class="line1"></span> </h3>
          <p class="pt-3 pb-3 fs-5" style="text-align: justify;">

            Create lasting memories with our beautifully curated photo albums. Explore our diverse selection, perfect
            for
            preserving your most cherished moments. From elegant designs to personalized options, our photo albums are
            the
            ideal showcase for your treasured photos. Discover the perfect album to relive your special occasions.
          </p>
          <a href="" class="btn1" id="Service"> Album</a>
        </div>
      </div>

    </div>



  </section>

  <section class="container-fluid black mt-5 pb-5">

    <div class="text d-flex  justify-content-center pt-5 align-items-center">
      <div class="mt-2 lh-1">
        <h2 class="text-light">My Service</h2>
        <p class="lin4 text-center fw-bold">What i Provide</p>
      </div>
    </div>


    <div class="parent ">


      <?php  
      while($data = mysqli_fetch_assoc($service_disp)){
      ?>



      <div class="card__data">
        <span class="material-symbols-outlined fs-1">
          camera
        </span>
        <h3 class="card__name">
          <?PHP  echo $data['service_title'] ;?>
        </h3>
        <p class="card__description">
          <?PHP  echo $data['service_desc']; ?>
        </p>


      </div>

      <?PHP
     }?>


      <div class="card__data">
        <form action="">
          <span class="material-symbols-outlined fs-1">
            camera
          </span>
          <h3 class="card__name">
            <input type="text" name="" class="service-title form-control" placeholder="Service-title" id="">
          </h3>
          <p class="card__description">
            <textarea type="text" name="" class="service-desc form-control" placeholder="Service-desc"></textarea>
          </p>
          <button type="submit" class="btn btn-dark">Submit</button>
        </form>
      </div>
    </div>







  </section>



  <section class="container-fluid">
    <div class="text d-flex justify-content-center mt-5 align-items-center">
      <div class="mt-2 lh-1">
        <h2>Camera Equipment</h2>
        <p class="line-camer text-center fw-bold">Upgrade Your Album</p>
      </div>
    </div>
    <div class="row">
      <div class="col-6 d-flex align-items-center p-5">
        <div>
          <h3 class="fw-bold fs-4">Explore Memorable Photography <span class="line1 line2"></span></h3>
          <p class="pt-3 pb-3 fs-5" style="text-align: justify;">
            Experience the art of photography with our range of high-quality equipment. Our carefully curated selection
            of cameras, lenses, and accessories is designed to enhance your photography journey. Whether you're a
            professional photographer or just passionate about capturing moments, we have the perfect tools to help you
            create stunning images and memorable stories
          </p>

        </div>
      </div>
      <div class="col-6">
        <div class="row album album-img2">
          <div class="col-5 pe-2"><img
              src="https://images.pexels.com/photos/7789214/pexels-photo-7789214.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              class="img-fluid"></div>
          <div class="col-7 "><img
              src="https://images.unsplash.com/photo-1499343245400-cddc78a01317?auto=format&fit=crop&q=80&w=1740&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              class="img-fluid"></div>
        </div>
        <div class="row mt-2">
          <div class="col-6 pe-2"><img
              src="https://images.unsplash.com/photo-1588200618450-3a5b1d3b9aa5?auto=format&fit=crop&q=80&w=1740&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              class="img-fluid"></div>
          <div class="col-6"><img
              src="https://images.pexels.com/photos/3568520/pexels-photo-3568520.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              class="img-fluid" alt=""></div>
        </div>
      </div>
    </div>
  </section>


  <section class="container-fluid text-light black">
    <div class="text d-flex  justify-content-center mt-4 pt-5 align-items-center">
      <div class="mt-2 lh-1">
        <h2>My TEAMS</h2>
        <p class="lin5 text-center fw-bold">Who With Me</p>
      </div>
    </div>
    <div class="row mt-5">
      <div class="parent ">
        <div class="Service">
          <div class="content">
            <div class="round">
              <img src="assets/img/avatar-1.png" class="img-fluid" alt="">
            </div>
            <h3 class="text-center text-light pt-2">Hamza Siddiqui</h3>
            <p class="text-center fs-6 text-light" style="text-align: justify;">
              Elevate your online presence with our captivating and responsive web.</p>
          </div>
        </div>
        <div class="Service">
          <div class="content">
            <div class="round">
              <img src="assets/img/avatar-2.png" class="img-fluid" alt="">
            </div>
            <h3 class="text-center text-light pt-2">Kashan</h3>
            <p class="text-center fs-6 text-light" style="text-align: justify;">Elevate your online presence with my
              expert web development services,</p>
          </div>
        </div>
        <div class="Service">
          <div class="content">
            <div class="round">
              <img src="assets/img/avatar-3.png" class="img-fluid" alt="">
            </div>
            <h3 class="text-center text-light pt-2">Abubaker Siddiqui</h3>
            <p class="text-center fs-6 text-light" style="text-align: justify;">Creating engaging app designs that
              balance beauty </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="container">
    <div class="text d-flex  justify-content-center mt-5  align-items-center">
      <div class="mt-2 lh-1">
        <h2>OFFER</h2>
        <p class="offer-line text-center fw-bold">What I Offered</p>
      </div>
    </div>
    <div class="row back">
      <div class="col-lg-6 col-md-12 col-sm-12 col-12 p-5 text-light">
        <div class="offer-content">
          <h1 class="text-uppercase fw-bolder">SUNDAY SPECIAL</h1>
          <p class="fs-4 fw-bold  pt-4">We're excited to offer you an exclusive Sunday special, where you can save up to
            40% on our professional photography services.</p>
          <a href="" class="btn1" id="Service"> Click </a>
          <p class="text-muted mt-5 limited-offer-text">📷 Limited Time Offer</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-12 offer">
        <div class="offer-content">
          <span class="offer_upto">Upto</span>
          <span class="offer_50">50</span>
          <span class="offer_uff">%OFF</span>
          <p class="text-center fw-bold text-danger">Don't miss this opportunity to<br>save on capturing your
            unforgettable moments.</p>

        </div>
      </div>
    </div>




  </section>
  <section class="container-fluid black  mt-5 pb-5">

    <div class="text d-flex  justify-content-center pt-5 align-items-center">
      <div class="mt-2 lh-1">
        <h2 class="text-light">Testimonials</h2>
        <p class="lin6 text-center fw-bold"> Reviews</p>
      </div>
    </div>


    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="caousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-block half-color w-50"></div>

          <div class="carousel-caption  rew-box ">
            <div class="">
              <div class="rev-round black">
                <img src="assets/img/avatar-1.png" class="img-fluid" alt="">
              </div>
              <div class="rev-body ">
                <h4>Ahsan Siddiqui</h4>
                <p> <span class="text-dark fw-bolder">"</span>The photographer's work is truly exceptional, capturing
                  moments with remarkable skill and creativity<span class="text-danger fw-bolder fs-2">"</span></p>
                <span>⭐⭐⭐⭐⭐</span>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-block half-color w-50"></div>

          <div class="carousel-caption  rew-box ">
            <div class="">
              <div class="rev-round black">
                <img src="assets/img/avatar-2.png" class="img-fluid" alt="">
              </div>
              <div class="rev-body ">
                <h4>Hamza Siddiqui</h4>
                <p>
                  <span class="text-dark fw-bolder">"</span>The photographer's eye for detail and composition shines
                  through in their work, producing stunning images that leave a lasting impression<span
                    class="text-danger fw-bolder fs-2">"</span>
                </p>
                <span>⭐⭐⭐⭐⭐</span>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-block half-color  w-50"></div>

          <div class="carousel-caption  rew-box ">
            <div class="">
              <div class="rev-round black">
                <img src="assets/img/avatar-3.png" class="img-fluid" alt="">
              </div>
              <div class="rev-body ">
                <h4>Abubaker Siddiqui</h4>
                <p><span class="text-dark fw-bolder">"</span>Their photography skills are top-notch, consistently
                  delivering beautiful and memorable shots that exceed expectations <span
                    class="text-danger fw-bolder fs-2">"</span></p>
                <span>⭐⭐⭐⭐⭐</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


  </section>












  <footer class="bgdark text-center text-light text-lg-start">

    <div class="container h-100 p-4">
      <!--Grid row-->
      <div class="row mt-3 my-">
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0  pe-5">
          <h5 class="text-uppercase text-center"> <a href="index.html"><img src="assets/img/logo.png" width="160px"
                height="auto"></a>
            <div class="underline1"><span></span></div>
          </h5>
          <p class="fs-6 pt-4">Create lasting memories with our beautifully curated photo albums. Explore
            our diverse selection, perfect for preserving your most cherished moments.</p>

        </div>
        <!--Grid column-->



        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 text-center mb-md-0">
          <div class="d-lg-flex justify-content-center">
            <i class="bi bi-link-45deg fs-5"></i>
            <h5 class="text-uppercase ">Links <div class="underline12"><span></span></div>
            </h5>
          </div>


          <ul class="list-unstyled lh-lg my-lg-3  fooedit">
            <li class="my-lg-2">
              <a href="index.html"><span class="lispan">Home</span></a>
            </li>
            <li class="my-lg-2">
              <a href="tool.html"><span class="lispan">Album</span></a>
            </li>
            <li class="my-lg-2">
              <a href="feature.html"><span class="lispan">Packages</span></a>
            </li>
            <li class="my-lg-2">
              <a href="contact.html"><span class="lispan">Contact</span></a>
            </li>

          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <div class="d-lg-flex justify-content-center">
            <h5 class="text-uppercase">Newsletter <div class="underline12"><span></span></div>
            </h5>
          </div>
          <form class="news">
            <i class="bi bi-envelope"></i>
            <input type="email" placeholder="Enter Your Email " required>
            <button type="submit"> <i class="bi bi-arrow-right-short"></i></button>


          </form>
          <div class="social-icon">
            <i class="bi bi-facebook"></i>
            <i class="bi bi-pinterest"></i>
            <i class="bi bi-github"></i>
            <i class="bi bi-telegram"></i>


          </div>


        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 Copyright-All Rights Reserved |
      <a class="theam" href="#">Made By Hamza Siddiqui</a>
    </div>
    <!-- Copyright -->
  </footer>





  <script src="assets/js/swiper-bundle.min.js"></script>

  <!--=============== MAIN JS ===============-->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12">


  </script>
  <script>
    var typingEffect = new Typed(".lin3", {
      strings: ["Portrait Photographer!", "Wedding Photographer!", "Landscape Photographer!", "Event Photographer!", "Street Photographer!"],
      loop: true,
      typeSpeed: 100,
      backSpeed: 80,
      backDelay: 1500

    });
    var typing = new Typed(".line1", {
      strings: [" Stunning Imagery!", " Visual Narratives!", "Timeless Frames!",],
      loop: true,
      typeSpeed: 100,
      backSpeed: 80,
      backDelay: 1500

    });
    var typing = new Typed(".line2", {
      strings: [" Moments Captured!", " Services!", " Your Moments!",],
      loop: true,
      typeSpeed: 100,
      backSpeed: 80,
      backDelay: 1500

    });

    const navbar = document.querySelector(".navbar1");

    window.addEventListener("scroll", () => {
      if (window.scrollY > 100) { // Adjust the scroll position as needed
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    });

    function updateProgressBar() {
      const progressBar = document.getElementById('progressBar');
      const scrollPercentage = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
      progressBar.style.width = scrollPercentage + '%';
    }

    window.addEventListener('scroll', updateProgressBar);

    const showButton = document.getElementById('showButton');

    window.addEventListener('scroll', () => {
      const scrollPercentage = (document.documentElement.scrollTop / (document.documentElement.scrollHeight - document.documentElement.clientHeight)) * 100;

      if (scrollPercentage >= 40 && scrollPercentage <= 100) {
        showButton.style.display = 'block';
      } else {
        showButton.style.display = 'none';
      }
    });





    document.addEventListener('DOMContentLoaded', function () {
      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function () {
      $('.sidenav').sidenav();
    });

  </script>

</body>

</body>

</html>