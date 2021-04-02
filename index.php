<?php
  $theme = "light";

  if (isset($_COOKIE['theme'])) {
      $theme = $_COOKIE['theme'];
  }

?>
<!DOCTYPE html>
<html lang="sk">

<head>
  
  <?php require_once "./assets/include/head.php" ?>

</head>

<body id="Home" data-theme="<?= $theme ?>">

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
    <button id="theme"><i class='bx bx-moon' ></i></button>
  </nav>

  <!-- Header -->
  <header class="header" >
    <div class="content">
      <h1>Hello, my name is <span>SamoSadlaker</span></h1>
      <p>I'm <span id="me"></span></p>
      <a href="#Work">My Work</a>
    </div>
  </header>

  <!-- Main -->
  <main>

    <!-- About section -->
    <section id="About">
      <div class="titles">
        <h3>About me</h3>
        <span>who i am?</span>
      </div>
      <div class="about-container">
        <div class="image">
          <img src="assets/img/about.png" alt="">
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

    <!-- Services section -->
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
        <div class="card">
          <div class="content">
            <img src="assets/img/art-design.svg" alt="">
            <h4>Desgin</h4>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
          </div>
          <img src="assets/img/wave.svg" alt="" class="wave">
        </div>
        <div class="card">
          <div class="content">
            <img src="assets/img/bot.svg" alt="">
            <h4>Discord bots</h4>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
          </div>
          <img src="assets/img/wave.svg" alt="" class="wave">
        </div>
      </div>
    </section>

    <!-- Skills section -->
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
            <div class="progress" style="width: 55%;"></div>
          </div>
          <span class="value">55%</span>
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

    <!-- Work section -->
    <section id="Work">
      <div class="titles">
        <h3>My work</h3>
        <span>completed projects</span>
      </div>
      <div class="work-container">
        <div class="card">
          <img src="assets/img/batcore-final.png" alt="">
          <div class="content">
            <h5>Batcore</h5>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur sapiente delectus laborum, quibusdam libero eligendi. Itaque minus, dolorum magni neque reiciendis pariatur culpa nihil voluptatem. Mollitia minima repellendus porro deserunt!
            </p>
            <a href="#" class="link">Visit</a>
            <a href="#" class="info"><i class='bx bxs-info-circle'></i></a>
          </div>
        </div>
        <div class="card">
          <img src="assets/img/mmp-final.png" alt="">
          <div class="content">
            <h5>MMP</h5>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur sapiente delectus laborum, quibusdam libero eligendi. Itaque minus, dolorum magni neque reiciendis pariatur culpa nihil voluptatem. Mollitia minima repellendus porro deserunt!
            </p>
            <a href="#" class="link">Visit</a>
            <a href="#" class="info"><i class='bx bxs-info-circle'></i></a>
          </div>
        </div>
        <div class="card">
          <img src="assets/img/loklop-final.png" alt="">
          <div class="content">
            <h5>Loklop</h5>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur sapiente delectus laborum, quibusdam libero eligendi. Itaque minus, dolorum magni neque reiciendis pariatur culpa nihil voluptatem. Mollitia minima repellendus porro deserunt!
            </p>
            <a href="#" class="link">Visit</a>
            <a href="#" class="info"><i class='bx bxs-info-circle'></i></a>
          </div>
        </div>
        <div class="card">
          <img src="assets/img/forgamers-final.png" alt="">
          <div class="content">
            <h5>ForGamers</h5>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur sapiente delectus laborum, quibusdam libero eligendi. Itaque minus, dolorum magni neque reiciendis pariatur culpa nihil voluptatem. Mollitia minima repellendus porro deserunt!
            </p>
            <a href="#" class="link">Visit</a>
            <a href="#" class="info"><i class='bx bxs-info-circle'></i></a>
          </div>
        </div>

          
      </div>
    </section>

    <!-- Certificates section -->
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
          <span>&#10084; Thanks to everyone who helped me improve my programing skills</span>
          <a href="https://www.learn2code.sk/" target="_blank">Leanr2Code</a>
          <a href="https://www.devcalypso.cz/" target="_blank">Calypso</a>
      </div>
    </section>


    <!-- Contact section -->
    <section id="Contact">
      <div class="titles">
        <h3>Contact</h3>
        <span>contact me</span>
      </div>
      <div class="contact-container">
          <form action="core/contact.php" id="contactform" method="POST">
            <p class="error" id="error"></p>
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
  

  <!-- <a href="//www.dmca.com/Protection/Status.aspx?ID=d54945af-57dd-41c2-b786-7ca5b1085b1d" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca-badge-w100-5x1-11.png?ID=d54945af-57dd-41c2-b786-7ca5b1085b1d"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script> -->
                                

  <script src="assets/js/typed.min.js"></script>
  <?php require_once "./assets/include/footer.php" ?>
  
  
</body>

</html>