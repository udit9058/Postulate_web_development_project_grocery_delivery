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
    <!-- Here ths navigation starts -->

    <nav class="navbar navbar-dark bg-black text-white fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Maligai (Grocery)</a>
            <div class="d-flex">
                <button type="button" class="btn btn-success btn-lg ms-3">
                    <a class="nav-link btn btn-success" href="mycart.php">
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
            </div>
        </div>
    </nav>

    <hr>

    <div class="container mt-5">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Dairy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">Fruits</a>
            </li>
        </ul>

        <!-- Dairy -->
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="container mt-5">
                    <h1>Dairy </h1>
                    <div class="row">
                        <!-- Milk card -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <!-- <form action="store.php" method="post"> -->
                            <div class="card">
                                <img src="https://5.imimg.com/data5/VG/AQ/MY-9101930/amul-taaza-toned-milk-500x500.jpg"
                                    class="card-img-top" alt="Milk">
                                <div class="card-body">
                                    <h5 class="card-title">Milk</h5>
                                    <p class="card-text">1Litre - Price: ₹50</p>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="Quantity" min="1"
                                            value="1">
                                        <button class="btn btn-primary"
                                            onclick="addToCart('Milk', 50, this.previousElementSibling.value)">Add to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                            <!-- </form> -->
                        </div>

                        <!-- Curd card -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card">
                                <img src="https://m.media-amazon.com/images/I/51bDLPPcieL._AC_UF894,1000_QL80_.jpg"
                                    class="card-img-top" alt="Curd">
                                <div class="card-body">
                                    <h5 class="card-title">1Curd</h5>
                                    <p class="card-text">1Litre - Price: ₹40</p>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="Quantity" min="1"
                                            value="1">
                                        <button class="btn btn-primary"
                                            onclick="addToCart('Curd', 40, this.previousElementSibling.value)">Add to
                                            Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Paneer card -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card">
                                <img src="https://5.imimg.com/data5/XM/BG/MY-57539521/frozen-malai-paneer-500x500.jpeg"
                                    class="card-img-top" alt="Paneer">
                                <div class="card-body">
                                    <h5 class="card-title">Paneer</h5>
                                    <p class="card-text">100g - Price: ₹100</p>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="Quantity" min="1"
                                            value="1">
                                        <button class="btn btn-primary"
                                            onclick="addToCart('Paneer', 100, this.previousElementSibling.value)">Add to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cheese card -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card">
                                <img src="https://www.jiomart.com/images/product/original/490007992/amul-cheese-slices-100-g-pack-product-images-o490007992-p590087443-1-202205172212.jpg?im=Resize=(420,420)"
                                    class="card-img-top" alt="Cheese">
                                <div class="card-body">
                                    <h5 class="card-title">100g - Cheese</h5>
                                    <p class="card-text">Price: ₹80</p>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="Quantity" min="1"
                                            value="1">
                                        <button class="btn btn-primary"
                                            onclick="addToCart('Cheese', 80, this.previousElementSibling.value)">Add to
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- JavaScript for Bootstrap components -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
                    crossorigin="anonymous"></script>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <!-- Category-specific content for Fruits -->
            <div class="container mt-5">
                <h1>Fresh Fruits</h1>
                <div class="row">
                    <!-- Apple card -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <img src="https://st2.depositphotos.com/7036298/10694/i/950/depositphotos_106948346-stock-photo-ripe-red-apple-with-green.jpg"
                                class="card-img-top" alt="Apple">
                            <div class="card-body">
                                <h5 class="card-title">Apple</h5>
                                <p class="card-text">Price: ₹50 per kg</p>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" placeholder="Quantity" min="1" value="1">
                                    <button class="btn btn-primary"
                                        onclick="addToCart('Apple', 50, this.previousElementSibling.value)">Add to
                                        Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mango card -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbyxBlu_7uhe8CxqJpkaEsqElc7zmOPLZFhBkIA1F5FT4zbouH7Qorg3BG4ibJNfK11e8&usqp=CAU"
                                class="card-img-top" alt="Mango">
                            <div class="card-body">
                                <h5 class="card-title">Mango</h5>
                                <p class="card-text">Price: ₹60 per kg</p>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" placeholder="Quantity" min="1" value="1">
                                    <button class="btn btn-primary"
                                        onclick="addToCart('Mango', 60, this.previousElementSibling.value)">Add to
                                        Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Banana card -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <img src="https://i.pinimg.com/1200x/b8/39/3c/b8393ccd0f271772cc7d4796857637a9.jpg"
                                class="card-img-top" alt="Banana">
                            <div class="card-body">
                                <h5 class="card-title">Banana</h5>
                                <p class="card-text">Price: ₹30 per dozen</p>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" placeholder="Quantity" min="1" value="1">
                                    <button class="btn btn-primary"
                                        onclick="addToCart('Banana', 30, this.previousElementSibling.value)">Add to
                                        Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

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

    <!-- Script to handle the cart -->
    <script>
        function addToCart(product, price, quantity) {
            alert(`Added to cart you can check the items in My cart:\nProduct: ${product}\nPrice: ₹${price}\nQuantity: ${quantity}`);
            // Implement your cart logic here
            // AJAX request
            var xhr = new XMLHttpRequest();
            var url = "store_data.php";
            var params = "&product=" + encodeURIComponent(product) +
                "&price=" + encodeURIComponent(price) +
                "&quantity=" + encodeURIComponent(quantity);
            xhr.open("POST", url, true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Success response, do something if needed
                        console.log(xhr.responseText);
                    } else {
                        // Error handling
                        console.error("Error: " + xhr.status);
                    }
                }
            };

            xhr.send(params);
        }

    </script>


    <!-- for tabs and login this script is used  -->
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
    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>


<?php
// After processing and validating the cart data
$_SESSION['username'] = $result;
?>