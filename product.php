<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "xpwear");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get product ID from URL, e.g. product.php?id=1
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0; // Default to 0 if no ID is provided

// Query to fetch product details based on the given ID
if ($id > 0) {
    $sql = "SELECT * FROM items WHERE id = $id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Fetch the product details for that specific id
        $product = $result->fetch_assoc();
        
        // Store data in variables
        $name = $product['name'];
        $price = $product['price'];
        $image = $product['image'];
        $description = $product['description'];
        
    } else {
        echo "Item not found.";
        exit;
    }
} else {
    echo "Invalid product ID.";
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XPWear</title>
    <link rel="icon" href="assets/favicon.png">
    <link rel="stylesheet" href="styles/skeleton.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Bungee&family=Montserrat&family=Roboto+Mono&family=VT323&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    

    <style> 
    
    .main-section{
        
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 200px;

    }
    .hole-page{
        height:100%;
        width: 100%;
        max-width: 800px;
         background:linear-gradient(135deg, #171616, #302b2b, #2a2a29);
        display: flex;
        flex-direction: column;
        justify-self: center;
        border-radius: 10px;
    }
    #game-name{
        background-color: rgb(255, 255, 255);
        width: fit-content;
        justify-self: center;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 10px;
        border: 3px solid black;
    }   
    #game-name img{
        width: 200px;
    }

   
.file{
    margin-top: 90px;
    margin-bottom: 70px;
	width : 90vw;
    height: 70%;
	justify-self: center;
	position:realtive;
	top: 30px;
    }

#btn-cartt{
    display: flex;
    justify-content:center ;
    align-items: center;
}

.cart-btn{
    width: 50%;
    height:45px ;
    padding: 10px;
    margin-bottom: 20px;
    background: #ccdee9;
    color: black;
    border: none;
    font-family: 'Press Start 2P', cursive;
    font-size: 12px;
    cursor: pointer;
    box-shadow: 2px 2px 0px #000000;

}


.cart-btn:hover{
    background: #ffdd45;
    transform: translateY(3px);
    box-shadow: 0px 2px 0px #d84315;

}

.product-page{
    border-radius: 10px;
    background-color:transparent;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    padding-left: 20px;
    padding-right: 20px;
}
#content{
    display:flex;
    flex-direction: column;
    padding: 30px;
    line-height: 40px;
}
#content ul{
    margin-top: 20px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}
#sizes{
    display: flex;
    flex-direction: row;
    list-style: none;
    
}
#product-1{
    width: 300px;
    padding-top: 20px;
    border-radius: 10px;
}
#product-1{
    display: flex;
    flex-direction: column;
}
.xp{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    height: 60px;
}
.xp img {
    height: 80px;
    width: 80px !important;
}
#sizes li {
    padding-left:10px;
}

.size-btn {
    background: #ff7b00;
    color: #3f3e3e;
    border: none;
    padding: 8px 12px;
    font-size: 12px;
    cursor: pointer;
    font-family: 'Press Start 2P', cursive;
    box-shadow: 2px 2px 0px #ffcc00;
    border-radius: 5px;
    transition: 0.2s;
}

.size-btn.selected {
    border: 2px solid white; 
}
.info {
    display: flex;
    align-items: center;
    gap: 10px; 
}
.price{
    display: flex;
    margin: 5px 0px;
    gap: 5px;
    width: fit-content;
    height: fit-content;
}

.label-font{
    font-family: 'Press Start 2P'!important;
}
@media(max-width:600px){

    .product-page{
        flex-direction: column;
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
            
             <div class="nav-links">
                 <a href="home.html">Home</a>
                 <a href="products.html">Products</a>
                 <a href="about.html">About</a>
                 <a href="contact.html">Contact</a>
                 <a href="cart.html"><ion-icon name="cart-outline"></ion-icon></a></div>
                 <a href ="login.html" ><button class="btnLogin-popup">Login</button></a>
            
 
             </div>
             <item onclick=showSidebar()><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></item>
             <div class="sidebar">
                <a onclick=hideSidebar()><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a>
                <a href="home.html">Home</a>
                <a href="products.html">Products</a>
                <a href="about.html">About</a>
                <a href="contact.html">Contact</a>
                <a href ="login.html" >Login</a>
                <a href="cart.html"><ion-icon name="cart-outline"></ion-icon></a></div>
                

            </div>
    </nav> 

    <section class="main-section">
        <section class="file">
            <div id="game-name">
                <img src="https://www.fangamer.com/cdn/shop/files/logo-stardew-valley.svg?v=1692129769">
            </div>
            <div class="hole-page">
                <div class="product-page">
                    <div id="product-1">
                        <img src="<?php echo $image; ?>" alt="product-1" id="product-1">
                        <div class="xp">
                        <img style="width: 40px;" src="assets/sefesf (1).webp" alt=""> 
                        <span style="font-size: 15px;font-weight: bolder; font-family: 'Press Start 2P', cursive;color: #ccdee9;"> Aquirable+xp</span>
                        </div>
                    </div>
                    <div id="content">
                        <h3 style="font-size: 33px; color:rgb(255, 255, 255); margin: 20px 0px;" class="label-font"><?php echo $name; ?></h3>

                        <div class="price">
                            <label style="color:#3f3e3e;font-size: 22px;background: #e9be6f;padding: 5PX;border-radius: 5PX;width: fit-content;" class="label-font">Price:</label> <span style="font-size: 22px;font-weight: 900;color: rgb(67, 66, 66);background: #c9b136;padding: 5PX;border-radius: 5PX;" class="label-font"><?php echo "$" . $price; ?></span>
                        </div>
                        <h3 style="color:#3f3e3e;font-size: 22px;background: #e9be6f;padding: 5PX;border-radius: 5PX;width:fit-content;" class="label-font">Sizes:</h3>
                        <ul id="sizes" style="color:#ccdee9;background: #001320;padding:20px;margin:5px 0px;border-radius: 5px;">
                            <li><button class="size-btn"onclick="selectSize(this)">M</button></li>
                            <li><button class="size-btn"onclick="selectSize(this)">S</button></li>
                            <li><button class="size-btn"onclick="selectSize(this)">L</button></li>
                            <li><button class="size-btn"onclick="selectSize(this)">XL</button></li>
                            <li><button class="size-btn"onclick="selectSize(this)">XXL</button></li>
                            <li><button class="size-btn"onclick="selectSize(this)">XXXL</button></li>
                        </ul>
                        <h3 style="color:#3f3e3e;font-size: 22px;background: #e9be6f;padding: 5PX;border-radius: 5PX;width:fit-content" class="label-font">Description:</h3>
                        <p style="color:#ccdee9;font-size: 15px;background: linear-gradient(135deg, #001121, #001626, #1a1e29);padding: 30PX;border-radius: 5PX;margin:5px 0px" class="label-font">
                            <i class="fa fa-star" style="color: rgb(255, 252, 71);transform: scale(1.5) ; position: relative;top: -4px;"></i>
                            <?php echo $description; ?>
                        </p>
                        
                    </div> 
                </div>
                
                <div id="btn-cartt">
                    <button class="cart-btn" data-name="annoyingdog_lapel" data-price="20">ADD to cart</button>
            </div>
        </section> 
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
        function selectSize(selectedBtn) {
    // Get all buttons with the class 'size-btn'
    const buttons = document.querySelectorAll(".size-btn");

    // Remove the 'selected' class from all buttons
    buttons.forEach(btn => btn.classList.remove("selected"));

    // Add 'selected' class to the clicked button
    selectedBtn.classList.add("selected");
    }

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
      
    document.addEventListener("DOMContentLoaded", () => {
    const addToCartButton = document.querySelector(".cart-btn");

    addToCartButton.addEventListener("click", () => {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];

        const selectedSize = document.querySelector(".size-btn.selected");
        if (!selectedSize) {
            alert("Please select a size!");
            return;
        }        const productName = document.querySelector(".label-font").innerText;
        const productPrice = parseFloat(document.querySelector(".price span").innerText.replace("$", ""));

        const product = {
            id: "annoyingdog_lapel",
            name: productName,
            price: productPrice,
            size: selectedSize.innerText, 
            quantity: 1
        };

        // Check if item already exists with the same size
        const existingItem = cart.find(item => item.id === product.id && item.size === product.size);
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push(product);
        }

        localStorage.setItem("cart", JSON.stringify(cart));
        alert("Added to cart!");
    });
});

</script>

    
</body>
</html>