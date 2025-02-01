
<?php include 'header.php'; ?>

  <main class="overflow-scroll">
    <!-- <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" style="text-align: center;">
            <img class="bd-placeholder-img" width="30%" height="100%" src="images/dss_simaia.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
          </div>
          <div class="carousel-item" style="text-align: center;">
            <img class="bd-placeholder-img" width="70%" height="100%" src="images/dss_dkths.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
          </div>
          <div class="carousel-item" style="text-align: center;">
            <img class="bd-placeholder-img" width="50%" height="100%" src="images/drastiriotites.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" style="background-image: url(images/Left_Arrow.svg);}" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" style="background-image: url(images/Right_Arrow.svg);}" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>  -->

    <!-- Πληροφοριακά Συστήματα -->
    <div class="album py-0 bg-light" id="pliriforiakaSistimata">
      <div class="pliriforiakaSistimata">
        <div class="container">
          <div class="modal-header p-5 pb-4 border-bottom-0 justify-content-center">
            <h1 class="fw-bold mb-0 fs-2">
              <?php 
                echo $pliriforiakaSistimata_name;
              ?> 
            </h1>
          </div>
          <div class="modal-body p-5 pt-0">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

              <?php foreach ($pliriforiakaSistimata as $pliriforiakoSistima): ?>
                <div class="col">
                  <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top w-50 mx-auto pt-3" src= <?php echo $pliriforiakoSistima['img']; ?> role="img" aria-label="Placeholder: " <?php echo $pliriforiakoSistima['name']; ?>" Logo" preserveAspectRatio="xMidYMid slice" focusable="false" />
                    <div class="card-body">
                      <?php if (!empty($pliriforiakoSistima['description'])): ?>
                        <p class="card-text"><?php echo $pliriforiakoSistima['description']; ?></p>
                      <?php endif; ?>
                    </div>
                    <div class="card-footer justify-content-between align-items-center text-center">
                      <a href=<?php echo $pliriforiakoSistima['link']; ?> class="btn btn-primary" target="_blank"><?php echo $pliriforiakoSistima['name']; ?> </a>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>

          </div>
        </div>
      </div>
    </div>
    
    <!-- Κοινόχρηστοι Φάκελοι -->
    <div class="album py-0 bg-light" id="sharedFolder">
      <div class="container">
        <div class="modal-header p-5 pb-4 border-bottom-0 justify-content-center">
          <h1 class="fw-bold mb-0 fs-2">
            <?php 
              echo $sharedFolders_name;
            ?> 
          </h1>
        </div>
        <div class="modal-body p-5 pt-0">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach ($sharedFolders as $folder): ?>
              <div class="col">
                <div class="sharedFolder shadow-sm">
                  <img class="bd-placeholder-img card-img-top w-50 mx-auto pt-3" src="<?php echo $folder['image']; ?>" role="img" aria-label="Placeholder: <?php echo $folder['title']; ?> Logo" preserveAspectRatio="xMidYMid slice" 
                    focusable="false">
                    <title><?php echo $folder['title']; ?></title>
                  </img>
                  <div class="sharedFolder-body">
                    <h5 class="title-link">
                      <a href="#sharedFolder" class="centered-link" onclick="openFolder('<?php echo addslashes($folder['link']); ?>')"> <?php echo $folder['title']; ?></a>
                    </h5>
                    <ul>
                      <?php foreach ($folder['files'] as $file): ?>
                        <li><span>
                          <a href="#sharedFolder" class="centered-link" onclick="openFolder('<?php echo addslashes($file['link']); ?>')"> <?php echo $file['title']; ?></a>
                        </span></li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>


    <script>
      function openFolder(folderPath) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "?open_folder=" + encodeURIComponent(folderPath), true);
        xhr.send();
      }
    </script>

    <?php include 'openFolder.php'; ?>
  </main>

<?php include 'footer.php'; ?>