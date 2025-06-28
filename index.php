<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Developer Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body { font-family: Arial, sans-serif; scroll-behavior: smooth; }
    .hero { padding: 80px 0; text-align: center; background: linear-gradient(135deg, #007bff, #6610f2); color: white; }
    .section-title { margin: 40px 0 20px; font-size: 2rem; font-weight: bold; text-align: center; }
    .card { transition: 0.3s; }
    .card:hover { transform: scale(1.03); }
    footer { background: #333; color: #fff; padding: 20px 0; text-align: center; }
    .nav-link:hover { text-decoration: underline; }
    .btn-scroll { margin-top: 20px; }
    .skill-logo { width: 30px; height: 30px; margin-right: 10px; }
    .modal-body p { margin-bottom: 0; }
    .skill-card-content { display: flex; align-items: center; }
    #link:hover{ text-decoration: none;}
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">MyPortfolio</a>
       <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/devicon/devicon-original.svg" alt="Portfolio Logo" width="50" height="30px">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#about" id='link' name='link'>About</a></li>
          <li class="nav-item"><a class="nav-link" href="#education" id='link' name='link'>Education</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills" id='link' name='link'>Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects" id='link' name='link'>Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact" id='link' name='link'>Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>Mohammad Faij Ansari</h1>
      <p class="lead">Full Stack Devloper | PHP & Laravel Devloper</p>
      <p class="lead">Email: mohammadfaijansari6@gmail.com</p>
      <a href="#about" class="btn btn-light btn-lg btn-scroll">Explore Portfolio</a>
    </div>
  </section>

  <!-- About Section -->
 <section id="about" class="container py-5">
  <h2 class="section-title">About Me</h2>
  <div class="card p-4 shadow-sm">
    <p>
      Hello! My name is Mohammad Faij Ansari. I’m  BCA  student and I’m very interested in PHP & Laravel and web development. I enjoy building projects and learning how websites and applications work.
    </p>
    <p>
      I have knowledge of   HTML, CSS, JavaScript , PHP , MySQL and some basics of Laravel Framework. I’ve made projects like a E-Commerce Website and a University Management System.
    </p>
    <p>
      I like learning new technologies, solving problems, and creating things that can be useful. My goal is to become a App developer and keep improving my skills step by step.
    </p>
  </div>
</section>

 
<!-- Education Section -->
<section id="education" class="container py-5">
  <h2 class="section-title">Education</h2>

  <!-- BCA Section with View More -->
  <div class="card shadow-sm p-4 mb-3">
    <h5 class="mb-1">Bachelor of Computer Applications (BCA)</h5>
    <p class="mb-1">Walther Degree College Rampur Jaunpur</p>
    <p>Roll no - 23634106209</p>
    <p class="text-muted">2022 – 2025  </p>
    <button class="btn btn-outline-primary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#bcaModal">View More</button>
  </div>

  <!-- 12th Section -->
  <div class="card shadow-sm p-4 mb-3">
    <h5 class="mb-1">Intermediate (12th)</h5>
    <p class="mb-1">Uttar Pradesh Board (UP)</p>
    <p class="mb-1">Roll no -216877452 </p>
    <p class="text-muted">Passed in 2021 | Percentage: 75.5%</p>
  </div>

  <!-- 10th Section -->
  <div class="card shadow-sm p-4 mb-3">
    <h5 class="mb-1">Matric (10th)</h5>
    <p class="mb-1">Uttar Pradesh Board (UP)</p>
    <p class="mb-1">Roll no - 2375944</p>
    <p class="text-muted">Passed in 2019 | Percentage: 73%</p>
  </div>
</section>

<!-- BCA Modal -->
<div class="modal fade" id="bcaModal" tabindex="-1" aria-labelledby="bcaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bcaModalLabel">BCA - Semester-wise Perentage</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card mb-2 p-2">
          <strong>Semester 1:</strong> 77.5 Percentage
        </div>
        <div class="card mb-2 p-2">
          <strong>Semester 2:</strong> 75.3 Percentage
        </div>
        <div class="card mb-2 p-2">
          <strong>Semester 3:</strong> 82.1 Percentage
        </div>
        <div class="card mb-2 p-2">
          <strong>Semester 4:</strong> 78.1 Percentage
        </div>
        <div class="card mb-2 p-2">
          <strong>Semester 5:</strong> 81.1 Percentage
        </div>
        <div class="card mb-2 p-2">
          <strong>Semester 6:</strong> Not Yet Declared
        </div>
      </div>
    </div>
  </div>
</div>





  <!-- Skills Section -->
  <section id="skills" class="container py-5">
    <h2 class="section-title">Skills</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card shadow-sm mb-3 p-3">
          <div class="skill-card-content">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/c/c-original.svg" class="skill-logo" alt="MySQL" />
            <span>C , C++</span>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="card shadow-sm mb-3 p-3">
          <div class="skill-card-content">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" class="skill-logo" alt="HTML" />
            <span>Java</span>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="card shadow-sm mb-3 p-3">
          <div class="skill-card-content">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg
            " class="skill-logo" alt="HTML" />
            <span>PHP</span>
          </div>
        </div>
      </div>
    </div>

     <div class="row">
      <div class="col-md-4">
        <div class="card shadow-sm mb-3 p-3">
          <div class="skill-card-content">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg
             " class="skill-logo" alt="Java" />
            <span>HTML,CSS</span>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="card shadow-sm mb-3 p-3">
          <div class="skill-card-content">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg
              " class="skill-logo" alt="HTML" />
            <span>Bootstrap</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm mb-3 p-3">
          <div class="skill-card-content">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="skill-logo" alt="HTML" />
            <span>JavaScript</span>
          </div>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-md-4">
        <div class="card shadow-sm mb-3 p-3">
          <div class="skill-card-content">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" class="skill-logo" alt="HTML" />
            <span>MYSQL</span>
          </div>
        </div>
      </div>    
      <div class="col-md-4">
        <div class="card shadow-sm mb-3 p-3">
          <div class="skill-card-content">
            <img src="https://img.icons8.com/ios/50/artificial-intelligence.png" class="skill-logo" alt="HTML" />
            <span>DSA</span>
          </div>
        </div>
      </div>
    </div>
    
  </section>

<!-- Remaining content unchanged -->


  <!-- Projects Section  Start -->
  <section id="projects" class="container py-5">
    <h2 class="section-title">Projects</h2>
    <div class="row">
      <!-- Project 1 Start -->
      <div class="col-md-6">
        <div class="card shadow-sm mb-4">
          <div class="card-body">
            <h5 class="card-title">E-Commerce Website</h5>
            <p class="card-text">This Website like for the Flipkart,Amazon to shop the any Project.</p>
            <p><strong>Tech:</strong>HTML,CSS,JS,Bootstrap,PHP,MYSQL</p>
            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ecommerceModal">View More</button>
          </div>
        </div>
      </div>
      <!-- Project 1 End -->
      <!-- Project 2 Start -->
      <div class="col-md-6">
        <div class="card shadow-sm mb-4">
          <div class="card-body">
            <h5 class="card-title">University Management System</h5>
            <p class="card-text">VBSPU University manage all Properties</p>
            <p><strong>Tech:</strong>HTML,CSS,JS,Bootstrap,Ajax,PHP,MYSQL</p>
            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#universityModal">View More</button>
          </div>
        </div>
      </div>
      <!-- Project 2 End -->
       <!-- Project 3 Start -->
      <div class="col-md-6">
        <div class="card shadow-sm mb-4">
          <div class="card-body">
            <h5 class="card-title">PHP CRUD</h5>
            <p class="card-text">Create ,Read,Update,Delete</p>
            <p><strong>Tech:</strong>HTML,CSS,JS,Bootstrap,PHP,MYSQL</p>
            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#phpCrudModal">View More</button>
          </div>
        </div>
      </div>
      <!-- Project 3 End -->
    </div>
  </section>
<!-- Project Section End -->
<!-- Project Models 1 Start-->
  <div class="modal fade" id="ecommerceModal" tabindex="-1" aria-labelledby="ecommerceModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ecommerceModalLabel">E-commerce Website Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          This is a dynamic e-commerce web application where users can browse and purchase products online. After creating an account, users can log in, explore various categories, add items to their cart, and securely complete purchases through the checkout system.
        </p>
        <p>
          Each product has a dedicated detail page displaying images, descriptions, pricing, stock availability, and user reviews. Logged-in users can manage their profile, view past orders, and track current orders through their dashboard.
        </p>
        <p>
          An admin panel is available for managing products, categories, orders, and users. The entire website is responsive and optimized for a smooth shopping experience on mobile and desktop devices.
        </p>
        <p><strong>Key Features:</strong></p>
        <ul>
          <li>User registration and login system</li>
          <li>Product listing with search and category filters</li>
          <li>Product detail page with images, price, description, and reviews</li>
          <li>Shopping cart and secure checkout system</li>
          <li>User dashboard for order tracking and profile management</li>
          <li>Admin panel to manage products, users, and orders</li>
          <li>Responsive design using HTML, CSS, Bootstrap</li>
        </ul>
        <p><strong>Technologies Used:</strong> PHP, MySQL, Bootstrap, JavaScript, HTML, CSS</p>
      </div>
    </div>
  </div>
</div>

<!-- Project Model 1 End -->
<!-- Project Model 2 Start -->
  <div class="modal fade" id="universityModal" tabindex="-1" aria-labelledby="universityModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="universityModalLabel">University Management System Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          This is a web-based University Management System designed to manage academic, administrative, and student-related activities efficiently. It enables students, faculty, and administrative staff to perform their respective tasks digitally from a centralized platform.
        </p>
        <p>
          Students can register, log in, view their course details, class schedules, exam results, and make fee payments. Faculty can manage student records, upload grades, share course materials, and interact with students.
        </p>
        <p>
          The admin panel allows administrators to manage users (students and faculty), courses, departments, schedules, and announcements. All records are maintained securely in the database, and the system is designed to streamline university operations.
        </p>
        <p><strong>Key Features:</strong></p>
        <ul>
          <li>Student and faculty registration/login</li>
          <li>Course and subject management</li>
          <li>Timetable scheduling and exam result uploads</li>
          <li>Online fee payment and student records</li>
          <li>Admin panel to manage users, courses, and departments</li>
          <li>Responsive design for desktop and mobile access</li>
        </ul>
        <p><strong>Technologies Used:</strong> Java, JSP, Servlets, MySQL, HTML, CSS, Bootstrap, JavaScript</p>
      </div>
    </div>
  </div>
</div>

<!-- Project Model 2 End -->

<!-- Project Model  Start -->
<div class="modal fade" id="phpCrudModal" tabindex="-1" aria-labelledby="phpCrudModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="phpCrudModalLabel">PHP CRUD Application Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          This is a dynamic PHP CRUD (Create, Read, Update, Delete) Application built to manage basic database operations through a user-friendly web interface. The system allows users to add, view, edit, and delete records in real time.
        </p>
        <p>
          The application demonstrates fundamental PHP functionalities with MySQL integration. Users can insert new data entries, browse existing records in a tabular format, update information via forms, and remove records with confirmation dialogs.
        </p>
        <p>
          Data validation and error handling are implemented to ensure reliable interactions, and the interface is responsive to provide a seamless experience across desktop and mobile devices.
        </p>
        <p><strong>Key Features:</strong></p>
        <ul>
          <li>Create, Read, Update, Delete operations on records</li>
          <li>Clean and responsive user interface</li>
          <li>Form validation and error/success messaging</li>
          <li>Data displayed in interactive tables</li>
          <li>Modular and scalable PHP codebase</li>
          <li>Secure MySQL database connection using mysqli or PDO</li>
        </ul>
        <p><strong>Technologies Used:</strong> PHP, MySQL, HTML, CSS, Bootstrap, JavaScript</p>
      </div>
    </div>
  </div>
</div>
<!-- Project Model 3 End -->

  <!-- Contact Section -->
  <section id="contact" class="container py-5">
  <h2 class="section-title mb-4 text-center" style="font-size: 30px;">Contact</h2>
  <div class="row g-4">
    
    <!-- Contact Info (Left Side) -->
    <div class="col-12 col-md-6">
      <div class="card p-4 shadow-sm ">
        <h5 class="card-title mb-3">Get in Touch</h5>
        <p class="card-text"><strong>Mobile / WhatsApp:</strong> +91 8090835664</p>
        <p class="card-text"><strong>Email:</strong> mohammadfaijansari6@gmail.com</p>
        <p class="card-text">
          <strong>GitHub:</strong>
          <a href="https://github.com/MohammadFaijAnsari" target="_blank">
            github.com/MohammadFaijAnsari
          </a>
        </p>
        <p class="card-text">
          <strong>LinkedIn:</strong>
          <a href="https://www.linkedin.com/in/mohammad-faij-ansari-455583263 " target="_blank">
            linkedin.com/in/mohammad-faij-ansari-455583263
          </a>
        </p>
      </div>
    </div>

    <!-- Contact Form (Right Side) -->
    <div class="col-12 col-md-6">
      <div class="card p-4 shadow-sm h-100">
        <h5 class="card-title mb-3">Send a Message</h5>
        <form action="submit.php" method="post" >
          <!-- <div class="mb-3">
            <label for="userEmail" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" required> -->
          <div class="mb-3">
            <label for="userEmail" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" required>
          </div>
          <div class="mb-3">
            <label for="userPhone" class="form-label">Mobile Number</label>
            <input type="tel" class="form-control" id="number" name="number" placeholder="Enter your mobile number" required pattern="[0-9]{10}">
          </div>
          <div class="mb-3">
            <label for="userMessage" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write your message here..." required></textarea>
          </div>
          <button type="submit" class="btn btn-primary" id="submit" name="submit">Send Message</button>
        </form>
      </div>
    </div>

  </div>
</section>



  <!-- Contact End -->
  <!-- Footer -->
  <footer>
    <div class="container">
      <p>  2025 Mohammad Faij Ansari. All Rights Reserved. &copy; And &reg;</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>