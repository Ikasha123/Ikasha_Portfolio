<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iasha Dissanayake - Portfolio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Dancing+Script:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/homepage.css"> 
    <link rel ="icon"  href="favicon (1).ico">
   
</head>
<body>
<div class="sidebar">
  <a href="homepage.php"><i class="fas fa-home"></i><br>Home</a>
  <a href="aboutpage.php"><i class="fas fa-user"></i><br>About</a>
  <a href="projectpage.php"><i class="fas fa-code"></i><br>Projects</a>
  <a href="skillspage.php"><i class="fas fa-lightbulb"></i><br>Skills</a>
</div>


    <div class="main-content">
    
        <h1 class="fade-in" id="home">Welcome to My Portfolio</h1>
        <div class="greeting fade-in">Hi there! I'm Ikasha Dissanayake</div>
        
        <hr>
        <br>
        <p class="fade-in">Hi there! I’m Ikasha Dissanayake, a passionate and dedicated computing degree student with a love for technology and innovation. My journey revolves around exploring the exciting world of programming, software development, and problem-solving.

I aim to blend creativity and professionalism in everything I do, from coding dynamic websites to crafting elegant software solutions. As a curious learner, I’m constantly honing my skills and striving to make a meaningful impact in the tech world.

This website is a showcase of my journey, projects, and achievements. Whether you're here to connect, collaborate, or explore my work, I hope you enjoy browsing!</p>
<br>
<hr>
        <img src="assets\images\aaa.jpeg" alt="Ikasha's Image" class="profile-img fade-in">
        <img src="assets\images\mmm.jpg" alt="Additional Image 1" class="additional-img fade-in">
        <img src="assets\images\my.jpg" alt="Additional Image 2" class="additional-img fade-in">

    </div>

    <div class="download-resume fade-in">
        <a href="assets\folder\Ikasha Dissanayake _cv.pdf" download class="resume-btn">
            <i class="fas fa-file-pdf"></i> Download Resume
        </a>
    </div>

    <br>

    <footer>
        <p>Contact Me:</p>
        <div class="footer-contact">
            <a href="mailto:ikashadissanayake@gmail.com" class="fade-in">
                <i class="fas fa-envelope"></i> 
            </a>
            <a href="tel:+9471468101" class="fade-in">
                <i class="fas fa-phone-alt"></i> 
            </a>
            <a href="" target="_blank" class="fade-in">
                <i class="fab fa-github"></i> 
            </a>
            <a href="https://www.linkedin.com/in/ikasha-dissanayake-84a698335" target="_blank" class="fade-in">
                <i class="fab fa-linkedin"></i> 
            </a>
            <a href="https://www.instagram.com/ikashadissanayaka?igsh=MW1iYWlnd3hvbHQ4cA==" target="_blank" class="fade-in">
                <i class="fab fa-instagram"></i> 
            </a>

            <a href="" target="_blank" class="fade-in">
                <i class="fab fa-facebook"></i> 
            </a>
            
        </div>
    </footer>

    <script>
        setTimeout(() => {
            document.querySelector('.greeting').textContent = "Nice to meet you!";
        }, 3000);
    </script>

</body>
</html>
