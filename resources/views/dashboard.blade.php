<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MakananKu dashboard</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Interactive CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href='{{ route("dashboard") }}' class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="">
        <h1 class="sitename">MakananKu</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href='{{ route("dashboard") }}' class="active">Home<br></a></li>
          <li><a href="#Food">Food</a></li>
          <li><a href="#Drink">Drink</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">MakananKu</h1>
            <p data-aos="fade-up" data-aos-delay="100">Kemudahan memesan makanan hanya dengan ujunga jari.</p>
            <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
              <a href="#Food" class="btn-get-started">Pesan Sekarang <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <div id="cart" class="cart">
      <h3>Your Cart</h3>
      <div id="cart-items">
        <p>No items yet...</p>
      </div>
      <button id="payment-button" onclick="saveCartAndProceed()" class="btn btn-primary">Proceed to Payment</button>
    </div>

    <!-- Pricing Section: Food -->
<section id="Food" class="pricing section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Food</h2>
    <p>Makanan<br></p>
  </div>
  <!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">
      <!-- Makanan Items -->
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="pricing-tem">
          <h3>Nasi Goreng Spesial</h3>
          <img class="picture" src="assets/img/mak/nasgor.png" alt="">
          <div class="price1">Rp25.000</div>
          <p>Nasi goreng dengan topping ayam suwir, telur mata sapi, sosis, dan kerupuk.</p>
          <!-- Quantity Input -->
          <div class="quantity-wrapper">
            <label for="qty-nasi-goreng">Qty:</label>
            <input type="number" id="qty-nasi-goreng" class="qty-input" value="1" min="1">
          </div>
          <!-- Add to Cart Button -->
          <button class="btn-buy" onclick="addToCart('Nasi Goreng Spesial', 25000, 'qty-nasi-goreng')">Add to Cart</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="pricing-tem">
          <h3>Mie Ayam Jamur</h3>
          <img class="picture" src="assets/img/mak/miayam.png" alt="">
          <div class="price1">Rp20.000</div>
          <p>Mie lembut dengan potongan ayam berbumbu dan saus jamur gurih.</p>
          <!-- Quantity Input -->
          <div class="quantity-wrapper">
            <label for="qty-miajamur">Qty:</label>
            <input type="number" id="qty-miajamur" class="qty-input" value="1" min="1">
          </div>
          <!-- Add to Cart Button -->
          <button class="btn-buy" onclick="addToCart('Mie Ayam Jamur', 20000, 'qty-miajamur')">Add to Cart</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="pricing-tem">
          <h3>Sate Ayam</h3>
          <img class="picture" src="assets/img/mak/sate.png" alt="">
          <div class="price1">Rp30.000</div>
          <p>Daging ayam empuk dengan bumbu kacang dan lontong.</p>
          <!-- Quantity Input -->
          <div class="quantity-wrapper">
            <label for="qty-sate-ayam">Qty:</label>
            <input type="number" id="qty-sate-ayam" class="qty-input" value="1" min="1">
          </div>
          <!-- Add to Cart Button -->
          <button class="btn-buy" onclick="addToCart('Sate Ayam', 30000, 'qty-sate-ayam')">Add to Cart</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="pricing-tem">
          <h3>Ayam Geprek Keju</h3>
          <img class="picture" src="assets/img/mak/ayam.png" alt="">
          <div class="price1">Rp28.000</div>
          <p>Ayam goreng crispy dengan sambal pedas dan parutan keju melimpah.</p>
          <!-- Quantity Input -->
          <div class="quantity-wrapper">
            <label for="qty-ayam-geprek-keju">Qty:</label>
            <input type="number" id="qty-ayam-geprek-keju" class="qty-input" value="1" min="1">
          </div>
          <!-- Add to Cart Button -->
          <button class="btn-buy" onclick="addToCart('Ayam Geprek Keju', 28000, 'qty-ayam-geprek-keju')">Add to Cart</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
        <div class="pricing-tem">
          <h3>Pecel Lele</h3>
          <img class="picture" src="assets/img/mak/celele.png" alt="">
          <div class="price1">Rp22.000</div>
          <p>Lele goreng dengan sambal terasi, lalapan, dan nasi hangat.</p>
          <!-- Quantity Input -->
          <div class="quantity-wrapper">
            <label for="qty-pecel-lele">Qty:</label>
            <input type="number" id="qty-pecel-lele" class="qty-input" value="1" min="1">
          </div>
          <!-- Add to Cart Button -->
          <button class="btn-buy" onclick="addToCart('Pecel Lele', 22000, 'qty-pecel-lele')">Add to Cart</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
        <div class="pricing-tem">
          <h3>Pizza Mini</h3>
          <img class="picture" src="assets/img/mak/pizza.png" alt="">
          <div class="price1">Rp35.000</div>
          <p>Pizza ukuran kecil dengan topping keju, sosis, dan saus tomat.</p>
          <!-- Quantity Input -->
          <div class="quantity-wrapper">
            <label for="qty-pizza-mini">Qty:</label>
            <input type="number" id="qty-pizza-mini" class="qty-input" value="1" min="1">
          </div>
          <!-- Add to Cart Button -->
          <button class="btn-buy" onclick="addToCart('Pizza Mini', 35000, 'qty-pizza-mini')">Add to Cart</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Pricing Section: Food -->

<!-- Pricing Section: Drink -->
<section id="Drink" class="pricing section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Drink</h2>
    <p>Minuman<br></p>
  </div>
  <!-- End Section Title -->
  
  <div class="container">
    <div class="row gy-4">
      <!-- Minuman Items -->
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="pricing-tem">
          <h3>Es Teh Manis</h3>
          <img class="picture" src="assets/img/min/esteh.png" alt="">
          <div class="price1">Rp7.000</div>
          <p>Teh manis segar dengan es batu.</p>
          <!-- Quantity Input -->
          <div class="quantity-wrapper">
            <label for="qty-es-teh">Qty:</label>
            <input type="number" id="qty-es-teh" class="qty-input" value="1" min="1">
          </div>
          <!-- Add to Cart Button -->
          <button class="btn-buy" onclick="addToCart('Es Teh Manis', 7000, 'qty-es-teh')">Add to Cart</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="pricing-tem">
          <h3>Es Kopi Susu Gula Aren</h3>
          <img class="picture" src="assets/img/min/kopsugul.png" alt="">
          <div class="price1">Rp18.000</div>
          <p>Kopi susu dengan rasa manis alami dari gula aren.</p>
          <!-- Quantity Input -->
          <div class="quantity-wrapper">
            <label for="qty-kopi-susu-aren">Qty:</label>
            <input type="number" id="qty-kopi-susu-aren" class="qty-input" value="1" min="1">
          </div>
          <!-- Add to Cart Button -->
          <button class="btn-buy" onclick="addToCart('Es Kopi Susu Gula Aren', 18000, 'qty-kopi-susu-aren')">Add to Cart</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="pricing-tem">
          <h3>Jus Alpukat</h3>
          <img class="picture" src="assets/img/min/alpukat.png" alt="">
          <div class="price1">Rp15.000</div>
          <p>Jus alpukat segar dengan tambahan susu cokelat.</p>
          <!-- Quantity Input -->
          <div class="quantity-wrapper">
            <label for="qty-jus-alpukat">Qty:</label>
            <input type="number" id="qty-jus-alpukat" class="qty-input" value="1" min="1">
          </div>
          <!-- Add to Cart Button -->
          <button class="btn-buy" onclick="addToCart('Jus Alpukat', 15000, 'qty-jus-alpukat')">Add to Cart</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="pricing-tem">
          <h3>Lemon Tea</h3>
          <img class="picture" src="assets/img/min/letea.png" alt="">
          <div class="price1">Rp10.000</div>
          <p>Minuman teh dengan campuran perasan lemon segar.</p>
          <!-- Quantity Input -->
          <div class="quantity-wrapper">
            <label for="qty-lemon-tea">Qty:</label>
            <input type="number" id="qty-lemon-tea" class="qty-input" value="1" min="1">
          </div>
          <!-- Add to Cart Button -->
          <button class="btn-buy" onclick="addToCart('Lemon Tea', 10000, 'qty-lemon-tea')">Add to Cart</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
        <div class="pricing-tem">
          <h3>Matcha Latte</h3>
          <img class="picture" src="assets/img/min/matcha.png" alt="">
          <div class="price1">Rp25.000</div>
          <p>Minuman berbahan dasar teh hijau dengan susu dan rasa creamy.</p>
          <!-- Quantity Input -->
          <div class="quantity-wrapper">
            <label for="qty-matcha-latte">Qty:</label>
            <input type="number" id="qty-matcha-latte" class="qty-input" value="1" min="1">
          </div>
          <!-- Add to Cart Button -->
          <button class="btn-buy" onclick="addToCart('Matcha Latte', 25000, 'qty-matcha-latte')">Add to Cart</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
        <div class="pricing-tem">
          <h3>Milkshake Cokelat</h3>
          <img class="picture" src="assets/img/min/milcok.png" alt="">
          <div class="price1">Rp20.000</div>
          <p>Milkshake dengan rasa cokelat yang kaya dan topping whipped cream.</p>
          <!-- Quantity Input -->
          <div class="quantity-wrapper">
            <label for="qty-milkshake-coklat">Qty:</label>
            <input type="number" id="qty-milkshake-coklat" class="qty-input" value="1" min="1">
          </div>
          <!-- Add to Cart Button -->
          <button class="btn-buy" onclick="addToCart('Milkshake Coklat', 20000, 'qty-milkshake-coklat')">Add to Cart</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Pricing Section: Drink -->

  <footer id="footer" class="footer">

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">MakananKu</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<script>
  let cart = []; // Global cart array to store items

  // Add item to cart
  function addToCart(itemName, itemPrice, qtyInputId) {
    const qty = parseInt(document.getElementById(qtyInputId).value);

    if (qty <= 0 || isNaN(qty)) {
      alert('Please enter a valid quantity');
      return;
    }

    // Check if the item already exists in the cart
    const existingItem = cart.find(item => item.name === itemName);

    if (existingItem) {
      // Update quantity if item already exists
      existingItem.quantity += qty;
    } else {
      // Add new item to the cart
      cart.push({ name: itemName, price: itemPrice, quantity: qty });
    }

    alert(`${qty} x ${itemName} added to the cart!`);
    saveCart(); // Save the updated cart to localStorage
    updateCartDisplay(); // Refresh UI
  }

  // Subtract item from cart
  function subtractFromCart(itemName) {
    const existingItem = cart.find(item => item.name === itemName);

    if (existingItem) {
      if (existingItem.quantity > 1) {
        // Decrease quantity by 1
        existingItem.quantity -= 1;
      } else {
        // Remove item if quantity is 1
        cart = cart.filter(item => item.name !== itemName);
      }

      saveCart(); // Save the updated cart to localStorage
      updateCartDisplay(); // Refresh UI
    }
  }

  // Update cart display (render items in UI)
  function updateCartDisplay() {
    const cartSection = document.getElementById('cart-items');
    cartSection.innerHTML = ''; // Clear existing content

    if (cart.length === 0) {
      cartSection.innerHTML = '<p>No items yet</p>';
      return;
    }

    cart.forEach(item => {
      const cartItem = document.createElement('div');
      cartItem.className = 'cart-item';
      cartItem.innerHTML = `
        <p>
          ${item.name} x ${item.quantity} = Rp${(item.price * item.quantity).toLocaleString()}
          <button onclick="subtractFromCart('${item.name}')" class="btn btn-sm btn-danger" style="margin-left: 10px;">-</button>
        </p>
      `;
      cartSection.appendChild(cartItem);
    });
  }

  // Save cart to localStorage
  function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
  }

  // Load cart from localStorage
  function loadCart() {
    const savedCart = localStorage.getItem('cart');
    if (savedCart) {
      cart = JSON.parse(savedCart); // Update the global cart array
      updateCartDisplay(); // Refresh UI
    }
  }

  // Initialize hover effects for cart section
  function initCartHoverEffects() {
    const cartSection = document.getElementById('cart');
    if (cartSection) {
      // Set default opacity
      cartSection.style.opacity = "0.5";

      // Add hover effects
      cartSection.addEventListener("mouseenter", () => {
        cartSection.style.opacity = "1";
      });

      cartSection.addEventListener("mouseleave", () => {
        cartSection.style.opacity = "0.5";
      });
    }
  }

  function saveCartAndProceed() {
        const cart = JSON.parse(localStorage.getItem('cart')); // Assume the cart is stored in localStorage
        if (cart) {
            fetch('{{ route("cart") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ cart })
            })
                .then(response => {
                    if (response.ok) {
                        window.location.href = '{{ route("payment") }}'; // Redirect to payment page
                    } else {
                        alert('Failed to save cart data.');
                    }
                });
        } else {
            alert('Cart is empty!');
        }
    }

  // Run on page load
  window.onload = () => {
    loadCart(); // Load cart from localStorage
    initCartHoverEffects(); // Initialize hover effects
  };
</script>