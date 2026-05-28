<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>rippleHUB — Your Focus Space</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet"/>
  <style>
    :root{
      --ink:#1a1a2e;--ink2:#2d2d4e;--sage:#3d6b5e;--sage-light:#5a9e8c;--sage-pale:#eaf4f1;
      --cream:#faf8f3;--warm:#f5efe3;--gold:#c9954a;
      --text:#2c2c3e;--muted:#7a7a9a;--border:rgba(61,107,94,0.15);
    }
    *{margin:0;padding:0;box-sizing:border-box;}
    html{scroll-behavior:smooth;}
    body{font-family:'Outfit',sans-serif;background:var(--cream);color:var(--text);overflow-x:hidden;}
    ::-webkit-scrollbar{width:5px;}
    ::-webkit-scrollbar-thumb{background:var(--sage-light);border-radius:99px;}

    /* NAV */
    nav{position:fixed;top:0;left:0;right:0;z-index:100;background:rgba(250,248,243,0.92);backdrop-filter:blur(12px);border-bottom:1px solid var(--border);padding:0 2.5rem;display:flex;justify-content:space-between;align-items:center;height:64px;}
    .nav-logo{display:flex;align-items:center;gap:10px;text-decoration:none;}
    .logo-mark{width:36px;height:36px;background:var(--sage);border-radius:10px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;}
    .logo-mark::after{content:'';position:absolute;width:24px;height:24px;border:2.5px solid rgba(255,255,255,0.5);border-radius:50%;animation:ripple 2s infinite;}
    .logo-mark::before{content:'';position:absolute;width:12px;height:12px;background:white;border-radius:50%;}
    @keyframes ripple{0%{transform:scale(0.5);opacity:1;}100%{transform:scale(1.8);opacity:0;}}
    .logo-text{font-family:'Playfair Display',serif;font-size:20px;font-weight:700;color:var(--ink);}
    .logo-text span{color:var(--sage);}
    .nav-links{display:flex;gap:0.25rem;align-items:center;}
    .nav-links a{font-size:14px;color:var(--muted);text-decoration:none;padding:7px 14px;border-radius:8px;transition:all 0.2s;font-weight:500;}
    .nav-links a:hover,.nav-links a.active{color:var(--sage);background:var(--sage-pale);}
    .nav-actions{display:flex;gap:10px;}
    .btn-outline{font-family:'Outfit',sans-serif;font-size:13px;font-weight:500;color:var(--sage);background:transparent;border:1.5px solid var(--sage);padding:8px 18px;border-radius:8px;cursor:pointer;transition:all 0.2s;}
    .btn-outline:hover{background:var(--sage);color:white;}
    .btn-fill{font-family:'Outfit',sans-serif;font-size:13px;font-weight:600;color:white;background:var(--sage);border:none;padding:8px 18px;border-radius:8px;cursor:pointer;transition:all 0.2s;}
    .btn-fill:hover{background:var(--sage-light);}

    /* HERO */
    #home{min-height:100vh;display:flex;align-items:center;padding:5rem 2.5rem 3rem;position:relative;overflow:hidden;}
    .hero-bg{position:absolute;inset:0;z-index:0;}
    .hero-blob{position:absolute;border-radius:50%;filter:blur(80px);opacity:0.35;}
    .blob1{width:500px;height:500px;background:radial-gradient(circle,#5a9e8c,transparent);top:-100px;right:-100px;}
    .blob2{width:400px;height:400px;background:radial-gradient(circle,#c9954a,transparent);bottom:0;left:-80px;}
    .hero-inner{position:relative;z-index:1;max-width:960px;margin:0 auto;width:100%;display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;}
    .hero-tag{display:inline-flex;align-items:center;gap:8px;background:var(--sage-pale);border:1px solid rgba(61,107,94,0.2);color:var(--sage);font-size:12px;font-weight:600;letter-spacing:0.06em;text-transform:uppercase;padding:6px 14px;border-radius:20px;margin-bottom:1.75rem;}
    .hero-tag::before{content:'';width:7px;height:7px;background:var(--sage-light);border-radius:50%;animation:pulse 1.8s infinite;}
    @keyframes pulse{0%,100%{opacity:1;transform:scale(1);}50%{opacity:0.4;transform:scale(0.8);}}
    .hero-left h1{font-family:'Playfair Display',serif;font-size:clamp(38px,5vw,58px);font-weight:900;line-height:1.08;letter-spacing:-1.5px;color:var(--ink);margin-bottom:1.25rem;}
    .hero-left h1 em{font-style:normal;color:var(--sage);}
    .hero-left p{font-size:16px;font-weight:300;color:var(--muted);line-height:1.8;max-width:420px;margin-bottom:2rem;}
    .hero-btns{display:flex;gap:12px;flex-wrap:wrap;}
    .cta-primary{font-family:'Outfit',sans-serif;font-size:15px;font-weight:600;color:white;background:var(--sage);border:none;padding:14px 28px;border-radius:10px;cursor:pointer;transition:all 0.2s;box-shadow:0 4px 20px rgba(61,107,94,0.3);}
    .cta-primary:hover{background:var(--sage-light);transform:translateY(-1px);}
    .cta-secondary{font-family:'Outfit',sans-serif;font-size:15px;font-weight:500;color:var(--text);background:white;border:1.5px solid var(--border);padding:14px 28px;border-radius:10px;cursor:pointer;transition:all 0.2s;}
    .cta-secondary:hover{border-color:var(--sage);color:var(--sage);}
    .hero-stats{display:flex;gap:2rem;margin-top:2.5rem;padding-top:2rem;border-top:1px solid var(--border);}
    .stat-num{font-family:'Playfair Display',serif;font-size:28px;font-weight:700;color:var(--ink);}
    .stat-label{font-size:12px;color:var(--muted);font-weight:500;margin-top:2px;}
    .hero-right{display:flex;flex-direction:column;gap:14px;}
    .hub-card{background:white;border-radius:16px;padding:1.25rem 1.5rem;border:1px solid var(--border);transition:transform 0.2s;cursor:default;}
    .hub-card:hover{transform:translateY(-3px);}
    .hub-card-head{display:flex;align-items:center;gap:10px;margin-bottom:10px;}
    .hub-icon{width:38px;height:38px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:18px;flex-shrink:0;}
    .ic-green{background:var(--sage-pale);}
    .ic-gold{background:#fdf3e3;}
    .ic-blue{background:#e8f0fe;}
    .hub-card h4{font-size:14px;font-weight:600;color:var(--ink);}
    .hub-card p{font-size:12px;color:var(--muted);line-height:1.6;}
    .avail-badge{display:inline-block;background:var(--sage-pale);color:var(--sage);font-size:11px;font-weight:600;padding:3px 10px;border-radius:20px;margin-top:8px;}

    /* SECTION COMMONS */
    section{padding:5rem 2.5rem;scroll-margin-top:64px;}
    .section-inner{max-width:960px;margin:0 auto;}
    .section-label{display:inline-block;font-size:11px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:var(--sage);background:var(--sage-pale);padding:5px 14px;border-radius:20px;margin-bottom:1rem;}
    .section-title{font-family:'Playfair Display',serif;font-size:clamp(30px,4vw,42px);font-weight:900;color:var(--ink);line-height:1.15;letter-spacing:-1px;margin-bottom:1rem;}
    .section-sub{font-size:16px;color:var(--muted);font-weight:300;line-height:1.75;max-width:520px;}

    /* ABOUT */
    #about{background:var(--warm);}
    .about-grid{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;margin-top:3rem;}
    .about-features{display:flex;flex-direction:column;gap:1rem;margin-top:1.5rem;}
    .about-feat{display:flex;gap:14px;align-items:flex-start;}
    .feat-dot{width:10px;height:10px;border-radius:50%;background:var(--sage);margin-top:5px;flex-shrink:0;}
    .feat-text strong{font-size:15px;font-weight:600;color:var(--ink);display:block;margin-bottom:2px;}
    .feat-text span{font-size:13px;color:var(--muted);}
    .about-visual{background:white;border-radius:20px;padding:2rem;border:1px solid var(--border);display:flex;flex-direction:column;gap:1rem;}
    .space-row{display:flex;justify-content:space-between;align-items:center;padding:0.75rem 1rem;background:var(--sage-pale);border-radius:10px;}
    .space-name{font-size:14px;font-weight:600;color:var(--ink);}
    .space-meta{font-size:12px;color:var(--muted);}
    .space-status{font-size:11px;font-weight:700;padding:4px 10px;border-radius:20px;}
    .s-open{background:#d4edda;color:#2d6a4f;}
    .s-busy{background:#fff3cd;color:#856404;}

    /* RESERVATION */
    #reservation{background:var(--ink);}
    .res-grid{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;margin-top:3rem;}
    .res-left .section-title{color:white;}
    .res-left .section-sub{color:rgba(255,255,255,0.55);}
    .res-left .section-label{background:rgba(90,158,140,0.2);color:#7dd4c4;}
    .res-steps{display:flex;flex-direction:column;gap:1rem;margin-top:2rem;}
    .res-step{display:flex;gap:16px;align-items:flex-start;}
    .step-num{width:32px;height:32px;border-radius:50%;background:var(--sage);color:white;font-size:13px;font-weight:700;display:flex;align-items:center;justify-content:center;flex-shrink:0;}
    .step-text strong{font-size:14px;font-weight:600;color:white;display:block;margin-bottom:2px;}
    .step-text span{font-size:13px;color:rgba(255,255,255,0.5);}
    .res-form-card{background:white;border-radius:20px;padding:2rem;}
    .form-group{margin-bottom:1.25rem;}
    .form-group label{display:block;font-size:13px;font-weight:600;color:var(--ink);margin-bottom:6px;}
    .form-group input,.form-group select,.form-group textarea{width:100%;font-family:'Outfit',sans-serif;font-size:14px;padding:11px 14px;border:1.5px solid var(--border);border-radius:10px;background:var(--cream);color:var(--text);outline:none;transition:border-color 0.2s;}
    .form-group input:focus,.form-group select:focus,.form-group textarea:focus{border-color:var(--sage);}
    .form-group textarea{resize:vertical;height:80px;}
    .form-row{display:grid;grid-template-columns:1fr 1fr;gap:12px;}
    .form-note{font-size:12px;color:var(--muted);text-align:center;margin-top:0.75rem;}
    .btn-submit{width:100%;font-family:'Outfit',sans-serif;font-size:15px;font-weight:600;color:white;background:var(--sage);border:none;padding:14px;border-radius:10px;cursor:pointer;transition:all 0.2s;}
    .btn-submit:hover{background:var(--sage-light);}

    /* CONTACT */
    #contact{background:var(--cream);}
    .contact-grid{display:grid;grid-template-columns:1fr 1fr;gap:4rem;margin-top:3rem;}
    .contact-info{display:flex;flex-direction:column;gap:1rem;}
    .contact-item{display:flex;gap:14px;align-items:flex-start;background:white;padding:1.25rem;border-radius:14px;border:1px solid var(--border);}
    .contact-icon{width:42px;height:42px;background:var(--sage-pale);border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:20px;flex-shrink:0;}
    .contact-item strong{font-size:14px;font-weight:600;color:var(--ink);display:block;margin-bottom:3px;}
    .contact-item span{font-size:13px;color:var(--muted);}
    .contact-form{background:white;border-radius:20px;padding:2rem;border:1px solid var(--border);}
    .contact-form h3{font-family:'Playfair Display',serif;font-size:22px;font-weight:700;margin-bottom:1.5rem;color:var(--ink);}

    /* FOOTER */
    footer{background:var(--ink2);padding:2rem 2.5rem;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:1rem;}
    footer .logo-text{color:white;}
    footer .logo-text span{color:var(--sage-light);}
    footer p{font-size:12px;color:rgba(255,255,255,0.3);}
    .footer-links{display:flex;gap:1.5rem;}
    .footer-links a{font-size:13px;color:rgba(255,255,255,0.45);text-decoration:none;transition:color 0.2s;}
    .footer-links a:hover{color:var(--sage-light);}

    /* MODAL */
    .modal-overlay{display:none;position:fixed;inset:0;z-index:200;background:rgba(26,26,46,0.65);backdrop-filter:blur(6px);align-items:center;justify-content:center;}
    .modal-overlay.open{display:flex;}
    .modal{background:white;border-radius:20px;padding:2.5rem;width:100%;max-width:420px;position:relative;animation:slideUp 0.25s ease;}
    @keyframes slideUp{from{transform:translateY(24px);opacity:0;}to{transform:translateY(0);opacity:1;}}
    .modal-close{position:absolute;top:1rem;right:1rem;background:var(--sage-pale);border:none;width:32px;height:32px;border-radius:50%;cursor:pointer;font-size:18px;color:var(--sage);display:flex;align-items:center;justify-content:center;}
    .modal-close:hover{background:#d3ece7;}
    .modal-logo{display:flex;align-items:center;gap:10px;margin-bottom:1.75rem;}
    .modal h2{font-family:'Playfair Display',serif;font-size:24px;font-weight:900;color:var(--ink);margin-bottom:0.3rem;}
    .modal-tabs{display:flex;background:var(--sage-pale);border-radius:10px;padding:4px;margin-bottom:1.5rem;gap:4px;}
    .modal-tab{flex:1;padding:9px;border:none;background:transparent;font-family:'Outfit',sans-serif;font-size:13px;font-weight:600;color:var(--muted);border-radius:7px;cursor:pointer;transition:all 0.2s;}
    .modal-tab.active{background:white;color:var(--sage);box-shadow:0 1px 4px rgba(0,0,0,0.08);}
    .modal-form{display:flex;flex-direction:column;gap:1rem;}
    .modal-form .form-group{margin-bottom:0;}
    .btn-modal{width:100%;font-family:'Outfit',sans-serif;font-size:14px;font-weight:600;color:white;background:var(--sage);border:none;padding:13px;border-radius:10px;cursor:pointer;transition:all 0.2s;margin-top:0.25rem;}
    .btn-modal:hover{background:var(--sage-light);}
    .modal-foot{font-size:12px;color:var(--muted);text-align:center;margin-top:1rem;}
    .modal-foot a{color:var(--sage);text-decoration:none;font-weight:600;}

    /* TOAST */
    .toast{position:fixed;bottom:2rem;right:2rem;background:var(--sage);color:white;padding:14px 22px;border-radius:12px;font-size:14px;font-weight:500;box-shadow:0 8px 30px rgba(61,107,94,0.4);transform:translateY(80px);opacity:0;transition:all 0.35s;z-index:300;}
    .toast.show{transform:translateY(0);opacity:1;}
  </style>
</head>
<body>

<!-- NAV -->
<nav>
  <a href="#home" class="nav-logo">
    <div class="logo-mark"></div>
    <div class="logo-text">ripple<span>HUB</span></div>
  </a>
  <div class="nav-links">
    <a href="#home" class="active" onclick="setActive(this)">Home</a>
    <a href="#about" onclick="setActive(this)">About</a>
    <a href="#reservation" onclick="setActive(this)">Reservation</a>
    <a href="#contact" onclick="setActive(this)">Contact</a>
  </div>
  <div class="nav-actions">
    <button class="btn-outline" onclick="openModal('login')">Log In</button>
    <button class="btn-fill" onclick="openModal('signup')">Sign Up</button>
  </div>
</nav>

<!-- HERO -->
<section id="home">
  <div class="hero-bg">
    <div class="hero-blob blob1"></div>
    <div class="hero-blob blob2"></div>
  </div>
  <div class="hero-inner">
    <div class="hero-left">
      <div class="hero-tag">Now Open — Quezon City</div>
      <h1>Your <em>focus space</em><br>for work &amp; study.</h1>
      <p>rippleHUB is a co-learning hub designed for students and working professionals who need a calm, productive environment to grow.</p>
      <div class="hero-btns">
        <button class="cta-primary" onclick="document.getElementById('reservation').scrollIntoView({behavior:'smooth'})">Reserve a Seat</button>
        <button class="cta-secondary" onclick="document.getElementById('about').scrollIntoView({behavior:'smooth'})">Explore Spaces</button>
      </div>
      <div class="hero-stats">
        <div><div class="stat-num">12+</div><div class="stat-label">Study Spaces</div></div>
        <div><div class="stat-num">500+</div><div class="stat-label">Members</div></div>
        <div><div class="stat-num">7AM</div><div class="stat-label">Opens Daily</div></div>
      </div>
    </div>
    <div class="hero-right">
      <div class="hub-card">
        <div class="hub-card-head">
          <div class="hub-icon ic-green">📚</div>
          <div><div style="font-size:13px;font-weight:600;color:var(--ink)">Silent Study Room</div><div style="font-size:11px;color:var(--muted)">Up to 4 hours · ₱80/hr</div></div>
        </div>
        <p>Perfect for deep focus sessions. No calls, no noise.</p>
        <div class="avail-badge">● 3 seats available</div>
      </div>
      <div class="hub-card">
        <div class="hub-card-head">
          <div class="hub-icon ic-gold">💼</div>
          <div><div style="font-size:13px;font-weight:600;color:var(--ink)">Work Pod</div><div style="font-size:11px;color:var(--muted)">Half day · ₱250</div></div>
        </div>
        <p>Private desk with monitor, fast WiFi, and outlets.</p>
        <div class="avail-badge">● 1 pod available</div>
      </div>
      <div class="hub-card">
        <div class="hub-card-head">
          <div class="hub-icon ic-blue">👥</div>
          <div><div style="font-size:13px;font-weight:600;color:var(--ink)">Group Room</div><div style="font-size:11px;color:var(--muted)">2–6 people · ₱400/hr</div></div>
        </div>
        <p>Book a room for group study or team discussions.</p>
        <div class="avail-badge">● Available tomorrow</div>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="about">
  <div class="section-inner">
    <div class="section-label">About rippleHUB</div>
    <h2 class="section-title">A space that grows<br>with you.</h2>
    <p class="section-sub">Born from the idea that every learner deserves a proper place to focus — rippleHUB bridges the gap between home and the office.</p>
    <div class="about-grid">
      <div class="about-left">
        <div class="about-features">
          <div class="about-feat"><div class="feat-dot"></div><div class="feat-text"><strong>Flexible Hours</strong><span>Open 7AM–10PM daily, including weekends.</span></div></div>
          <div class="about-feat"><div class="feat-dot"></div><div class="feat-text"><strong>High-Speed WiFi</strong><span>Dedicated fiber connection, no throttling.</span></div></div>
          <div class="about-feat"><div class="feat-dot"></div><div class="feat-text"><strong>Free Unlimited Coffee</strong><span>Brewed fresh throughout the day for members.</span></div></div>
          <div class="about-feat"><div class="feat-dot"></div><div class="feat-text"><strong>Locker Storage</strong><span>Secure your belongings anytime.</span></div></div>
          <div class="about-feat"><div class="feat-dot"></div><div class="feat-text"><strong>Printing &amp; Scanning</strong><span>Available at the front desk, low-cost per page.</span></div></div>
          <div class="about-feat"><div class="feat-dot"></div><div class="feat-text"><strong>Community Events</strong><span>Monthly workshops, study groups &amp; networking.</span></div></div>
        </div>
      </div>
      <div>
        <div class="about-visual">
          <div style="font-size:13px;font-weight:700;color:var(--ink);margin-bottom:0.5rem">Available Spaces Today</div>
          <div class="space-row"><div><div class="space-name">Silent Room A</div><div class="space-meta">Ground Floor · 6 seats</div></div><span class="space-status s-open">Open</span></div>
          <div class="space-row"><div><div class="space-name">Work Pod 1</div><div class="space-meta">2nd Floor · 1 seat</div></div><span class="space-status s-open">Open</span></div>
          <div class="space-row"><div><div class="space-name">Group Room B</div><div class="space-meta">2nd Floor · 6 seats</div></div><span class="space-status s-busy">Occupied</span></div>
          <div class="space-row"><div><div class="space-name">Café Corner</div><div class="space-meta">Ground Floor · Open seating</div></div><span class="space-status s-open">Open</span></div>
          <div class="space-row"><div><div class="space-name">Silent Room B</div><div class="space-meta">3rd Floor · 8 seats</div></div><span class="space-status s-busy">Occupied</span></div>
          <button class="btn-submit" style="margin-top:0.5rem" onclick="document.getElementById('reservation').scrollIntoView({behavior:'smooth'})">Book a Space →</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- RESERVATION -->
<section id="reservation">
  <div class="section-inner">
    <div class="res-grid">
      <div class="res-left">
        <div class="section-label">Make a Reservation</div>
        <h2 class="section-title">Book your seat<br>in minutes.</h2>
        <p class="section-sub">Sign up or log in to reserve a space. Walk-ins welcome but reservations guarantee your spot.</p>
        <div class="res-steps">
          <div class="res-step"><div class="step-num">1</div><div class="step-text"><strong>Create an Account</strong><span>Sign up for free — takes under a minute.</span></div></div>
          <div class="res-step"><div class="step-num">2</div><div class="step-text"><strong>Choose a Space</strong><span>Pick from silent rooms, pods, or group rooms.</span></div></div>
          <div class="res-step"><div class="step-num">3</div><div class="step-text"><strong>Confirm &amp; Pay</strong><span>GCash, Maya, or cash on arrival accepted.</span></div></div>
        </div>
      </div>
      <div class="res-form-card">
        <div style="font-family:'Playfair Display',serif;font-size:20px;font-weight:800;color:var(--ink);margin-bottom:1.5rem">Reserve a Space</div>
        <div class="form-group"><label>Full Name</label><input type="text" placeholder="Juan Dela Cruz"/></div>
        <div class="form-row">
          <div class="form-group"><label>Date</label><input type="date"/></div>
          <div class="form-group"><label>Time</label><input type="time"/></div>
        </div>
        <div class="form-group">
          <label>Space Type</label>
          <select>
            <option value="">Select a space...</option>
            <option>Silent Study Room — ₱80/hr</option>
            <option>Work Pod — ₱250 half-day</option>
            <option>Group Room — ₱400/hr</option>
            <option>Café Corner — ₱50/hr</option>
          </select>
        </div>
        <div class="form-group">
          <label>Duration</label>
          <select>
            <option>1 hour</option>
            <option>2 hours</option>
            <option>3 hours</option>
            <option>Half Day (4 hrs)</option>
            <option>Full Day</option>
          </select>
        </div>
        <div class="form-group"><label>Notes (optional)</label><textarea placeholder="Any special requests or group size..."></textarea></div>
        <button class="btn-submit" onclick="showToast('Reservation submitted! Check your email. ✅')">Confirm Reservation</button>
        <div class="form-note">You need to <a href="#" onclick="openModal('login');return false;" style="color:var(--sage);font-weight:600">log in</a> to finalize your booking.</div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="section-inner">
    <div class="section-label">Get in Touch</div>
    <h2 class="section-title">We'd love to hear<br>from you.</h2>
    <p class="section-sub">Have questions about memberships, group bookings, or events? Reach out anytime.</p>
    <div class="contact-grid">
      <div class="contact-info">
        <div class="contact-item"><div class="contact-icon">📍</div><div><strong>Location</strong><span>123 Katipunan Ave, Quezon City, 1108</span></div></div>
        <div class="contact-item"><div class="contact-icon">📞</div><div><strong>Phone</strong><span>+63 917 123 4567</span></div></div>
        <div class="contact-item"><div class="contact-icon">✉️</div><div><strong>Email</strong><span>hello@ripplehub.ph</span></div></div>
        <div class="contact-item"><div class="contact-icon">🕐</div><div><strong>Hours</strong><span>Monday – Sunday, 7:00 AM – 10:00 PM</span></div></div>
      </div>
      <div class="contact-form">
        <h3>Send a Message</h3>
        <div class="form-group"><label>Your Name</label><input type="text" placeholder="Juan Dela Cruz"/></div>
        <div class="form-group"><label>Email</label><input type="email" placeholder="juan@email.com"/></div>
        <div class="form-group"><label>Message</label><textarea placeholder="Your message here..."></textarea></div>
        <button class="btn-submit" onclick="showToast('Message sent! We\'ll reply within 24 hours. 📬')">Send Message</button>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div style="display:flex;align-items:center;gap:10px;">
    <div class="logo-mark" style="width:28px;height:28px;"></div>
    <div class="logo-text">ripple<span>HUB</span></div>
  </div>
  <div class="footer-links">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#reservation">Reservation</a>
    <a href="#contact">Contact</a>
  </div>
  <p>© 2025 rippleHUB. All rights reserved.</p>
</footer>

<!-- LOGIN/SIGNUP MODAL -->
<div class="modal-overlay" id="authModal" onclick="if(event.target===this)closeModal()">
  <div class="modal">
    <button class="modal-close" onclick="closeModal()">✕</button>
    <div class="modal-logo">
      <div class="logo-mark" style="width:30px;height:30px;"></div>
      <div class="logo-text" style="font-size:17px">ripple<span>HUB</span></div>
    </div>
    <div class="modal-tabs">
      <button class="modal-tab active" id="tab-login" onclick="switchTab('login')">Log In</button>
      <button class="modal-tab" id="tab-signup" onclick="switchTab('signup')">Sign Up</button>
    </div>
    <!-- LOGIN -->
    <div id="form-login" class="modal-form">
      <div class="form-group"><label>Email</label><input type="email" placeholder="juan@email.com"/></div>
      <div class="form-group"><label>Password</label><input type="password" placeholder="••••••••"/></div>
      <button class="btn-modal" onclick="showToast('Welcome back to rippleHUB! ✨');closeModal()">Log In</button>
      <div class="modal-foot">No account yet? <a href="#" onclick="switchTab('signup');return false;">Sign up free</a></div>
    </div>
    <!-- SIGNUP -->
    <div id="form-signup" class="modal-form" style="display:none">
      <div class="form-row">
        <div class="form-group"><label>First Name</label><input type="text" placeholder="Juan"/></div>
        <div class="form-group"><label>Last Name</label><input type="text" placeholder="Dela Cruz"/></div>
      </div>
      <div class="form-group"><label>Email</label><input type="email" placeholder="juan@email.com"/></div>
      <div class="form-group"><label>Password</label><input type="password" placeholder="At least 8 characters"/></div>
      <div class="form-group">
        <label>I am a...</label>
        <select><option>Student</option><option>Working Professional</option><option>Freelancer</option><option>Other</option></select>
      </div>
      <button class="btn-modal" onclick="showToast('Account created! Welcome to rippleHUB 🎉');closeModal()">Create Account</button>
      <div class="modal-foot">Already have an account? <a href="#" onclick="switchTab('login');return false;">Log in</a></div>
    </div>
  </div>
</div>

<!-- TOAST -->
<div class="toast" id="toast"></div>

<script>
  function setActive(el){document.querySelectorAll('.nav-links a').forEach(a=>a.classList.remove('active'));el.classList.add('active');}
  function openModal(tab){document.getElementById('authModal').classList.add('open');switchTab(tab);}
  function closeModal(){document.getElementById('authModal').classList.remove('open');}
  function switchTab(tab){
    document.getElementById('tab-login').classList.toggle('active',tab==='login');
    document.getElementById('tab-signup').classList.toggle('active',tab==='signup');
    document.getElementById('form-login').style.display=tab==='login'?'flex':'none';
    document.getElementById('form-signup').style.display=tab==='signup'?'flex':'none';
  }
  function showToast(msg){
    const t=document.getElementById('toast');
    t.textContent=msg;t.classList.add('show');
    setTimeout(()=>t.classList.remove('show'),3500);
  }
  document.addEventListener('keydown',e=>{if(e.key==='Escape')closeModal();});
</script>
</body>
</html>