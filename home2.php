<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Grocery Web App</title>
<link rel="stylesheet" href="css/stylesheet.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <nav class="navbar navbar-dark bg-black text-white fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Maligai (Grocery)</a>
            <div class="d-flex">
                
                <?php
                session_start();
                $conn = new mysqli('localhost', 'root', '', 'grocery_data');
                $result = $_SESSION['username'];
                ?>
                <button type="button" class="btn btn-success btn-lg ms-3">
                    <p>Welcome, <?php echo $result; ?></p>
                </button>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Grocery</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                        
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="store.php">Store</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Cart</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact us</a>
                        </li>
                    </ul>
                </div>

                <a class="btn btn-success btn-lg" href="home.html" role="button" onclick="logoutmsg()">Log out</a>
            </div>
    </nav>

    <!-- This is just below to navigation bar  -->

    <div class="background">
        <div class="text-center">
            <p class="text-xl-start"><b>From farm to your table</b></p>
            <p class="text-md-start">
                <i>
                    From the fresh produce of local farms to the meals on your dinner table,<br>shop for all your
                    grocery
                    needs
                    at our convenient online store.<br>Get quality groceries delivered right to you in no time!
                </i>
            </p>
        </div>
    </div>
    <!-- <hr> -->
    <!-- Here it is completed  -->


    <!-- From here card are implemented
      -->
      <class class="card-group">
        <div class="card">
            <img src="css/elements/f.jpg" class="card-img-top" alt="...">
            <div class="p-3 mb-2 bg-black text-white">
                <div class="card-body">
                    <h5 class="card-title">Choose what you want</h5>
                    <p class="card-text">Select the items from your <br>favorite and near to your addressgrocery
                        store.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="css/elements/g.jpg" class="card-img-top" alt="...">
            <div class="p-3 mb-2 bg-black text-white">
                <div class="card-body">
                    <h5 class="card-title">See real-time updates</h5>
                    <p class="card-text">Personal shoppers pick items with care. Chat as they shop and manage your
                        order.
                    </p>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="css/elements/h.jpg" class="card-img-top" alt="...">
            <div class="p-3 mb-2 bg-black text-white">
                <div class="card-body">

                    <h5 class="card-title">Get your same-day</h5>
                    <p class="card-text">Pick a convenient time for you. Enjoy our 100% quality guarantee on every
                        order.
                    </p>
                </div>
            </div>
        </div>
    </class>
    </div>
    <!-- Here it is completed --->

    <!-- <hr> -->

 <!-- Start Shopping Button -->
 <div class="dark bg-black text-white">
 <div class="text-center">
      <button class="btn btn-lg text-white" style="background-color: #228b22;" ><a href="store.php" style="color: aliceblue;">Start Shopping</a></button>
    </div>  
 </div>
    <!-- From here carouse implemented
     -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="css/elements/d.jpg" class="d-block w-100" alt="Loading">
                <div class="carousel-caption d-none d-md-block">
                    <h5>store 1</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="css/elements/e.jpg" class="d-block w-100" alt="Loading">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Store 2</h5>
                    <p>Some representative placeholder content for the second slide.</p>
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

    <!-- <hr> -->


    <!-- Footer section -->
    <footer class="footer bg-black text-white text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Contact Information:</h4>
                    <p>Email: contact@example.com</p>
                    <p>Phone: #</p>
                    <h5><i>Created with 💖 byPostulate Intern team 2</i></h5>
                </div>
                <div class="col-md-6">
                    <h4>Follow Us</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>




    <script>
        function logoutmsg(){
            alert("You had successfully log out");
        }
    </script>
</body>

</html>


                        <!-- $sel = "SELECT * FROM signup ";
                        $query = mysqli_query($conn, $sel);
                        $result = mysqli_fetch_assoc($query); -->