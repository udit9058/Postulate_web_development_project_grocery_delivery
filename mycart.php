<!DOCTYPE html>
<html lang="en">

<head>
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
                <button type="button" class="btn btn-success btn-lg ms-3">
                    <a class="nav-link btn btn-success" href="mycart.html">
                        <i class="fas fa-shopping-cart"></i> My Cart
                    </a>
                </button>
                <?php
                session_start();
                $conn = new mysqli('localhost', 'root', '', 'grocery_data');
                $result = $_SESSION['username'];
                ?>
                <button type="button" class="btn btn-success btn-lg ms-3">
                    <p>Welcome,
                        <?php echo $result; ?>
                    </p>
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
                                <a class="nav-link active" aria-current="page" href="home2.php">Home</a>
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


    












    <script>
        $(document).ready(function () {
            $('#myTab a').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            });
        });
        function logoutmsg() {
            alert("You had successfully log out");
        }
    </script>

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
</body>

</html>