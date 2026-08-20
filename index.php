<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SweetnesLuxeCake· luxury wedding cakes</title>
  <!-- Google Fonts: elegant serif + clean sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600&display=swap" rel="stylesheet" />
  <!-- Font Awesome 6 (free) for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: #fdf8f5; /* soft ivory */
      color: #3e2e2a;
      line-height: 1.6;
    }

    h1, h2, h3, h4 {
      font-family: 'Playfair Display', serif;
      font-weight: 600;
      letter-spacing: 0.02em;
    }

    .container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 2rem;
    }

    /* ---------- sticky header ---------- */
    .header {
      position: sticky;
      top: 0;
      z-index: 50;
      background: rgba(253, 248, 245, 0.92);
      backdrop-filter: blur(6px);
      border-bottom: 1px solid rgba(212, 175, 140, 0.2);
      padding: 0.8rem 0;
      transition: box-shadow 0.2s;
    }

    .header-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .logo {
      font-family: 'Playfair Display', serif;
      font-size: 1.8rem;
      font-weight: 700;
      color: #b48a7a;
      letter-spacing: 2px;
      text-decoration: none;
    }
    .logo span {
      color: #c9a88b;
      font-weight: 400;
    }

    .nav-desktop {
      display: flex;
      align-items: center;
      gap: 2rem;
    }
    .nav-desktop a {
      text-decoration: none;
      color: #4d3b35;
      font-size: 0.9rem;
      font-weight: 500;
      letter-spacing: 0.5px;
      transition: color 0.2s;
    }
    .nav-desktop a:hover {
      color: #b48a7a;
    }

    .cta-nav {
      background: #b48a7a;
      color: #fff !important;
      padding: 0.5rem 1.4rem;
      border-radius: 40px;
      font-weight: 500;
      transition: background 0.2s;
      border: none;
      cursor: pointer;
    }
    .cta-nav:hover {
      background: #9f7868 !important;
    }

    /* mobile hamburger */
    .hamburger {
      display: none;
      font-size: 1.8rem;
      background: none;
      border: none;
      color: #4d3b35;
      cursor: pointer;
    }

    .mobile-nav {
      display: none;
      flex-direction: column;
      background: #fdf8f5;
      padding: 1.5rem 0;
      gap: 0.8rem;
      border-top: 1px solid #e6d4cc;
    }
    .mobile-nav a {
      text-decoration: none;
      color: #4d3b35;
      font-weight: 500;
    }
    .mobile-nav .cta-nav {
      display: inline-block;
      width: fit-content;
    }

    /* ---------- sections ---------- */
    section {
      padding: 5rem 0;
    }

    .section-title {
      font-size: 2.8rem;
      margin-bottom: 1.5rem;
      color: #3e2e2a;
      position: relative;
      display: inline-block;
    }
    .section-title:after {
      content: '';
      display: block;
      width: 60px;
      height: 3px;
      background: #d4b5a4;
      margin-top: 0.5rem;
    }
    .gold-accent {
      color: #b48a7a;
    }

    /* hero */
    .hero {
      background: linear-gradient(135deg, #f9efe9 0%, #f2e2d8 100%);
      padding: 2rem 0 4rem;
      position: relative;
      overflow: hidden;
	   margin-bottom: 3rem;
    }
    .hero-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      align-items: center;
    }
    .hero-img {
      width: 100%;
      border-radius: 28px;
      box-shadow: 0 20px 40px -12px rgba(60, 40, 30, 0.25);
      transition: transform 0.3s;
    }
    .hero-img:hover {
      transform: scale(1.01);
    }
    .hero h1 {
      font-size: 3.8rem;
      line-height: 1.2;
      font-weight: 700;
    }
    .hero p {
      font-size: 1.2rem;
      color: #5b4640;
      margin: 1.5rem 0 2rem;
      max-width: 500px;
    }
    .btn-group {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
    }
    .btn {
      display: inline-block;
      padding: 0.9rem 2.2rem;
      border-radius: 50px;
      text-decoration: none;
      font-weight: 500;
      transition: all 0.2s;
      border: none;
      cursor: pointer;
      background: #b48a7a;
      color: #fff;
      box-shadow: 0 4px 8px rgba(180, 138, 122, 0.2);
    }
    .btn-outline {
      background: transparent;
      border: 1.5px solid #b48a7a;
      color: #b48a7a;
      box-shadow: none;
    }
    .btn-outline:hover {
      background: #b48a7a;
      color: #fff;
    }
    .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px -6px rgba(180, 138, 122, 0.4);
    }

    /* about */
    .about-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      align-items: center;
	   margin-bottom: 3rem;	
    }
    .about-img {
      width: 100%;
      border-radius: 28px;
      box-shadow: 0 16px 32px -12px rgba(60, 40, 30, 0.15);
    }
    .about-text ul {
      list-style: none;
      margin-top: 1.5rem;
    }
    .about-text li {
      padding: 0.4rem 0;
      font-weight: 400;
      display: flex;
      align-items: center;
      gap: 0.6rem;
    }
    .about-text li i {
      color: #b48a7a;
      width: 1.2rem;
    }

    /* cake cards */
    .cake-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      margin-top: 2rem;
	   margin-bottom: 3rem;
    }
    .cake-card {
      background: #fffcf9;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 8px 24px rgba(0,0,0,0.04);
      transition: transform 0.25s ease, box-shadow 0.3s;
    }
    .cake-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 16px 40px -10px rgba(100, 70, 60, 0.12);
    }
    .cake-card img {
      width: 100%;
      height: 240px;
      object-fit: cover;
      border-radius: 24px 24px 0 0;
      transition: transform 0.4s;
    }
    .cake-card:hover img {
      transform: scale(1.03);
    }
    .cake-info {
      padding: 1.5rem 1.2rem;
    }
    .cake-info h3 {
      font-size: 1.4rem;
      margin-bottom: 0.3rem;
    }
    .cake-info p {
      color: #6b5550;
      font-size: 0.95rem;
    }
    .cake-info .price {
      color: #b48a7a;
      font-weight: 600;
      margin-top: 0.6rem;
      display: inline-block;
    }
    .cake-info .btn-small {
      margin-top: 1rem;
      background: transparent;
      border: 1px solid #dcc6bc;
      padding: 0.3rem 1.4rem;
      border-radius: 40px;
      font-weight: 500;
      color: #4d3b35;
      transition: 0.2s;
      text-decoration: none;
      display: inline-block;
    }
    .cake-info .btn-small:hover {
      background: #b48a7a;
      border-color: #b48a7a;
      color: #fff;
    }

    /* custom design */
    .custom-section {
      background: #fcf5f0;
      border-radius: 48px;
      padding: 4rem 3rem;
      margin: 0 1.5rem;
	   margin-bottom: 3rem;
    }
    .custom-grid {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 3rem;
      align-items: center;
    }
    .custom-options {
      display: flex;
      flex-wrap: wrap;
      gap: 0.8rem 1.6rem;
      margin: 1.5rem 0;
    }
    .custom-options span {
      background: #fff;
      padding: 0.3rem 1.2rem;
      border-radius: 40px;
      border: 1px solid #e6d4cc;
      font-size: 0.9rem;
    }

    

    /* services */
    .service-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 2rem;
	   margin-bottom: 3rem;
    }
    .service-card {
      background: #fffcf9;
      padding: 2rem 1.5rem;
      border-radius: 28px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.02);
      transition: 0.2s;
    }
    .service-card i {
      font-size: 2.2rem;
      color: #b48a7a;
      margin-bottom: 0.8rem;
    }

    /* testimonials */
    .testimonial-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 2rem;
	   margin-bottom: 3rem;
    }
    .testimonial-card {
      background: #fffcf9;
      padding: 2rem 1.5rem;
      border-radius: 28px;
      border-left: 5px solid #dcc6bc;
    }

    /* consultation CTA */
    .cta-banner {
      background: #e8d7ce;
      padding: 4rem 2rem;
      border-radius: 48px;
      text-align: center;
    }
    .cta-banner h2 {
      font-size: 2.8rem;
    }

    /* contact form */
	.contact{
	 margin-bottom: 3rem;
	     margin-top: 3rem;
	}
    .contact-grid {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 3rem;
    }
    .contact-form input,
    .contact-form textarea,
    .contact-form select {
      width: 100%;
      padding: 0.8rem 1.2rem;
      margin-bottom: 1.2rem;
      border: 1px solid #e6d4cc;
      border-radius: 40px;
      background: #fffcf9;
      font-family: 'Inter', sans-serif;
      transition: 0.2s;
    }
    .contact-form textarea {
      border-radius: 24px;
      resize: vertical;
    }
    .contact-form input:focus,
    .contact-form textarea:focus {
      outline: none;
      border-color: #b48a7a;
      box-shadow: 0 0 0 3px rgba(180,138,122,0.2);
    }
    .contact-info p {
      margin: 0.8rem 0;
    }
    .contact-info i {
      width: 1.6rem;
      color: #b48a7a;
    }

    /* privacy policy */
    .privacy-box {
      background: #faf3ef;
      padding: 2.5rem 2rem;
      border-radius: 32px;
      margin-top: 3rem;
      margin-bottom: 3rem;
      font-size: 0.95rem;
    }
    .privacy-box h3 {
      font-family: 'Playfair Display', serif;
      margin-bottom: 1rem;
    }
    .privacy-box ul {
      list-style: none;
      columns: 2 200px;
    }
    .privacy-box li {
      padding: 0.2rem 0;
    }

    /* footer */
    .footer {
      background: #faf3ef;
      padding: 3rem 0 1.5rem;
      border-top: 1px solid #e6d4cc;
    }
    .footer-grid {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr;
      gap: 2rem;
    }
    .footer a {
      text-decoration: none;
      color: #4d3b35;
    }
    .social i {
      font-size: 1.4rem;
      margin-right: 0.8rem;
      color: #b48a7a;
    }
    .footer-bottom {
      border-top: 1px solid #ddd0c8;
      margin-top: 2rem;
      padding-top: 1.5rem;
      text-align: center;
      font-size: 0.85rem;
    }

    /* responsive */
    @media (max-width: 1024px) {
      .hero-grid { grid-template-columns: 1fr; }
      .about-grid { grid-template-columns: 1fr; }
      .custom-grid { grid-template-columns: 1fr; }
      .contact-grid { grid-template-columns: 1fr; }
      .gallery-masonry { grid-template-columns: repeat(2, 1fr); }
      .footer-grid { grid-template-columns: 1fr 1fr; }
    }

    @media (max-width: 768px) {
      .nav-desktop { display: none; }
      .hamburger { display: block; }
      .mobile-nav.active { display: flex; }
      .hero h1 { font-size: 2.6rem; }
      .container { padding: 0 1.2rem; }
      .custom-section { padding: 2rem 1.5rem; margin: 0; }
      .gallery-masonry { grid-template-columns: 1fr 1fr; }
      .privacy-box ul { columns: 1; }
      .footer-grid { grid-template-columns: 1fr; }
    }

    /* animations */
    .fade-in {
      opacity: 0;
      transform: translateY(18px);
      animation: fadeUp 0.8s ease forwards;
    }
    @keyframes fadeUp {
      to { opacity: 1; transform: translateY(0); }
    }
    .delay-1 { animation-delay: 0.1s; }
    .delay-2 { animation-delay: 0.2s; }
    .delay-3 { animation-delay: 0.3s; }
  </style>
</head>
<body>
  <!-- header -->
  <header class="header" id="home">
    <div class="container header-inner">
      <a href="#" class="logo">SweetnesLuxe<span>Cake</span></a>
      <nav class="nav-desktop">
        <a href="#about">About</a>
        <a href="#cakes">Wedding Cakes</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
        <a href="#consultation" class="cta-nav">Request a Consultation</a>
      </nav>
      <button class="hamburger" id="hamburgerBtn"><i class="fas fa-bars"></i></button>
    </div>
    <!-- mobile nav -->
    <div class="mobile-nav container" id="mobileNav">
      <a href="#about">About</a>
      <a href="#cakes">Wedding Cakes</a>
      <a href="#services">Services</a>
      <a href="#contact">Contact</a>
      <a href="#consultation" class="cta-nav">Request a Consultation</a>
    </div>
  </header>

  <!-- hero -->
  <section class="hero" id="home">
    <div class="container hero-grid">
      <div class="fade-in">
        <h1>Beautifully Crafted Cakes <br/>for Beautiful Beginnings</h1>
        <p>Luxury wedding cakes designed with exquisite detail, timeless elegance, and a personal touch for your most unforgettable celebration.</p>
        <div class="btn-group">
          <a href="#cakes" class="btn">Explore Our Cakes</a>
          <a href="#consultation" class="btn btn-outline">Request a Consultation</a>
        </div>
      </div>
      <div class="fade-in delay-1">
        <img src="banner.jpg" alt="elegant wedding cake" class="hero-img" />
      </div>
    </div>
  </section>

  <!-- about -->
  <section id="about" class="container">
    <div class="about-grid">
      <div class="fade-in"><img src="about.jpg" alt="cake designer" class="about-img" /></div>
      <div class="fade-in delay-1 about-text">
        <h2 class="section-title">Made for Your Moment</h2>
        <p>Boutique wedding cake studio specializing in handcrafted celebration cakes. Every creation is a work of art.</p>
        <ul>
          <li><i class="fas fa-check"></i> Handcrafted designs</li>
          <li><i class="fas fa-check"></i> Premium ingredients</li>
          <li><i class="fas fa-check"></i> Custom cake creations</li>
          <li><i class="fas fa-check"></i> Attention to detail</li>
          <li><i class="fas fa-check"></i> Personalized consultations</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- wedding cake collection -->
  <section id="cakes" class="container">
    <h2 class="section-title">Wedding Cake Collection</h2>
    <div class="cake-grid">
     <div class="cake-card fade-in delay-3"><img src="gold.png" alt="Champagne Gold" /><div class="cake-info"><h3>Champagne Gold Celebration</h3><p>Edible gold &amp; champagne buttercream.</p><span class="price">from $780</span><br/><a href="#" class="btn-small">Enquire</a></div></div>
      <div class="cake-card fade-in"><img src="Garden.png" alt="Garden Bloom" /><div class="cake-info"><h3>Garden Bloom Wedding Cake</h3><p>Fresh floral cascade, organic elegance.</p><span class="price">from $720</span><br/><a href="#" class="btn-small">Enquire</a></div></div>
      <div class="cake-card fade-in delay-1"><img src="white.png" alt="Minimalist White" /><div class="cake-info"><h3>Minimalist White Wedding Cake</h3><p>Pure white, sculptural &amp; modern.</p><span class="price">from $500</span><br/><a href="#" class="btn-small">Enquire</a></div></div>
    </div>
  </section>

  <!-- custom design -->
  <section id="custom" class="container custom-section">
    <div class="custom-grid">
      <div class="fade-in"><h2 class="section-title">Your Story, Your Cake</h2><p>Every detail tailored to your vision. Choose from our curated options or dream up something entirely new.</p>
        <div class="custom-options"><span>Cake size &amp; tiers</span><span>Flavors &amp; fillings</span><span>Flowers &amp; decorations</span><span>Colors &amp; finishes</span><span>Personalized toppers</span></div>
        <a href="#consultation" class="btn">Design Your Cake</a>
      </div>
      <div class="fade-in delay-1"><img src="banner.jpg" alt="custom cake" style="width:100%;border-radius:28px;" /></div>
    </div>
  </section>

 

  <!-- services -->
  <section id="services" class="container">
    <h2 class="section-title">Services</h2>
    <div class="service-grid">
      <div class="service-card fade-in"><i class="fas fa-cake"></i><h4>Custom Wedding Cakes</h4><p>Bespoke designs from sketch to stand.</p></div>
      <div class="service-card fade-in delay-1"><i class="fas fa-handshake"></i><h4>Cake Consultations</h4><p>Tasting &amp; design sessions in our studio.</p></div>
      <div class="service-card fade-in delay-2"><i class="fas fa-utensils"></i><h4>Dessert Tables</h4><p>Curated sweet tables &amp; mini treats.</p></div>
      <div class="service-card fade-in delay-3"><i class="fas fa-truck"></i><h4>Delivery &amp; Setup</h4><p>White-glove delivery &amp; onsite styling.</p></div>
    </div>
  </section>

  <!-- testimonials -->
  <section class="container">
    <h2 class="section-title">What couples say</h2>
    <div class="testimonial-grid">
      <div class="testimonial-card"><p>“From the first consultation to our wedding day, everything was perfect. The cake looked incredible and tasted even better.”</p><p style="margin-top:1rem;font-weight:600;">— Emily &amp; James</p></div>
      <div class="testimonial-card"><p>“Absolutely stunning. Every guest asked about the cake. SweetnesLuxeCake made our dream cake real.”</p><p style="margin-top:1rem;font-weight:600;">— Sophie &amp; Daniel</p></div>
      <div class="testimonial-card"><p>“The design process was so personal and creative. They captured our story beautifully in sugar.”</p><p style="margin-top:1rem;font-weight:600;">— Olivia &amp; Michael</p></div>
    </div>
  </section>

  <!-- consultation CTA -->
  <section id="consultation" class="container cta-banner">
    <h2>Let’s Create Something Beautiful Together</h2>
    <p style="font-size:1.2rem;max-width:500px;margin:1rem auto;">Tell us about your wedding, your vision, and the cake you’ve always imagined.</p>
    <a href="#contact" class="btn" style="font-size:1.1rem;padding:1rem 3rem;">Request a Consultation</a>
  </section>

  <!-- contact -->
  <section id="contact" class="container contact">
    <h2 class="section-title">Contact</h2>
    <div class="contact-grid">
      <form class="contact-form fade-in">
        <input type="text" placeholder="Full Name" required />
        <input type="email" placeholder="Email Address" required />
        <input type="date" placeholder="Wedding Date" />
        <input type="number" placeholder="Number of Guests" />
        <textarea rows="3" placeholder="Cake style / Message"></textarea>
        <button class="btn" type="submit">Send Enquiry</button>
      </form>
      <div class="contact-info fade-in delay-1">
        <p><i class="fas fa-phone-alt"></i> +1 (800) 555‑4566</p>
        <p><i class="fas fa-map-pin"></i> 23 Baker Lane, New York, NY 10001, USA</p>
        <p><i class="fas fa-clock"></i> Mon–Sat 10am – 6pm</p>
      </div>
    </div>
  </section>

  <!-- ================= PRIVACY POLICY ================= -->
<section class="container privacy-box" id="privacy-policy">
  <h2>Privacy Policy</h2>
  <p><strong>Last Updated: August 2026</strong></p>

  <p>
    We respect your privacy and are committed to protecting the personal
    information you provide when using our wedding cake website. This Privacy
    Policy explains what information we may collect, how we use it, and how
    we protect it.
  </p>

  <h3>1. Information We Collect</h3>
  <p>
    When you contact us through our website, we may collect information such as
    your name, email address, phone number, event date, preferred cake details,
    and any other information you voluntarily provide in your enquiry.
  </p>

  <h3>2. Contact &amp; Enquiry Form Data</h3>
  <p>
    Information submitted through our contact or enquiry forms is collected
    only to respond to your questions, discuss your wedding cake requirements,
    provide requested information, and communicate with you regarding your
    enquiry.
  </p>

  <h3>3. How We Use Your Information</h3>
  <p>
    We may use the information we collect to:
  </p>
  <ul>
    <li>Respond to cake enquiries and requests</li>
    <li>Discuss wedding cake designs and requirements</li>
    <li>Provide requested information or quotations</li>
    <li>Communicate about your enquiry</li>
    <li>Improve our website and customer experience</li>
    <li>Maintain website security and prevent misuse</li>
  </ul>

  <h3>4. Cookies &amp; Analytics</h3>
  <p>
    Our website may use cookies and similar technologies to improve website
    functionality, understand visitor activity, and improve the overall user
    experience. If analytics services are used, information may be collected
    in an aggregated or anonymized form.
  </p>

  <h3>5. Third-Party Services</h3>
  <p>
    We may use trusted third-party services for website hosting, analytics,
    email communication, security, or form processing. These providers may
    process information on our behalf only as necessary to provide their
    services.
  </p>

  <h3>6. Data Protection</h3>
  <p>
    We take reasonable administrative, technical, and organizational measures
    to protect personal information against unauthorized access, alteration,
    disclosure, or misuse. However, no internet transmission or electronic
    storage system can be guaranteed to be completely secure.
  </p>

  <h3>7. Data Retention</h3>
  <p>
    We retain enquiry information only for as long as reasonably necessary to
    respond to requests, provide services, maintain business records, resolve
    disputes, or comply with applicable legal obligations.
  </p>

  <h3>8. Your Privacy Rights</h3>
  <p>
    Depending on applicable privacy laws, you may have rights regarding the
    personal information we hold about you, including requesting access,
    correction, or deletion of your information. You may also contact us with
    questions about how your information is handled.
  </p>

  <h3>9. Children's Privacy</h3>
  <p>
    Our website is not directed toward children under the age of 13, and we do
    not knowingly collect personal information from children through the
    website.
  </p>

  <h3>10. External Links</h3>
  <p>
    Our website may contain links to third-party websites or services. We are
    not responsible for the privacy practices or content of external websites.
    We encourage visitors to review the privacy policies of those websites.
  </p>

  <h3>11. Policy Updates</h3>
  <p>
    We may update this Privacy Policy from time to time to reflect changes in
    our website, services, or applicable privacy requirements. Any updates
    will be posted on this page with a revised "Last Updated" date.
  </p>

  <h3>12. Contact Us</h3>
  <p>
    If you have questions about this Privacy Policy or would like to make a
    privacy-related request, please contact us through the contact information
    provided on this website.
  </p>
</section>

  <!-- footer -->
  <footer class="footer">
    <div class="container footer-grid">
      <div><a href="#" class="logo" style="font-size:1.8rem;">SweetnesLuxe<span>Cake</span></a><p style="margin:0.5rem 0 0;color:#5b4640;">Luxury wedding cakes, handcrafted with love.</p></div>
      <div><h4>Quick</h4><a href="#about">About</a><br/><a href="#cakes">Cakes</a><br/><a href="#gallery">Gallery</a></div>
      <div><h4>Contact</h4><p> +1 (800) 555‑4566</p></div>
      <div><h4>Follow</h4><div class="social"><i class="fab fa-instagram"></i><i class="fab fa-pinterest"></i><i class="fab fa-facebook"></i></div></div>
    </div>
    <div class="container footer-bottom">
      <span>&copy; 2026 SweetnesLuxeCake. All rights reserved.</span>
      <span style="margin:0 1rem;">Privacy Policy</span><span>Terms &amp; Conditions</span>
    </div>
  </footer>

  <script>
    // hamburger toggle
    const hamburger = document.getElementById('hamburgerBtn');
    const mobileNav = document.getElementById('mobileNav');
    hamburger.addEventListener('click', () => {
      mobileNav.classList.toggle('active');
    });
    // close mobile on link click
    document.querySelectorAll('.mobile-nav a').forEach(link => {
      link.addEventListener('click', () => mobileNav.classList.remove('active'));
    });
  </script>
</body>
</html>
