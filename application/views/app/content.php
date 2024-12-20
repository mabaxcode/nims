<div class="d-flex flex-column flex-column-fluid">
	<!--begin::Toolbar-->
	<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
		<!--begin::Toolbar container-->
		<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
				<!--begin::Title-->
				<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
					<?= strtoupper($user['name'])?>
				</h1>

				<?
					// print_r($this->session->userdata());
				?>

				<!--end::Title-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						<a href="javascript:void(0);" class="text-muted text-hover-primary">Dashboard</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<!-- <li class="breadcrumb-item">
						<span class="bullet bg-gray-500 w-5px h-2px"></span>
					</li> -->
					<!--end::Item-->
					<!--begin::Item-->
					<!-- <li class="breadcrumb-item text-muted">Dashboards</li> -->
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<? if($user['role'] == '1'){ ?>
			<span class="badge badge-info badge-lg">Administrator</span>
			<? } else if ($user['role'] == '2') { ?>
			<?
			$sister = get_any_table_row(array('nurse_id' => $user['id']), 'sister');
			?>
			<span class="badge badge-info badge-lg">Sister : <?=get_ref_code('wad', $sister['wad_id'])?></span>
			<? } else { ?>
			
			<? } ?>
			
			<!--end::Page title-->
			<?/*
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<!--begin::Secondary button-->
				<a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
				<!--end::Secondary button-->
				<!--begin::Primary button-->
				<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
				<!--end::Primary button-->
			</div>
			*/?>
			<!--end::Actions-->
		</div>
		<!--end::Toolbar container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Content-->
	<div id="kt_app_content" class="app-content flex-column-fluid">
		<!--begin::Content container-->
		<div id="kt_app_content_container" class="app-container container-fluid">
			
			<? 
			if(isAdmin($this->session->userdata('user_id')) == true){
					$this->load->view('app/admin-content');
			} 

			if(isSister($this->session->userdata('user_id')) == true){
				$this->load->view('app/sister-content');
			}

			if(isNurse($this->session->userdata('user_id')) == true){
				$this->load->view('app/user-content');
			}

			?>

		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>