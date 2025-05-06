<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="icon" href="assets/favicon.png">
    <link rel="stylesheet" href="styles/skeleton.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'HelveticaNeue-Light', sans-serif;
            color: #333;
           
        }
        .main-section{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 160px 0px;
        }
        
        .shopping-cart {
            padding: 30px;
            width: 85%;
            max-width: 900px;
            height: 100%;
            background:linear-gradient(135deg, #ed400b, #fe4a2f, #f7ae12);
            border-radius: 10px;
        }
        .shopping-cart1{
            display: flex;
            align-items: center;
            flex-direction: row;
            justify-content: flex-start;
            margin: 10px;

        }
        .shopping-cart1 i{
            margin: 10px;
            font-size: 40px;
            
        }
        .shopping-cart h1 {
            font-weight: 100;
            color: #FFD333;
            margin: 20px;
            font-family: "Press Start 2P", cursive;
        }
        .cart-items {
            background-color: rgb(30, 30, 30);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .item {
         display:grid;
         grid-template-columns: 70px 150px 50px 1fr;
         gap: 10px;
         text-align:center;
         align-items:center;
         color:aliceblue;
         border-radius: 5px;
        }
        .item img{
         width: 100%;
        }
        .item .quantity span{
         display:inline-block;
         width: 25px;  
         background-color: aliceblue;
         color:#333;
         border-radius: 25px;
         cursor: pointer;
        }
        .item .quantity span:nth-child(2){
            background-color:transparent;
            color:aliceblue
        }
        .cart-items .item:nth-child(even){
            background-color:#000;
        }
        .product-removal button {
            background: #ff7b00;
            color: black;
            border: none;
            padding: 15px 12px;
            font-size: 12px;
            cursor: pointer;
            font-family: 'Press Start 2P', cursive;
            box-shadow: 2px 2px 0px #ffcc00;
            border-radius: 5px;
            transition: 0.2s;
        }
        .totals {
            margin-top: 30px;
            text-align: right;
        }
        .totals-item {
            font-size: 18px;
            font-weight: bold;
            color: #000;
        }
        .totals-value {
            color: #FFD333;
            font-size: 20px;
            font-weight: bold;
        }
        .checkout {
            background: #ff7b00;
            color: black;
            border: none;
            font-size: 12px;
            font-family: 'Press Start 2P', cursive;
            box-shadow: 2px 2px 0px #ffcc00;
            border-radius: 5px;
            transition: 0.2s;
            display: block;
            margin: 30px auto 0;
            padding: 12px 24px;
            color: #333;
            font-size: 18px;
            cursor: pointer;
        }
        @media(max-width:719px){
            .shopping-cart{
                min-width: 512px;
            }
            footer{
                min-width: 512px;
            }
        }
    </style>
</head>
<body>
    <nav>
        
        <a href="home.html" class="logo-container">
             <img src="assets/favicon.png" alt="XPWear Logo" class="logo" width="65px" height="60px">
             <div class="logo1">+XPWear</div>
        </a>
        
            <div class="search-container">
                <input type="text" placeholder="Search..." class="search-input">
                <i class="bi bi-search "id="searchicon"></i>
            </div>
        

        <div class="navigation">
            
        <div class="navigation">
            
            <div class="nav-links">
                <a href="home.php">Home</a>
                <a href="products.php">Products</a>
                <a href="about.html">About</a>
                <a href="contact.html">Contact</a>
                <a href="cart.php"><ion-icon name="cart-outline"></ion-icon></a></div>
                <a href ="login.php" ><button class="btnLogin-popup">Login</button></a>
           

            </div>
            <item onclick=showSidebar()><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></item>
            <div class="sidebar">
               <a onclick=hideSidebar()><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a>
               <a href="home.php">Home</a>
               <a href="products.php">Products</a>
               <a href="about.html">About</a>
               <a href="contact.html">Contact</a>
               <a href ="login.php" >Login</a>
               <a href="cart.php"><ion-icon name="cart-outline"></ion-icon></a></div>
               

           </div>
    </nav>  
    <section class="main-section">
        
    <div class="shopping-cart">
        <div class="shopping-cart1">
            <i class="fa-solid fa-cart-shopping"></i>
            <h1 >Shopping Cart</h1> 
        </div>

        <?php
// ✅ Database connection directly in the cart.php file
$host = 'localhost';
$db = 'xpwear'; // Replace with your actual DB name
$user = 'root'; // Default for XAMPP
$pass = ''; // Default password is empty in XAMPP

$conn = new mysqli($host, $user, $pass, $db);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ✅ Query to get the cart items directly from the cart table
$sql = "SELECT name, price, image FROM cart WHERE user_id = 1"; // Replace '1' with the actual user ID

$result = $conn->query($sql); // Run the query

// Check if query failed
if (!$result) {
    // If query fails, show the error and exit
    die("Error executing query: " . $conn->error);
}

// ✅ Display the items
if ($result->num_rows > 0) {
    echo '<div class="cart-items">';
    while ($row = $result->fetch_assoc()) {
        // Loop through and output each item
        echo '<div class="item">';
        echo '<div class="name">' . htmlspecialchars($row['name']) . '</div>';
        echo '<div class="total-price">$' . number_format($row['price'], 2) . '</div>';
        echo '<div class="image"><img src="' . $row['image'] . '" alt="product-image"></div>';
        echo '<div class="quantity">';
        echo '<span class="minus">-</span><span>1</span><span class="plus">+</span>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "Your cart is empty.";
}

// Close the DB connection
$conn->close();
?>
   
           
        <div class="totals">
            <div class="totals-item">
                Grand Total: <span class="totals-value">$299.97</span>
            </div>
        </div>
       <a href="checkout.html" style="text-decoration: none;"> <button class="checkout">Proceed to Checkout</button></a>
    </div>
</section>
    <footer>
       
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>

        </div>
        <div class="footer-content">
        <a href="home.html" class="logo-container">
            <img src="assets/favicon.png" alt="XPWear Logo" class="logo" width="65px" height="60px">
            <h2 class="logo2">+XPWear</h2>
        </a>
        <ul class="footer-links">
            <li><a href=""><i class="bi bi-facebook"></i></a></li>
            <li><a href=""><i class="bi bi-twitter"></i></a></li>
            <li><a href=""><i class="bi bi-linkedin"></i></a></li>
            <li><a href=""><i class="bi bi-instagram"></i></a></li>
        </ul>

        <ul class="menu">
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Team</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <p>&copy; 2025 +XPWear | All Rights Reserved | Terms and Conditions</p>
        </div>
    </footer>
    <script>
        function showSidebar(){
            const sidebar= document.querySelector('.sidebar')
            sidebar.style.inset ='0 0 0 auto'
        }
        function hideSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.inset='0 -250px 0 auto'
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
      let listProductHTML = document.querySelector('.listProduct');
      let listProducts = [];

      const initApp = () => {
        fetch('items.json')
        .then(response => response.json())
        .then(data => {
            listProducts = data;
            console.log(listProducts);
        })
      }
      initApp();
    </script>  
</body>
</html>
