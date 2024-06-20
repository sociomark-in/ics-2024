<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('components/head')  ?>
</head>

<body class="bg-pure">
	<div class="widget fixed-right-middle">
		<?php $this->load->view('widgets/countdown'); ?>
	</div>

	<?php $this->load->view('components/navbar')  ?>
	<main>
		<div class="container">
			<div class="page-title text-center section">
				<h1>Gallery</h1>
			</div>
			<div class="row g-3" id="lightgallery">
				<?php for ($i=0; $i < 12; $i++) :?>
				<a class="col-xl-3 col-lg-4 col-md-6 col-12" href="https://placehold.co/1500x2125/jpg">
					<picture>
						<source srcset="https://placehold.co/500x300/webp" type="image/webp">
						<source srcset="https://placehold.co/500x300/jpg" type="image/jpg">
						<img src="https://placehold.co/500x300/jpg" alt="" class="w-100">
					</picture>
				</a>
				<?php endfor ?>
			</div>
			<script type="text/javascript">
				lightGallery(document.getElementById('lightgallery'), {
					plugins: [lgZoom, lgThumbnail],
					speed: 500,
				});
			</script>
		</div>
	</main>

	<footer>
		<?php $this->load->view('components/footer')  ?>
	</footer>
</body>

</html>
