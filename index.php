<?php require 'templates/header.php'; ?>

  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->
  </header><!-- End Header -->

  <?php
      require 'config/connectdb.php';
      $sql = "SELECT * FROM `home` LIMIT 1";
      $result = mysqli_query($conn,$sql);
      $resultCheck = mysqli_num_rows($result);
      
      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $row_image =  $row['home_image'];
          $row_name =  $row['home_name'];
          $row_sub =  $row['home_sub'];
          $row_facebook =  $row['home_facebook'];
          $row_skype =  $row['home_skype'];
          $row_linkedin =  $row['home_linkedin'];
        }
      } else {
        echo "No record found";
      }
  ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url(image/uploads/fotis-fotopoulos-DuHKoV44prg-unsplash.jpg);">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1><?php echo $row_name; ?></h1>
      <p><span class="typed" data-typed-items="<?php echo $row_sub; ?>"></span></p>
      <div class="social-links">
        <a href="<?php echo $row_facebook; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="call:<?php echo $row_skype; ?>" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="<?php echo $row_skype; ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <?php
      require 'config/connectdb.php';
      $sql = "SELECT * FROM `about` LIMIT 1";
      $result = mysqli_query($conn,$sql);
      $resultCheck = mysqli_num_rows($result);
      
      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $row_info =  $row['about_info'];
          $row_profile =  $row['about_profile'];
          $row_title =  $row['about_title'];
          $row_portfolio =  $row['about_portfolio'];
          $row_mobile =  $row['about_mobile'];
          $row_home =  $row['about_home'];
          $row_resume =  $row['about_resume'];
          $row_degree =  $row['about_degree'];
          $row_email =  $row['about_email'];
          $row_availability =  $row['about_availability'];
          $row_signature =  $row['about_signature'];
        }
      } else {
        echo "No record found";
      }
    ?>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p><?php echo $row_info; ?></p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="<?php echo $row_profile; ?>" class="img-fluid" alt="">
            
            
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3><?php echo $row_title; ?></h3>
            <p class="fst-italic">
              Some information about me!
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Portfolio:</strong> <span><?php echo $row_portfolio; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Mobile:</strong> <span><?php echo $row_mobile; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo $row_home; ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo $row_degree; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $row_email; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><?php echo $row_availability; ?></span></li>
                </ul>
              </div>
            </div>
            <p>I hereby declare that all the information on this website is true and correct to the best of my knowledge.</p>
            <img src="<?php echo $row_signature; ?>" style="width:100%;height:100px;">
            <br>
            <br>
            <div class="resume">
                <a href="" class="btn btn-danger text-center" style="border-radius: 0px;"><i class="far fa-download"></i> Download Resume</a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Here are the skills and development tools I used.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Bootstrap <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">SQL <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Illustrator <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Here's where my journey started.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor's of Science in Information Technology</h4>
              <h5>2007 - 2014</h5>
              <p><em>Institute of Creating Computer and Technology (ICCT)</em></p>
              <p>ICCT Bldg, V.V. Soliven Ave II, Cainta, 1900 Rizal</p>
            </div>
            <div class="resume-item">
              <h5>2023 - 2007</h5>
              <p><em>San Mateo National High School</em></p>
              <p>M4WC+3F5, GSIS Rd, 1, San Mateo, 1850 Metro Manila</p>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Graphic Designer / Shopify Store Builder</h4>
              <h5>2019 - 2023</h5>
              <p><em>County Dublin, Ireland</em></p>
              <ul>
                <li>Build a fully functional and customized Shopify store for customers and/or clients depending on their request using a drag-and-drop procedure.</li>
                <li>Creating and designing a unique logo for customers and/or clients for their business based on their niche.</li>
                <li>Uploading of all necessary files, such as store themes, images, and other graphic and non-graphic-related files</li>
                <li>Installing all the necessary third-party applications for the store, such as Oberlo, Dripshipper, Currency Converter, DSers‑AliExpress Dropshipping, and Printful: Print on Demand</li>
                <li>Setting up a shipment for a different country</li>
                <li>Setting up a domain connection for the store to make it accessible on Google Search</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Here's the latest design of my work.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-logo">Logo</li>
              <li data-filter=".filter-store">Shopify Store</li>
              <li data-filter=".filter-mockup">Mockup</li>
            </ul>
          </div>
        </div>
        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
              <?php
                  require 'config/connectdb.php';
                  $sql = "SELECT * FROM `logo` LIMIT 8;";
                  $result = mysqli_query($conn,$sql);
                  $resultCheck = mysqli_num_rows($result);
                  
                  if ($resultCheck > 0) {
                     while ($row = mysqli_fetch_assoc($result)) {
                      ?> 
                      <div class="col-md-3 col-md-3 portfolio-item filter-logo">
                          <div class="portfolio-wrap">
                            <img src="<?php echo $row['logo_image'] ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                              <h4><?php echo $row['logo_name'] ?></h4>
                              <div class="portfolio-links">
                                <a href="<?php echo $row['logo_image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $row['logo_name'] ?>"><i class="bx bx-plus"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php
                    }
                  } else {
                    echo "No record found";
                  }
              ?>
              <?php
                  require 'config/connectdb.php';
                  $sql = "SELECT * FROM `store`;";
                  $result = mysqli_query($conn,$sql);
                  $resultCheck = mysqli_num_rows($result);
                  
                  if ($resultCheck > 0) {
                     while ($row = mysqli_fetch_assoc($result)) {
                      ?> 
                      <div class="col-md-3 col-md-3 portfolio-item filter-store">
                          <div class="portfolio-wrap">
                            <img src="<?php echo $row['store_image'] ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                              <h4><?php echo $row['store_name'] ?></h4>
                              <div class="portfolio-links">
                                <a href="<?php echo $row['store_image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $row['store_name'] ?>"><i class="bx bx-plus"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php
                    }
                  } else {
                    echo "No record found";
                  }
              ?>
              <?php
                  require 'config/connectdb.php';
                  $sql = "SELECT * FROM `mockup`;";
                  $result = mysqli_query($conn,$sql);
                  $resultCheck = mysqli_num_rows($result);
                  
                  if ($resultCheck > 0) {
                     while ($row = mysqli_fetch_assoc($result)) {
                      ?> 
                      <div class="col-md-3 col-md-3 portfolio-item filter-mockup">
                          <div class="portfolio-wrap">
                            <img src="<?php echo $row['mockup_image'] ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                              <h4><?php echo $row['mockup_name'] ?></h4>
                              <div class="portfolio-links">
                                <a href="<?php echo $row['mockup_image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $row['mockup_name'] ?>"><i class="bx bx-plus"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php
                    }
                  } else {
                    echo "No record found";
                  }
              ?>
        </div>
        <div class="col-md-12 text-center">
            <a href="portfolio-detail.php" class="btn btn-primary">View All</a>
        </div>
      </div>
    </section><!-- End Portfolio Section -->
    <?php
      require 'config/connectdb.php';
      $sql = "SELECT * FROM `profile` LIMIT 1";
      $result = mysqli_query($conn,$sql);
      $resultCheck = mysqli_num_rows($result);
      
      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $row_address =  $row['profile_address'];
          $row_email =  $row['profile_email'];
          $row_mobile =  $row['profile_mobile'];
        }
      } else {
        echo "No record found";
      }
    ?>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.5228430187462!2d121.11024137507549!3d14.68299927505399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ba254128772f%3A0xf2156067c74581da!2sCiudad%20Christhia%20Resort%209%20Waves!5e0!3m2!1sen!2sph!4v1717297644608!5m2!1sen!2sph" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?php echo $row_address; ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?php echo $row_email; ?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?php echo $row_mobile; ?></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<?php require 'templates/footer.php'; ?>