<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    />
    <link rel="shotcut icon" type="image/x-icon" href="../assets/android-chrome-192x192.png">
    <script src="https://kit.fontawesome.com/ba4825c01c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/style.css"/>
    <link rel="stylesheet" href="./style/log.css"/>
	<title>eduGate</title>
  </head>
  <body>
    <!-- Navbar -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-transparent" style="z-index: 2000;">
			<div class="container-fluid">
				<a class="navbar-brand" href="dashboard.php"><strong>eduGate</strong></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav me-auto mb-2 mb-lg-0">
						<a class="nav-item nav-link active" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
						<a class="nav-item nav-link" href="logout.php">Log Out</a>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- Navbar -->

    <!-- Background image -->
    <div class="bg-image shadow-2-strong" id="intro">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);">
            <div class="d-flex align-items-center justify-content-md-center" style="height: 100vh;">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Student Payment</h5>
                                <p class="card-text">Melakukan pembayaran UKT</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Student Monitoring</h5>
                                <p class="card-text">Untuk melihat informasi terkait anak Anda<p>
                                <a href="student-list.php" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html> 