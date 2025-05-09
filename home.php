
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XPWear</title>
    <link rel="icon" href="assets/favicon.png">
    <link rel="stylesheet" href="styles/skeleton.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300;400;500&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Bungee&family=Montserrat&family=Roboto+Mono&family=VT323&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Audiowide&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Audiowide&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bungee&display=swap');
        
        .hero-section {
    position: relative;
    width: 100%;
    height: 500px; 
    background: url('https://wallpaper-house.com/data/out/6/wallpaper2you_118107.png') center/cover no-repeat; /* Replace with your image */
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    padding: 40px;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); 
}

.hero-content {
    position: relative;
    max-width: 800px;
    padding: 20px;
}

.hero-content h1 {
    font-size: 48px;
    font-family: 'Bungee', sans-serif;
    margin-bottom: 10px;
}

.hero-content p {
    font-size: 18px;
    font-family: 'Fedoka', sans-serif;
    opacity: 0.9;
}

.hero-btn {
    font-family: 'Black Han Sans', sans-serif;
    display: inline-block;
    margin-top: 15px;
    padding: 12px 24px;
    background: #ffcc00;
    color: black;
    font-size: 18px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.3s;
}

.hero-btn:hover {
    background: #e6b800;
    transform: scale(1.05);
}
       
        .product-container{
            display: grid;
            grid-template-columns:repeat(auto-fit,minmax(230px,1fr));
            gap:20px;
            width:80%;
            max-width: 1400px;
            padding:30px;
            margin-top: 15px;
            justify-self: center;
            background: linear-gradient(135deg, #ed400b, #fe4a2f, #f7ae12);
            border-radius: 25px;
            box-shadow: 8px 4px 5px rgba(0, 0, 0, 0.2);
        }
        .product-card{
            background: transparent;
            border-radius:10px;
            overflow: hidden;
            box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            padding: 20px;
            border: 4px dashed #000000;
            transition: transform 0.3s ease-in-out;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            transform: scale(.9);
        }
        .product-card:hover{
            transform: rotate(-1deg) scale(1.05);
            box-shadow: 6px 6px 20px rgba(0, 0, 0, 0.4);
        }
        .product-card img{
            width:100%;
            height:auto;
            border: none;
            box-shadow:0px 3px 10px rgba(0, 0, 0, 0.2) ;
        }
        
       
        .product-info {
            display: flex;
            justify-content: space-between; 
            align-items: center; 
            width: 100%;
            margin-top: 20px;
        }

        .product-details {
            display: flex;
            flex-direction: column;
            text-align: left;
        }

        .product-card h3 { /* Product Name */
            
            font-family: 'Press Start 2P';
            color: #333;
            font-weight: bold;
            margin: 5px 0;
            font-size:13px;
            line-height: 1.3;
        }
        
        
        .product-card h4 { /* Category */
            font-size: 18px;
            color: #8f8f8f;
            margin: 0;
            
            font-family: 'bungee', sans-serif;
        }
        
        .product-price { /* Price */
            font-size: 16px;
            color: #e5a505;
            
            padding: 5px 12px;
            border-radius: 5px;
            white-space: nowrap; 
            font-family: 'Press Start 2P', cursive;
        }

        .product-card button {
        margin-top: 16px;
        background: #1e1c1c;
        color: white;
        border: none;
        padding: 16px;
        width: 100%;
        cursor: pointer;
        border-radius: 10px;
        font-size:16px;
        font-weight:bold;
        box-shadow: 0px 4px 0px #d84315;
        transition: all 0.2s;

        }

        .product-card button:hover {
            background: #f43333;
            transform: translateY(3px);
            box-shadow: 0px 2px 0px #d84315;
        }
        @media (max-width:768px){
            .product-card{
                grid-template-columns:repeat(auto-fill,minmax(200px,1fr));
            }
        }
        .section-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        padding: 30px 10vw;
       }
        .category-title {
            font-size: 26px;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
            color: rgb(255, 255, 255);
            font-family:'Press Start 2P', cursive;}
            
            .icon {
            font-size: 30px;
            color: #ffeb3b; /* Yellow */
            margin-right: 5px;
            }
        
        .view-all-btn {
            background: orangered;
            font-family:  'VT323', monospace;
            color: #ffffff;
            border: none;
            padding: 8px 16px;
            font-size: 25px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bolder;
            transition: 0.3s ease;
        }

        .view-all-btn:hover {
            background: #ffeb3b;
            color: #222;
        }

        .last-section{
            position: relative;
            top:-11px;
            background: #212121;
            border-radius:10px;
            min-height: 70vh ;
            box-shadow: 10px 20px 15px rgba(69, 69, 69, 0.095);
            justify-items: center;
            align-items: center;
            padding: 50px;
         }
         .Games-container {
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
            gap: 15px;
            width:92%;
            max-width: 1400px;
            background-color: #e5a505;
            padding :30px;
            border-radius: 5px;
        }

        .Game-card{
            background: #8f8f8f;
            display: flex;
            align-items: center;
            border: #000000 solid;
            border-radius: 5px;
            overflow: hidden;
            height:1fr;
            min-height: 119px;
            padding: 20px;
            transition: 0.5s;
        }
        .Game-card:hover{
            background: #ea631a ;
            transform: scale(1.1);
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
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Geeky Fashion, Redefined!</h1>
            <p>Shop the coolest video game apparel and stand out in style.</p>
            <a href="products.html" class="hero-btn">Shop Now</a>
        </div>
    </section>
    <section>
        <div class="section-header">
            <h2 class="category-title">
                <i class="fa-solid fa-shirt icon"></i> Our Collection
            </h2>
            <a href="products.html"><button class="view-all-btn" hre>VIEW ALL</button></a>
        </div>
        
        <div class="product-container" id="">
            <div class="product-card">

                <img src="https://www.fangamer.com/cdn/shop/files/product_UT_megalovania_shirt_itemview_360x360.png?v=1733339310">
                <div class="product-info">

                    <div class="product-details">
                        <h3>Megalovania</h3>
                        <h4>Undertale</h4>
                    </div>

                    <h5 class="product-price">$36</h5>
                </div>
                
                <button class="buy-1">BUY NOW</button>
                
            </div>
            
            <div class="product-card">
                <img src="https://www.fangamer.com/cdn/shop/files/product_UT_annoyingdog_lapel_itemview_new_360x360.png?v=1691702067">
                <div class="product-info">

                    <div class="product-details">
                        <h3>Annoying Dog Label Pin</h3>
                        <h4>Undertale</h4>
                    </div>

                    <h5 class="product-price">$12</h5>
                </div>
                
                <button class="buy-1">BUY NOW</button>
            </div>

            <div class="product-card">
                <img src="https://www.fangamer.com/cdn/shop/files/product_DS_trial_shirt_itemview_new_360x360.png?v=1691626678">
                <div class="product-info">

                    <div class="product-details">
                        <h3>Trial By Fire</h3>
                        <h4>Dark Souls</h4>
                    </div>

                    <h5 class="product-price">$36</h5>
                </div>
                <button class="buy-1">BUY NOW</button>
            </div>

            <div class="product-card">
                <img src="https://www.fangamer.com/cdn/shop/files/product_undertale_underground_garden_button_up_shirt_itemview_360x360.png?v=1730836465">
                <div class="product-info">

                    <div class="product-details">
                        <h3>Underground Garden Button_Up</h3>
                        <h4>Undertale</h4>
                    </div>

                    <h5 class="product-price">$100</h5>
                </div>
                
                <button class="buy-1">BUY NOW</button>
            </div>
            
            <div class="product-card">
                <img src="https://www.fangamer.com/cdn/shop/files/product_ape_escape_gotcha_shirt_itemview_360x360.png?v=1728078303">
                <div class="product-info">

                    <div class="product-details">
                        <h3>Gotcha!</h3>
                        <h4>Ape Escape</h4>
                    </div>

                    <h5 class="product-price">$35</h5>
                </div>
                <button class="buy-1">BUY NOW</button>
            </div>
            <div class="product-card">
                <img src="https://www.fangamer.com/cdn/shop/files/product_hk_wandering-knight_shirt_itemview_new_360x360.png?v=1691626572">
                <div class="product-info">

                    <div class="product-details">
                        <h3>Wandering Night</h3>
                        <h4>Hollow Knight</h4>
                    </div>

                    <h5 class="product-price">$34</h5>
                </div>
                <button class="buy-1">BUY NOW</button>
            </div>
            <div class="product-card">
                <img src="https://www.fangamer.com/cdn/shop/files/product_bugsnax_strabby_beanie_itemview_new_360x360.png?v=1691625196">
                <div class="product-info">

                    <div class="product-details">
                        <h3>Strabby Beanie</h3>
                        <h4>Bugsnax</h4>
                    </div>

                    <h5 class="product-price">$24</h5>
                </div>
                <button class="buy-1">BUY NOW</button>
            </div>
            <div class="product-card">
                <img src="https://www.fangamer.com/cdn/shop/files/product_conker_cheers-jeers-beers_shirt_itemview_new_360x360.png?v=1691626355">
                <div class="product-info">

                    <div class="product-details">
                        <h3>Cheers,Jeers AND Bears!</h3>
                        <h4>Conker's Bad_FuR_Day</h4>
                    </div>

                    <h5 class="product-price">$16</h5>
                </div>
                <button class="buy-1">BUY NOW</button>
            </div>
            <div class="product-card">
                <img src="https://www.fangamer.com/cdn/shop/files/product_UFO50_slard_pin_itemview_360x360.png?v=1729032323">
                <div class="product-info">

                    <div class="product-details">
                        <h3>Slard Pin</h3>
                        <h4>Ufo 50</h4>
                    </div>

                    <h5 class="product-price">$14</h5>
                </div>
                <button class="buy-1">BUY NOW</button>
            </div>
        </div>
        <svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
            <path fill="#ff9800" fill-opacity="1" d="M0,192L40,170.7C80,149,160,107,240,106.7C320,107,400,149,480,149.3C560,149,640,107,720,101.3C800,96,880,128,960,149.3C1040,171,1120,181,1200,192C1280,203,1360,213,1400,218.7L1440,224V320H0Z"></path>
            <path fill="#ffcc80" fill-opacity="0.8" d="M0,224L40,202.7C80,181,160,139,240,138.7C320,139,400,181,480,181.3C560,181,640,139,720,133.3C800,128,880,160,960,181.3C1040,203,1120,213,1200,224C1280,235,1360,245,1400,250.7L1440,256V320H0Z"></path>
            <path fill="#424242" fill-opacity="0.9" d="M0,256L40,234.7C80,213,160,171,240,170.7C320,171,400,213,480,213.3C560,213,640,171,720,165.3C800,160,880,192,960,213.3C1040,235,1120,245,1200,256C1280,267,1360,277,1400,282.7L1440,288V320H0Z"></path>
            <path fill="#212121" fill-opacity="1" d="M0,288L40,266.7C80,245,160,203,240,202.7C320,203,400,245,480,245.3C560,245,640,203,720,197.3C800,192,880,224,960,245.3C1040,267,1120,277,1200,288C1280,299,1360,309,1400,314.7L1440,320V320H0Z"></path>
        </svg>
        
    </section>
    <section class="last-section">
        <div class="section-header">
            <h2 class="category-title">
                <i class="fa-solid fa-gamepad icon"></i>Games
            </h2>
            <button class="view-all-btn">VIEW ALL</button>
        </div>
        
        <div class="Games-container">

            <div class="Game-card" id="1">

                <img src="https://www.fangamer.com/cdn/shop/files/logo-undertale.svg?v=1692129753">
                
            </div>
            
            <div class="Game-card" id="2">
                <img src="https://www.fangamer.com/cdn/shop/files/logo-deltarune_new.svg?v=1692130941">
            </div>

            <div class="Game-card"id="3">
                <img src="https://www.fangamer.com/cdn/shop/files/logo-stardew-valley.svg?v=1692129769">
               
            </div>

            <div class="Game-card" id="4">
                <img src="https://www.fangamer.com/cdn/shop/files/logo-hades_new.svg?v=1692131269">
                
            </div>
            
            <div class="Game-card" id="5">
                <img src="https://www.fangamer.com/cdn/shop/files/god-of-war-ragnarok-logo.svg?v=1741114421">
                
            </div>
            <div class="Game-card" id="6">
                <img src="https://www.fangamer.com/cdn/shop/files/logo-horizon_new.svg?v=1692131247">
               
            </div>
            <div class="Game-card" id="7">
                <img src="https://www.fangamer.com/cdn/shop/files/Street-Fighter-Logo2.svg?v=1737677341">
                
            </div>
            <div class="Game-card" id="8">
                <img src="https://www.fangamer.com/cdn/shop/files/mgs-logo_4c72084a-d48c-4c4e-a98a-d44809e324df.svg?v=1692905175">
                
            </div>
            <div class="Game-card" id="9">
                <img src="https://www.fangamer.com/cdn/shop/files/logo-hollow-knight_new.svg?v=1692130661">
                
            </div>
            <div class="Game-card" id="9">
                <img src="https://www.fangamer.com/cdn/shop/files/logo-pizza-tower.svg?v=1693953091">
                
            </div>
            <div class="Game-card" id="9">
                <img src="https://www.fangamer.com/cdn/shop/files/OFF-vector-logo.svg?v=1734627837">
                
            </div>
            <div class="Game-card" id="9">
                <img src="https://www.fangamer.com/cdn/shop/files/brotato-vector-logo.svg?v=1736362200">
                
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
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
>