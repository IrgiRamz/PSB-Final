<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.84.0">
      <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

      <!-- Bootstrap CSS -->
      <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href="sidebars.css" rel="stylesheet">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/fontawesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="assets/css/bootstrap.css">
     <link rel="stylesheet" href="assets/css/carousel.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  
	  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	 <script src="jquery-3.4.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <style>
        
        .container-fluid{
          padding: 0px 0px;
        }

      </style>

	<title>PSB Online</title>
</head>
<body id="page-top">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
        <div class="container-fluid">
          <p>&nbsp &nbsp</p>
      	 
          <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
          <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
          </li>
        <li class="nav-item">
        <a class="nav-link active" href="persyaratan.php">Persyaratan</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="biaya_masuk.php">Informasi Biaya Masuk</a>
        </li>
       </ul>
  </div>
  <?php if(!isset($_SESSION['username'])){ ?>
	<ul class="nav navbar-nav navbar-right">
		
	<li style="padding-top:4px"> <a class="btn btn-light" href="register.php" role="button">Pendaftaran</a></li>


		<li>&nbsp</li>
		
		<li style="padding-top:4px"> <a class="btn btn-primary"  href="login.php" role="button">Login</a></li>
		
		<li>&nbsp &nbsp &nbsp</li>
          </ul>
        <?php } else { ?>
          <ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#"><?php echo $_SESSION['nama']; ?></a>
						</li>
						<li style="padding-right:30px"> <a href="logout.php">Logout</a></li>
          </ul>
          
        <?php } ?>
        </div>

      </ul>
    </div>
  </div>
</nav>