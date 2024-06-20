<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('components/head')  ?>
</head>

<body class="bg-pure">
	<div class="widget fixed-right-middle d-none">
		<?php $this->load->view('widgets/countdown'); ?>
	</div>

	<?php $this->load->view('components/navbar')  ?>

	<section>
		<div class="hero-section">
			<div class="beforeAfter">
				<div class="">
					<div class="section section-polluted bg-polluted">
						<div class="row align-items-center justify-content-center flex-row-reverse">
							<div class="col-lg-4 col-9">
								<div class="px-5">
									<img src="<?= base_url('assets/media/images/') ?>logo-full.png" alt="ICS Logo" class="w-100" style="visibility: hidden;">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="hero-tree">
									<img src="<?= base_url('assets/media/images/') ?>barren.png" class="w-100" />
								</div>
							</div>
							<div class="col-lg-4">
								<div class="px-5">
									<h2>It's time<br> to change the climate future of India</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="">
					<div class="section section-pure bg-pure">
						<div class="row align-items-center justify-content-center flex-row-reverse ">
							<div class="col-lg-4 col-9">
								<div class="px-5">
									<img src="<?= base_url('assets/media/images/') ?>logo-full.png" alt="ICS Logo" class="w-100">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="hero-tree">
									<img src="<?= base_url('assets/media/images/') ?>green.png" class="w-100" />
									<?php for ($i = 0; $i < 6; $i++) : ?>
										<img src="<?= base_url('assets/media/images/') ?>cloud.png" class="cloud c<?= $i ?>" alt="">
									<?php endfor ?>
									<img src="<?= base_url('assets/media/') ?>birds.gif" class="fly-out birds" alt="">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="px-5">
									<h2>Together <br> we can fight India's Climate destiny</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="video-overlay d-none">
			<video muted autoplay id="overlayHeroVideo">
				<source src="<?= base_url('assets/media/') ?>video.mp4">
			</video>
		</div>
		<script>
			$("#overlayHeroVideo").on('ended', () => {
				$("#overlayHeroVideo").fadeOut(100, () => {
					$("#overlayHeroVideo").parent().addClass("hide");
				});
			})
		</script> -->
	</section>
	<!-- About -->
	<section id="introduction" class="section overflow-hidden">
		<div class="row g-0 m-0 align-items-center">
			<div class="col-xl-4 col-lg-5 col-md-6 col-12 mb-3 mb-md-0">
				<div class="hero-tree">
					<img src="<?= base_url("assets/media/images/") ?>image-left.png" class="w-100" />
					<img src="<?= base_url('assets/media/') ?>birds.gif" class="fly-out birds" alt="">
				</div>
			</div>
			<div class="col-lg-7 col-md-6 col-12">
				<div class="px-4 text-lg">
					<p>
						Discover the <strong class="text-uppercase text-lgreen">India Climate Summit</strong>, driven by the urgent need to confront the real and imminent threat of climate change to our civilization. With India experiencing a faster warming rate than the global average, including rising temperatures, heat wave fatalities, reduced food production, prolonged summers, water disputes, and mass migrations, the time for decisive action is now. Our summit is committed to fostering a sustainable nation, uniting stakeholders in a common agenda. Through compelling storytelling and impactful messaging, the India Climate Summit aims to inspire positive change towards a greener future. The inaugural edition focuses on three key objectives: raising awareness about the gravity of climate change, promoting knowledge sharing in sustainable business models and climate solutions, and encouraging multi-stakeholder collaboration. Join us in addressing the profound implications of climate change on businesses, economies, societies, and ecosystems.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- About -->
	<!-- Full Video-->
	<section class="my-3 my-md-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10 col-md-11 col-12">
					<div class="player-green">
						<div class="ratio ratio-16x9">
							<iframe class="" src="https://www.youtube.com/embed/H7vxM-u4ujw?si=bthuj-RBML7-O6YU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Full Video -->
	<!-- Speakers -->
	<section class="" id="speakers">
		<div class="container-fluid">
			<div class="row g-4">
				<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-12 bg-polluted px-3 px-md-4">
					<div class="">
						<div class="wrapper">
							<div class="section-title mb-3 mb-md-5">
								<h2 class="text-green">Key&nbsp;Speaker</h2>
							</div>
							<div class="speaker-tile key-speaker">
								<div class="speaker-image mb-3">
									<img src="<?= base_url('assets/media/images/speakers/') ?>bhupendar.png" alt="" class="w-100">
								</div>
								<div class="p-3 text-center">
									<h5>Shri Bhupender Yadav</h5>
									<p>Minister for Environment, Forest & Climate Change</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tree-element d-none d-lg-block">
						<div class="hero-tree">
							<img src="<?= base_url("assets/media/images/") ?>tree.png" class="w-100" />
							<?php for ($i = 0; $i < 4; $i++) : ?>
								<img src="<?= base_url('assets/media/images/') ?>cloud.png" class="cloud c<?= $i ?>" alt="">
							<?php endfor ?>
						</div>
					</div>
				</div>
				<div class="col-xxl-10 col-xl-9 col-lg-8 col-12 px-md-5">
					<div class="wrapper">
						<div class="section-title mb-3 mb-md-5">
							<h2>Speakers</h2>
						</div>
						<div class="swiper speakerSwiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="">
										<div class="speaker-tile normal">
											<div class="speaker-image mb-3">
												<img src="<?= base_url('assets/media/images/speakers/') ?>solhmain.png" alt="" class="w-100">
											</div>
											<div class="p-3 text-center">
												<h5>Erik Solheim</h5>
												<p>Former Under-Secretary-General of the United Nations and Executive Director of the United Nations Environment Programme.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="">
										<div class="speaker-tile normal">
											<div class="speaker-image mb-3">
												<img src="<?= base_url('assets/media/images/speakers/') ?>mads.png" alt="" class="w-100">
											</div>
											<div class="p-3 text-center">
												<h5>Mads Qvist Frederiksen,</h5>
												<p>ED, Arctic Economic Council</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="">
										<div class="speaker-tile normal">
											<div class="speaker-image mb-3">
												<img src="<?= base_url('assets/media/images/speakers/') ?>sumaira.png" alt="" class="w-100">
											</div>
											<div class="p-3 text-center">
												<h5>Sumaira Abdulali</h5>
												<p>Environmentalist</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="">
										<div class="speaker-tile normal">
											<div class="speaker-image mb-3">
												<img src="<?= base_url('assets/media/images/speakers/') ?>mukharji.png" alt="" class="w-100">
											</div>
											<div class="p-3 text-center">
												<h5>Aditya Mukarji</h5>
												<p>Youth Changemaker, Ambassador UNEP Tide Turner Challenge, UN India Youth Climate Leader</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="">
										<div class="speaker-tile normal">
											<div class="speaker-image mb-3">
												<img src="<?= base_url('assets/media/images/speakers/') ?>akhilesh.png" alt="" class="w-100">
											</div>
											<div class="p-3 text-center">
												<h5>Akhilesh Anilkumar</h5>
												<p>Director, Bring Back Green Foundation</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="">
										<div class="speaker-tile normal">
											<div class="speaker-image mb-3">
												<img src="<?= base_url('assets/media/images/speakers/') ?>ravichandran.png" alt="" class="w-100">
											</div>
											<div class="p-3 text-center">
												<h5>Dr. M Ravichandran</h5>
												<p>Secretary, Ministry of Earth Sciences</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="">
										<div class="speaker-tile normal">
											<div class="speaker-image mb-3">
												<img src="<?= base_url('assets/media/images/speakers/') ?>andheria.png" alt="" class="w-100">
											</div>
											<div class="p-3 text-center">
												<h5>Dr Anish Andheria </h5>
												<p>President  & CEO, Wildlife Conservation Trust </p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="">
										<div class="speaker-tile normal">
											<div class="speaker-image mb-3">
												<img src="<?= base_url('assets/media/images/speakers/') ?>jacob.png" alt="" class="w-100">
											</div>
											<div class="p-3 text-center">
												<h5>Nitya Jacob</h5>
												<p>Cordinator, India Chapter of Sustainable Sanitisation Alliance & Author</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="">
										<div class="speaker-tile normal">
											<div class="speaker-image mb-3">
												<img src="<?= base_url('assets/media/images/speakers/') ?>drvibha.png" alt="" class="w-100">
											</div>
											<div class="p-3 text-center">
												<h5>Dr. Vibha Dhawan</h5>
												<p>Director General, TERI</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="">
										<div class="speaker-tile normal">
											<div class="speaker-image mb-3">
												<img src="<?= base_url('assets/media/images/speakers/') ?>saurabh.png" alt="" class="w-100">
											</div>
											<div class="p-3 text-center">
												<h5>Saurabh Kumar</h5>
												<p>Head of Global Energy Alliance for People and Planet</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Speakers -->

	<!-- Agenda -->
	<section class="section d-none">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title text-center mb-3">
						<h2>The Agenda</h2>
					</div>
					<div class="row" id="lightgallery">
						<a class="col-md-6 col-12" href="https://placehold.co/1500x2125/jpg">
							<picture>
								<source srcset="https://placehold.co/500x300/webp" type="image/webp">
								<source srcset="https://placehold.co/500x300/jpg" type="image/jpg">
								<img src="https://placehold.co/500x300/jpg" alt="" class="w-100">
							</picture>
						</a>
						<a class="col-md-6 col-12" href="https://placehold.co/1500x2125/jpg">
							<picture>
								<source srcset="https://placehold.co/500x300/webp" type="image/webp">
								<source srcset="https://placehold.co/500x300/jpg" type="image/jpg">
								<img src="https://placehold.co/500x300/jpg" alt="" class="w-100">
							</picture>
						</a>
					</div>
					<script type="text/javascript">
						lightGallery(document.getElementById('lightgallery'), {
							plugins: [lgZoom, lgThumbnail],
							speed: 500,
						});
					</script>
				</div>
			</div>
		</div>
	</section>
	<!-- Agenda -->
	<!-- Articles -->
	<section class="section" id="articles">
		<div class="container">
			<div class="section-title mb-3 mb-md-4">
				<h2>Articles</h2>
			</div>
			<div class="">
				<div class="row g-3">
					<div class="col-lg-4 col-md-6 col-12">
						<a href="https://www.timesnownews.com/india/why-handling-climate-change-in-india-is-a-challenge-article-111114786" target="_blank" class="article-single">
							<div class="row jusify-content-center">
								<div class="col-12">
									<div class="media-content">
										<picture>
											<source srcset="https://static.tnn.in/thumb/msid-111114707,thumbsize-702980,width-1280,height-720,resizemode-75/111114707.jpg" type="image/jpg">
											<source srcset="https://static.tnn.in/photo/msid-88386381,width-200,height-200,resizemode-75/88386381.jpg" type="image/jpg">
											<img src="https://static.tnn.in/thumb/msid-111114707,thumbsize-702980,width-1280,height-720,resizemode-75/111114707.jpg" alt="" class="w-100">
										</picture>
									</div>
								</div>
								<div class="col-md col-12" href="https://placehold.co/1500x2125/jpg">
									<div class="text-content">
										<h5 class="">Why Handling Climate Change In India Is A Challenge</h5>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<a href="https://www.timesnownews.com/india/navigating-indias-water-crisis-with-the-world-banks-support-article-111114663" target="_blank" class="article-single">
							<div class="row jusify-content-center">
								<div class="col-12">
									<div class="media-content">
										<picture>
											<source srcset="https://static.tnn.in/thumb/msid-111114634,thumbsize-911313,width-1280,height-720,resizemode-75/111114634.jpg" type="image/jpg">
											<source srcset="https://static.tnn.in/photo/msid-88386381,width-200,height-200,resizemode-75/88386381.jpg" type="image/jpg">
											<img src="https://static.tnn.in/thumb/msid-111114634,thumbsize-911313,width-1280,height-720,resizemode-75/111114634.jpg" alt="" class="w-100">
										</picture>
									</div>
								</div>
								<div class="col-md col-12" href="https://placehold.co/1500x2125/jpg">
									<div class="text-content">
										<h5 class="">Navigating India's Water Crisis with the World Bank's Support</h5>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<a href="https://www.timesnownews.com/india/climate-change-presents-a-fundamental-threat-to-human-health-who-article-111114553" target="_blank" class="article-single">
							<div class="row jusify-content-center">
								<div class="col-12">
									<div class="media-content">
										<picture>
											<source srcset="https://static.tnn.in/thumb/msid-111114583,thumbsize-1411442,width-1280,height-720,resizemode-75/111114583.jpg" type="image/jpg">
											<source srcset="https://static.tnn.in/photo/msid-88386381,width-200,height-200,resizemode-75/88386381.jpg" type="image/jpg">
											<img src="https://static.tnn.in/thumb/msid-111114583,thumbsize-1411442,width-1280,height-720,resizemode-75/111114583.jpg" alt="" class="w-100">
										</picture>
									</div>
								</div>
								<div class="col-md col-12" href="https://placehold.co/1500x2125/jpg">
									<div class="text-content">
										<h5 class="">Climate Change Presents A Fundamental Threat To Human Health: WHO</h5>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<a href="https://www.timesnownews.com/india/indias-bold-steps-in-combating-climate-change-a-model-for-sustainable-development-article-111114702" target="_blank" class="article-single">
							<div class="row jusify-content-center">
								<div class="col-12">
									<div class="media-content">
										<picture>
											<source srcset="https://static.tnn.in/thumb/msid-111114651,thumbsize-1208951,width-1280,height-720,resizemode-75/111114651.jpg" type="image/jpg">
											<source srcset="https://static.tnn.in/photo/msid-88386381,width-200,height-200,resizemode-75/88386381.jpg" type="image/jpg">
											<img src="https://static.tnn.in/thumb/msid-111114651,thumbsize-1208951,width-1280,height-720,resizemode-75/111114651.jpg" alt="" class="w-100">
										</picture>
									</div>
								</div>
								<div class="col-md col-12" href="https://placehold.co/1500x2125/jpg">
									<div class="text-content">
										<h5 class="">India's Bold Steps in Combating Climate Change: A Model for Sustainable Development</h5>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<a href="https://www.timesnownews.com/business-economy/companies/adani-ports-gains-recognition-for-climate-initiatives-strengthening-its-esg-leadership-article-111019518" target="_blank" class="article-single">
							<div class="row jusify-content-center">
								<div class="col-12">
									<div class="media-content">
										<picture>
											<source srcset="https://static.tnn.in/thumb/msid-111019803,thumbsize-1669294,width-1280,height-720,resizemode-75/111019803.jpg" type="image/jpg">
											<source srcset="https://static.tnn.in/photo/msid-88386381,width-200,height-200,resizemode-75/88386381.jpg" type="image/jpg">
											<img src="https://static.tnn.in/thumb/msid-111019803,thumbsize-1669294,width-1280,height-720,resizemode-75/111019803.jpg" alt="" class="w-100">
										</picture>
									</div>
								</div>
								<div class="col-md col-12" href="https://placehold.co/1500x2125/jpg">
									<div class="text-content">
										<h5 class="">Adani Ports Gains Recognition for Climate Initiatives, Strengthening Its ESG Leadership</h5>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<a href="https://www.timesnownews.com/world/venezuela-becomes-first-country-to-lose-all-its-glacier-in-south-america-article-110633395" target="_blank" class="article-single">
							<div class="row jusify-content-center">
								<div class="col-12">
									<div class="media-content">
										<picture>
											<source srcset="https://static.tnn.in/thumb/msid-110634931,thumbsize-1510107,width-1280,height-720,resizemode-75/110634931.jpg" type="image/jpg">
											<source srcset="https://static.tnn.in/photo/msid-88386381,width-200,height-200,resizemode-75/88386381.jpg" type="image/jpg">
											<img src="https://static.tnn.in/thumb/msid-110634931,thumbsize-1510107,width-1280,height-720,resizemode-75/110634931.jpg" alt="" class="w-100">
										</picture>
									</div>
								</div>
								<div class="col-md col-12" href="https://placehold.co/1500x2125/jpg">
									<div class="text-content">
										<h5 class="">Venezuela Becomes First Country To Lose All Its Glacier In South America</h5>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<a href="https://www.timesnownews.com/health/experts-warn-climate-change-can-adversely-affect-pregnant-women-children-article-110765037" target="_blank" class="article-single">
							<div class="row jusify-content-center">
								<div class="col-12">
									<div class="media-content">
										<picture>
											<source srcset="https://static.tnn.in/thumb/msid-110765197,thumbsize-38598,width-1280,height-720,resizemode-75/110765197.jpg" type="image/jpg">
											<source srcset="https://static.tnn.in/photo/msid-88386381,width-200,height-200,resizemode-75/88386381.jpg" type="image/jpg">
											<img src="https://static.tnn.in/thumb/msid-110765197,thumbsize-38598,width-1280,height-720,resizemode-75/110765197.jpg" alt="" class="w-100">
										</picture>
									</div>
								</div>
								<div class="col-md col-12" href="https://placehold.co/1500x2125/jpg">
									<div class="text-content">
										<h5 class="">Experts Warn Climate Change Can Adversely Affect Pregnant Women, Children</h5>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<a href="https://www.timesnownews.com/india/10-inspiring-indian-environmentalists-shaping-a-greener-future-article-110768100" target="_blank" class="article-single">
							<div class="row jusify-content-center">
								<div class="col-12">
									<div class="media-content">
										<picture>
											<source srcset="https://static.tnn.in/thumb/msid-110768056,thumbsize-847931,width-1280,height-720,resizemode-75/110768056.jpg" type="image/jpg">
											<source srcset="https://static.tnn.in/photo/msid-88386381,width-200,height-200,resizemode-75/88386381.jpg" type="image/jpg">
											<img src="https://static.tnn.in/thumb/msid-110768056,thumbsize-847931,width-1280,height-720,resizemode-75/110768056.jpg" alt="" class="w-100">
										</picture>
									</div>
								</div>
								<div class="col-md col-12" href="https://placehold.co/1500x2125/jpg">
									<div class="text-content">
										<h5 class="">10 Inspiring Indian Environmentalists Shaping a Greener Future</h5>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<a href="https://www.timesnownews.com/health/world-environment-day-2024-which-deadly-diseases-are-spiking-due-to-climate-change-global-warming-article-110724873" target="_blank" class="article-single">
							<div class="row jusify-content-center">
								<div class="col-12">
									<div class="media-content">
										<picture>
											<source srcset="https://static.tnn.in/thumb/msid-110724955,thumbsize-21248,width-1280,height-720,resizemode-75/110724955.jpg" type="image/jpg">
											<source srcset="https://static.tnn.in/photo/msid-88386381,width-200,height-200,resizemode-75/88386381.jpg" type="image/jpg">
											<img src="https://static.tnn.in/thumb/msid-110724955,thumbsize-21248,width-1280,height-720,resizemode-75/110724955.jpg" alt="" class="w-100">
										</picture>
									</div>
								</div>
								<div class="col-md col-12" href="https://placehold.co/1500x2125/jpg">
									<div class="text-content">
										<h5 class="">World Environment Day 2024: Which Deadly Diseases Are Spiking Due To Climate Change?</h5>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-12 d-none">
						<a href="https://www.timesnownews.com/opinion/india/delhi-heatwave-pushes-human-endurance-why-this-is-a-cause-of-concern-for-other-nations-article-110634314" target="_blank" class="article-single">
							<div class="row jusify-content-center">
								<div class="col-12">
									<div class="media-content">
										<picture>
											<source srcset="https://static.tnn.in/thumb/msid-110634314,thumbsize-66806,width-1280,height-720,resizemode-75/110634314.jpg" type="image/jpg">
											<source srcset="https://static.tnn.in/photo/msid-88386381,width-200,height-200,resizemode-75/88386381.jpg" type="image/jpg">
											<img src="https://static.tnn.in/thumb/msid-110634314,thumbsize-66806,width-1280,height-720,resizemode-75/110634314.jpg" alt="" class="w-100">
										</picture>
									</div>
								</div>
								<div class="col-md col-12" href="https://placehold.co/1500x2125/jpg">
									<div class="text-content">
										<h5 class="">Delhi Heatwave Pushes Human Endurance: Why This Is A Cause Of Concern For Other Nations</h5>
									</div>
								</div>
							</div>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- Articles -->
	<!-- Partners -->
	<section id="partners" class="bg-white py-3 py-md-4">
		<div class="container">
			<div class="row m-0">
				<div class="col-12">
					<div class="mb-md-4 mb-3">
						<h2 class="text-center text-uppercase">Our Partners</h2>
					</div>
					<div class="row m-0 justify-content-center">
						<div class="col-12">
							<div class="partners-nav row g-3 justify-content-between">
								<div class="col-6 col-md-auto">
									<a href="" class="nav-link text-dark text-center">
										<p class="mb-3">
											An Initiative By
										</p>
										<div class="px-3">
											<img src="<?= base_url('assets/media/images/logos/') ?>times.png" alt="Partners" height="40">
										</div>
									</a>
								</div>
								<div class="col-6 col-md-auto">
									<a href="" class="nav-link text-dark text-center">
										<p class="mb-3">
											Associate Partner
										</p>
										<div class="px-3">
											<img src="<?= base_url('assets/media/images/logos/') ?>adani.png" alt="Partners" height="40">
										</div>
									</a>
								</div>
								<div class="col-6 col-md-auto">
									<a href="" class="nav-link text-dark text-center">
										<p class="mb-3">
											Education Partner
										</p>
										<img src="<?= base_url('assets/media/images/logos/') ?>bennett.png" alt="Partners" height="40">
									</a>
								</div>
								<div class="col-6 col-md-auto">
									<a href="" class="nav-link text-dark text-center">
										<p class="mb-3">
											Knowledge Partner
										</p>
										<img src="<?= base_url('assets/media/images/logos/') ?>ey.png" alt="Partners" height="40">
									</a>
								</div>
								<div class="col-6 col-md-auto">
									<a href="" class="nav-link text-dark text-center">
										<p class="mb-3">
											NGO Partner
										</p>
										<img src="<?= base_url('assets/media/images/logos/') ?>sankalp.png" alt="Partners" height="40">
									</a>
								</div>
								<div class="col-6 col-md-auto">
									<a href="" class="nav-link text-dark text-center">
										<p class="mb-3">
											Research Partner
										</p>
										<img src="<?= base_url('assets/media/images/logos/') ?>climate-trends.png" alt="Partners" height="40">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Partners -->
	<footer>
		<?php $this->load->view('components/footer')  ?>
	</footer>



	<script src="<?= base_url('vendors/') ?>before-after-viewer/dist/beforeafter.jquery-1.0.0.min.js"></script>


	<script>
		var swiper = new Swiper(".speakerSwiper", {
			slidesPerView: 1,
			grid: {
				rows: 1,
				fill: 'row'
			},
			breakpoints: {
				640: {
					slidesPerView: 2,
					spaceBetween: 20,
					grid: {
						rows: 2,
						fill: 'row'
					},
				},
				1024: {
					slidesPerView: 3,
					spaceBetween: 50,
					grid: {
						rows: 2,
						fill: 'row'
					},
				},
				1400: {
					slidesPerView: 5,
					spaceBetween: 50,
					grid: {
						rows: 2,
						fill: 'row'
					},
				},
			},
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
		});
	</script>


	<script>
		$('.beforeAfter').beforeAfter({
			movable: true,
			clickMove: true,
			position: 50,
			separatorColor: '#fafafa',
			bulletColor: '#3fb0fc',
			opacity: 0.9,
			/*
            movable: !0,
        clickMove: !0,
        alwaysShow: !0,
        position: 50,
        hoverOpacity: 0.8,
        activeOpacity: 1,
        separatorColor: "#ffffff",
        bulletColor: "#ffffff",
        arrowColor: "#333333", 
            */
			// onMoveStart: function (e) {
			//     console.log(event.target);
			// },
			// onMoving: function () {
			//     console.log(event.target);
			// },
			// onMoveEnd: function () {
			//     console.log(event.target);
			// },
		});
	</script>
</body>

</html>
