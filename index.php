<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./css/common.css">

</head>
<style>
 
</style>

<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold me-5 fw-bold fs-3 " href="index.php">SHREE HOTEL</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="include/rooms1.php">Room</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="include/facilities.php">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="include/contact.php">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="include/about.php">About</a>
          </li>
        </ul>
      <?php
        session_start(); // Start the session to access session variables

       // Check if the user is logged in
        if(isset($_SESSION['id'])) {
        // User is logged in, show the logout button
        echo '
        <form action="/hotel_management/core/logout.php" method="POST">
          <button type="submit" class="btn btn-outline-dark shadow-none">Logout</button>
        </form>';
        } else {
        // User is not logged in, show the login and register buttons
        echo '
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>';
        }
      ?>
      </div>
    </div>
  </nav>


  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="/hotel_management/core/login_process.php" method="POST">

          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 me-2"></i> User login
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" name="email" class="form-control shadow-none">
            </div>
            <div class="mb-4">
              <label class="form-label">Password</label>
              <input type="password" name="user_password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" class="btn btn-dark shadow-none">Login</button>
              <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forget Password?</a>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="/hotel_management/core/register.php" method="POST">

          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-lines-fill fs-3 me-2"></i>
              User Registration
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
              Note:your details must match with your ID(Aadhar card,Passpord,Driving licence etc.)that will be required
              during check-in.
            </span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="name" name="name" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" name="email" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" name="phone_number" class="form-control shadow-none">

                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Picture</label>
                  <input type="file" name="picture" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Pincode</label>
                  <input type="number" name="pincode" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Date of birth</label>
                  <input type="date" name="date_of_birth" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" name="user_password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Conform Password</label>
                  <input type="password" name="user_confirm_password" class="form-control shadow-none">
                </div>
                <div class="col-md-12 p-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none" name="address" rows="1"></textarea>
                </div>

              </div>
            </div>
          </div>
          <div class="text-center my-1">
            <button type="submit" class="btn btn-dark shadow-none">Register</button>
          </div>

      </div>
      </form>
    </div>
  </div>
  <!--carousel-->

  <div class=" container-fluid px-lg-4 mt-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images\carousel\1.png " class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images\carousel\2.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images\carousel\3.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images\carousel\4.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images\carousel\5.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images\carousel\6.png" class="w-100 d-block" />
        </div>
      </div>

    </div>

  <!--Check Availability-->

  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded ">
        <h5 class=" mb-12">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-Out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class=" col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Adult</label>
              <select class="form-select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="3">4</option>
                <option value="3">5</option>
                <option value="3">6</option>
              </select>
            </div>
            <div class=" col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500;">Childer</label>
              <select class="form-select shadow-none">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="3">4</option>
                <option value="3">5</option>
                <option value="3">6</option>
                <option value="3">7</option>
                <option value="3">8</option>
                <option value="3">9</option>
              </select>
            </div>

            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--Oue Rooms-->

  <h2 class=" mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR ROOMS</h2>
  <div class="container">
    <div class="row">
      <div class=" col-lg-4 col-md-6 my-3">

        <div class="card border-0 shadow" style="max-width: 3500x; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">

          <div class="card-body">
            <h5>simple room Name</h5>
            <h6 class="mb-4">₹200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <div class="modal-body">
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 sofa
                </span>
              </div>
              <div class="Facilities mb-4">
                <h6 class="mb-1"> Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  TV
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Room Heater
                </span>
              </div>
              <div class="Guests mb-4">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  9 Childer
                </span>
              
              </div>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <?php
                // Check if the user is logged in
                if(isset($_SESSION['id'])) {
                // User is logged in, provide link to book.php
                echo '<a href="/hotel_management/include/book.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>';
                } else {
                // User is not logged in, provide link to login page
                echo '<a href="/hotel_management/include/registration.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now </a>';
                }
              ?>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details </a>
            </div>
          </div>
        </div>
      </div>
      <div class=" col-lg-4 col-md-6 my-3">

        <div class="card border-0 shadow" style="max-width: 3500x; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">

          <div class="card-body">
            <h5>simple room Name</h5>
            <h6 class="mb-4">₹200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <div class="modal-body">
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 sofa
                </span>
              </div>
              <div class="Facilities mb-4">
                <h6 class="mb-1"> Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  TV
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Room Heater
                </span>
              </div>
              <div class="Guests mb-4">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  9 Childer
                </span>
              
              </div>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <?php
                // Check if the user is logged in
                if(isset($_SESSION['id'])) {
                // User is logged in, provide link to book.php
                echo '<a href="/hotel_management/include/book.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>';
                } else {
                // User is not logged in, provide link to login page
                echo '<a href="/hotel_management/include/registration.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now </a>';
                }
              ?>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details </a>
            </div>
          </div>
        </div>
      </div>
      <div class=" col-lg-4 col-md-6 my-3">

        <div class="card border-0 shadow" style="max-width: 3500x; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">

          <div class="card-body">
            <h5>simple room Name</h5>
            <h6 class="mb-4">₹200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <div class="modal-body">
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 sofa
                </span>
              </div>
              <div class="Facilities mb-4">
                <h6 class="mb-1"> Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  TV
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Room Heater
                </span>
              </div>
              <div class="Guests mb-4">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  9 Childer
                </span>
              
              </div>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <?php
                // Check if the user is logged in
                if(isset($_SESSION['id'])) {
                // User is logged in, provide link to book.php
                echo '<a href="/hotel_management/include/book.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>';
                } else {
                // User is not logged in, provide link to login page
                echo '<a href="/hotel_management/include/registration.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now </a>';
                }
              ?>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="include/more.php" class="btn btn-sm btn-outline-dark  rounded-0 fw-bold shadow-none align-items-center">More Rooms>>></a>
      </div>
    </div>


    <!--Our FACILITIES-->

    <h2 class=" mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR FACILITIES</h2>

    <div class=" container">
      <div class=" row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/1.svg" width="80px">
          <h5 class="mt-3">Geyser</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/4.svg" width="80px">
          <h5 class="mt-3">Spa</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/3.svg" width="80px">
          <h5 class="mt-3">wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/2.svg" width="80px">
          <h5 class="mt-3">TV</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/5.svg" width="80px">
          <h5 class="mt-3">AC</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="include/facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
        </div>
      </div>
    </div>

    <!--Testimonials -->

    <h2 class=" mt-5 pt-4 mb-4 text-center fw-bold h-font"> TESTIMONIALS</h2>
    <div class="container mt-5">

      <div class="swiper-testimonials">
        <div class="swiper-wrapper mb-5">

          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/about/shahrukh-khan.jpg" width="30px">
              <h6 class="m-0 ms-2">Random user1</h6>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Ipsam deleniti perferendis facere sint laboriosam quaerat harum.
              Ullam, tenetur nihil? Quidem!
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>

          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/about/shahrukh-khan.jpg" width="30px">
              <h6 class="m-0 ms-2">Random user1</h6>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Ipsam deleniti perferendis facere sint laboriosam quaerat harum.
              Ullam, tenetur nihil? Quidem!
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>

          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/about/shahrukh-khan.jpg" width="30px">
              <h6 class="m-0 ms-2">Random user1</h6>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Ipsam deleniti perferendis facere sint laboriosam quaerat harum.
              Ullam, tenetur nihil? Quidem!
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More>>></a>
      </div>
    </div>


    <!--Reach Us -->

    <h2 class=" mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8  p-4 mb-lg-0 mb-3 bg-white rounded">
          <iframe class="w-100 rounded" height="320"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59261.74775222345!2d75.61303389999999!3d21.82436905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd885c4bd93b163%3A0xae95ec27b40bf31d!2sKhargone%2C%20Madhya%20Pradesh%20451001!5e0!3m2!1sen!2sin!4v1711275114418!5m2!1sen!2sin"
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="class col-lg-4 col-md-4">
          <div class="bg-white p-4 rounded mb-4">
            <h5>Call Us</h5>
            <a href="tel: +919131872159" class="d-inline-block mb-2 text-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i>
              +919131872159
            </a>
            <br>
            <a href="tel: +919131872159" class="d-inline-block  text-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i>
              +919131872159
            </a>

          </div>
          <div class="bg-white p-4 rounded mb-4">
            <h5>Follow Us</h5>
            <a href="#" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-twitter me-1"></i>Twitter
              </span>
            </a>
            <br>
            <a href="#" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-facebook me-1"></i>Facebook
              </span>
            </a>
            <br>
            <a href="#" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-instagram me-1"></i>Instagram
              </span>
            </a>

          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-white mt-5 ">
      <div class="row">
        <div class="col-lg-4 p-4">
          <h3 class="h-font fw-bold fs-3 mb-2">SHREE HOTEL</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Harum voluptatum modi minus voluptas earum odio accusantium,
            aliquid nobis quia delectus?
          </p>
        </div>
        <div class="col-lg-4 p-4">
          <h5 class="mb-3">Link</h5>
          <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
          <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
          <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
          <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact</a><br>
          <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
        </div>
        <div class="col-lg-4 p-4">
          <h5 class="mb-3">Follow Us</h5>
          <a href="#" class="d-inline-block text-dark  text-decoration-none mb-2">
            <i class="bi bi-twitter me-1"></i>Twitter
          </a><br>
          <a href="#" class="d-inline-block text-dark  text-decoration-none mb-2">
            <i class="bi bi-facebook me-1"></i>Facebook
          </a><br>
          <a href="#" class="d-inline-block text-dark  text-decoration-none mb-2">
            <i class="bi bi-instagram me-1"></i>Instagram
          </a><br>
        </div>
      </div>
    </div>

    <h6 class="text-center bg-dark text-white p-3 m-0 ">Designed by Sawan Yadav</h6>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        }

      });
    </script>

    <script>
      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
          },
          640: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },

        }

      });
    </script>

</body>

</html>