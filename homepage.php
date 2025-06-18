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
<style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }

        .sidebar {
            position: fixed;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            background-color: #ff8f76;
            width: 100px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
            transition: width 0.3s ease;
        }

        .sidebar h3 {
            color: white;
            font-size: 18px;
            margin-bottom: 10px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            font-size: 16px;
            margin: 12px 0;
            padding: 8px;
            border-radius: 10px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .sidebar a:hover {
            background-color: #ff5733;
            transform: scale(1.1);
        }

        .main-content {
            margin-right: 140px;
            padding: 50px;
            width: 70%;
            text-align: justify;
            flex: 1; 
        }

        .main-content h1 {
            font-size: 42px;
            color: #ff6f61;
            margin-bottom: 20px;
            text-align: justify;
        }

        .greeting {
            font-family: 'Dancing Script', cursive;
            font-size: 24px;
            margin-top: -20px;
            margin-bottom:15px;
            color: #555;
            letter-spacing: 2px;
        }

        .main-content p {
            font-size: 18px;
            color: #555;
            max-width: 900px;
            line-height: 1.6;
            margin: 0 auto;
            margin-left: 20px; 
            text-align: justify;
             
        }

        .profile-img {
            width: 400px;
            height: 400px;
            border-radius: 50%;
            margin-top: 30px;
            object-fit: cover;
            border: 5px solid #ff6f61;
        }

        .additional-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin: 20px;
            object-fit: cover;
            border: 5px solid #ff6f61;
        }

       
        .additional-img:nth-of-type(2) {
            width: 300px;
            height: 300px;
        }

        .contact-icon {
            font-size: 30px; 
            color: white;
            background-color: #ff6f61;
            border-radius: 50%;
            padding: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease, color 0.3s ease;
            margin: 5px;
        }

        .contact-icon:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.3);
            background-color: #e05d4f;
            color: white;
        }

        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
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

        .download-resume {
            margin-top: 10px; 
            text-align: center;
        }

        .download-resume h2 {
            font-size: 28px;
            color: #ff6f61;
            margin-bottom: 10px;
        }

        .resume-btn {
            padding: 12px 25px;
            background-color: #ff6f61;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        .resume-btn i {
            margin-right: 10px;
        }

        .resume-btn:hover {
            background-color: #e05d4f;
        }
   </style>
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
        <img src="assets\images\mm.jpg" alt="Ikasha's Image" class="profile-img fade-in">
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
