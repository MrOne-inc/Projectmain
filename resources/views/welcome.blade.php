<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Popular News</title>
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/fonts/css/fontawesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/fonts/css/brands.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assetsfonts/css/solid.min.css/') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/global.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/index.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>

<body>

	<section id="top" class="bg-dark pt-3 pb-3">
		<div class="container-xl">
			<div class="row top_1">
				<div class="col-md-12">

				</div>
			</div>
		</div>
	</section>

	<section id="header_top" class="bg_black pt-3 pb-3">
		<div class="container-xl">
			<div class="row header_top_1 pt-1">
				<div class="col-md-12">

				</div>
			</div>
		</div>
	</section>

	<section id="header">
		<nav class="navbar navbar-expand-lg navbar-light w-100">
			<div class="container-xl">
				<a class="d-flex text-white" href="index.html">
					<b class="fs-4  d-block text-uppercase logo bg_black p-2 px-3"> <i
							class="fa-brands fa-nfc-directional col_yellow me-1"></i> Popular News</b>
				</a>
				<button class="navbar-toggler offcanvas-nav-btn  ms-auto me-3" type="button">
					<img src="image/icons-svg/list.svg" width="40" height="40" alt="Open TemplateOnweb website menu" />
				</button>
				<div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
					<div class="offcanvas-header shadow">
						<a class="d-flex text-white" href="index.html">
							<b class="fs-4  d-block text-uppercase logo"> <i
									class="fa-brands fa-nfc-directional col_yellow me-1"></i> Popular News</b>
						</a>
						<img src="image/icons-svg/x.svg" width="40" height="40" class="ms-auto"
							data-bs-dismiss="offcanvas" aria-label="Close" alt="Close TemplateOnweb website menu" />

					</div>
					<div class="offcanvas-body pt-0 align-items-center">
						<ul class="navbar-nav align-items-lg-center ms-auto">
							<li class="nav-item">
								<a class="nav-link dropdown-toggle active" href="index.html" title="Visit home page">
									Home
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link dropdown-toggle" href="#sport.html" title="Visit home page">
									Event
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link dropdown-toggle" href="#entertainment.html" title="Visit home page">
									prorams
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link dropdown-toggle" href="#travel.html" title="Visit home page">
									About
								</a>
							</li>


							<ul class="navbar-nav align-items-lg-center ms-auto social_nav">
								<li class="nav-item">
									<a class="nav-link dropdown-toggle px-3" href="#" title="Visit home page">
										<i class="fa-brands fa-facebook-f"></i>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link dropdown-toggle px-3" href="#" title="Visit home page">
										<i class="fa-brands fa-twitter"></i>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link dropdown-toggle col_yellow px-3" href="#"
										title="Visit home page">
										<i class="fa-brands fa-instagram"></i>
									</a>
								</li>
							</ul>
					</div>
				</div>
			</div>
			</div>
		</nav>
	</section>

	<section id="center" class="center_home">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{ asset('assets/image/1.jpg') }}" class="d-block img-fluid" alt="...">
					<div class="carousel-caption d-md-block text-center">
						<span class="col_yellow font_12 d-block">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</span>
						<b class="text-white d-block mt-2 text-uppercase font_14">Elric Porta Space</b>
						<h1 class="mt-2 mb-3 text-uppercase font_60">Popular <span class="col_yellow">News</span></h1>
						<p class="w-50 text-light mx-auto">Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus?
							Suscipit class corporis nostra rem quos
							voluptatibus habitant? Fames, vivamus minim nemo enim, gravida lobortis quasi, eum.</p>
						<h6 class="mb-0 mt-4"><a class="button" href="#">Read More <i
									class="fa fa-arrow-right ms-2 col_yellow"></i></a></h6>
					</div>
				</div>
				<div class="carousel-item">
					<img src="{{ asset('assets/image/2.jpg') }}" class="d-block img-fluid" alt="...">
					<div class="carousel-caption d-md-block text-center">
						<span class="col_yellow font_12 d-block">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</span>
						<b class="text-white d-block mt-2 text-uppercase font_14">Semper Porta Space</b>
						<h1 class="mt-2 mb-3 text-uppercase font_60">Trending <span class="col_yellow">News</span></h1>
						<p class="w-50 text-light mx-auto">Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus?
							Suscipit class corporis nostra rem quos
							voluptatibus habitant? Fames, vivamus minim nemo enim, gravida lobortis quasi, eum.</p>
						<h6 class="mb-0 mt-4"><a class="button" href="#">Read More <i
									class="fa fa-arrow-right ms-2 col_yellow"></i></a></h6>
					</div>
				</div>
				<div class="carousel-item">
					<img src="{{ asset('assets/image/3.jpg') }}" class="d-block img-fluid" alt="...">
					<div class="carousel-caption d-md-block text-center">
						<span class="col_yellow font_12 d-block">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</span>
						<b class="text-white d-block mt-2 text-uppercase font_14">Lorem Porta Space</b>
						<h1 class="mt-2 mb-3 text-uppercase font_60">Latest <span class="col_yellow">News</span></h1>
						<p class="w-50 text-light mx-auto">Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus?
							Suscipit class corporis nostra rem quos
							voluptatibus habitant? Fames, vivamus minim nemo enim, gravida lobortis quasi, eum.</p>
						<h6 class="mb-0 mt-4"><a class="button" href="#">Read More <i
									class="fa fa-arrow-right ms-2 col_yellow"></i></a></h6>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</section>

	<section id="play" class="mt-2">
		<div class="container-xl">
			<div class="play_content">
				<div class="logo">
					<img src="logo.png" alt="Station Logo"> <!-- Replace with your logo image -->
				</div>
				<button class="play-button">Play Now</button>
				<div class="volume-icon">🔊</div> <!-- Volume icon -->
			</div>
		</div>
	</section>

	<section id="news" class="pt-5 pb-5 bg-light">
		<div class="container-xl">
			<div class="row news_1">
				<div class="col-md-8">
					<div class="news_1_left">
						<!----latest news starts-->
						<div class="news_1_left1 p-3 bg-white border_thick mt-3">
							<div class="news_1_left1_inner row">
								<div class="col-md-3 col-sm-4">
									<div class="news_1_left1_inner_left pt-1">
										<b class="d-block text-uppercase">Latest News</b>
									</div>
								</div>
								<div class="col-md-9 col-sm-8">
									<div class="news_1_left1_inner_right">
										<ul class="nav nav-tabs mb-0 fw-bold font_11 border-0 justify-content-end">
											<li class="nav-item d-inline-block">
												<a href="#profile4" data-bs-toggle="tab" aria-expanded="false"
													class="nav-link active text-center">
													<span class="d-md-block text-uppercase">All</span>
												</a>
											</li>
											<li class="nav-item d-inline-block">
												<a href="#profile5" data-bs-toggle="tab" aria-expanded="true"
													class="nav-link text-center">
													<span class="d-md-block text-uppercase">Trending</span>
												</a>
											</li>
											<li class="nav-item d-inline-block">
												<a href="#profile6" data-bs-toggle="tab" aria-expanded="true"
													class="nav-link border-end-0 text-center">
													<span class="d-md-block text-uppercase">Popular</span>
												</a>
											</li>

											<li class="nav-item d-inline-block">
												<a href="#profile7" data-bs-toggle="tab" aria-expanded="true"
													class="nav-link border-end-0 text-center">
													<span class="d-md-block text-uppercase">Latest</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="news_1_left2 mt-3">
							<div class="tab-content">
								<div class="tab-pane active" id="profile4">
									<div class="card">
										<div class="card-body p-0">
											<div class="row row-cols-1 row-cols-sm-1 row-cols-lg-2 row-cols-md-1 mx-0">
												<div class="col p-0">
													<div class="blog_inner_left position-relative">
														<div class="blog_inner_left1">
															<a href="news_detail.html"><img src="image/16.jpg"
																	class="img-fluid" alt="..."></a>
														</div>
														<div class="blog_inner_left2   position-absolute top-0 p-3">
															<ul class="mb-0">
																<li class="d-block fs-5"><a
																		class="d-block bg_yellow text-white  rounded-circle text-center icon_1"
																		href="news_detail.html"><i
																			class="fa fa-plus"></i></a></li>
																<li class="d-block fs-5 mt-2"><a
																		class="d-block bg-info text-white  rounded-circle text-center icon_1 icon_2"
																		href="news_detail.html"><i
																			class="fa-brands fa-facebook-f"></i></a>
																</li>
																<li class="d-block fs-5 mt-2"><a
																		class="d-block bg-danger text-white  rounded-circle text-center icon_1 icon_2"
																		href="news_detail.html"><i
																			class="fa-brands fa-twitter"></i></a></li>
																<li class="d-block fs-5 mt-2"><a
																		class="d-block bg-success text-white  rounded-circle text-center icon_1 icon_2"
																		href="news_detail.html"><i
																			class="fa-brands fa-pinterest-p"></i></a>
																</li>
																<li class="d-block fs-5 mt-2"><a
																		class="d-block bg_violet text-white  rounded-circle text-center icon_1 icon_2"
																		href="news_detail.html"><i
																			class="fa-brands fa-instagram"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="col p-0">
													<div
														class="blog_inner_right pt-4 d-flex flex-column align-items-start">
														<b
															class="d-inline-block bg_yellow text-white p-1 px-3 font_10 text-uppercase rounded-1 mx-3">Latest</b>
														<b class="d-block fs-5 text-uppercase mt-2 mb-1 px-3"><a
																href="news_detail.html">LOREM IPSUM DOLOR SIT AMET,
																CONSECTETUR ADIPISCING ELIT</a></b>
														<span class="light_gray font_12 fw-bold px-3 text-uppercase">Aug
															13, 2016</span>

														<p class="mt-3 px-3 mb-0 pb-4">Praesent sapien massa, convallis
															a Donec sollicitudin molestie malesuada. Mauris blandit
															aliquet elit Praesent sapien massa, convallis a Donec
															sollicitudin molestie malesuada. Mauris blandit aliquet
															elit"</p>
														<div class="mt-auto w-100">

															<ul
																class="mb-0 px-3 py-3 font_11 fw-bold text-uppercase justify-content-between d-flex border-top">
																<li>
																	<a href="news_detail.html"><img
																			class="rounded-circle" alt="abc"
																			src="image/8.jpg"></a>
																	<span class="light_gray ms-2">Eget Nulla</span>
																</li>
																<li class="my-auto">
																	<a class="light_gray" href="news_detail.html"><i
																			class="fa fa-eye me-1"></i> 2277</a>
																	<a class="light_gray mx-3"
																		href="news_detail.html"><i
																			class="fa fa-heart me-1 text-danger"></i>
																		545</a>
																	<a class="light_gray" href="news_detail.html"><i
																			class="fa fa-comment me-1"></i> 16</a>
																</li>
															</ul>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
								<div class="tab-pane" id="profile5">
									<div class="card">
										<div class="card-body p-0">
											<div class="row row-cols-1 row-cols-sm-1 row-cols-lg-2 row-cols-md-1 mx-0">
												<div class="col p-0">
													<div class="blog_inner_left position-relative">
														<div class="blog_inner_left1">
															<a href="news_detail.html"><img src="image/18.jpg"
																	class="img-fluid" alt="..."></a>
														</div>
														<div class="blog_inner_left2   position-absolute top-0 p-3">
															<ul class="mb-0">
																<li class="d-block fs-5"><a
																		class="d-block bg_yellow text-white  rounded-circle text-center icon_1"
																		href="news_detail.html"><i
																			class="fa fa-plus"></i></a></li>
																<li class="d-block fs-5 mt-2"><a
																		class="d-block bg-info text-white  rounded-circle text-center icon_1 icon_2"
																		href="news_detail.html"><i
																			class="fa-brands fa-facebook-f"></i></a>
																</li>
																<li class="d-block fs-5 mt-2"><a
																		class="d-block bg-danger text-white  rounded-circle text-center icon_1 icon_2"
																		href="news_detail.html"><i
																			class="fa-brands fa-twitter"></i></a></li>
																<li class="d-block fs-5 mt-2"><a
																		class="d-block bg-success text-white  rounded-circle text-center icon_1 icon_2"
																		href="news_detail.html"><i
																			class="fa-brands fa-pinterest-p"></i></a>
																</li>
																<li class="d-block fs-5 mt-2"><a
																		class="d-block bg_violet text-white  rounded-circle text-center icon_1 icon_2"
																		href="news_detail.html"><i
																			class="fa-brands fa-instagram"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="col p-0">
													<div
														class="blog_inner_right pt-4 d-flex flex-column align-items-start">
														<b
															class="d-inline-block bg_yellow text-white p-1 px-3 font_10 text-uppercase rounded-1 mx-3">Latest</b>
														<b class="d-block fs-5 text-uppercase mt-2 mb-1 px-3"><a
																href="news_detail.html">LOREM IPSUM DOLOR SIT AMET,
																CONSECTETUR ADIPISCING ELIT</a></b>
														<span class="light_gray font_12 fw-bold px-3 text-uppercase">Aug
															13, 2016</span>

														<p class="mt-3 px-3 mb-0 pb-4">Praesent sapien massa, convallis
															a Donec sollicitudin molestie malesuada. Mauris blandit
															aliquet elit Praesent sapien massa, convallis a Donec
															sollicitudin molestie malesuada. Mauris blandit aliquet
															elit"</p>
														<div class="mt-auto w-100">

															<ul
																class="mb-0 px-3 py-3 font_11 fw-bold text-uppercase justify-content-between d-flex border-top">
																<li>
																	<a href="news_detail.html"><img
																			class="rounded-circle" alt="abc"
																			src="image/8.jpg"></a>
																	<span class="light_gray ms-2">Eget Nulla</span>
																</li>
																<li class="my-auto">
																	<a class="light_gray" href="news_detail.html"><i
																			class="fa fa-eye me-1"></i> 2277</a>
																	<a class="light_gray mx-3"
																		href="news_detail.html"><i
																			class="fa fa-heart me-1 text-danger"></i>
																		545</a>
																	<a class="light_gray" href="news_detail.html"><i
																			class="fa fa-comment me-1"></i> 16</a>
																</li>
															</ul>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card mt-3">
										<div class="card-body p-0">
											<div class="row row-cols-1 row-cols-sm-1 row-cols-lg-2 row-cols-md-1 mx-0">
												<div class="col p-0">
													<div class="blog_inner_left position-relative">
														<div class="blog_inner_left1">
															<a href="news_detail.html"><img src="image/19.jpg"
																	class="img-fluid" alt="..."></a>
														</div>
														<div class="blog_inner_left2   position-absolute top-0 p-3">
															<ul class="mb-0">
																<li class="d-block fs-5"><a
																		class="d-block bg_yellow text-white  rounded-circle text-center icon_1"
																		href="news_detail.html"><i
																			class="fa fa-plus"></i></a></li>
																<li class="d-block fs-5 mt-2"><a
																		class="d-block bg-info text-white  rounded-circle text-center icon_1 icon_2"
																		href="news_detail.html"><i
																			class="fa-brands fa-facebook-f"></i></a>
																</li>
																<li class="d-block fs-5 mt-2"><a
																		class="d-block bg-danger text-white  rounded-circle text-center icon_1 icon_2"
																		href="news_detail.html"><i
																			class="fa-brands fa-twitter"></i></a></li>
																<li class="d-block fs-5 mt-2"><a
																		class="d-block bg-success text-white  rounded-circle text-center icon_1 icon_2"
																		href="news_detail.html"><i
																			class="fa-brands fa-pinterest-p"></i></a>
																</li>
																<li class="d-block fs-5 mt-2"><a
																		class="d-block bg_violet text-white  rounded-circle text-center icon_1 icon_2"
																		href="news_detail.html"><i
																			class="fa-brands fa-instagram"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="col p-0">
													<div
														class="blog_inner_right pt-4 d-flex flex-column align-items-start">
														<b
															class="d-inline-block bg_yellow text-white p-1 px-3 font_10 text-uppercase rounded-1 mx-3">Popular</b>
														<b class="d-block fs-5 text-uppercase mt-2 mb-1 px-3"><a
																href="news_detail.html">TEMPOR INCIDIDUNT UT LABORE ET
																DOLORE MAGNA</a></b>
														<span class="light_gray font_12 fw-bold px-3 text-uppercase">Aug
															13, 2016</span>

														<p class="mt-3 px-3 mb-0 pb-4">Praesent sapien massa, convallis
															a Donec sollicitudin molestie malesuada. Mauris blandit
															aliquet elit Praesent sapien massa, convallis a Donec
															sollicitudin molestie malesuada. Mauris blandit aliquet
															elit"</p>
														<div class="mt-auto w-100">

															<ul
																class="mb-0 px-3 py-3 font_11 fw-bold text-uppercase justify-content-between d-flex border-top">
																<li>
																	<a href="news_detail.html"><img
																			class="rounded-circle" alt="abc"
																			src="image/9.jpg"></a>
																	<span class="light_gray ms-2">Nulla Sem</span>
																</li>
																<li class="my-auto">
																	<a class="light_gray" href="news_detail.html"><i
																			class="fa fa-eye me-1"></i> 1279</a>
																	<a class="light_gray mx-3"
																		href="news_detail.html"><i
																			class="fa fa-heart me-1 text-danger"></i>
																		315</a>
																	<a class="light_gray" href="news_detail.html"><i
																			class="fa fa-comment me-1"></i> 17</a>
																</li>
															</ul>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>


							</div>

						</div>
					</div>
					<div class="news_1_left1 p-3 bg-white border_thick mt-3">
						<div class="news_1_left1_inner row">
							<div class="col-md-12">
								<div class="news_1_left1_inner_left pt-1">
									<h2 class="text-uppercase">Media Program Schedule</h2>
								</div>
							</div>
						</div>
						<div class="news_1_left1_inner_right mt-3">
							<div class="row">
								<div class="col-md-4">
									<div class="card mb-3">
										<div class="card-body">
											<h5 class="card-title">Program 1</h5>
											<p class="card-text">Days: Mon, Wed, Fri</p>
											<p class="card-text">Time: 10:00 AM</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="card mb-3">
										<div class="card-body">
											<h5 class="card-title">Program 2</h5>
											<p class="card-text">Days: Tue, Thu</p>
											<p class="card-text">Time: 2:00 PM</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="card mb-3">
										<div class="card-body">
											<h5 class="card-title">Program 3</h5>
											<p class="card-text">Days: Sat, Sun</p>
											<p class="card-text">Time: 5:00 PM</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12">
									<div class="card mb-3" style="height: 100%;">
										<div class="card-body">
											<h5 class="card-title">Currently On Air: Program 1</h5>
											<p class="card-text">Tune in now!</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>

				<!----side left bar-->
				<div class="col-md-4">
					<div class="news_1_right">
						<div class="news_1_right1 bg-white mt-3 border_light">
							<b class="d-block text-uppercase p-3 border_thick">Popular News</b>
							<ul class="mb-0 border-top pt-3">
								<li class="d-flex border-bottom  pb-3 mb-3">
									<span class="ps-3"><a href="news_detail.html"><img width="70" alt="abc"
												src="image/20.jpg"></a></span>
									<span class="flex-column mx-3">
										<b
											class="d-inline-block bg_violet text-white p-1 px-3 font_10 text-uppercase rounded-1">Latest</b>
										<b class="d-block font_13 text-uppercase mt-1"><a href="news_detail.html">TEMPOR
												INCIDIDUNT UT LABORE UT ENIM AD MINIM</a></b>
										<span class="light_gray font_10 fw-bold  text-uppercase"> <i
												class="fa fa-clock me-1 text-warning align-middle"></i> Aug 13,
											2016</span>
									</span>
								</li>
								<li class="d-flex border-bottom pb-3 mb-3">
									<span class="ps-3"><a href="news_detail.html"><img width="70" alt="abc"
												src="image/21.jpg"></a></span>
									<span class="flex-column mx-3">
										<b
											class="d-inline-block bg_yellow text-white p-1 px-3 font_10 text-uppercase rounded-1">Popular</b>
										<b class="d-block font_13 text-uppercase mt-1"><a
												href="news_detail.html">CONSECTETUR ADIPISCING ELIT, SED DO
												EIUSMOD</a></b>
										<span class="light_gray font_10 fw-bold  text-uppercase"> <i
												class="fa fa-clock me-1 text-warning align-middle"></i> Aug 14,
											2016</span>
									</span>
								</li>
								<li class="d-flex border-bottom pb-3 mb-3">
									<span class="ps-3"><a href="news_detail.html"><img width="70" alt="abc"
												src="image/22.jpg"></a></span>
									<span class="flex-column mx-3">
										<b
											class="d-inline-block bg_yellow text-white p-1 px-3 font_10 text-uppercase rounded-1">Latest</b>
										<b class="d-block font_13 text-uppercase mt-1"><a href="news_detail.html">TEMPOR
												INCIDIDUNT UT LABORE UT ENIM AD MINIM</a></b>
										<span class="light_gray font_10 fw-bold  text-uppercase"> <i
												class="fa fa-clock me-1 text-warning align-middle"></i> Aug 15,
											2016</span>
									</span>
								</li>
								<li class="d-flex pb-3">
									<span class="ps-3"><a href="news_detail.html"><img width="70" alt="abc"
												src="image/23.jpg"></a></span>
									<span class="flex-column mx-3">
										<b
											class="d-inline-block bg_yellow text-white p-1 px-3 font_10 text-uppercase rounded-1">Popular</b>
										<b class="d-block font_13 text-uppercase mt-1"><a
												href="news_detail.html">CONSECTETUR ADIPISCING ELIT, SED DO
												EIUSMOD</a></b>
										<span class="light_gray font_10 fw-bold  text-uppercase"> <i
												class="fa fa-clock me-1 text-warning align-middle"></i> Aug 17,
											2016</span>
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!---footer start-->
	<section id="footer" class="pt-5 pb-5 bg_black">
		<div class="container-xl">
			<div class="row row-cols-1 row-cols-md-4">
				<div class="col">
					<div class="footer_left">
						<b class="fs-4  d-block text-uppercase text-white center_sm"> <i
								class="fa-brands fa-nfc-directional col_yellow me-1"></i> Popular News</b>
						<p class="gray_dark mt-3">Your source for the lifestyle news. This demo is crafted specifically
							to exhibit the use of the theme as a lifestyle site. Visit our main page for more demos.</p>
						<p class="gray_dark">We're accepting new partnerships right now.</p>
						<ul class="gray_dark font_12">
							<li class="d-flex"><span class="text-white me-3">Email Us:</span> info@example.com</li>
							<li class="d-flex mt-1"><span class="text-white me-3">Contact:</span> +1-234-0123-431</li>
						</ul>
						<ul class="mb-0 d-flex social mt-3">
							<li><a class="d-block rounded-circle text-center text-white  link" href="#"><i
										class="fa-brands fa-facebook-f"></i></a></li>
							<li class="ms-2"><a class="d-block rounded-circle text-center text-white link" href="#"><i
										class="fa-brands fa-youtube"></i></a></li>
							<li class="ms-2"><a class="d-block rounded-circle text-center text-white link" href="#"><i
										class="fa-brands fa-x"></i></a></li>
							<li class="ms-2"><a class="d-block rounded-circle text-center text-white link" href="#"><i
										class="fa-brands fa-pinterest"></i></a></li>
							<li class="ms-2"><a class="d-block rounded-circle text-center text-white link" href="#"><i
										class="fa-brands fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col">
					<div class="footer_left">
						<b class="text-uppercase text-white font_13 d-block mb-4 mt-2 center_sm">Contact Info</b>
						<p class="gray_dark">quasi, eum. class corporis nostra rem voluptatibus habitant? Fames, vivamus
							minim nemo enim, gravida lobortis quasi, eum.</p>
						<ul class="mb-0 font_10 mt-4">
							<li class="d-flex text-uppercase">
								<span class="col_yellow fs-4 d-inline-block me-3 lh-1 mt-1">
									<i class="fa fa-user"></i>
								</span>
								<span class="flex-column">
									<b class="text-white">Join our Team</b>
									<span class="text-white-50 d-block">info@gmail.com</span>
								</span>
							</li>
							<li class="d-flex text-uppercase mt-4">
								<span class="col_yellow fs-4 d-inline-block me-3 lh-1 mt-1">
									<i class="fa fa-map-location"></i>
								</span>
								<span class="flex-column">
									<b class="text-white">Contact Us</b>
									<span class="text-white-50 d-block">info@gmail.com</span>
								</span>
							</li>
							<li class="d-flex text-uppercase mt-4">
								<a class="text-white-50" href="#"><i
										class="fa-brands fa-facebook-f text-white me-1"></i> Facebook</a>
								<a class="text-white-50 mx-2" href="#"><i
										class="fa-brands fa-twitter text-white me-1"></i> Twitter</a>
								<a class="text-white" href="#"><i
										class="fa-brands fa-google-plus-g col_yellow me-1"></i> Google+</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col">
					<div class="footer_left">
						<b class="text-uppercase text-white font_13 d-block mb-4 mt-2 center_sm">Popular News</b>
						<ul class="mb-0">
							<li class="d-flex">
								<span class="flex-column">
									<span
										class="d-inline-block bg_yellow text-white p-1 px-3 font_10 rounded-3 text-uppercase">The
										Team</span>
									<b class="d-block  text-uppercase"><a class="font_11 text-white" href="#">We are a
											Temple that belives in God and the followers</a></b>
									<span class="gray_dark font_10">Aug 13, 2016</span>
								</span>
							</li>
							<li class="d-flex mt-2">
								<span class="flex-column">
									<span
										class="d-inline-block bg-primary text-white p-1 px-3 font_10 rounded-3 text-uppercase">Injuries</span>
									<b class="d-block  text-uppercase"><a class="font_11 text-white" href="#">We are a
											Temple that belives in God and the followers</a></b>
									<span class="gray_dark font_10">Aug 13, 2016</span>
								</span>
							</li>
							<li class="d-flex mt-2">
								<span class="flex-column">
									<span
										class="d-inline-block bg-danger text-white p-1 px-3 font_10 rounded-3 text-uppercase">Sport</span>
									<b class="d-block  text-uppercase"><a class="font_11 text-white" href="#">We are a
											Temple that belives in God and the followers</a></b>
									<span class="gray_dark font_10">Aug 13, 2016</span>
								</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="col">
					<div class="footer_left">
						<b class="text-uppercase text-white font_13 d-block mb-4 mt-2 center_sm">Instagram Widget</b>
						<ul class="mb-0">
							<li class="d-flex">
								<a href="#"><img src="image/10.jpg" width="80" alt="abc"></a>
								<a class="mx-2" href="#"><img src="image/11.jpg" width="80" alt="abc"></a>
								<a href="#"><img src="image/12.jpg" width="80" alt="abc"></a>
							</li>
							<li class="d-flex mt-2">
								<a href="#"><img src="image/14.jpg" width="80" alt="abc"></a>
								<a class="mx-2" href="#"><img src="image/15.jpg" width="80" alt="abc"></a>
								<a href="#"><img src="image/24.jpg" width="80" alt="abc"></a>
							</li>
							<li class="mt-4 center_sm">
								<a class="font_10 text-uppercase button_1 fw-bold d-inline-block rounded-1"
									href="#">Follow Our Instagram <i class="fa fa-chevron-right ms-2 font_8"></i> </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>



	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/js/theme.min.js') }}"></script>

</body>

</html>
