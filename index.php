<!DOCTYPE html>
<html lang="sk">

<head>
  <!-- Basic Meta Tags -->
  <meta charset="UTF-8">
  <meta name="title" content="SamoSadlaker's Portfolio">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="My name is SamoSadlaker, I am a web developer. This is my portfolio where you can find information about me and my projects.">
  <meta name="keywords" content="Portfolio, Web Development, Frontend, Backend, PHP, HTML, CSS, Java, Spigot, Developer, SamoSadlaker">
  <meta name="author" content="SamoSadlaker">
  <meta name="robots" content="noindex">

  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="SamoSadlaker's Portfolio" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.samosadlaker.eu/" />
  <meta property="og:image" content="https://samosadlaker.eu/assets/img/logo.svg" />
  <meta property="og:description" content="My name is SamoSadlaker, I am a web developer. This is my portfolio where you can find information about me and my projects." />
  <meta property="og:site_name" content="Portfolio, SamoSadlaker" />

  <!-- Twitter Meta Tags -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://samosadlaker.eu/">
  <meta property="twitter:title" content="SamoSadlaker's Portfolio">
  <meta property="twitter:description" content="My name is SamoSadlaker, I am a web developer. This is my portfolio where you can find information about me and my projects.">
  <meta property="twitter:image" content="https://samosadlaker.eu/assets/img/logo.svg">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="assets/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" color="#008bf8">
  <link rel="shortcut icon" href="assets/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#151515">
  <meta name="msapplication-config" content="assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#151515">

  <!-- Page Title -->
  <title>SamoSadlaker's Portfolio</title>

  <!-- Import FontAwesome Icons -->
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">

  <!-- Import Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>

  <!-- Navbar -->
  <nav class="navbar">
    <a href="" class="nav-logo">Samo<span>Sadlaker</span></a>
    <ul class="nav-list">
      <li class="nav-item"><a href="#Home" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="#About" class="nav-link">About</a></li>
      <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
      <li class="nav-item"><a href="#Skills" class="nav-link">Skills</a></li>
      <li class="nav-item"><a href="#Work" class="nav-link">My work</a></li>
      <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
    </ul>
  </nav>

  <!-- Header -->
  <header class="header" id="Home">
    <div class="content">
      <h1>Hello, my name is <span>SamoSadlaker</span></h1>
      <p>I'm <span id="me"></span></p>
      <a href="#Work">My Work</a>
    </div>
  </header>

  <main>
    <section id="About">
      <div class="titles">
        <h3>About me</h3>
        <span>who i am?</span>
      </div>
      <div class="about-container">
        <div class="image">
          <img src="assets/img/about.jpg" alt="">
        </div>
        <div class="content">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Blanditiis iusto ducimus facilis. Incidunt perferendis hic placeat,
            nisi doloribus voluptate, veniam consectetur commodi,
            rem optio ratione omnis beatae! Temporibus, rerum reprehenderit?
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Blanditiis iusto ducimus facilis. Incidunt perferendis hic placeat,
            nisi doloribus voluptate, veniam consectetur commodi,
            rem optio ratione omnis beatae! Temporibus, rerum reprehenderit?
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Blanditiis iusto ducimus facilis. Incidunt perferendis hic placeat,
            nisi doloribus voluptate, veniam consectetur commodi,
            rem optio ratione omnis beatae! Temporibus, rerum reprehenderit?
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Blanditiis iusto ducimus facilis. Incidunt perferendis hic placeat,
            nisi doloribus voluptate, veniam consectetur commodi,
            rem optio ratione omnis beatae! Temporibus, rerum reprehenderit?
          </p>
        </div>
      </div>
    </section>

    <section id="Services">
      <div class="titles">
        <h3>Services</h3>
        <span>my offers</span>
      </div>
      <div class="services-container">
        <div class="card">
          <div class="content">
            <img src="assets/img/frontend.svg" alt="">
            <h4>Frontend development</h4>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
          </div>
          <img src="assets/img/wave.svg" alt="" class="wave">
        </div>
        <div class="card">
          <div class="content">
            <img src="assets/img/java.svg" alt="">
            <h4>Spigot Plugins</h4>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
          </div>
          <img src="assets/img/wave.svg" alt="" class="wave">
        </div>
        <div class="card">
          <div class="content">
            <img src="assets/img/backend.svg" alt="">
            <h4>Backend development</h4>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
          </div>
          <img src="assets/img/wave.svg" alt="" class="wave">
        </div>
      </div>
    </section>

    <section id="Skills">
      <div class="titles">
        <h3>Skills</h3>
        <span>what i know</span>
      </div>
      <div class="skill-container">
        <div class="bar">
          <p class="name">Html</p>
          <div class="percent">
            <div class="progress" style="width: 95%;"></div>
          </div>
          <span class="value">95%</span>
        </div>
        <div class="bar">
          <p class="name">PHP</p>
          <div class="percent">
            <div class="progress" style="width: 85%;"></div>
          </div>
          <span class="value">88%</span>
        </div>
        <div class="bar">
          <p class="name">CSS/Sass</p>
          <div class="percent">
            <div class="progress" style="width: 90%;"></div>
          </div>
          <span class="value">90%</span>
        </div>
        <div class="bar">
          <p class="name">SQL</p>
          <div class="percent">
            <div class="progress" style="width: 90%;"></div>
          </div>
          <span class="value">90%</span>
        </div>
        <div class="bar">
          <p class="name">JS</p>
          <div class="percent">
            <div class="progress" style="width: 40%;"></div>
          </div>
          <span class="value">40%</span>
        </div>
        <div class="bar">
          <p class="name">git</p>
          <div class="percent">
            <div class="progress" style="width: 92%;"></div>
          </div>
          <span class="value">92%</span>
        </div>
        <div class="bar">
          <p class="name">Java</p>
          <div class="percent">
            <div class="progress" style="width: 52%;"></div>
          </div>
          <span class="value">52%</span>
        </div>
      </div>
    </section>

    <section id="Work">
      <div class="titles">
        <h3>My work</h3>
        <span>completed projects</span>
      </div>
      <div class="work-container">
        <div class="card">
          <img src="assets/img/test1.png" alt="">
          <div class="content">
            <span>ForGamers</span>
            <ul>
              <li><a href="#"><i class="fas fa-info-circle"></i></a></li>
              <li><a href="#"><i class="fas fa-external-link-square-alt"></i></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="Certificates">
      <div class="titles">
        <h3>Certificates</h3>
        <span>completed courses</span>
      </div>
      <div class="certificates-container">
        <div class="item">
          <a href="assets/certificates/webrebel-1-html-css-javascript.pdf" target="_blank"><img src="assets/img/webrebel_icon.png" alt=""></a>
        </div>  
        <div class="item">
          <a href="assets/certificates/webrebel-2-php.pdf" target="_blank"><img src="assets/img/php_icon.png" alt=""></a>
        </div>
        <div class="item">
          <a href="assets/certificates/css-preprocesory-sass.pdf" target="_blank"><img src="assets/img/sass_icon.png" alt=""></a>
        </div>
        <div class="item">      
          <a href="assets/certificates/git-a-github-zaklady.pdf" target="_blank"><img src="assets/img/git_icon.png" alt=""></a>
        </div>
      </div>
      <div class="foot">
          <span>&#10084; Thanks to everyone who helped me improve in what I love</span>
          <a href="https://www.learn2code.sk/" target="_blank">Leanr2Code</a>
          <a href="https://www.devcalypso.cz/" target="_blank">Calypso</a>
      </div>
    </section>


    <section id="Contact">
      <div class="titles">
        <h3>Contact</h3>
        <span>contact me</span>
      </div>
      <div class="contact-container">
          <form action="app/contact.php" id="contactform" method="POST">
            <div class="fields">
              <input type="text" name="name" id="name" required placeholder="Name">

              <input type="text" name="subject" id="subject" required placeholder="Subject">
            </div>

            <input type="email" name="email" id="email" required placeholder="Email">

            <textarea name="message" id="message" required placeholder="Message..."></textarea>

            <button type="submit" name="submit">Send message!</button>
          </form>
        </div>
    </section>

  </main>

  <footer class="footer">
    <ul class="social">
      <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
      <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
      <li><a href="#" target="_blank"><i class="fab fa-discord"></i></a></li>
      <li><a href="#" target="_blank"><i class="fab fa-github"></i></a></li>
    </ul>
    <p>&copy; Copyright SamoSadlaker <?= Date('Y') ?>. | Všetky práva vyhradené.</p>
  </footer>


  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/typed.min.js"></script>
  <script src="assets/js/sweetalert.min.js"></script>
  <script src="assets/js/scripts.js"></script>

</body>

</html>