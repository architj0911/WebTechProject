<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archit ecommerce website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar Here-->
     <header>
        <nav class="navbar flex container">
            <a href="#" class="logo">
                Aran<span>Buy.</span>
            </a>

            <ul class="navlist flex">
                <li>
                    <a href="#" class="link link-active">home</a>
                </li>
                <li>
                    <a href="#best-sale" class="link">shop</a>
                </li>
                <li>
                    <a href="#" class="link">page</a>
                </li>
                <li>
                    <a href="#blog" class="link">blog</a>
                </li>
                <li>
                    <a href="#contact" class="link">contact</a>
                </li>
                <li class="nav-icons flex">
                    <a href="search.html" class="icon" >
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="auth.html" class="icon">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <a href="cart.html" class="icon icon-active cart-icon">
                        <i class="fa-solid fa-shopping-bag"></i>
                        <span class="cart-count">0</span>
                    </a>
                </li>

            </ul>



            <a href="#" class="hamburger">
                <i class="fa-solid fa-bars"></i>
            </a>
        </nav>
     </header>

     <!-- sections here-->
      <main>
        <section class="hero" id="hero">
            <div class="hero-content flex">
                <div>
                    <h3>Summer Fashion</h3>
                    <h1>New Collection</h1>
                    <h4> Big sale of this week up to <span>30%</span> </h4>
                    <a href="#best-sale">
                        <button>Shop Now</button>
                    </a>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="category-container container">
                <div class="category">
                    <img src="images/for men.jpg">
                    <a href="#best-sale">
                        <button>for Men's</button>
                    </a>
                </div>
                <div class="category">
                    <img src="images/for kids.jpg">
                    <a href="#best-sale">
                        <button>for Kids</button>
                    </a>
                </div>
                <div class="category">
                    <img src="images/for accessories.jpg">
                    <a href="#best-sale">
                        <button>Accessories</button>
                    </a>
                </div>
                <div class="category">
                    <img src="images/for women.jpg">
                    <a href="#best-sale">
                       <button>for Women's</button> 
                    </a>
                </div>

            </div>

        </section>

        <section class="section">
            <div>
            <h2>New Product</h2>
            <div class="line"></div>

            <div class="card-container flex wrap">
                <div class="card">
                    <img src="images/card-image1 (1).jpg">
                    <div class="card-content">
                        <p class="title">
                            Grey Shoes Men Velour Collection
                        </p> 
                        <div class="price">
                            <span class="amount">Rs:2000</span>
                        </div>
                        <button class="add-to-cart"
                        data-id="1"
                        data-name="Grey Shoes Men Velour Collection"
                        data-price="2000"
                        data-image="images/card-image1 (1).jpg">Add to Cart</button>
                    </div>
                </div>
                <div class="card sale">
                    <img src="images/card-image2.jpg">
                    <div class="card-content">
                        <p class="title">
                            Leather Black Handbag Velour Collection
                        </p> 
                        <div class="price">
                            <del>Rs:5000</del>
                            <span class="amount">Rs:4200</span>
                        </div>
                        <button class="add-to-cart"
                        data-id="2"
                        data-name="Leather Black Handbag Velour Collection"
                        data-price="4200"
                        data-image="images/card-image2.jpg">Add to Cart</button>
                    </div>
                </div>
                <div class="card new">
                    <img src="images/card-image3.jpg">
                    <div class="card-content">
                        <p class="title">
                            Grey Overcoat Velour Collection
                        </p> 
                          <div class="price">
                            <span class="amount">Rs:4000</span>
                        </div>
                        <button class="add-to-cart"
                         data-id="3"
                         data-name="Grey Overcoat Velour Collection"
                         data-price="4000"
                         data-image="images/card-image3.jpg">Add to Cart</button>
                    </div>
                </div>
                <div class="card new">
                    <img src="images/card-image4.jpg">
                    <div class="card-content">
                        <p class="title">
                             Black Overcoat Velour Collection
                        </p> 
                        <div class="price">
                            <span class="amount">Rs:6000</span>
                        </div>
                        <button class="add-to-cart"
                         data-id="4"
                         data-name="Black Overcoat Velour Collection"
                         data-price="6000"
                         data-image="images/card-image4.jpg">Add to Cart</button>
                    </div>
                </div>
            </div>
            </div>
     
        </section>

        <section class="section">
            <div class="sale-container">
                <h3>New Trend 2026</h3>
                <h1>Women's Collection</h1>
                <div class="line"></div>
                <h4>Big sale of this week</h4>
                <a href="#best-sale">
                    <button>shop now</button>
                </a>
            </div>
        </section>


        <section class="section" id="best-sale">
            <div class="container">
                <h2>Best Sale</h2>
                <div class="line"></div>
                <div class="card-container flex wrap">
                <div class="card">
                    <img src="images/card-image5.jpg">
                    <div class="card-content">
                        <p class="title">
                            Bagpack 20L Sovereign Collection
                        </p> 
                        <div class="price">
                            <span class="amount">Rs:3700</span>
                        </div>
                        <button class="add-to-cart"
                         data-id="5"
                         data-name="Backpack 20L Sovereign Collection"
                         data-price="3700"
                         data-image="images/card-image5.jpg">Add to Cart</button>
                    </div>
                </div>
                <div class="card new">
                    <img src="images/card-image6.jpg">
                    <div class="card-content">
                        <p class="title">
                            Folding Umbrella Sovereign Collection
                        </p> 
                        <div class="price">
                            <span class="amount">Rs:2000</span>
                        </div>
                        <button class="add-to-cart"
                         data-id="6"
                         data-name="Folding Umbrella Sovereign Collection"
                         data-price="2000"
                         data-image="images/card-image6.jpg">Add to Cart</button>
                    </div>
                </div>
                <div class="card ">
                    <img src="images/card-image7 (1).jpg">
                    <div class="card-content">
                        <p class="title">
                            Braided Leather Bracelet Sovereign Collection
                        </p> 
                          <div class="price">
                            <span class="amount">Rs:2000</span>
                        </div>
                        <button class="add-to-cart"
                         data-id="7"
                         data-name="Braided Leather Bracelet Sovereign Collection"
                         data-price="2000"
                         data-image="images/card-image7 (1).jpg">Add to Cart</button>
                    </div>
                </div>
                <div class="card sale">
                    <img src="images/card-image8.jpg">
                    <div class="card-content">
                        <p class="title">
                             luxury suspenders / braces
                        </p> 
                        <div class="price">
                            <del>Rs: 4000</del>
                            <span class="amount">Rs:2000</span>
                        </div>
                        <button class="add-to-cart"
                         data-id="8"
                         data-name="Luxury Suspenders / Braces"
                         data-price="2000"
                         data-image="images/card-image8.jpg">Add to Cart</button>
                    </div>
                </div>

            </div>

            <div class="card-container flex wrap">
                <div class="card sale">
                    <img src="images/card-image9.jpg">
                    <div class="card-content">
                        <p class="title">
                            Grey Boots Women Midnight Vault
                        </p> 
                        <div class="price">
                            <del>Rs:5000</del>
                            <span class="amount">Rs:3500</span>
                        </div>
                        <button class="add-to-cart"
                         data-id="9"
                         data-name="Grey Boots Women Midnight Vault"
                         data-price="3500"
                         data-image="images/card-image9.jpg">Add to Cart</button>
                    </div>
                </div>
                <div class="card new">
                    <img src="images/card-image10.jpg">
                    <div class="card-content">
                        <p class="title">
                            Grey Handbag Midnight Vault
                        </p> 
                        <div class="price">
                            <span class="amount">Rs:5500</span>
                        </div>
                        <button class="add-to-cart"
                         data-id="10"
                         data-name="Grey Handbag Midnight Vault"
                         data-price="5500"
                         data-image="images/card-image10.jpg">Add to Cart</button>
                    </div>
                </div>
                <div class="card ">
                    <img src="images/card-image11.jpg">
                    <div class="card-content">
                        <p class="title">
                            Black leather Bagpack Midnight Vault
                        </p> 
                          <div class="price">
                            <span class="amount">Rs:3800</span>
                        </div>
                        <button class="add-to-cart"
                         data-id="11"
                         data-name="Black Leather Backpack Midnight Vault"
                         data-price="3800"
                         data-image="images/card-image11.jpg">Add to Cart</button>
                    </div>
                </div>
                <div class="card sale">
                    <img src="images/card-image12.jpg">
                    <div class="card-content">
                        <p class="title">
                             Green Casual OverShirt  
                        </p> 
                        <div class="price">
                            <del>Rs:3500</del>
                            <span class="amount">Rs:2500</span>
                        </div>
                        <button class="add-to-cart"
                         data-id="12"
                         data-name="Green Casual Overshirt"
                         data-price="2500"
                         data-image="images/card-image12.jpg">Add to Cart</button>
                    </div>
                </div>

            </div>
            <div class="card-container flex wrap">
                <div class="card sale">
                    <img src="images/card-13.jpg">
                    <div class="card-content">
                        <p class="title">
                            Women's Aurora Gold Mesh Watch
                        </p> 
                        <div class="price">
                            <del>Rs:12000</del>
                            <span class="amount">Rs:9500</span>
                        </div>
                        <button class="add-to-cart"
                         data-id="13"
                         data-name="Women's Aurora Gold Mesh Watch"
                         data-price="9500"
                         data-image="images/card-13.jpg">Add to Cart</button>
                    </div>
                </div>
                <div class="card new">
                    <img src="images/card-14.jpg">
                    <div class="card-content">
                        <p class="title">
                            Bluewave Classic Hoodie
                        </p> 
                        <div class="price">
                            <span class="amount">Rs:3000</span>
                        </div>
                        <button class="add-to-cart"
                         data-id="14"
                         data-name="Bluewave Classic Hoodie"
                         data-price="3000"
                         data-image="images/card-14.jpg">Add to Cart</button>
                    </div>
                </div>
                <div class="card ">
                    <img src="images/card-15.jpg">
                    <div class="card-content">
                        <p class="title">
                            Earthline Utility Jacket
                        </p> 
                          <div class="price">
                            <span class="amount">Rs:4800</span>
                        </div>
                        <button class="add-to-cart"
                         data-id="15"
                         data-name="Earthline Utility Jacket"
                         data-price="4800"
                         data-image="images/card-15.jpg">Add to Cart</button>
                    </div>
                </div>
                <div class="card sale">
                    <img src="images/card-16.jpg">
                    <div class="card-content">
                        <p class="title">
                             Desert Beige Utility Pants 
                        </p> 
                        <div class="price">
                            <del>Rs:3500</del>
                            <span class="amount">Rs:2500</span>
                        </div>
                        <button class="add-to-cart"
                         data-id="16"
                         data-name="Desert Beige Utility Pants"
                         data-price="2500"
                         data-image="images/card-16.jpg">Add to Cart</button>
                    </div>
                </div>

            </div>

            </div>
        </section>

        <section class="section">
            <div class="secondary-bg">
                <div class="container flex wrap">
                    <div class="box">
                        <i class="fa-solid fa-truck"></i>
                        <h5>
                            <a href="#">Free Shipping</a>
                        </h5>
                        <p class="des">Free Shipping on order over Rs:2000</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-money-bill-1"></i>
                        <h5>
                            <a href="#">Cash On Delivery</a>
                        </h5>
                        <p class="des">The Internet Trend To Repeat</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-gift"></i>
                        <h5>
                            <a href="#">Gift For All</a>
                        </h5>
                        <p class="des">Recieve Gift when Subscribe</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-clock"></i>
                        <h5>
                            <a href="#">Opening All Week</a>
                        </h5>
                        <p class="des">6:00 am - 17:00 pm</p>
                    </div>

                </div>
            </div>
        </section>

        <section class="section" id="blog">
            <div class="container">
                <h2>New Latest</h2>
                <div class="line"></div>

                <div class="blog-container flex wrap">
                    <div class="blog-box">
                        <img src="images/news-image1 (1).jpg">
                        <div class="blog-content">
                            <h3 class="heading">
                                <a href="#">New Trend 2026</a>
                            </h3>
                            <p class="des">Discover the latest fashion styles crafted for modern elegance and everyday comfort. Step into the season with confidence and class.</p>
                            <a href="#" class="blog-link">Read More</a>
                        </div>
                    </div>
                    <div class="blog-box">
                        <img src="images/news-image2 (1).jpg">
                        <div class="blog-content">
                            <h3 class="heading">
                                <a href="#">New Trend 2026</a>
                            </h3>
                            <p class="des">Fresh designs, bold looks, and timeless fashion essentials made to match your lifestyle and elevate your wardrobe.</p>
                            <a href="#" class="blog-link">Read More</a>
                        </div>
                    </div>
                    <div class="blog-box">
                        <img src="images/news-image3 (1).jpg">
                        <div class="blog-content">
                            <h3 class="heading">
                                <a href="#">New Trend 2026</a>
                            </h3>
                            <p class="des">A refined collection that blends contemporary fashion with premium quality, designed for those who define their own style.</p>
                            <a href="#" class="blog-link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="secondary-bg">
               <form class="container flex wrap">
                <h3>Sign up for Send Newsletter</h3>

                <div class="input-container flex">
                    <input type="email" name="email" id="email" placeholder="Your Email" autocomplete="off">
                    <a href="#hero" class="subscribe-btn">Subscribe</a>
                </div>
                <div class="social-icons flex">
                    <a href="https://www.facebook.com/NIET.Gr.Noida/" class="media" target="_blank">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://x.com/niet_grnoida?lang=en" class="media" target="_blank">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://www.niet.co.in/" class="media" target="_blank">
                        <i class="fa-brands fa-google"></i>
                    </a>
                    <a href="https://www.behance.net/nietgreater1" class="media" target="_blank">
                        <i class="fa-brands fa-behance"></i>
                    </a>
                    <a href="https://www.linkedin.com/school/noida-institute-of-engineering-technology/posts/?feedView=all" class="media" target="_blank">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
               </form>
            </div>
        </section>
      </main>

      <!--Footer Here-->
      <footer class="section" id="contact">
        <div class=" footer-container container flex wrap">
        <ul class="footer-list">
            <li>
                <a href="about.html" class="footer-link">about us</a>
            </li>
            <li>
                <a href="#hero" class="footer-link">Online Store</a>
            </li>
            <li>
                <a href="#blog" class="footer-link">Blog</a>
            </li>
            <li>
                <a href="#footer" class="footer-link">Contact Us</a>
            </li>
        </ul>
        <ul class="footer-list">
            <li>
                <a href="auth.html" class="footer-link">login / register</a>
            </li>
            <li>
                <a href="cart.html" class="footer-link">Your Cart</a>
            </li>
            <li>
                <a href="cart.html" class="footer-link">Wishlist</a>
            </li>
            <li>
                <a href="cart.html" class="footer-link">Your Checkout</a>
            </li>
        </ul>
        <ul class="footer-list">
            <li>
                <a href="faqs.html" class="footer-link">FAQs</a>
            </li>
            <li>
                <a href="terms.html" class="footer-link">Terms of Services</a>
            </li>
            <li>
                <a href="privacy.html" class="footer-link">Privacy Policy</a>
            </li>
            <li>
                <a href="#hero" class="footer-link" >Returns</a>
            </li>
        </ul>
        <ul class="footer-list">
            <li class="footer-logo">
            <a href="#" class="logo">
                Aran<span>Buy.</span>
            </a>
            </li>
            <li>
                <p class="detail">NIET ,Greater Noida</p>
            </li>
            <li>
                <p class="detail">aranbuy@gmail.com</p>
            </li>
            <li>
                <p class="detail">+91 98134 40164</p>
            </li>
        </ul>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy;2026 <a href="#" class="footer-link">AranBuy.</a>
            </p>
        </div>
      </footer>
      <script src="cart-utils.js"></script>
      <script src="./main.js"></script>

</body>
</html>