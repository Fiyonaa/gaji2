<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link href="<?= base_url('assets/midone') ?>/dist/images/logo.svg" rel="shortcut icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
	<meta name="keywords"
		content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
	<meta name="author" content="LEFT4CODE">
	<title>Dashboard</title>
	<!-- BEGIN: CSS Assets-->
	<link rel="stylesheet" href="<?= base_url('assets/midone') ?>/dist/css/app.css" />
	<!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="app">
	<!-- END: Mobile Menu -->
	<div class="flex">
		<!-- BEGIN: Side Menu -->
		<nav class="side-nav">
			<a href="" class="intro-x flex items-center pl-5 pt-4">
				<img alt="Midone Tailwind HTML Admin Template" class="w-6"
					src="<?= base_url('assets/midone') ?>/dist/images/logo.svg">
				<span class="hidden xl:block text-white text-lg ml-3"><span class="font-medium">App Gaji</span> </span>
			</a>
			<div class="side-nav__devider my-6"></div>
			<ul>
				<?php 
					$halaman = $this->uri->segment(2); 
					$hak_akses = $this->session->userdata('hak_akses');
				?>

				<?php if ($hak_akses == 1): // ADMIN ?>
				<li>
					<a href="<?= base_url('admin/dashboard') ?>"
						class="side-menu <?= ($halaman == 'dashboard') ? 'side-menu--active' : '' ?>">
						<div class="side-menu__icon"><i data-feather="home"></i></div>
						<div class="side-menu__title"> Dashboard </div>
					</a>
				</li>

				<li>
					<a href="<?= base_url('admin/DataPegawai') ?>"
						class="side-menu <?= ($halaman == 'DataPegawai') ? 'side-menu--active' : '' ?>">
						<div class="side-menu__icon"><i data-feather="user-check"></i></div>
						<div class="side-menu__title"> Data Pegawai </div>
					</a>
				</li>

				<li>
					<a href="<?= base_url('admin/DataJabatan') ?>"
						class="side-menu <?= ($halaman == 'DataJabatan') ? 'side-menu--active' : '' ?>">
						<div class="side-menu__icon"><i data-feather="briefcase"></i></div>
						<div class="side-menu__title"> Data Jabatan </div>
					</a>
				</li>

				<li>
					<a href="javascript:;"
						class="side-menu <?= ($halaman == 'dataAbsensi' || $halaman == 'DataPenggajian' || $halaman == 'PotonganGaji') ? 'side-menu--active' : '' ?>">
						<div class="side-menu__icon"><i data-feather="file-text"></i></div>
						<div class="side-menu__title"> Transaksi
							<i data-feather="chevron-down" class="side-menu__sub-icon"></i>
						</div>
					</a>
					<ul>
						<li>
							<a href="<?= base_url('admin/dataAbsensi') ?>"
								class="side-menu <?= ($halaman == 'dataAbsensi') ? 'side-menu--active' : '' ?>">
								<div class="side-menu__icon"><i data-feather="calendar"></i></div>
								<div class="side-menu__title"> Rekap Absen </div>
							</a>
						</li>
						<li>
							<a href="<?= base_url('admin/DataPenggajian') ?>"
								class="side-menu <?= ($halaman == 'DataPenggajian') ? 'side-menu--active' : '' ?>">
								<div class="side-menu__icon"><i data-feather="archive"></i></div>
								<div class="side-menu__title"> Data Gaji </div>
							</a>
						</li>
						<li>
							<a href="<?= base_url('admin/PotonganGaji') ?>"
								class="side-menu <?= ($halaman == 'PotonganGaji') ? 'side-menu--active' : '' ?>">
								<div class="side-menu__icon"><i data-feather="slash"></i></div>
								<div class="side-menu__title"> Potongan Gaji </div>
							</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;"
						class="side-menu <?= ($halaman == 'LaporanGaji' || $halaman == 'SlipGaji') ? 'side-menu--active' : '' ?>">
						<div class="side-menu__icon"><i data-feather="clipboard"></i></div>
						<div class="side-menu__title"> Laporan
							<i data-feather="chevron-down" class="side-menu__sub-icon"></i>
						</div>
					</a>
					<ul>
						<li>
							<a href="<?= base_url('admin/LaporanGaji') ?>"
								class="side-menu <?= ($halaman == 'LaporanGaji') ? 'side-menu--active' : '' ?>">
								<div class="side-menu__icon"><i data-feather="dollar-sign"></i></div>
								<div class="side-menu__title"> Laporan Gaji </div>
							</a>
						</li>
						<li>
							<a href="<?= base_url('admin/LaporanAbsensi') ?>"
								class="side-menu <?= ($halaman == 'LaporanAbsensi') ? 'side-menu--active' : '' ?>">
								<div class="side-menu__icon"><i data-feather="file-text"></i></div>
								<div class="side-menu__title"> Laporan Absensi </div>
							</a>
						</li>
						<li>
							<a href="<?= base_url('admin/SlipGaji') ?>"
								class="side-menu <?= ($halaman == 'SlipGaji') ? 'side-menu--active' : '' ?>">
								<div class="side-menu__icon"><i data-feather="file-text"></i></div>
								<div class="side-menu__title"> Slip Gaji </div>
							</a>
						</li>
					</ul>
				</li>
				<!-- <li>
					<a href="<?= base_url('admin/Saran') ?>"
						class="side-menu <?= ($halaman == 'Saran') ? 'side-menu--active' : '' ?>">
						<div class="side-menu__icon"><i data-feather="file-text"></i></div>
						<div class="side-menu__title"> Saran </div>
					</a>
				</li> -->

				<?php elseif ($hak_akses == 2): // PEGAWAI ?>
				<li>
					<a href="<?= base_url('pegawai/dashboard') ?>"
						class="side-menu <?= ($halaman == 'dashboard') ? 'side-menu--active' : '' ?>">
						<div class="side-menu__icon"><i data-feather="home"></i></div>
						<div class="side-menu__title"> Dashboard </div>
					</a>
				</li>
				<li>
					<a href="<?= base_url('pegawai/DataGaji') ?>"
						class="side-menu <?= ($halaman == 'dataGaji') ? 'side-menu--active' : '' ?>">
						<div class="side-menu__icon"><i data-feather="dollar-sign"></i></div>
						<div class="side-menu__title"> Data Gaji </div>
					</a>
				</li>
				<!-- <li>
					<a href="<?= base_url('pegawai/SlipGaji') ?>"
						class="side-menu <?= ($halaman == 'slipGaji') ? 'side-menu--active' : '' ?>">
						<div class="side-menu__icon"><i data-feather="file-text"></i></div>
						<div class="side-menu__title"> Slip Gaji </div>
					</a>
				</li> -->
				<li>
					<a href="<?= base_url('pegawai/GantiPassword') ?>"
						class="side-menu <?= ($halaman == 'gantiPassword') ? 'side-menu--active' : '' ?>">
						<div class="side-menu__icon"><i data-feather="lock"></i></div>
						<div class="side-menu__title"> Ganti Password </div>
					</a>
				</li>
				<?php endif; ?>

				<li>
					<a href="<?= base_url('login/logout') ?>" class="side-menu">
						<div class="side-menu__icon"><i data-feather="log-out"></i></div>
						<div class="side-menu__title"> Logout </div>
					</a>
				</li>
			</ul>


		</nav>
		<!-- END: Side Menu -->
		<!-- BEGIN: Content -->
		<div class="content">
			<!-- BEGIN: Top Bar -->
			<div class="top-bar">
				<!-- BEGIN: Breadcrumb -->
				<div class="-intro-x breadcrumb mr-auto hidden sm:flex">
					<a href="#" class="">Application</a>
					<i data-feather="chevron-right" class="breadcrumb__icon"></i>
					<a href="#" class="breadcrumb--active">

					</a>
				</div>

				<!-- END: Breadcrumb -->
				<!-- BEGIN: Search -->
				<div class="intro-x relative mr-3 sm:mr-6">
					<div class="search hidden sm:block">
						<input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
						<i data-feather="search" class="search__icon"></i>
					</div>
				</div>
				<!-- END: Search -->
				<!-- BEGIN: Account Menu -->
				<!-- <div class="intro-x dropdown w-8 h-8 relative">
					<div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
						<img alt="Midone Tailwind HTML Admin Template"
							src="<?php echo base_url('assets/photo/').$this->session->userdata('photo') ?>">
					</div>
					<div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
						<div class="dropdown-box__content box bg-theme-38 text-white">
							<div class="p-4 border-b border-theme-40">
								<div class="font-medium"><?php echo $this->session->userdata('nama_pegawai')?></div>
								<div class="text-xs text-theme-41"><?php echo $this->session->userdata('jabatan')?>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- END: Account Menu -->
			</div>
			<!-- END: Top Bar -->
			<div class="grid grid-cols-12 gap-6">
				<div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
					<!-- BEGIN: General Report -->
					<div class="col-span-12 mt-2">
						<?= $contents; ?>
					</div>
				</div>
			</div>
		</div>
		<!-- BEGIN: JS Assets-->
		<script
			src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places">
		</script>
		<script src="<?= base_url('assets/midone') ?>/dist/js/app.js"></script>
		<!-- END: JS Assets-->

</body>

</html>
