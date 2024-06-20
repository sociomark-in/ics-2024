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
				<h1>Articles</h1>
			</div>
			<div class="">
				<div class="row g-3">
					<div class="col-lg-4 col-md-6 col-12">
						<div class="row g-3 jusify-content-center">
							<div class="col-12">
								<picture>
									<source srcset="https://placehold.co/500x300/webp" type="image/webp">
									<source srcset="https://placehold.co/500x300/jpg" type="image/jpg">
									<img src="https://placehold.co/500x300/jpg" alt="" class="w-100">
								</picture>
							</div>
							<div class="col-md col-12" href="https://placehold.co/1500x2125/jpg">
								<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, veritatis.</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<footer>
		<?php $this->load->view('components/footer')  ?>
	</footer>
</body>

</html>
