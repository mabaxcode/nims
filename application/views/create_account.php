
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: MetronicProduct Version: 8.2.7
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head>
<base href="../../../" />
		<title>Nurse Information System</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Tailwind CSS & Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="tailwind, tailwindcss, metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Metronic by Keenthemes" />
		<link rel="canonical" href="http://preview.keenthemes.comauthentication/layouts/creative/sign-up.html" />
		<link rel="shortcut icon" href="<?=base_url()?>assets/media/logos/trans-new.png" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?=base_url()?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('<?=base_url()?>assets/media/auth/bg1.jpg'); } [data-bs-theme="dark"] body { background-image: url('<?=base_url()?>assets/media/auth/bg4-dark.jpg'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-up -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<?/*
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::Aside-->
					<div class="d-flex flex-center flex-lg-start flex-column">
						<!--begin::Logo-->
						<a href="javascript:void(0);" class="mb-0">
							<img alt="Logo" src="<?= base_url(); ?>assets/media/logos/logo-new.png" width="200px" />
						</a>
						<!--end::Logo-->
						<!--begin::Title-->
						<h1 class="text-white fw-normal m-10"><b>Nurse Information Management System</b></h1>
						<!--end::Title-->
					</div>
					<!--begin::Aside-->
				</div>
				*/?>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
					<!--begin::Card-->
					<div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
						<!--begin::Wrapper-->
						<div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" action="#">
								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<img alt="Logo" src="<?= base_url(); ?>assets/media/logos/trans-new.png" width="150px" />
									<h2 class="text-gray-900 fw-bolder">Nurse Information System</h2>
									<!-- <div class="text-gray-500 fw-semibold fs-6">Nurse Information Management System</div> -->
									<!--end::Title-->
									<!--begin::Subtitle-->
									<!--end::Subtitle=-->
								</div>
								<!--begin::Heading-->
								<!--begin::Login options-->
								
								<!--end::Login options-->
								<!--begin::Separator-->
								
								<!--end::Separator-->
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="text" placeholder="Nama" name="name" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Email-->
								</div>
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="text" maxlength="12" placeholder="Nombor Kad Pengenalan" name="no_kp" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Email-->
								</div>
								<!--begin::Input group-->
								<div class="fv-row mb-8" data-kt-password-meter="true">
									<!--begin::Wrapper-->
									<div class="mb-1">
										<!--begin::Input wrapper-->
										<?/*
										<div class="position-relative mb-3">
											<input class="form-control bg-transparent" type="password" placeholder="Katalaluan" name="password" autocomplete="off" />
											<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="ki-duotone ki-eye-slash fs-2"></i>
												<i class="ki-duotone ki-eye fs-2 d-none"></i>
											</span>
										</div>
										*/?>
										<!-- <div class="input-group mb-5"> -->
										<div class="position-relative mb-3 input-group">
										    <input type="password" class="form-control bg-transparent" placeholder="Katalaluan" aria-describedby="basic-addon2" name="password" autocomplete="off" id="katalaluan-idd" />


										    <!-- <input class="form-control bg-transparent" type="password" placeholder="Katalaluan" name="password" autocomplete="off" /> -->


										    <span class="input-group-text" id="basic-addon2-password">
										        <i class="ki-duotone ki-eye fs-2">
												 <span class="path1"></span>
												 <span class="path2"></span>
												 <span class="path3"></span>
												</i>
										    </span>
										</div>
										<!--end::Input wrapper-->
										<!--begin::Meter-->
										<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
										</div>
										<!--end::Meter-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Hint-->
									<div class="text-muted">Katalaluan hendaklah menggunakan 8 atau lebih aksara diikuti dengan huruf, nombor & simbol</div>


									<!--end::Hint-->
								</div>
								<!--end::Input group=-->
								<!--end::Input group=-->
								<?/*
								<div class="fv-row mb-8">
									<!--begin::Repeat Password-->
									<input placeholder="Sahkan Katalaluan" name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Repeat Password-->
								</div>
								*/?>
								<!-- <div class="input-group mb-5"> -->
								<div class="fv-row mb-8 input-group">
								    <input type="password" class="form-control bg-transparent" placeholder="Sahkan Katalaluan" aria-describedby="basic-addon2" name="confirm-password" autocomplete="off" id="sahkan-katalaluan-idd" />


								    <!-- <input class="form-control bg-transparent" type="password" placeholder="Katalaluan" name="password" autocomplete="off" /> -->


								    <span class="input-group-text" id="basic-addon2-sahkan-password">
								        <i class="ki-duotone ki-eye fs-2">
										 <span class="path1"></span>
										 <span class="path2"></span>
										 <span class="path3"></span>
										</i>
								    </span>
								</div>
								<!--end::Input group=-->
								<!--begin::Accept-->
								
								<!--end::Accept-->
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Daftar</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Sila tunggu... 
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Submit button-->
								<!--begin::Sign up-->
								<div class="text-gray-500 text-center fw-semibold fs-6">
								<a href="<?=base_url();?>" class="link-primary fw-semibold">Log Masuk</a>
								</div>
								<!--end::Sign up-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Footer-->
						
						<!--end::Footer-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-up-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var base_url = "<?=base_url()?>";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="<?=base_url()?>assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?=base_url()?>assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="<?=base_url()?>assets/js/custom/authentication/sign-up/general.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->


		<script type="text/javascript">
			document.getElementById('basic-addon2-password').addEventListener('click', function () {
			  const passwordField = document.getElementById('katalaluan-idd');
			  const currentType = passwordField.type;
			  
			  // Toggle the type of the password field between 'password' and 'text'
			  if (currentType === 'password') {
			    passwordField.type = 'text';
			  } else {
			    passwordField.type = 'password';
			  }
			});
			document.getElementById('basic-addon2-sahkan-password').addEventListener('click', function () {
			  const passwordFieldSah = document.getElementById('sahkan-katalaluan-idd');
			  const currentTypeSah = passwordFieldSah.type;
			  
			  // Toggle the type of the password field between 'password' and 'text'
			  if (currentTypeSah === 'password') {
			    passwordFieldSah.type = 'text';
			  } else {
			    passwordFieldSah.type = 'password';
			  }
			});
		</script>

	</body>
	<!--end::Body-->
</html>