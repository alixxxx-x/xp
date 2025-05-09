
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XPWear</title>
    <link rel="icon" href="assets/favicon.png">
    <link rel="stylesheet" href="styles/skeleton.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>

        .main-section{
            padding:30px;

        }
        .container{
            position: relative;
            width:100%;
            height:100%;
            border-radius: 30px;
            border: #f24b035f 2px solid;
            overflow:hidden;
        }
        
            
        .video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; 
        
        }

        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

       
.content-overlay {
    display: flex;
    flex-direction: column;
    padding: 20px;
    max-width: 1200px;
    margin: auto;
}
.filter-products{
    display: flex;
    gap: 50px;
    padding:40px;
}

.filter {
    background: rgba(0, 0, 0, 0.8);
    padding: 15px;
    border-radius: 15px;
    border-radius: 15px;
    padding: 20px;
    color: white;
    border: 3px solid #ff7b00;
    box-shadow: 0px 4px 10px rgba(255, 123, 0, 0.5);
    height: fit-content;
}

.filter-section {
    margin: 20px;
}

.filter h2,
.filter h3 {
    color: #ffcc00;
    font-family: 'Press Start 2P', cursive;
}

.filter-section label {
    display: block;
    font-size: 14px;
    margin: 5px 0;
    cursor: pointer;
}

.filter-section input {
    margin-right: 10px;
}
.searchers-container{
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 15px;
}
.search-image{
    width: 100px;
    height: 100px;
}
.searcher-container {
    width: 80%;
    height: fit-content;
    margin: 30px;
}

.searcher-container input {
    width: 80%;
    padding: 10px;
    border: 2px solid #ffcc00;
    background: black;
    color: white;
    font-size: 14px;
    border-radius: 10px;
    font-family: 'Press Start 2P', cursive;
    box-shadow: 2px 2px 0px #ff7b00;
}


.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(160px, 200px)); 
    justify-content: center;
    gap: 20px; 
    width: 80%;
   
    padding: 20px;
    background: rgba(0, 0, 0, 0.9);
    border-radius: 15px;
    border: 3px solid #ff7b00;
    box-shadow: 0px 4px 10px rgba(255, 123, 0, 0.5);
}

            @media (max-width: 1290px) {
             .products-grid {
             grid-template-columns: repeat(auto-fit, minmax(160px, 200px)); 

            }
            }
            @media (max-width:1201px) {
            
             .products-grid {
                grid-template-columns: repeat(auto-fit, minmax(160px, 187px));
                gap:10px;
                padding: 40px 0px;
            } 

            }
             @media (max-width:1108px) {
            .products-grid {
              grid-template-columns: repeat(auto-fit, minmax(160px,174px));
              gap:50px;
              padding: 40px;
            }}
            @media (max-width:972px) {
            .products-grid {
              grid-template-columns: repeat(auto-fit, minmax(160px,174px));
              gap:40px;
              padding:20px 15px;
            } }
            @media (max-width:907px) {
            .products-grid {
              grid-template-columns: repeat(auto-fit, minmax(160px,174px));
              gap:10px;
              padding:20px 15px;
            }}
            @media (max-width:873px) {
            .products-grid {
              grid-template-columns: repeat(auto-fit, minmax(140px,160px));
              gap:10px;
              padding:20px 15px;
            }
            .product-card img {
               height: 100px;
               max-width: 110px;
            }   
            .product-card{
                max-height: 240px;
            }
            .product-details{
                font-size: 3px !important;
            }

            }
            @media (max-width:829px) {
            .filter-products{
                padding: 0px !important;
                gap: 20px;
            }
            .products-grid{
             margin: 0px !important;
            }
            .filter{
                padding: 10px !important;
            }
            img{
             width: 80px;
             height: 80px;
            }
            .searcher-container{
                padding:10px !important;
                margin: 0px;
            }
            }
            @media (max-width:710px) {
                .product-card img {
               height: 80px;
               max-width: 90px;
            }
            .product-card{
                padding: 0px !important;
                height:200px !important;
            }
            .filter-products{
                padding: 0px !important;
                gap: 20px;
            }
            .products-grid{
                grid-template-columns: repeat(auto-fit, minmax(130px,150px));
              gap:10px;
              padding:20px 15px;
             margin: 0px !important;
            }
            .filter{
                padding: 10px !important;
            }
            img{
             width: 80px;
             height: 80px;
            }
            .searcher-container{
                padding:10px !important;
                margin: 0px;
            }
            }

              
            


.product-card {
    background: rgba(20, 20, 20, 0.95);
    height: 278px;
    border-radius: 12px;
    padding: 15px;
    text-align: center;
    border: 2px solid #ff7b00;
    transition: transform 0.2s ease-in-out;
}

.product-card:hover {
    transform: scale(1.05);
}

.product-card img {
    width: 100%;
    max-height: 140px;
    border-radius: 10px;
}

.product-info {
    margin-top: 10px;
}

.product-details h3 {
    font-size: 14px;
    color: #ffcc00;
}

.product-details h4 {
    font-size: 12px;
    color: white;
}

.product-price {
    font-size: 14px;
    font-weight: bold;
    color: #ff7b00;
}


.buy-1 {
    background: #ff7b00;
    color: black;
    border: none;
    padding: 8px 12px;
    font-size: 12px;
    cursor: pointer;
    font-family: 'Press Start 2P', cursive;
    box-shadow: 2px 2px 0px #ffcc00;
    border-radius: 5px;
    transition: 0.2s;
}

.buy-1:hover {
    background: #ffcc00;
    box-shadow: 2px 2px 0px #ff7b00;
}


        
      

    h2 {
        text-align: center;
        font-size: 18px;
        color: #ffcc00;
        text-shadow: 2px 2px 0px #ff7b00;
    }

    .filter-section h3 {
        font-size: 14px;
        color: #ff7b00;
        margin-bottom: 5px;
    }

    .filter-section label {
        display: flex;
        align-items: center;
        font-size: 12px;
        margin-bottom: 5px;
        cursor: pointer;
        color: white;
    }

    .filter-section input[type="checkbox"] {
        margin-right: 8px;
        accent-color: #ffcc00;
        transform: scale(1.3);
    }

    .filter-section input[type="number"] {
        width: 100px;
        padding: 5px;
        border: 2px solid #ff7b00;
        background: black;
        color: white;
        font-size: 12px;
        font-family: 'Press Start 2P', cursive;
    }

    .reset-button {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        background: #ff7b00;
        color: black;
        border: none;
        font-family: 'Press Start 2P', cursive;
        font-size: 12px;
        cursor: pointer;
        box-shadow: 2px 2px 0px #ffcc00;
    }

    .reset-button:hover {
        background: #ffcc00;
        box-shadow: 2px 2px 0px #ff7b00;
    }

    
    i {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    margin-right: 10px;
    display: inline-block; 
    position: relative;
    top:-3px;
    transform: scale(1.1);
}

@media(max-width:441px){
    .filter-products{
    flex-wrap: wrap;
    }
    
    .main-section{
        margin-top: 100px;
    }
    
}
@media(max-width:667px){
    .main-section{
        margin-top: 100px;
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

        <div class="container">

            <div class="video-container">
                <video autoplay loop muted playsinline >
                    <source src="assets/stars.mp4" type="video/mp4" >
                </video>
            </div>

            <div class="content-overlay">

               
                 <div class="searchers-container">
                    <img src="assets/retro-pixel-art-blue-shirt-with-accent-collars-sleeve-details_1292377-15234-removebg-preview.png" width="120px"height="110px">
                    <div class="searcher-container">
                        <input type="text" placeholder="Search..." class="search-input">
                        <i class="fa fa-search search-icon"></i>
                    </div>

                </div>
                
                <div class="filter-products">

                    
                            
                    <div class="filter">

                            <h2>Filter</h2>

                            <div class="filter-section">
                                <h3><i class="fas fa-tshirt"></i>Apparel</h3>

                                <label ><input type="checkbox">T-Shirts</label>
                                <label><input type="checkbox">Long-Sleeved Shirts</label>
                                <label><input type="checkbox">Outerwear</label>
                                <label><input type="checkbox">Jackets</label>
                                <label><input type="checkbox">Bottoms</label>
                                <label><input type="checkbox">Button-ups</label>
                                <label><input type="checkbox">Hats</label>
                                <label><input type="checkbox">Accessories</label>
                                <label><input type="checkbox">Jewlery</label>

                            </div>

                          
                    

                        <div class="filter-section">
                            
                                <h3><i class="fas fa-gamepad"></i> Games</h3>
                                <label><input type="checkbox"> Elden Ring</label>
                                <label><input type="checkbox"> Zelda</label>
                                <label><input type="checkbox"> Dark Souls</label>
                                <label><input type="checkbox"> Cyberpunk</label>
                            
                        </div>

                        <div class="filter-section">
                            <h3><i class="fas fa-ruler"></i>Size</h3>
                            <label><input type="checkbox"> S</label>
                            <label><input type="checkbox"> M</label>
                            <label><input type="checkbox"> L</label>
                            <label><input type="checkbox"> XL</label>
                        </div>

                        <div class="filter-section">
                            <h3><i class="fas fa-dollar-sign"></i>Price</h3>
                            <input type="number" placeholder="Min $">
                            <input type="number" placeholder="Max $">
                        </div>

                        <button class="reset-button">Reset Filters</button>

                    </div>


                    <div class="products-grid">

                    <?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "xpwear");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Fetch all products from the database
$sql = "SELECT * FROM items";  // Adjust the query as needed
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    // Query failed, show an error
    die("Error in SQL query: " . $conn->error);
}

// Check if there are products
if ($result->num_rows > 0) {
    // Loop through the results and generate a card for each product
    while($row = $result->fetch_assoc()) {
        echo '<div class="product-card">
                <img src="' . $row["image"] . '" alt="' . $row["name"] . '">
                <div class="product-info">
                    <div class="product-details">
                        <h3>' . $row["name"] . '</h3>
                        <h4>' . $row["game"] . '</h4>
                    </div>
                    <h5 class="product-price">$' . $row["price"] . '</h5>
                </div>
                <a href="product.php?id=' . $row["id"] . '"><button class="buy-1">BUY NOW</button></a>
            </div>';
    }
} else {
    echo "No products available.";
}

// Close the connection
$conn->close();
?>


                    </div>

                </div>

            </div>

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

        document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.querySelector(".searcher-container input");
    const filterCheckboxes = document.querySelectorAll(".filter-section input[type='checkbox']");
    const minPriceInput = document.querySelector(".filter-section input[placeholder='Min $']");
    const maxPriceInput = document.querySelector(".filter-section input[placeholder='Max $']");
    const resetButton = document.querySelector(".reset-button");
    const products = document.querySelectorAll(".product-card");

    function filterProducts() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategories = Array.from(filterCheckboxes)
            .filter((checkbox) => checkbox.checked)
            .map((checkbox) => checkbox.getAttribute("data-category"));

        const minPrice = minPriceInput.value ? parseFloat(minPriceInput.value) : 0;
        const maxPrice = maxPriceInput.value ? parseFloat(maxPriceInput.value) : Infinity;

        products.forEach((product) => {
            const productName = product.querySelector("h3").textContent.toLowerCase();
            const productCategory = product.getAttribute("data-category");
            const productGame = product.getAttribute("data-game");
            const productSize = product.getAttribute("data-size");
            const productPrice = parseFloat(product.querySelector(".product-price").textContent.replace("$", ""));

            const matchesSearch = productName.includes(searchTerm);
            const matchesCategory = selectedCategories.length === 0 || selectedCategories.includes(productCategory) || selectedCategories.includes(productGame) || selectedCategories.includes(productSize);
            const matchesPrice = productPrice >= minPrice && productPrice <= maxPrice;

            if (matchesSearch && matchesCategory && matchesPrice) {
                product.style.display = "block";
            } else {
                product.style.display = "none";
            }
        });
    }

    // Add event listeners
    searchInput.addEventListener("input", filterProducts);
    filterCheckboxes.forEach((checkbox) => checkbox.addEventListener("change", filterProducts));
    minPriceInput.addEventListener("input", filterProducts);
    maxPriceInput.addEventListener("input", filterProducts);

    // Reset filters
    resetButton.addEventListener("click", function () {
        searchInput.value = "";
        filterCheckboxes.forEach((checkbox) => (checkbox.checked = false));
        minPriceInput.value = "";
        maxPriceInput.value = "";
        filterProducts();
    });

    filterProducts(); // Initial filtering
});

    </script>
    

    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>
</html>