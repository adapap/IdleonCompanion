<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/custom.css?id=khaf">
</head>

<!--  BODY  -->

<body>
	<div class="container">
		<div class="row d-flex justify-content-between pt-3">
			<div class="col-9 ">
					<img class="img d-inline my-4 ml-4" style="height:6rem;" src="assets/images/bg/logo-clean.png">
					<h1 class="display-4 text-light d-sm-inline-block d-none align-middle ml-4">Idleon Companion B5</h1>
			</div>
			<div class="col-3">
				<a type="button" class="btn btn-outline-light m-2" data-toggle="modal" data-target="#clockModal">
					<p class="m-0 text-left"><small>Reset Timer</small></p>
					<h3 class="display-4 m-0"  id="clock"></h3>
				</a>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="clockModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Configure Reset Timer </h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p class="text-light">Insert the hours and minutes of your reset timer</p>
						<div class="input-group">
							<input class="form-control w-25" type="number" id="hours" min="0" max="24" placeholder="Hours"/>
							<input class="form-control w-25" type="number" id="minutes" min="0" max="60" placeholder="Minutes"/>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button onclick="saveOffset()" type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="resetModal" tabindex="-1" role="dialog" aria-labelledby="resetModal" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="resetModalLabel">It's a new day!</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p class="text-light">Your timer expired, Would you like to reset your daily tasks?. </p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button onclick="resetDailies()" type="button" class="btn btn-primary" data-dismiss="modal">Reset Dailies</button>
					</div>
				</div>
			</div>
		</div>
		<!--  Nav  -->
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<button class="nav-link" data-bs-toggle="tab" data-bs-target="#tasks" type="button" role="tab" aria-controls="profile" aria-selected="false">Tasks</button>
			</li>
			<li class="nav-item ">
				<button class="nav-link" data-bs-toggle="tab" data-bs-target="#checklist" type="button" role="tab" aria-controls="profile" aria-selected="false">Checklist</button>
			</li>
			<li class="nav-item">
				<button class="nav-link" data-bs-toggle="tab" data-bs-target="#calc" type="button" role="tab" aria-controls="profile" aria-selected="false">King of Food</button>
			</li>
			<li class="nav-item">
				<button class="nav-link" data-bs-toggle="tab" data-bs-target="#builds" type="button" role="tab" aria-controls="profile" aria-selected="false">Builds</button>
			</li>
			<li class="nav-item">
				<button class="nav-link" data-bs-toggle="tab" data-bs-target="#cards" type="button" role="tab" aria-controls="profile" aria-selected="false">Card Sets</button>
			</li>
			<li class="nav-item">
				<button class="nav-link" data-bs-toggle="tab" data-bs-target="#credits" type="button" role="tab" aria-controls="profile" aria-selected="false">Credits</button>
			</li>
		</ul>

		<div id="nav-tabContent" class="tab-content">
			<!--  TASKS  -->
			<div class="tab-pane fade active show" id="tasks">
				<?php include "pages/tasks.php" ?>
			</div>
			<!-- checklist -->
			<div class="tab-pane fade" id="checklist">
				<?php include "pages/checklist.php" ?>
			</div>
			<!--  KING OF FOOD  -->
			<div class="tab-pane fade" id="calc">
				<?php include "pages/king-of-food.php" ?>
			</div>
			<!--  BUILDS  -->
			<div class="tab-pane fade" id="builds">
				<?php include "pages/builds.php" ?>
			</div>
			<!--  CARD SETS -->
			<div class="tab-pane fade p-3" id="cards">
				<?php include "pages/cards.php" ?>
			</div>
			<!--  CREDITS -->
			<div class="tab-pane fade" id="credits">
				<?php include "pages/credits.php" ?>
			</div>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		<script src="assets/js/main.js?9555"></script>
	</div>
	<div class="footer m-5">
	</div>
</body>

</html>
