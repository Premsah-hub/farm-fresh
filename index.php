<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmFresh Marketplace</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if (isset($_GET['msg'])) {

    if ($_GET['msg'] == "farmer_success") {
        echo "<div style='background:#d4edda;color:#155724;padding:12px;text-align:center;font-weight:bold;'>
        Farmer Registered Successfully!
        </div>";
    }

    if ($_GET['msg'] == "customer_success") {
        echo "<div style='background:#cce5ff;color:#004085;padding:12px;text-align:center;font-weight:bold;'>
        Customer Registered Successfully!
        </div>";
    }

    if ($_GET['msg'] == "error") {
        echo "<div style='background:#f8d7da;color:#721c24;padding:12px;text-align:center;font-weight:bold;'>
        Registration Failed. Try Again!
        </div>";
    }
}
?>

<header>
    <h1>
        FarmFresh 🛒 
        <span id="cartCount">0</span> |
        ₹<span id="cartTotal">0</span>
    </h1>

    <nav>
        <a href="#">Home</a>
        <a href="#">Products</a>
        <a href="#">Contact</a>
    </nav>
</header>

<section class="hero">
    <h2>Fresh Produce Direct From Farmers</h2>
    <p>Connecting farmers and customers through a simple online marketplace.</p>
</section>

<section class="ai-box">
    <h2>FarmFresh AI Assistant 🤖</h2>

    <input type="text" id="aiInput" placeholder="Ask: Is tomato fresh? Where is farmer from?">
    <button onclick="askAI()">Ask</button>

    <p id="aiReply"></p>
</section>

<section class="search">
    <input type="text" id="searchInput" placeholder="Search products...">
</section>

<h2 style="text-align:center; margin-top:20px;">Featured Products</h2>

<section class="products" id="productList">

    <div class="card">
        <img src="https://images-prod.healthline.com/hlcmsresource/images/AN_images/tomatoes-1296x728-feature.jpg">
        <h3>Tomato</h3>
        <p>₹40/kg</p>
        <button class="buy-btn" data-price="40">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://m.media-amazon.com/images/I/61-aPSbxU6S._AC_UF894,1000_QL80_.jpg">
        <h3>Potato</h3>
        <p>₹30/kg</p>
        <button class="buy-btn" data-price="30">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://m.media-amazon.com/images/I/71oLF0BPXqL._AC_UF1000,1000_QL80_.jpg">
        <h3>Apple</h3>
        <p>₹120/kg</p>
        <button class="buy-btn" data-price="120">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://m.media-amazon.com/images/I/51DJ-9xkuQL.jpg">
        <h3>Onion</h3>
        <p>₹35/kg</p>
        <button class="buy-btn" data-price="35">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://blog-images-1.pharmeasy.in/blog/production/wp-content/uploads/2021/01/30152155/shutterstock_518328943-1.jpg">
        <h3>Banana</h3>
        <p>₹60/dozen</p>
        <button class="buy-btn" data-price="60">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://www.labelle.in/blog/wp-content/uploads/2026/03/Benefits-of-Carrot.jpg">
        <h3>Carrot</h3>
        <p>₹50/kg</p>
        <button class="buy-btn" data-price="50">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://gardenerspath.com/wp-content/uploads/2021/05/Types-of-Cucumbers-FB.jpg">
        <h3>Cucumber</h3>
        <p>₹25/kg</p>
        <button class="buy-btn" data-price="25">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://ichef.bbci.co.uk/images/ic/1040x1040/p06hk0h6.jpg">
        <h3>Mango</h3>
        <p>₹150/kg</p>
        <button class="buy-btn" data-price="150">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://worldwidefruit.in/wp-content/uploads/2019/05/grapes1.jpg">
        <h3>Grapes</h3>
        <p>₹90/kg</p>
        <button class="buy-btn" data-price="90">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://www.health.com/thmb/OZgW2YQtFb9qJ3PbySNei3YdgPw=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Health-Stocksy_txp5e95690asrw300_Medium_934585-e870449543284eed8aa4be52fc09a4ed.jpg">
        <h3>Orange</h3>
        <p>₹80/kg</p>
        <button class="buy-btn" data-price="80">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://www.growingproduce.com/wp-content/uploads/2025/12/w_Bahama-Watermelon-Syngenta_gallery.jpg">
        <h3>Watermelon</h3>
        <p>₹25/kg</p>
        <button class="buy-btn" data-price="25">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://healthnewshub.org/wp-content/uploads/2025/05/GettyImages-1395136631.jpg">
        <h3>Pomegranate</h3>
        <p>₹160/kg</p>
        <button class="buy-btn" data-price="160">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://greentokri.com/cdn/shop/files/Spinach_Bundle_AI_generated.jpg">
        <h3>Spinach</h3>
        <p>₹20/bunch</p>
        <button class="buy-btn" data-price="20">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://m.media-amazon.com/images/I/61Iaw39VGPL._AC_UF1000,1000_QL80_.jpg">
        <h3>Cauliflower</h3>
        <p>₹45/kg</p>
        <button class="buy-btn" data-price="45">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://rukminim2.flixcart.com/image/480/640/xif0q/plant-seed/d/s/k/325-brocoli-hyvrid-vegetable-seeds-b927-kanaya-original-imagggrbbrqmn7zf.jpeg">
        <h3>Broccoli</h3>
        <p>₹70/kg</p>
        <button class="buy-btn" data-price="70">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://thefamilydinnerproject.org/wp-content/uploads/2013/09/Green-bean-lime.jpg">
        <h3>Beans</h3>
        <p>₹55/kg</p>
        <button class="buy-btn" data-price="55">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://www.farmatma.in/wp-content/uploads/2017/12/garlic-cultivation.jpg">
        <h3>Garlic</h3>
        <p>₹200/kg</p>
        <button class="buy-btn" data-price="200">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://www.chandigarhayurvedcentre.com/wp-content/uploads/2022/04/GINGER.jpg">
        <h3>Ginger</h3>
        <p>₹180/kg</p>
        <button class="buy-btn" data-price="180">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://m.media-amazon.com/images/I/61wl85nUOUL._AC_UF894,1000_QL80_.jpg">
        <h3>Lemon</h3>
        <p>₹5/piece</p>
        <button class="buy-btn" data-price="5">Add to Cart</button>
    </div>

    <div class="card">
        <img src="https://www.kikkoman.com/en/cookbook/assets/img/0023_feature2.jpg">
        <h3>Cabbage</h3>
        <p>₹30/kg</p>
        <button class="buy-btn" data-price="30">Add to Cart</button>
    </div>
</section>
<section style="text-align:center; margin:30px;">
    <button onclick="checkout()" class="buy-btn">
        Checkout
    </button>

</section>

<section class="register">
    <h2>Farmer Registration</h2>
    <form action="farmer_register.php" method="POST">
        <input type="text" name="name" required>
        <input type="email" name="email" required>
        <input type="tel" name="phone" required>
        <button type="submit">Register</button>
    </form>
</section>

<section class="register">
    <h2>Customer Registration</h2>
    <form action="customer_register.php" method="POST">
        <input type="text" name="name" required>
        <input type="email" name="email" required>
        <input type="tel" name="phone" required>
        <button type="submit">Register</button>
    </form>
</section>


<section class="register">
    <h2>About FarmFresh</h2>
    <p>FarmFresh connects farmers directly with customers and removes middlemen.</p>
</section>



<section class="register">
    <h2>Contact Us</h2>
    <p>Email: farmfresh@gmail.com</p>
    <p>Phone: +91 9876543210</p>
    <p>Address: Bangalore, Karnataka</p>
</section>


<footer>
    <p>© 2026 FarmFresh Marketplace</p>
</footer>

<script src="script.js"></script>

</body>
</html>