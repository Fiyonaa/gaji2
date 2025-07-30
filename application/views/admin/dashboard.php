<div class="grid grid-cols-12 gap-6">
	<div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
		<!-- BEGIN: General Report -->
		<div class="col-span-12 mt-8">
			<div class="intro-y flex items-center h-10">
				<h2 class="text-lg font-medium truncate mr-5">
					General Report
				</h2>
				<a href="" class="ml-auto flex text-theme-1"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i>
					Reload Data </a>
			</div>
			<div class="grid grid-cols-12 gap-6 mt-5">
				<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
					<div class="report-box zoom-in">
						<div class="box p-5">
							<div class="flex">
								<i data-feather="users" class="report-box__icon text-theme-10"></i>
							</div>
							<div class="text-3xl font-bold leading-8 mt-6"><?php if (isset($pegawai)): ?>
								<?= $pegawai ?>
								<?php else: ?>
								<p>No data available.</p>
								<?php endif; ?></div>
							<div class="text-base text-gray-600 mt-1">Data Karyawan</div>
						</div>
					</div>
				</div>
				<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
					<div class="report-box zoom-in">
						<div class="box p-5">
							<div class="flex">
								<i data-feather="user-check" class="report-box__icon text-theme-11"></i>
							</div>
							<div class="text-3xl font-bold leading-8 mt-6">
								<?php if (isset($admin)): ?>
									<?= $admin ?>
								<?php else: ?>
								<p>No data available.</p>
								<?php endif; ?>
							</div>
							<div class="text-base text-gray-600 mt-1">Data Admin</div>
						</div>
					</div>
				</div>
				<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
					<div class="report-box zoom-in">
						<div class="box p-5">
							<div class="flex">
								<i data-feather="briefcase" class="report-box__icon text-theme-12"></i>
							</div>
							<div class="text-3xl font-bold leading-8 mt-6">
								<?php if (isset($jabatan)): ?>
									<?= $jabatan ?>
								<?php else: ?>
								<p>No data available.</p>
								<?php endif; ?>
							</div>
							<div class="text-base text-gray-600 mt-1">Data Jabatan</div>
						</div>
					</div>
				</div>
				<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
					<div class="report-box zoom-in">
						<div class="box p-5">
							<div class="flex">
								<i data-feather="calendar" class="report-box__icon text-theme-9"></i>
							</div>
							<div class="text-3xl font-bold leading-8 mt-6">
								<?php if (isset($kehadiran)): ?>
								<!-- Use $pegawai here -->
								<?= $kehadiran ?>
								<?php else: ?>
								<p>No data available.</p>
								<?php endif; ?>
							</div>
							<div class="text-base text-gray-600 mt-1">Data Kehadiran</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END: General Report -->
	</div>
</div>
