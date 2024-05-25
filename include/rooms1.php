<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/common.css">

</head>
<style>
    .pop:hover {
        border-top-color: #2eacc1 !important;
        transform: scale(1.03);
        transition: all 0.3s;
    }
</style>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold me-5 fw-bold fs-3 " href="../index.php">SHREE HOTEL</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="../include/rooms1.php">Room</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="../include/facilities.php">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="../include/contact.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../include/about.php">About</a>
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
                  <input type="file" class="form-control shadow-none">
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
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>

    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-12 mb-lg-0 mb-4 ">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filters</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterdropdown" aria-controls="#filterdropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-lg-column align-items-stretch mt-3"
                            id="filterdropdown">

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font: size 18px;">CHECK Availability</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font: size 18px;">FECILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Fecility one</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Fecility two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Fecility three</label>
                                </div>
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font: size 18px;">GUESTS</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-check-label" for="f1">Adults</label>
                                        <input type="number" class="form-control shadow-none">

                                    </div>
                                    <div>
                                        <label class="form-check-label" for="f1">Childers</label>
                                        <input type="number" class="form-control shadow-none">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">

                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0  p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
                            <img src="../images/rooms/1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-0">

                            <h5 class="mb-1">simple room Name</h5>
                            <div class="features mb-3">
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
                            <div class="Facilities mb-3">
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
                            <div class="Guests mb-3">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    9 Childer
                                </span>

                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₹200 per night</h6>
                            <a href="../include/book.php" class="btn btn-sm w-100 custom-bg shadow-none mb-2">Book Now
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-dark w-100 shadow-none">More details </a>
                        </div>
                    </div>
                </div>
                
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0  p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
                            <img src="../images/rooms/1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-0">

                            <h5 class="mb-1">simple room Name</h5>
                            <div class="features mb-3">
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
                            <div class="Facilities mb-3">
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
                            <div class="Guests mb-3">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    9 Childer
                                </span>

                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₹200 per night</h6>
                            <a href="../include/book.php" class="btn btn-sm w-100 custom-bg shadow-none mb-2">Book Now
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-dark w-100 shadow-none">More details </a>
                        </div>
                    </div>
                </div>
                
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0  p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
                            <img src="../images/rooms/1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-0">

                            <h5 class="mb-1">simple room Name</h5>
                            <div class="features mb-3">
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
                            <div class="Facilities mb-3">
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
                            <div class="Guests mb-3">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    9 Childer
                                </span>

                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₹200 per night</h6>
                            <a href="../include/book.php" class="btn btn-sm w-100 custom-bg shadow-none mb-2">Book Now
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-dark w-100 shadow-none">More details </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white mt-5">
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

    <h6 class="text-center bg-dark text-white p-3 m-0">Designed by Sawan Yadav</h6>
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