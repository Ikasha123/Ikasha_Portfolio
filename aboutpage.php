<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Me</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="icon" href="favicon (1).ico">

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
      background-color: rgb(249, 248, 247);
      padding: 2rem;
      color: var(--text-color);
      overflow-y: auto;
    }

    /* === Entrance Animation === */
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

    .fade-in {
      animation: fadeInUp 1s ease forwards;
      opacity: 0;
    }

    .fade-delay-1 { animation-delay: 0.2s; }
    .fade-delay-2 { animation-delay: 0.4s; }
    .fade-delay-3 { animation-delay: 0.6s; }

    .sidebar {
      position: fixed;
      top: 50%;
      right: 0;
      transform: translateY(-50%);
      background-color:rgb(255, 143, 118);
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

    .card-container {
      display: flex;
      flex-direction: column;
      gap: 2rem;
      max-width: 800px;
      margin: 0 auto;
    }

.glass-card {
  background: linear-gradient(
    135deg,
    rgba(253, 248, 249, 0.8),
    rgb(243, 204, 195),
    rgba(255, 255, 255, 0.97)
  );
  backdrop-filter: blur(10px);
  border-radius: 20px;
  padding: 2rem;
  border: 1px solid rgba(255, 255, 255, 0.3);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

    .profile-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid rgba(255, 255, 255, 0.9);
      margin: 0 auto 1.5rem;
      display: block;
    }

    h1 {
      text-align: center;
      font-size: 1.8rem;
      margin-bottom: 0.2rem;
      font-weight: 700;
    }

    h2 {
      text-align: center;
      font-size: 1rem;
      font-weight: 400;
      margin-bottom: 1rem;
    }

    h3 {
      font-size: 1.2rem;
      margin: 1.2rem 0 0.5rem;
      font-weight: 600;
    }

    .info-item {
      margin-bottom: 1rem;
      display: flex;
      align-items: flex-start;
      font-size: 0.95rem;
      line-height: 1.4;
    }

    .info-item i {
      margin-right: 0.7rem;
      margin-top: 0.2rem;
    }

    .experience-item,
    .education-item {
      margin-bottom: 1rem;
      padding-bottom: 1rem;
    }

    .job-title,
    .degree {
      font-weight: 600;
    }

    .company,
    .institution {
      font-weight: 500;
    }

    .date {
      font-size: 0.8rem;
      opacity: 0.7;
    }

    ul.responsibilities {
      padding-left: 1rem;
      margin-top: 0.5rem;
    }

    @media (max-width: 768px) {
      .sidebar {
        width: 80px;
      }

      .glass-card {
        padding: 1.5rem;
      }
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

  
  <div class="card-container">
    <div class="glass-card fade-in fade-delay-1">
      <img src="assets/images/mmm.jpg" alt="Ikasha Dissanayake" class="profile-img">
      <h1>Ikasha Dissanayake</h1>
      <h2>IT Undergraduate</h2>
      <br>
      <div class="info-item">
        <i class="fas fa-envelope"></i>
        <div><strong>Email:</strong><br>ikashadissanayake@gmail.com</div>
      </div>
      <br>
      <div class="info-item">
        <i class="fas fa-language"></i>
        <div><strong>Languages:</strong><br>Sinhala (Native),<br>English (Professional)</div>
      </div>
    </div>

    <div class="glass-card fade-in fade-delay-2">
      <h3>Professional Summary</h3>
      <hr>
      <h3>Work Experience</h3>
      <div class="experience-item">
        <div class="job-title">ICT Support</div>
        <div class="company">CellMate Technology Pvt Ltd</div>
        <div class="date">Dec 2023 – Dec 2024</div>
      </div>
      <hr>
      <div class="experience-item">
        <div class="job-title">Volunteer Teacher</div>
        <div class="company">A/Sarakkugala Primary School (Gov)</div>
        <div class="date">Oct 2019 – Jan 2021</div>
      </div>
      <hr>
      <div class="experience-item">
        <div class="job-title">Trainee Teacher</div>
        <div class="company">A/Angamuwa Tract 06 M.V (Gov)</div>
        <div class="date">Sep 2023 – Feb 2024</div>
      </div>
    </div>

    <div class="glass-card fade-in fade-delay-3">
      <h3>Education</h3>
      <hr>
      <div class="education-item">
        <div class="degree">BTEC HND in Computing</div>
        <div class="institution">Londontec City Campus</div>
        <div class="date">Oct 2023 – Present</div>
      </div>
      <hr>
      <div class="education-item">
        <div class="degree">HND in English</div>
        <div class="institution">SLIATE</div>
        <div class="date">2021 – 2023</div>
      </div>
    </div>
  </div>
  <br><br>
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
