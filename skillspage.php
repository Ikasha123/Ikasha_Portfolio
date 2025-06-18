<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Skills | Ikasha Dissanayake</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Dancing+Script:wght@600&display=swap" rel="stylesheet" />
  <style>
    :root {
      --light-pink: #ffd6e0;
      --hot-pink: #ff69b4;
      --text-color: #000;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: rgb(250, 246, 245);
      color: var(--text-color);
      padding: 2rem;
    }

 
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(40px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .page-enter {
      animation: fadeInUp 1s ease-out forwards;
      opacity: 0;
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

    .main-content {
      max-width: 1100px;
      margin: 0 auto;
    }

    h1 {
      text-align: center;
      font-family: 'Dancing Script', cursive;
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .category {
      margin-top: 2rem;
    }

    .category h2 {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .skills-container {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .skill-card {
      background-color: #ff8f76;
      backdrop-filter: blur(10px);
      border-radius: 12px;
      padding: 0.75rem;
      width: 150px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
      text-align: center;
      transform: translateY(20px);
      opacity: 0;
      animation: fadeInUp 0.6s ease forwards;
    }

 
    .skills-container .skill-card:nth-child(1) { animation-delay: 0.2s; }
    .skills-container .skill-card:nth-child(2) { animation-delay: 0.3s; }
    .skills-container .skill-card:nth-child(3) { animation-delay: 0.4s; }
    .skills-container .skill-card:nth-child(4) { animation-delay: 0.5s; }
    .skills-container .skill-card:nth-child(5) { animation-delay: 0.6s; }
    .skills-container .skill-card:nth-child(6) { animation-delay: 0.7s; }

    .skill-card i {
      font-size: 1.5rem;
      margin-bottom: 0.4rem;
      color: #333;
    }

    .skill-card h3 {
      font-size: 0.9rem;
      font-weight: 600;
    }

    .footer {
      text-align: center;
      margin-top: 4rem;
      font-size: 0.9rem;
    }

    .footer-contact a {
      margin: 0 10px;
      color: #000;
      font-size: 1.2rem;
    }

    hr {
      border: 0;
      border-top: 2px solid rgba(0, 0, 0, 0.1);
      margin: 2rem 0;
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

  <div class="main-content page-enter">
    <h1>My Skills</h1>
    <hr>


    <div class="category">
      <h2>Programming</h2>
      <div class="skills-container">
        <div class="skill-card"><i class="fab fa-java"></i><h3>Java</h3></div>
        <div class="skill-card"><i class="fab fa-js"></i><h3>JavaScript</h3></div>
        <div class="skill-card"><i class="fas fa-code"></i><h3>C#</h3></div>
        <div class="skill-card"><i class="fas fa-cogs"></i><h3>C++</h3></div>
        <div class="skill-card"><i class="fab fa-php"></i><h3>PHP</h3></div>
        <div class="skill-card"><i class="fas fa-mobile-alt"></i><h3>Flutter</h3></div>
      </div>
    </div>

    <hr>

   
    <div class="category">
      <h2>Frameworks</h2>
      <div class="skills-container">
        <div class="skill-card"><i class="fab fa-node-js"></i><h3>Node.js</h3></div>
        <div class="skill-card"><i class="fas fa-network-wired"></i><h3>ASP.NET</h3></div>
      </div>
    </div>

    <hr>

    <div class="category">
      <h2>Databases</h2>
      <div class="skills-container">
        <div class="skill-card"><i class="fas fa-database"></i><h3>MySQL</h3></div>
        <div class="skill-card"><i class="fas fa-leaf"></i><h3>MongoDB</h3></div>
      </div>
    </div>

    <hr>

    
    <div class="category">
      <h2>Web Development</h2>
      <div class="skills-container">
        <div class="skill-card"><i class="fab fa-html5"></i><h3>HTML</h3></div>
        <div class="skill-card"><i class="fab fa-css3-alt"></i><h3>CSS</h3></div>
        <div class="skill-card"><i class="fab fa-bootstrap"></i><h3>Bootstrap</h3></div>
        <div class="skill-card"><i class="fab fa-wordpress"></i><h3>WordPress</h3></div>
      </div>
    </div>

    <hr>

    
    <div class="category">
      <h2>Tools</h2>
      <div class="skills-container">
        <div class="skill-card"><i class="fab fa-git-alt"></i><h3>Git</h3></div>
        <div class="skill-card"><i class="fab fa-figma"></i><h3>Figma</h3></div>
        <div class="skill-card"><i class="fas fa-wrench"></i><h3>Postman</h3></div>
      </div>
    </div>
  </div>

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
