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
    <link rel="stylesheet" href="/css/common.css">
</head>
<style>
    .box {
        border-top-color: #2eacc1 !important;
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
                <div class="d-flex">
                     <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3 " data-bs-toggle="modal"
                      data-bs-target="#loginModal">
                      <a class="nav-link active me-2" aria-current="page" href="/hotel_management/include/registration.php">Registration</a>
                    </button>
                </div>
            </div>
        </div>
    </nav>


    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>

                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i> User login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">Login</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forget
                                Password?</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal-dialog shadow">
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




</body>

</html>