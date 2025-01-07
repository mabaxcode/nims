<div class="card mb-5 mb-xl-10">
	<!--begin::Card header-->
	<div class="card-header cursor-pointer">
		<!--begin::Card title-->
		<div class="card-title m-0">
			<h3 class="fw-bold m-0">Maklumat Kontak</h3>
		</div>
		<!--end::Card title-->
		<!--begin::Action-->
		<!-- <a href="account/settings.html" class="btn btn-sm btn-primary align-self-center">Edit Profile</a> -->
		<!--end::Action-->
	</div>
	<!--begin::Card header-->
	<!--begin::Content-->
	<div id="kt_form_maklumat_peribadi" class="collapse show">
		<!--begin::Form-->
		<form id="kt_account_profile_details_form_kontak" class="form">
			<!--begin::Card body-->
			<div class="card-body border-top p-9">
				<!--begin::Input group-->
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">No. Telefon</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="text" name="phone_no" class="form-control form-control-lg" placeholder="Phone No." value="<?= $user['phone_no']?>" />
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="text" name="email" class="form-control form-control-lg" placeholder="Email" value="<?= $user['email']?>" />
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
			</div>
			<!--end::Card body-->
			<!--begin::Actions-->
			<div class="card-footer d-flex justify-content-end py-6 px-9">
				<!-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> -->
				<a class="btn btn-primary simpan-maklumat-kontak">Simpan</a>
			</div>
			<!--end::Actions-->
		</form>
		<!--end::Form-->
	</div>
	<!--end::Content-->
</div>





