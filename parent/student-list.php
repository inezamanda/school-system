<?php  
	// connect file index sama utilities 
	require "functions.php";

	$students = query("SELECT * FROM students");
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

	<main class="container-xl" style="height: 100vh">
		<div class="align-items-center justify-content-md-center" style="height: 100vh;">
			
			<h1 class="text-center mt-5 mb-5 fs-sm-1 fs-4">Monitor Kinerja Siswa</h1>
			<div class="px-2">
				<table class="table table-hover">
					<thead>
						<tr class="table-dark">
							<th scope="col">No</th>
							<th scope="col">Name</th>
							<th scope="col" class="d-none d-md-table-cell">Address</th>
							<th scope="col">Gender</th>
							<th scope="col">Religion</th>
							<th scope="col">Birth Date</th>
							<th scope="col">Kelas</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $count = 1; ?>
						<?php foreach($students as $student) : ?>
							<tr class="table-light"> 
								<th scope="row"><?= $count; ?></th>
								<td><?= $student["nama"] ?></td>
								<?php 
									$address = $student["alamat"]; 
									if(strlen($address) >= 15){
										$address = substr($address, 0, 15) . "...";
									}
								?>
								<td class="d-none d-md-table-cell"><?= $address ?></td>
								<td><?= $student["jenis_kelamin"] ?></td>
								<td><?= $student["agama"] ?></td>
								<td><?= $student["tanggal_lahir"] ?></td>
								<td><?= $student["kelas"] ?></td>
								<td >
									<button type="button" class="btn btn-warning btn-sm btn-lg-lg">
										<a href="" 
											style="color: black; text-decoration: none">
											Detail
										</a>
									</button>	
								</td>
							</tr>
							<?php $count++; ?>
						<?php endforeach ;?>
					</tbody>
				</table>
			</div>
		</div>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>