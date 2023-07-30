<html>
    <head>
    </head>
    <body>
<?php
session_start();
$username = $_POST["username"];
$password = $_POST['password'];
//server name, username, password, dbname
$conn = new mysqli('localhost','root','','grocery_data');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {

$loginqry = "select* from signup where username='$username'and password='$password'";
echo "Query executed ";

$result=mysqli_query($conn, $loginqry);
if (mysqli_num_rows($result)===1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['username'] === $username && $row['password'] === $password) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        
        $_SESSION['username'] = $username;
       header("Location: http://localhost:8080/Grocery_app/home2.php");
        // echo "Logged in!" . $_SESSION["userName"]. "." ;
        exit();
    }else{
        $_SESSION['username'] = $username;
        echo "Login sucessfull";      
        exit();
    }     
}else{
    // header("Location: http://localhost/ASC-full-app/home2.html");
   echo "Login failed";
    exit();
}
}
?>
    </body>
</html>