<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Projects | Ikasha Dissanayake</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link rel ="icon"  href="favicon (1).ico">
  <style>
    :root {
      --light-pink: #ffd6e0;
      --hot-pink: #ff69b4;
      --text-color: #000000;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color:rgb(247, 246, 246);
      padding: 2rem;
      color: var(--text-color);
      overflow-y: auto;
    }

    .sidebar {
      position: fixed;
      top: 50%;
      right: 0;
      transform: translateY(-50%);
      background-color: #ff8f76;
      width: 100px;
      border-radius: 15px 0 0 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      padding: 15px 10px;
      text-align: center;
      z-index: 10;
    }

    .sidebar a {
      display: block;
      color: white;
      text-decoration: none;
      font-size: 14px;
      margin: 12px 0;
      padding: 8px 0;
      border-radius: 10px;
      transition: background-color 0.3s, transform 0.3s;
    }

    .sidebar a i {
      font-size: 20px;
      margin-bottom: 5px;
      display: block;
    }

    .sidebar a:hover {
      background-color: #ff5733;
      transform: scale(1.1);
    }

    .project-container {
      max-width: 1100px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: 1fr;
      gap: 2rem;
    }

    @media (min-width: 768px) {
      .project-container {
        grid-template-columns: 1fr 1fr;
      }
    }

    .glass-card {
    background: linear-gradient(
    135deg,
    rgba(253, 248, 249, 0.8), 
    rgba(254, 212, 207, 0.96),   
    rgba(255, 255, 255, 0.97)    
  );
      backdrop-filter: blur(10px);
      border-radius: 20px;
      padding: 2rem;
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .glass-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }

    .glass-card h2 {
      font-size: 1.4rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .glass-card p {
      font-size: 1rem;
      line-height: 1.6;
    }

    .tech-stack {
      margin-top: 1rem;
      font-size: 0.9rem;
      font-weight: 500;
      color: #333;
    }

    .badge {
      display: inline-block;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 20px;
      padding: 5px 12px;
      font-size: 0.8rem;
      margin: 5px 5px 0 0;
      color: #333;
    }

    .project-buttons {
      margin-top: 1rem;
    }

    .btn {
      display: inline-block;
      margin-right: 10px;
      padding: 8px 14px;
      font-size: 0.85rem;
      border-radius: 20px;
      text-decoration: none;
      color: #fff;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .btn.live {
      background-color: #28a745;
    }

    .btn.code {
      background-color:rgb(190, 13, 84);
    }

    .btn:hover {
      opacity: 0.8;
      transform: scale(1.05);
    }
    
    footer {
      background-color: #ff6f61;
      color: white;
      padding: 20px;
      text-align: center;
      width: 100%;
    }

    footer p {
      margin: 10px 0;
      font-size: 16px;
    }

    footer a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    footer a:hover {
      text-decoration: underline;
    }

    .footer-contact {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
    }

    .footer-contact a {
      margin: 0 15px;
      font-size: 30px;
      color: white;
      transition: color 0.3s ease;
    }

    .footer-contact a:hover {
      color: #ff5733;
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <a href="homepage.php"><i class="fas fa-home"></i><br>Home</a>
    <a href="aboutpage.php"><i class="fas fa-user"></i><br>About</a>
    <a href="projectpage.php"><i class="fas fa-code"></i><br>Projects</a>
    <a href="skillspage.php"><i class="fas fa-lightbulb"></i><br>Skills</a>
  </div>

  <div class="project-container">

    <div class="glass-card" data-aos="fade-up">
      <h2><i class="fas fa-map-marked-alt"></i> Sri Lankan Travel App</h2>
      <p>A Flutter-based mobile app promoting tourism in Sri Lanka. Includes hotel booking, eSIM setup, travel guides, and real-time maps with elegant UI.</p>
      <div class="tech-stack">
        <span class="badge">Flutter</span>
        <span class="badge">Firebase</span>
        <span class="badge">Google Maps</span>
        <span class="badge">UI/UX</span>
      </div>
      <div class="project-buttons">
        <a href="#" class="btn live">Live</a>
        <a href="#" class="btn code">GitHub</a>
      </div>
    </div>

    <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
      <h2><i class="fas fa-tools"></i> Helpdesk Web App</h2>
      <p>A PHP web app for managing IT support tickets in construction firms. Includes ticketing system, role-based access, and email alerts.</p>
      <div class="tech-stack">
        <span class="badge">PHP</span>
        <span class="badge">HTML</span>
        <span class="badge">CSS</span>
        <span class="badge">JavaScript</span>
      </div>
      <div class="project-buttons">
        <a href="#" class="btn live">Live</a>
        <a href="#" class="btn code">GitHub</a>
      </div>
    </div>

    <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
      <h2><i class="fas fa-wallet"></i> ThriftyNest Budget Tracker</h2>
      <p>Flutter mobile app for personal finance tracking. Features savings goals, income-expense visualization, and offline storage.</p>
      <div class="tech-stack">
        <span class="badge">Flutter</span>
        <span class="badge">Dart</span>
        <span class="badge">SQLite</span>
        <span class="badge">Chart.js</span>
      </div>
      <div class="project-buttons">
        <a href="#" class="btn live">Live</a>
        <a href="#" class="btn code">GitHub</a>
      </div>
    </div>

    <div class="glass-card" data-aos="fade-up" data-aos-delay="300">
      <h2><i class="fas fa-laptop-code"></i> Personal Portfolio Website</h2>
      <p>A responsive web portfolio to showcase my skills and projects using modern UI/UX, animations, and modular HTML/CSS/JS.</p>
      <div class="tech-stack">
        <span class="badge">HTML</span>
        <span class="badge">CSS</span>
        <span class="badge">JavaScript</span>
        <span class="badge">PHP</span>
        <span class="badge">Responsive Design</span>
      </div>
      <div class="project-buttons">
        <a href="#" class="btn live">Live</a>
        <a href="#" class="btn code">GitHub</a>
      </div>
    </div>

  </div>
<br><br>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>AOS.init();</script>
    <footer class="footer">
    <p>Contact me for collaborations or inquiries!</p>
    <div class="footer-contact">
      <a href="mailto:ikashadissanayake@gmail.com"><i class="fas fa-envelope"></i></a>
      <a href="tel:+9471468101"><i class="fas fa-phone-alt"></i></a>
      <a href="#"><i class="fab fa-github"></i></a>
      <a href="https://www.linkedin.com/in/ikasha-dissanayake-84a698335" target="_blank"><i class="fab fa-linkedin"></i></a>
      <a href="https://www.instagram.com/ikashadissanayaka?igsh=MW1iYWlnd3hvbHQ4cA==" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
  </footer>
</body>
</html>
