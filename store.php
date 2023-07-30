<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Store</title>
  <link rel="stylesheet" href="css/stylesheet.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script> 

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
            <a class="navbar-brand" href="#">Maligai (Grocery)</a>
                <button type="button" class="btn btn-outline-light">
            <?php
                        $conn = new mysqli('localhost','root','','grocery_data');
                        $sel = "SELECT * FROM signup";
                        $query = mysqli_query($conn, $sel);
                        $result = mysqli_fetch_assoc($query);
                        ?>
                        <p>Welcome , <?php echo $result['username']; ?> </p>
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
                            <a class="nav-link active" aria-current="page" href="http://localhost:8080/Grocery_app/home2.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost:8080/grocery_app/store.php">Store</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact us</a>
                        </li>
                    </ul>
                </div>

                <a class="btn btn-success btn-lg" href="home.html" role="button">Log out</a>
            </div>
</nav>
    
  <div class="container mt-5">
    <h1>Store near by you</h1>

    <!-- Form to enter shop name -->
    <form id="shopForm" class="mt-4">
      <div class="form-group">
        <label for="shopName">Maligaikkadai</label>
        <input type="text" class="form-control" id="shopName" value="maligaiakadai" readonly>
      </div>
    </form>

    <div class="row mt-4">
      <div class="col-md-6">
        <h2>Items Available:</h2>
        <!-- First Item - Potato -->
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Potato</h5>
            <p class="card-text">Price: Rs. 20 per kg</p>
            <div class="form-group">
              <label for="itemQuantityPotato">Quantity:</label>
              <input type="number" class="form-control" id="itemQuantityPotato" required>
            </div>
            <button class="btn btn-primary" onclick="addToCart('Potato', 20, document.getElementById('itemQuantityPotato').value)">Add to Cart</button>
          </div>
        </div>
        <!-- Second Item - Another Item -->
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Another Item</h5>
            <p class="card-text">Price: Rs. 30 per item</p>
            <div class="form-group">
              <label for="itemQuantityAnother">Quantity:</label>
              <input type="number" class="form-control" id="itemQuantityAnother" required>
            </div>
            <button class="btn btn-primary" onclick="addToCart('Another Item', 30, document.getElementById('itemQuantityAnother').value)">Add to Cart</button>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <h2>Your Cart:</h2>
        <ul id="cart" class="list-group">
          <!-- Cart items will be displayed here -->
        </ul>
        <div class="mt-3">
          <button class="btn btn-success" onclick="calculateTotal()">Calculate Total</button>
          <h3>Total Amount: <span id="totalAmount">0.00</span></h3>
          <!-- Button to send data to the server -->
          <button class="btn btn-primary" onclick="sendCartDataToServer()">Send Cart Data to Server</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Add Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Script to handle cart functionality -->
  <script>
    const cart = [];

    function addToCart(item, price, quantity) {
        // Validate quantity is a positive number
  if (quantity <= 0) {
    alert("Quantity should be a positive number.");
    return;
  }
      const cartItem = {
        item: item,
        price: price,
        quantity: quantity
      };
      cart.push(cartItem);
      updateCartDisplay();
    }

    function updateCartDisplay() {
      const cartList = document.getElementById("cart");
      cartList.innerHTML = "";
      cart.forEach((cartItem) => {
        const listItem = document.createElement("li");
        listItem.classList.add("list-group-item", "d-flex", "justify-content-between");
        listItem.innerText = `${cartItem.item} - Rs. ${cartItem.price} - Quantity: ${cartItem.quantity}`;
        cartList.appendChild(listItem);
      });
    }

    function calculateTotal() {
      let totalAmount = 0;
      cart.forEach((cartItem) => {
        totalAmount += cartItem.price * cartItem.quantity;
      });
      document.getElementById("totalAmount").textContent = totalAmount.toFixed(2);

    }

    function sendCartDataToServer() {
      $.ajax({
        type: "POST",
        url: "rough.php",
        data: { cartItems: cart },
        success: function(response) {
          // Handle the response from the server if needed
          console.log(response);
        },
        error: function(xhr, status, error) {
          // Handle errors if any
          console.error(error);
        }
      });
    }
  </script>
  <!-- Add Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 
</body>
</html>
