<?php
// admin.php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "xpwear");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
// Fetch all products
$result = $conn->query("SELECT * FROM items");
$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XPWear Admin</title>
    <link rel="icon" href="assets/favicon.png">
    <link rel="stylesheet" href="styles/skeleton.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
        .admin-section { padding: 40px; max-width: 1000px; margin: auto; }
        h2 { font-family: 'Press Start 2P', cursive; color: #ffcc00; text-align: center; margin-bottom: 20px; }
        .product-table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        .product-table th, .product-table td { border: 2px solid #ff7b00; padding: 10px; text-align: center; font-family: 'Press Start 2P', cursive; color: white; background: rgba(20,20,20,0.9); }
        .product-table th { background: #ff7b00; color: black; }
        .btn-action { background: #ff7b00; color: black; border: none; padding: 6px 10px; cursor: pointer; font-family: 'Press Start 2P', cursive; border-radius: 5px; box-shadow: 2px 2px 0px #ffcc00; transition: 0.2s; }
        .btn-action:hover { background: #ffcc00; box-shadow: 2px 2px 0px #ff7b00; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; font-size: 12px; color: #ffcc00; font-family: 'Press Start 2P', cursive; }
        .form-group input, .form-group select, .form-group textarea { width: 100%; padding: 8px; border: 2px solid #ff7b00; border-radius: 5px; background: black; color: white; font-family: 'Press Start 2P', cursive; }
        .add-form { background: rgba(0,0,0,0.8); padding: 20px; border: 3px solid #ff7b00; border-radius: 15px; box-shadow: 0px 4px 10px rgba(255,123,0,0.5); }
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
    <section class="admin-section">
        <h2>Product Management</h2>
        <table class="product-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Game</th>
                    <th>Price</th>
                    <th>Size</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $p): ?>
        <tr id="<?php echo 'row-' . $p['id']; ?>">
        <td><?php echo htmlspecialchars($p['id']); ?></td>
        <td><?php echo htmlspecialchars($p['name']); ?></td>
        <td><?php echo htmlspecialchars($p['game']); ?></td>
        <td>$<?php echo number_format($p['price'], 2); ?></td>
        <td>
            <button class="btn-action" onclick="editSize(<?php echo $p['id']; ?>, '<?php echo htmlspecialchars($p['size']); ?>')">
                <?php echo htmlspecialchars($p['size']); ?>
            </button>
        </td>
        <td><?php echo htmlspecialchars($p['description']); ?></td>
        <td>
            <button class="btn-action" onclick="removeProduct(<?php echo $p['id']; ?>)">Remove</button>
        </td>
    </tr>
<?php endforeach; ?>
            </tbody>
        </table>
        <div class="add-form">
            <h2>Add New Product</h2>
            <form id="addForm" method="POST" action="add_items.php">
                <div class="form-group"><label for="name">Name</label><input type="text" id="name" name="name"></div>
                <div class="form-group"><label for="game">Game</label><input type="text" id="game" name="game"></div>
                <div class="form-group"><label for="price">Price</label><input type="number" id="price" name="price" step="0.01"></div>
                <div class="form-group"><label for="image">Image URL</label><input type="text" id="image" name="image"></div>
                <div class="form-group"><label for="description">Description</label><textarea id="description" name="description" rows="2"></textarea></div>
                <div class="form-group"><label for="size">Size</label><select id="size" name="size"><option>S</option><option>M</option><option>L</option><option>XL</option><option>XXL</option></select></div>
                <button type="submit" class="btn-action">Add Product</button>
            </form>
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
        function showSidebar(){ document.querySelector('.sidebar').style.inset ='0 0 0 auto'}
        function hideSidebar(){ document.querySelector('.sidebar').style.inset='0 -250px 0 auto'}
        function removeProduct(id) {
            if (!confirm('Remove this product?')) return;
            fetch(`remove_product.php?id=${id}`, { method: 'GET' })
                .then(res => res.text())
                .then(() => document.getElementById(`row-${id}`).remove());
        }
        function editSize(id, current) {
            const newSize = prompt('New size (S,M,L,XL,XXL):', current);
            if (newSize && ['S','M','L','XL','XXL'].includes(newSize)) {
                fetch('update_size.php', {
                    method: 'POST', headers: {'Content-Type':'application/x-www-form-urlencoded'},
                    body: `id=${id}&size=${newSize}`
                }).then(() => location.reload());
            }
        }
        
    </script>
</body>
</html>
<!--     <script> -->