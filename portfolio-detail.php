<?php require 'templates/portfolio-header.php'; ?>

  <main id="main">

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
                  $sql = "SELECT * FROM `logo`;";
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
                  }
              ?>
        </div>
        <div class="col-md-12 text-center">
            <a href="index.php" class="btn btn-primary">Back to Home</a>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
<?php require 'templates/portfolio-footer.php'; ?>