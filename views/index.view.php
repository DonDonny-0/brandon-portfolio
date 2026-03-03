
<!-- Include Head Here-->
<?php require 'partials/head.php' ?>


  <!-- Include Banner Here-->
  <?php require 'partials/banner.php' ?>

  <div>
    <div class="main-content">
      <div class="project">
        <div class="project-card">
          <div class="project-link"></div>
          <img src="img/project1.png" alt="">
          <div class="details">
            <h1>Netmatters Frontpage Replica</h1>
            <p>A replication of the netmatters landing page, a great opportunity to learn and practice HTML and SASS.</p>
            <a href="https://github.com/DonDonny-0/netmatters-homepage" class="btn">View Project<i class="fa-brands fa-github"></i></a>
          </div>
        </div>
      </div>
      
      <div class="project">
        <div class="project-card">
          <img src="img/project2.png" alt="">
          <div class="details">
            <h1>Anime ML Recommender System</h1>
            <p>A system which recommends anime to the user based on their favourite shows, built using python.</p>
            <a href="https://github.com/DonDonny-0/anime_recommender_system" class="btn" href="#">View Project<i class="fa-brands fa-github"></i></a>
          </div>        
        </div>
      </div>
      
      <div class="project" id="proj3">
        <div class="project-card"> 
          <img src="img/project3.png" alt="">
          <div class="details">
            <h1>A Simple Image Generator</h1>
            <p>Generate random images and assign it to your email. Built using Javascript, powered by Lorem Picsum.</p>
            <a href="https://github.com/DonDonny-0/js-array" class="btn" href="#">View Project<i class="fa-brands fa-github"></i></a> 
          </div>      
        </div>
      </div>           
      
      <div class="project">
        <div class="project-card"> 
          <img src="img/project4.png" alt="">
          <div class="details">
            <h1>Netmatters Contact Page Replica</h1>
            <p>A replication of the netmatters contact page, with a contact form using server-side validation using PHP.</p><br>
            <a href="https://github.com/DonDonny-0/netmatters-homepage/tree/php" class="btn" href="#">View Project<i class="fa-brands fa-github"></i></a> 
          </div>      
        </div>
      </div>

      <div class="project">
        <div class="project-card"> 
          <img src="img/project5.png" alt="">
          <div class="details">
            <h1>Company Admin Panel</h1>
            <p>An admin panel which uses Rest API and CRUD methods to handle data about companies and their employees, made using Laravel.</p>
            <a href="https://github.com/DonDonny-0/company-admin-panel" class="btn" href="#">View Project<i class="fa-brands fa-github"></i></a> 
          </div>      
        </div>
      </div>
    </div>
  </div>
  
  <div class="contact-info" id="contact">
    <div class="get-in-touch">
      <h1>Get in Touch</h1>
      <p>If you have any questions, or would like to discuss development or potential collaboration, please feel free to get in touch. I’d be happy to chat.</p>
      <p>Please use the contact form as follows, or click my social links, I try to respond as soon as possible, usually 1-2 business days.</p>
      <p><strong>Email:<br></strong><a href="mailto:brand.t2004@icloud.com"> brand.t2004@icloud.com</a></p>
      <p><strong>Contact Number:<br></bbr></strong><a href="tel:07375042777"> 07375 042777</a></p>
    </div>

    <div class="contact">
      <form class="form" id="form" action="/" method="POST">
        <div class="<?= $errors['success'] ?? '' ?>">
          <?php if (isset($errors['success'])) : ?>
            <?= $success ?>
          <?php endif; ?>
        </div>
        <div class="input-row">
          <div class="text-input">
            <div class="input-control">
              <label class="form__label--hidden" for="first-name">First Name</label>
              <input class="form__input <?= $errors['first-name'] ?? '' ?>" type="text" id="first-name" name="first-name" placeholder="First Name*">
              <div class="error"></div>
            </div>
          </div>

          <div class="text-input">
            <div class="input-control">
              <label class="form__label--hidden" for="last-name">Last Name</label>
              <input class="form__input <?= $errors['last-name'] ?? '' ?>" type="text" id="last-name" name="last-name" placeholder="Last Name*">
              <div class="error"></div>
            </div>
          </div>

          <div class="text-input">
            <div class="input-control">
              <label class="form__label--hidden" for="email">Email</label>
              <input class="form__input <?= $errors['email'] ?? '' ?>" type="text" id="email" name="email" placeholder="Email*"><br>
              <div class="error"></div>
            </div>
          </div>

          <div class="text-input">
            <div class="input-control">
              <label class="form__label--hidden" for="subject">Subject</label>
              <input class="form__input <?= $errors['subject'] ?? '' ?>" type="text" id="subject" name="subject" placeholder="Subject*"><br>
              <div class="error"></div>
            </div>
          </div>
        </div>
        <div class="input-control">
          <label class="form__label--hidden" for="message">Message</label>
          <textarea class="form__input <?= $errors['message'] ?? '' ?>" id="message" name="message" placeholder="Message*"></textarea>
          <div class="error"></div>
        </div>
        <button class="form__button" type="submit" id="submit">Submit</button>
      </form>
    </div>
  </div>

  <!-- Include Sidebar Here-->
  <?php require 'partials/sidebar.php' ?>

<!-- Include Footer Here-->
<?php require 'partials/footer.php' ?>