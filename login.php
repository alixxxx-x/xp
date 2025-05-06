<!DOCTYPE html>
<head>
    <title>XPWear</title>
    <meta charset="UTF-8">
    <meta name="description" content="XPWear is a clothing brand that specializes in gaming apparel.">
    <meta name="keywords" content="XPWear, Gaming, Apparel, Clothing, Merchandise">
    <meta name="author" content="Djeridi Ali">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/favicon.png">
    <link rel="stylesheet" href="styles/skeleton.css">
    <link rel="STYLESHEET" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        
        .login-section{
            background: url("/assets/background-login-removebg.png") no-repeat center center/cover;
            height: 90vh;
            border-radius: 30px;
            border: #f243035f 2px solid;
            display: flex;
            justify-content: center;
            align-items: center;
            min-width: 310px;
           
        }

        .wrapper{
            width: 40vw;
            max-width: 500px;
            height: 60vh;
            min-height: 276px;
            min-width: 250px;
            background: transparent;
            border: 2px solid silver;
            border-radius: 20px;
            backdrop-filter: blur(20px);
            box-shadow: 0px 0px 30px rgb(0, 0, 0);
            display: flex;
            justify-content: center;
            align-items: center;

        }

        @media (max-width:768px){
            
            .wrapper{
                width: 80vw;
                height: 80vh;
            }

            .form-box {

             padding: 0px !important;
             transform: scale(0.8); 
             

            }

            .form-box h2{
                font-size: 1.5em;
            }
            .input-box input{
                font-size: .9em;
            }

            
        }

        @media (max-width:668px){

            .login-section{
                margin-top:80px;
            }

        }

           
        @media (max-height:606px) {

            .form-box {
                padding: 0px !important;
                transform: scale(0.8);
            }
            
            
         }
        .wrapper .form-box {
            width: 100%;
            padding: 40px;
        }
        .form-box h2{
        font-size: 1.8em;
        color:rgb(255, 255, 255);
        text-align: center;
        }
        .input-box{
            position: relative;
            width: 100%;
            height: 50px;
            border-bottom:rgb(30, 28, 28) 2px solid;
            margin : 30px 0;
            
        }
        .input-box label{
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 1em;
            color: rgb(255, 255, 255);
            pointer-events: none;
            transition: 0.5s;
            }
        .input-box input:focus ~ label,
        .input-box input:valid ~ label{
            top: -5px;
            color: #ffffff;
        } 
            
        .input-box input{
            position: relative;
            z-index: 10;
            width: 100%;
            height: 100%;
            background: transparent;
            display: block;
            border: 2px solid transparent;
            outline: none;
            font-weight: 500;
            color: #ffffff;
            font-size: 1em;
            padding: 0 35px 0 5px;
        }

        .input-box .icon{
            position: absolute;
            font-size: 1.2em;
            right: 5px;      
            color:#ffffff ;
            top: 50%;
            transform: translateY(-50%);  
        }
        .remember-me{
            font-size: 1em;
            color: #ffffff;
            font-weight: 500;
            margin: -15px 0 15px;
            display: flex;
            justify-content: space-between;
        }
        .remember-me label input{
            accent-color: yellow;
            margin-right: 3px;
        }
        .remember-me a{
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
        }
        .remember-me a:hover{
            text-decoration: underline;
        }
        .btn{
            width: 100%;
            height: 45px;
            background: rgb(44, 44, 42);
            border: none;
            outline: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            color: #ffffff;
            font-weight: 600;
        transition: 0.6s;
        }
        .btn:hover{
            background: white;
            color:  rgb(44, 44, 42);
        
        }
        .login-register{
            font-size:.9em;
            color: #ffffff;
            text-align: center;
            font-weight: 500;
            margin: 25px 0 10px;
        }
        .login-register  a{
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
        }
        .login-register a:hover{
            text-decoration: underline;
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

    <section class="login-section">

        <div class="wrapper"> 

            <div class="form-box">

                <h2>Login</h2>

                <form action="#">

                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="password" required autocomplete="off">
                        <label>Password</label>
                    </div>

                    <div class="remember-me">
                        <label><input type="checkbox" >remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>

                    <button type="submit" class="btn">login</button>

                    <div class="login-register">
                        <p>Don't have an account? <a href="#">Register</a></p>
                    </div>

                </form>

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

</body>
</html>