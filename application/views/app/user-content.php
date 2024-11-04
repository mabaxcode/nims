<? if($user['complete'] == "Y"){ ?>

<? } else { ?>
<div class="col-xxl-12">
	<!--begin::Engage widget 8-->
	<div class="card border-0 h-md-100" data-bs-theme="light" style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">
		<!--begin::Body-->
		<div class="card-body">
			<!--begin::Row-->
			<div class="row align-items-center h-100">
				<!--begin::Col-->
				<div class="col-7 ps-xl-13">
					<!--begin::Title-->
					<div class="text-white mb-6 pt-6">
						<!-- <span class="fs-4 fw-semibold me-2 d-block lh-1 pb-2 opacity-75">Get best offer</span> -->
						<span class="fs-2qx fw-bold">Nurse Information Management System</span>
					</div>
					<!--end::Title-->
					<!--begin::Text-->
					<span class="fw-semibold text-white fs-3 mb-8 d-block opacity-75">Sila klik butang Maklumat Pekerjaan dan lengkapkan maklumat anda</span>
					<!--end::Text-->
					<!--end::Items-->
					<!--begin::Action-->
					<div class="d-flex flex-column flex-sm-row d-grid gap-2">
						<a href="<?= base_url('app/kemaskiniMaklumat'); ?>" class="btn btn-success flex-shrink-0 me-lg-2">Maklumat Pekerjaan</a>
						<!-- <a href="#" class="btn btn-primary flex-shrink-0" style="background: rgba(255, 255, 255, 0.2)" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Read Guides</a> -->
					</div>
					<!--end::Action-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-5 pt-10">
					<!--begin::Illustration-->
					<div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px"></div>
					<!--end::Illustration-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
		</div>
		<!--end::Body-->
	</div>
	<!--end::Engage widget 8-->
</div>
<? } ?>