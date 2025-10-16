<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="utf-8" />
  <title>โม | PHP Web Developer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <style>
    :root {
      --gold: #d4af37;
      --gold-light: #f8e9a1;
      --bg-dark: #0f0f0f;
      --bg-light: #1a1a1a;
      --text: #f5f5f5;
      --card-glass: rgba(255, 255, 255, 0.06);
    }

    body {
      font-family: "Kanit", sans-serif;
      background: radial-gradient(circle at top, #141414 0%, #000 100%);
      color: var(--text);
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    h1, h2, h3, h4, h5 {
      color: var(--gold);
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    h2 {
      font-size: 1.8rem;
      border-left: 4px solid var(--gold);
      padding-left: 14px;
      margin-bottom: 1.5rem;
    }

    /* Hero */
    .hero {
      text-align: center;
      padding: 90px 20px 70px;
      background: linear-gradient(180deg, #000 0%, #1b1b1b 100%);
      border-bottom: 1px solid rgba(212, 175, 55, 0.3);
      position: relative;
      overflow: hidden;
    }

    .hero::after {
      content: "";
      position: absolute;
      top: -150px;
      left: 50%;
      width: 400px;
      height: 400px;
      background: radial-gradient(circle, rgba(212,175,55,0.3) 0%, transparent 70%);
      transform: translateX(-50%);
      filter: blur(60px);
    }

    .hero img {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      border: 2.5px solid var(--gold);
      object-fit: cover;
      box-shadow: 0 0 25px rgba(212,175,55,0.3);
      z-index: 2;
      position: relative;
    }

    .hero h1 {
      font-size: 2.4rem;
      margin-top: 18px;
    }

    .hero p {
      font-size: 1.15rem;
      color: #ccc;
      max-width: 550px;
      margin: 10px auto 0;
    }

    .btn-gold {
      background: linear-gradient(45deg, var(--gold), var(--gold-light));
      border: none;
      color: #000;
      font-weight: 600;
      border-radius: 40px;
      padding: 10px 28px;
      transition: 0.25s;
      margin-top: 20px;
      z-index: 2;
      position: relative;
    }

    .btn-gold:hover {
      transform: translateY(-2px);
      background: linear-gradient(45deg, var(--gold-light), var(--gold));
      box-shadow: 0 0 15px rgba(212, 175, 55, 0.4);
    }

    /* Sections */
    .section {
      padding: 80px 0;
    }

    .divider {
      width: 80px;
      height: 3px;
      margin: 15px auto 50px;
      background: linear-gradient(to right, transparent, var(--gold), transparent);
      border-radius: 3px;
    }

    .card {
      background: var(--card-glass);
      border: 1px solid rgba(212, 175, 55, 0.15);
      border-radius: 18px;
      backdrop-filter: blur(10px);
      transition: 0.3s;
      padding: 25px;
      color: var(--text);
    }

    .card:hover {
      transform: translateY(-5px);
      border-color: var(--gold);
      box-shadow: 0 0 20px rgba(212,175,55,0.15);
    }

    .metric {
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--gold);
    }

    .metric-label {
      color: #aaa;
      font-size: 0.95rem;
      letter-spacing: 0.3px;
    }

    .timeline {
      border-left: 2px solid var(--gold);
      margin-left: 20px;
      padding-left: 20px;
    }

    .timeline .item {
      margin-bottom: 28px;
      position: relative;
    }

    .timeline .item::before {
      content: "";
      position: absolute;
      left: -30px;
      top: 7px;
      width: 12px;
      height: 12px;
      background: var(--gold);
      border-radius: 50%;
      box-shadow: 0 0 10px var(--gold);
    }

    footer {
      background: #0a0a0a;
      color: #888;
      border-top: 1px solid rgba(212,175,55,0.3);
      padding: 20px;
      font-size: 0.9rem;
    }

    /* Animation */
    [data-animate] {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.8s ease;
    }

    [data-animate].visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>

<body>
  <!-- Hero -->
  <section class="hero">
    <img src="https://i.pravatar.cc/200?img=12" alt="โม" />
    <h1>โม</h1>
    <p>PHP Web Developer ที่รักการพัฒนาเว็บให้มีประสิทธิภาพ ปลอดภัย และสวยงาม</p>
    <br>
    <a href="/dev/doc/resume.pdf" class="btn-gold mt-3" download>📄 ดาวน์โหลด Resume</a>
  </section>

  <!-- KPI -->
  <section class="section container text-center" data-animate>
    <div class="divider"></div>
    <div class="row g-4">
      <div class="col-md-3 col-6"><div class="card"><div class="metric">28+</div><div class="metric-label">โปรเจกต์</div></div></div>
      <div class="col-md-3 col-6"><div class="card"><div class="metric">45+</div><div class="metric-label">API / Interfaces</div></div></div>
      <div class="col-md-3 col-6"><div class="card"><div class="metric">99%</div><div class="metric-label">Uptime</div></div></div>
      <div class="col-md-3 col-6"><div class="card"><div class="metric">120+</div><div class="metric-label">PDF / Excel</div></div></div>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills" class="section container" data-animate>
    <h2>ทักษะหลัก</h2>
    <div class="divider"></div>
    <canvas id="skillChart" height="120"></canvas>
  </section>

  <!-- Experience -->
  <section id="experience" class="section container" data-animate>
    <h2>ประสบการณ์ทำงาน</h2>
    <div class="divider"></div>
    <div class="timeline">
      <div class="item">
        <h5>โครงการระบบ HR/ERP</h5>
        <p>พัฒนา API, ปรับปรุงระบบ Auth, ออกแบบ Dashboard และ PDF Reports</p>
      </div>
      <div class="item">
        <h5>ระบบจองหอพักนิสิต</h5>
        <p>ออกแบบโควต้า, Transaction Handling, เพิ่มประสิทธิภาพ Query</p>
      </div>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="section container" data-animate>
    <h2>ผลงานเด่น</h2>
    <div class="divider"></div>
    <div class="row g-4">
      <div class="col-md-4"><div class="card h-100"><h5>HR Dashboard</h5><p>สรุป KPI และภาระงาน พร้อม Export PDF/Excel</p></div></div>
      <div class="col-md-4"><div class="card h-100"><h5>JWT API Gateway</h5><p>ระบบ Auth แบบ Secure: Rotating Token, Blacklist, Redis</p></div></div>
      <div class="col-md-4"><div class="card h-100"><h5>Dorm Booking Engine</h5><p>ตรรกะโควต้า + การล็อกข้อมูลหลายตาราง + รองรับผู้ใช้พร้อมกัน</p></div></div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="section container" data-animate>
    <h2>ติดต่อ</h2>
    <div class="divider"></div>
    <div class="card p-4">
      <p><b>📧</b> you@example.com</p>
      <p><b>📞</b> 08x-xxx-xxxx</p>
      <p><b>💻</b> github.com/yourname</p>
      <p><b>🔗</b> linkedin.com/in/yourname</p>
    </div>
  </section>

  <footer class="text-center">
    © 2025 • โม | PHP Web Developer
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    new Chart(document.getElementById('skillChart'), {
      type: 'bar',
      data: {
        labels: ['PHP', 'JavaScript', 'SQL', 'HTML/CSS', 'Vue', 'Bootstrap'],
        datasets: [{
          data: [90, 80, 85, 88, 70, 85],
          backgroundColor: 'rgba(212,175,55,0.25)',
          borderColor: '#d4af37',
          borderWidth: 1
        }]
      },
      options: {
        plugins: { legend: { display: false } },
        scales: {
          y: { beginAtZero: true, suggestedMax: 100, ticks: { color: '#aaa' } },
          x: { ticks: { color: '#aaa' } }
        }
      }
    });

    // Animation Fade-In
    const items = document.querySelectorAll('[data-animate]');
    const io = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('visible');
          io.unobserve(e.target);
        }
      });
    }, { threshold: 0.2 });
    items.forEach(el => io.observe(el));
  </script>
</body>
</html>
