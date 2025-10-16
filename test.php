<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="utf-8" />
  <title>คาเฟ่ ใกล้ฉัน - Premium 5⭐</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap" rel="stylesheet" />
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Favicon -->
  <link rel="icon" type="image/png"
    href="https://img.pikbest.com/png-images/20241101/a-shop-logo-mini-mart-magic_11042317.png!w700wp" />

  <style>
    :root {
      --gold: #d4af37;
      --gold-light: #f6e27a;
      --gold-dark: #b08d34;
      --bg: #0a0a0a;
      --card: #151515;
    }

    html {
      scroll-behavior: smooth
    }

    body {
      font-family: "Kanit", sans-serif;
      background: var(--bg);
      color: #f5f5f5;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #000, #1c1c1c);
      border-bottom: 2px solid var(--gold);
      box-shadow: 0 4px 12px rgba(0, 0, 0, .7);
    }

    .navbar-brand,
    .nav-link {
      color: #f5f5f5 !important
    }

    .navbar-brand img {
      height: 42px;
      margin-right: 8px
    }

    .navbar-nav .nav-link {
      position: relative;
      padding: 8px 16px;
      transition: color .25s ease;
    }

    .navbar-nav .nav-link::after {
      content: "";
      position: absolute;
      left: 50%;
      bottom: 0;
      height: 2px;
      width: 0%;
      background: var(--gold);
      transform: translateX(-50%);
      transition: width .25s ease;
    }

    .navbar-nav .nav-link:hover {
      color: var(--gold) !important;
    }

    .navbar-nav .nav-link:hover::after {
      width: 60%;
    }

    .navbar-nav .nav-link.active {
      color: #000 !important;
      font-weight: 700;
      background: linear-gradient(45deg, var(--gold), var(--gold-light));
      border-radius: 22px;
    }

    .navbar-nav .nav-link.active::after {
      width: 0;
    }

    h2 {
      color: var(--gold);
      font-weight: 600
    }

    /* Cards */
    .card {
      border: none;
      border-radius: 1rem;
      overflow: hidden;
      background: var(--card);
      color: #fff;
      box-shadow: 0 5px 18px rgba(0, 0, 0, .6);
      transition: .35s ease;
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 30px rgba(212, 175, 55, .35)
    }

    .card img {
      height: 170px;
      object-fit: cover
    }

    .btn-gold {
      background: linear-gradient(45deg, var(--gold), var(--gold-light));
      color: #000;
      font-weight: 600;
      border-radius: 30px;
      border: none;
      transition: .25s;
    }

    .btn-gold:hover {
      background: linear-gradient(45deg, var(--gold-dark), var(--gold));
      color: #fff
    }

    .review-card {
      border-left: 5px solid var(--gold);
      padding: 20px;
      background: #1c1c1c;
      font-style: italic;
      position: relative;
      border-radius: 12px;
    }

    .review-card:before {
      content: "“";
      font-size: 4rem;
      color: var(--gold);
      position: absolute;
      top: -10px;
      left: 10px;
      opacity: .3
    }

    footer {
      background: #000;
      border-top: 2px solid var(--gold);
      padding: 20px
    }

    footer p {
      margin: 0;
      color: #bbb
    }

    /* Fade-in Animation */
    .reveal {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity .7s, transform .7s;
    }

    .reveal.visible {
      opacity: 1;
      transform: none;
    }

    /* Receipt Box */
    .receipt-box {
      background: #fff;
      color: #000;
      /* ฟอนต์เป็นสีดำ */
      padding: 20px;
      border-radius: 10px;
      font-size: 16px;
    }

    .receipt-box h4 {
      text-align: center;
      font-weight: bold;
    }
  </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="80" tabindex="0">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="https://img.pikbest.com/png-images/20241101/a-shop-logo-mini-mart-magic_11042317.png!w700wp"
          alt="โลโก้">
        คาเฟ่ ใกล้ฉัน
      </a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul id="mainNav" class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#dashboard">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="#snack-section">Age</a></li>
          <li class="nav-item"><a class="nav-link" href="#gender">Gender</a></li>
          <li class="nav-item"><a class="nav-link" href="#reviews">รีวิวลูกค้า</a></li>
          <li class="nav-item"><a class="nav-link" href="#location">Location</a></li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">
              🛒 ตะกร้า <span id="cartCount" class="badge bg-danger">0</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Dashboard -->
  <section id="dashboard" class="container mt-5 reveal">
    <h2>📊 Dashboard</h2>
    <div class="card p-3 mb-4">
      <canvas id="ageChart" height="96"></canvas>
    </div>
  </section>

  <!-- Snack Menu -->
  <section id="snack-section" class="container mt-5 reveal">
    <h2>🍪 เมนูขนม</h2>
    <div class="row g-4 mt-3">
      <div class="col-md-3">
        <div class="card text-center"><img src="https://www.pngmart.com/files/15/Potato-Chips-PNG-Photo.png">
          <div class="p-3">
            <h5>มันฝรั่งทอด</h5>
            <p>20 บาท</p><button class="btn btn-gold btn-sm"
              onclick="addToCart('มันฝรั่งทอด',20,'https://www.pngmart.com/files/15/Potato-Chips-PNG-Photo.png')">🛒
              Add</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center"><img src="https://www.pngmart.com/files/15/Chocolate-Bar-PNG-Image.png">
          <div class="p-3">
            <h5>ช็อกโกแลตบาร์</h5>
            <p>25 บาท</p><button class="btn btn-gold btn-sm"
              onclick="addToCart('ช็อกโกแลตบาร์',25,'https://www.pngmart.com/files/15/Chocolate-Bar-PNG-Image.png')">🛒
              Add</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center"><img src="https://www.pngmart.com/files/15/Biscuits-PNG-Transparent.png">
          <div class="p-3">
            <h5>บิสกิต</h5>
            <p>15 บาท</p><button class="btn btn-gold btn-sm"
              onclick="addToCart('บิสกิต',15,'https://www.pngmart.com/files/15/Biscuits-PNG-Transparent.png')">🛒
              Add</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center"><img src="https://www.pngmart.com/files/15/Wafer-PNG-Pic.png">
          <div class="p-3">
            <h5>เวเฟอร์</h5>
            <p>10 บาท</p><button class="btn btn-gold btn-sm"
              onclick="addToCart('เวเฟอร์',10,'https://www.pngmart.com/files/15/Wafer-PNG-Pic.png')">🛒 Add</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Drinks -->
  <section id="gender" class="container mt-5 reveal">
    <h2>☕ เมนูชา กาแฟ</h2>
    <div class="row g-4 mt-3">
      <div class="col-md-3">
        <div class="card text-center"><img src="https://www.pngmart.com/files/15/Iced-Tea-PNG-Transparent.png">
          <div class="p-3">
            <h5>ชาไทยเย็น</h5>
            <p>35 บาท</p><button class="btn btn-gold btn-sm"
              onclick="addToCart('ชาไทยเย็น',35,'https://www.pngmart.com/files/15/Iced-Tea-PNG-Transparent.png')">🛒
              Add</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center"><img src="https://www.pngmart.com/files/15/Iced-Tea-Lemon-PNG.png">
          <div class="p-3">
            <h5>ชามะนาว</h5>
            <p>30 บาท</p><button class="btn btn-gold btn-sm"
              onclick="addToCart('ชามะนาว',30,'https://www.pngmart.com/files/15/Iced-Tea-Lemon-PNG.png')">🛒
              Add</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center"><img src="https://www.pngmart.com/files/15/Coffee-PNG-Free-Download.png">
          <div class="p-3">
            <h5>กาแฟดำ</h5>
            <p>40 บาท</p><button class="btn btn-gold btn-sm"
              onclick="addToCart('กาแฟดำ',40,'https://www.pngmart.com/files/15/Coffee-PNG-Free-Download.png')">🛒
              Add</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center"><img src="https://www.pngmart.com/files/15/Iced-Coffee-Latte-PNG-Clipart.png">
          <div class="p-3">
            <h5>ลาเต้เย็น</h5>
            <p>45 บาท</p><button class="btn btn-gold btn-sm"
              onclick="addToCart('ลาเต้เย็น',45,'https://www.pngmart.com/files/15/Iced-Coffee-Latte-PNG-Clipart.png')">🛒
              Add</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Reviews -->
  <section id="reviews" class="container mt-5 reveal">
    <h2>🌟 รีวิวลูกค้า</h2>
    <div class="row g-4 mt-3">
      <div class="col-md-4">
        <div class="review-card">⭐⭐⭐⭐⭐<p>“บริการไวมากครับ”</p><small>- สมชาย</small></div>
      </div>
      <div class="col-md-4">
        <div class="review-card">⭐⭐⭐⭐<p>“กาแฟหอมอร่อย”</p><small>- กมล</small></div>
      </div>
      <div class="col-md-4">
        <div class="review-card">⭐⭐⭐⭐⭐<p>“ร้านสะอาดและหรูหรา”</p><small>- ศิริพร</small></div>
      </div>
    </div>
  </section>

  <!-- Location -->
  <section id="location" class="container mt-5 reveal">
    <h2>📍 Location คาเฟ่ ใกล้ฉัน</h2>
    <div class="row g-4 mt-3">
      <div class="col-md-8">
        <div class="card">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.873348276465!2d100.5296118153844!3d13.736717401243088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29eddd3cd47f9%3A0xe35cc2f9027f51a5!2sSiam%20Paragon!5e0!3m2!1sth!2sth!4v1675845991000!5m2!1sth!2sth"
            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-4 text-white">
          <h4 class="mb-3">☕ คาเฟ่ (สมมติ)</h4>
          <p><b>ที่อยู่:</b> ชั้น 1 Siam Paragon, กรุงเทพฯ</p>
          <p><b>เวลาเปิด:</b> 08.00 – 21.00 น.</p>
          <p><b>เบอร์โทร:</b> 02-123-4567</p>
          <a href="https://goo.gl/maps/3PszK9mMWt82" target="_blank" class="btn btn-gold mt-2">🗺️ เปิดใน Google
            Maps</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center mt-5">
    <p>© 2025 คาเฟ่ ใกล้ฉัน | Premium Luxury Experience ✨</p>
  </footer>

  <!-- Cart Modal -->
  <div class="modal fade" id="cartModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content bg-dark text-white">
        <div class="modal-header border-gold">
          <h5 class="modal-title">🛒 ตะกร้าสินค้า</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <ul id="cartItems" class="list-group list-group-flush bg-dark"></ul>
          <div class="mt-3 text-end">
            <h5>ยอดรวม: <span id="cartTotal">0</span> บาท</h5>
          </div>
        </div>
        <div class="modal-footer border-gold">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
          <button type="button" class="btn btn-gold" data-bs-toggle="modal"
            data-bs-target="#paymentModal">ชำระเงิน</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Payment Modal -->
  <div class="modal fade" id="paymentModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-dark text-white">
        <div class="modal-header">
          <h5 class="modal-title">💳 เลือกวิธีการชำระเงิน</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body text-center">
          <button class="btn btn-gold m-2" onclick="payCash()">💵 เงินสด</button>
          <button class="btn btn-gold m-2" onclick="payQR()">📱 QR Code</button>
          <div id="paymentResult" class="mt-4"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Receipt Modal -->
  <!-- Receipt Modal -->
  <div class="modal fade" id="receiptModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" style="color:#000;">🧾 ใบเสร็จรับเงิน</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="receipt-box">
            <h4>คาเฟ่ ใกล้ฉัน</h4>
            <hr>
            <div id="receiptItems"></div>
            <hr>
            <p><b>รวมทั้งหมด:</b> <span id="receiptTotal"></span> บาท</p>
            <p><b>วิธีการชำระ:</b> <span id="receiptMethod"></span></p>
            <p class="text-center">🙏 ขอบคุณที่ใช้บริการ 🙏</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Scripts -->
  <script>
    // Chart
    new Chart(document.getElementById('ageChart'), {
      type: 'bar',
      data: {
        labels: ['18-25', '26-35', '36-50', '51+'],
        datasets: [{ label: 'ลูกค้า', data: [500, 1200, 800, 300], backgroundColor: ['#d4af37', '#b08d34', '#f6e27a', '#ffe082'] }]
      },
      options: { plugins: { legend: { display: false }, title: { display: true, text: 'จำนวนลูกค้าตามช่วงอายุ', color: '#d4af37' } } }
    });

    // Fade-in
    (function () {
      const els = [...document.querySelectorAll('section'), ...document.querySelectorAll('.card')];
      els.forEach(el => el.classList.add('reveal'));
      const io = new IntersectionObserver(entries => {
        entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); } });
      }, { threshold: 0.15 });
      els.forEach(el => io.observe(el));
    })();

    // Cart
    let cart = [];
    const cartCount = document.getElementById("cartCount");
    const cartItems = document.getElementById("cartItems");
    const cartTotal = document.getElementById("cartTotal");

    function addToCart(name, price, img) {
      const item = cart.find(p => p.name === name);
      if (item) { item.qty++; } else { cart.push({ name, price, img, qty: 1 }); }
      updateCart();
    }

    function updateCart() {
      cartCount.textContent = cart.reduce((a, c) => a + c.qty, 0);
      cartItems.innerHTML = "";
      let total = 0;
      cart.forEach((p, i) => {
        total += p.price * p.qty;
        cartItems.innerHTML += `
        <li class="list-group-item d-flex align-items-center bg-dark text-white">
          <img src="${p.img}" alt="${p.name}" style="width:50px;height:50px;object-fit:cover;border-radius:8px;margin-right:10px;">
          <div class="flex-grow-1">${p.name}<br><small>ราคา ${p.price} บาท</small></div>
          <div class="d-flex align-items-center">
            <button class="btn btn-sm btn-outline-light me-1" onclick="changeQty(${i},-1)">➖</button>
            <span>${p.qty}</span>
            <button class="btn btn-sm btn-outline-light ms-1" onclick="changeQty(${i},1)">➕</button>
          </div>
          <div style="width:90px;text-align:right;">${p.price * p.qty} บาท</div>
          <button class="btn btn-sm btn-danger ms-2" onclick="removeItem(${i})">🗑️</button>
        </li>`;
      });
      cartTotal.textContent = total;
    }

    function changeQty(index, delta) {
      cart[index].qty += delta;
      if (cart[index].qty <= 0) {
        cart.splice(index, 1);
      }
      updateCart();
    }

    function removeItem(index) {
      cart.splice(index, 1);
      updateCart();
    }

    // Payment Functions
    function payCash() {
      generateReceipt("เงินสด");
    }

    function payQR() {
      document.getElementById("paymentResult").innerHTML = `
      <h5>📱 สแกน QR Code เพื่อชำระเงิน</h5>
      <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=PAYMENT-DEMO" 
           alt="QR Code" class="img-fluid mt-2">
      <button class="btn btn-success mt-3" onclick="generateReceipt('QR Code')">✅ ยืนยันการชำระ</button>
    `;
    }

    function generateReceipt(method) {
      let itemsHTML = "";
      let total = 0;
      cart.forEach(item => {
        itemsHTML += `<p>${item.name} x ${item.qty} = ${item.price * item.qty} บาท</p>`;
        total += item.price * item.qty;
      });
      document.getElementById("receiptItems").innerHTML = itemsHTML;
      document.getElementById("receiptTotal").textContent = total;
      document.getElementById("receiptMethod").textContent = method;

      // ปิด modal การจ่ายเงิน แล้วเปิดใบเสร็จ
      const payModal = bootstrap.Modal.getInstance(document.getElementById('paymentModal'));
      payModal.hide();
      new bootstrap.Modal(document.getElementById('receiptModal')).show();

      // ล้างตะกร้า
      cart = [];
      updateCart();
    }
  </script>
</body>

</html>