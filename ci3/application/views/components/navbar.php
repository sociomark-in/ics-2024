<nav class="navbar navbar-expand-lg">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?= base_url() ?>">
			<img src="<?= base_url('assets/media/images/') ?>logo.png" alt="ICS Logo" height="60">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse w-100 mx-xl-5 mx-lg-3 justify-content-between" id="navbarNav">
			<ul class="main-nav navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("#introduction") ?>">About</a>
				</li>
				<li class="nav-item d-none">
					<a class="nav-link" href="<?= base_url("#target") ?>">What To Expect</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("#speakers") ?>">Speakers</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("#partners") ?>">Partners</a>
				</li>
				<li class="nav-item d-none">
					<a class="nav-link" href="<?= base_url("#agenda") ?>">Agenda</a>
				</li>
				<li class="nav-item d-none">
					<!-- <a class="nav-link disabled" aria-disabled="true">Gallery</a> -->
					<a class="nav-link" href="<?= base_url("gallery") ?>">Gallery</a>
				</li>
				<li class="nav-item">
					<!-- <a class="nav-link disabled" aria-disabled="true">Gallery</a> -->
					<!-- <a class="nav-link" href="<?= base_url("articles") ?>">Articles</a> -->
					<a class="nav-link" href="<?= base_url("#articles") ?>">Articles</a>
				</li>
			</ul>
			<ul class="sub-nav navbar-nav d-none">
				<li class="nav-item">
					<a class="btn btn-primary btn-green" href="#">Register Now</a>
				</li>
			</ul>
		</div>
		<a class="navbar-brand d-none d-lg-block" href="https://www.timesnownews.com/" target="_blank">
			<img src="<?= base_url('assets/media/images/') ?>times.png" alt="ICS Logo" height="50">
		</a>
	</div>
</nav>
