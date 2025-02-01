<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="el">
<head>

  <title>
    <?php 
      echo $site_title; 
    ?>
  </title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content=
    <?php 
      $site_welcome; 
    ?>
  >
  <meta name="author" content=
    <?php 
      $site_author; 
    ?>
  >

  <link rel="canonical" href="#">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/dist/css/styles.css">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png" sizes="180x180" type="image/png">
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="manifest" href="images/favicon/site.webmanifest">
</head>

<body>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

  <header>
    
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">ΡΗΤΟ:</h4>
            <p class="text-muted">
              <?php 
                echo $rito_sximatismou;
              ?>
            </p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Μενού</h4>
            <ul class="list-unstyled">
              <li><a href="#myCarousel" class="text-white">Αρχική</a></li>
              <li><a href="#pliriforiakaSistimata" class="text-white">
                <?php 
                  echo $pliriforiakaSistimata_name;
                ?>
              </a></li>
              <li><a href="#sharedFolder" class="text-white">
                <?php 
                  echo $sharedFolders_name;
                ?>
              </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="navbar navbar-dark bg-dark shadow-sm">
      <img src="images/dss_logo.png" alt="Left Logo" class="logo left-logo" />
      <div class="container">
        <a href="#myCarousel" class="navbar-brand d-flex align-items-center">
          <strong>
            <?php 
              echo $site_welcome; 
            ?>  
          </strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <img src="images/sep_logo.gif" alt="Right Logo" class="logo right-logo" />
    </div>
  </header>

  