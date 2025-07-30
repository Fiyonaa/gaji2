<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>APP GAJI </title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url('assets/arsha/') ?>assets/img/favicon.png" rel="icon">
	<link href="<?= base_url('assets/arsha/') ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('assets/arsha/') ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?= base_url('assets/arsha/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/arsha/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url('assets/arsha/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/arsha/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/arsha/') ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?= base_url('assets/arsha/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url('assets/arsha/') ?>assets/css/style.css" rel="stylesheet">
	<style>
    .sent-message, .error-message {
        display: none;
    }
</style>
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top ">
		<div class="container d-flex align-items-center">

			<h1 class="logo me-auto"><a href="">APP GAJI</a></h1>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
					<li><a class="nav-link scrollto active" href="#about">About</a></li>
					<li><a class="nav-link scrollto active" href="#services">Services</a></li>
					<li><a class="nav-link scrollto active" href="#contact">Location</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
					data-aos="fade-up" data-aos-delay="200">
					<h1>PT. TRAVELMATE</h1>
					<h2>Aplikasi Penggajian Pegawai Perusahaan</h2>
					<div class="d-flex justify-content-center justify-content-lg-start">
						<a href="<?= base_url('login')?>" class="btn-get-started scrollto">Login</a>
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
					<img src="<?= base_url('assets/arsha/') ?>assets/img/hero-img.png" class="img-fluid animated" alt="">
				</div>
			</div>
		</div>

	</section><!-- End Hero -->

	<main id="main">


		<!-- ======= About Us Section ======= -->
		<section id="about" class="about">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>About Us</h2>
				</div>

				<div class="row content">
					<div class="col-lg-6">
						<p>
							Aplikasi Penggajian Pegawai Perusahaan berbasis website ini dibuat untuk membantu perusahaan dalam
              proses penggajian pegawai. Aplikasi ini memiliki beberapa fitur yang memudahkan administrator yaitu
						</p>
						<ul>
							<li><i class="ri-check-double-line"></i> Halaman Admin </li>
							<li><i class="ri-check-double-line"></i> Halaman Pegawai</li>
							<li><i class="ri-check-double-line"></i> Fitur Lainnya</li>
						</ul>
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0">
						<p>
							Aplikasi ini dirancang untuk memberikan kemudahan dalam mengelola data karyawan, data jabatan, dan Gaji
              pegawai. Dengan adanya aplikasi ini, proses penggajian menjadi lebih efisien dan transparan. Aplikasi ini
              juga dapat membantu perusahaan dalam mengelola keuangan dan mengurangi biaya operasional yang terkait
              dengan penggajian pegawai. Selain itu, aplikasi ini juga dapat membantu perusahaan dalam meningkatkan
              kinerja pegawai dan meningkatkan kepuasan pegawai.
						</p>
					</div>
				</div>

			</div>
		</section><!-- End About Us Section -->

		<!-- ======= Services Section ======= -->
		<section id="services" class="services section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Services</h2>
					<p>Fitur - fitur yang tersedia di dalam Aplikasi Penggajian berbasis website </br> PT. PIYONA</p>
				</div>

				<div class="row">
					<div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon"><i class="bx bxl-dribbble"></i></div>
							<h4><a href="">Tentang Website</a></h4>
							<p>Aplikasi ini dibuat untuk membantu perusahaan dalam proses penggajian pegawai</p>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
						data-aos-delay="200">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-user"></i></div>
							<h4><a href="#">Halaman Admin</a></h4>
							<p>
								Administrator dapat menggunakan website untuk mengelola data pada website
								<span class="more-text" style="display: none;">
									,halaman administrator terdapat dashboard / informasi singkat mengenai data data,
									terdapat data karyawan untuk pengelolaan karyawan, terdapat data jabatan untuk pengelolaan jabatan,
									terdapat data transaksi yang memiliki sub menu data absensi, setting potongan gaji, data gaji,
									terdapat data laporan yang memiliki sub menu laporan absensi, laporan gaji, cetak slip gaji.
								</span>
								<a href="javascript:void(0);" class="read-more" onclick="toggleText(this)">Read more</a>
							</p>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
						data-aos-delay="300">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-user-check"></i></div>
							<h4><a href="">Halaman Karyawan</a></h4>
							<p>Halaman karyawan terdapat informasi tentang karyawan dan cetak slip gaji.</p>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
						data-aos-delay="400">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-layer"></i></div>
							<h4><a href="">Fitur Lainnya</a></h4>
							<p>Cetak slip gaji, lupa password, login karyawan</p>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Services Section -->

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Location</h2>
				</div>

				<div class="row">

					<div class="col-lg d-flex align-items-stretch w-full">
						<div class="info">
							<div class="address">
								<i class="bi bi-geo-alt"></i>
								<h4>Lokasi :</h4>
								<p>SMK Negeri 2 Karanganyar</br>
									Jl. Yos Sudarso, Jengglong, Bejen, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57716</p>
							</div>

							<div class="link">
								<i class="bi bi-link"></i>
								<h4>Link :</h4>
								<p>https://smkn2kra.sch.id/</p>
							</div>

							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.857123862095!2d110.94792197411725!3d-7.590525675001551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e654b99ab219bfd%3A0x4e63f4d5cebe448a!2sSMK%20Negeri%202%20Karanganyar!5e0!3m2!1sid!2sid!4v1748154386020!5m2!1sid!2sid"
								frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>

					</div>

					<!-- <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
						<form action="<?php echo site_url('admin/Saran/simpan')?>" method="post" role="form" class="php-email-form" name="saran">
							<div class="form-group">
								<label for="name">NAMA</label>
								<input type="text" name="nama" class="form-control" id="name" required>
							</div>
							<div class="form-group">
								<label for="name">EMAIL</label>
								<input type="email" class="form-control" name="email" id="email" required>
							</div>
							<div class="form-group">
								<label for="name">SARAN</label>
								<textarea class="form-control" name="isi_saran" rows="10" required></textarea>
							</div>
							<div class="my-3">
								<div class="loading">Loading</div>
								<div class="error-message"></div>
								<div class="sent-message">Saran Terkirim. Terima Kasih!!</div>
							</div>
							<div class="text-center"><button type="submit">Kirim</button></div>
						</form>
					</div> -->

				</div>

			</div>
		</section><!-- End Contact Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">

		<div class="container footer-bottom d-flex justify-content-center">
			<div class="copyright text-center">
				&copy; Copyright <strong><span>PT.TravelMate</span></strong>. All Rights Reserved
			</div>
		</div>

	</footer><!-- End Footer -->

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url('assets/arsha/') ?>assets/vendor/aos/aos.js"></script>
	<script src="<?= base_url('assets/arsha/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/arsha/') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="<?= base_url('assets/arsha/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?= base_url('assets/arsha/') ?>assets/vendor/php-email-form/validate.js"></script>
	<script src="<?= base_url('assets/arsha/') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?= base_url('assets/arsha/') ?>assets/vendor/waypoints/noframework.waypoints.js"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url('assets/arsha/') ?>assets/js/main.js"></script>
	<script>
		function toggleText(el) {
			const moreText = el.previousElementSibling;
			if (moreText.style.display === "none") {
				moreText.style.display = "inline";
				el.textContent = "Read less";
			} else {
				moreText.style.display = "none";
				el.textContent = "Read more";
			}
		}

	</script>
	<script>
		<?php if ($this->session->flashdata('saran_status') == 'success') : ?>
			document.querySelector('.sent-message').style.display = 'block';
			document.querySelector('.error-message').style.display = 'none';
		<?php elseif ($this->session->flashdata('saran_status') == 'error') : ?>
			document.querySelector('.sent-message').style.display = 'none';
			document.querySelector('.error-message').innerText = 'Maaf Saran Tidak Bisa Terkirim!!';
			document.querySelector('.error-message').style.display = 'block';
		<?php else: ?>
			document.querySelector('.sent-message').style.display = 'none';
			document.querySelector('.error-message').style.display = 'none';
		<?php endif; ?>
	</script>

</body>

</html>
