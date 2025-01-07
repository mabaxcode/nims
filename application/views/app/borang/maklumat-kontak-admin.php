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
			<input type="hidden" name="nurse_id" value="<?=$nurse_id?>">
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
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-12 col-form-label fw-semibold fs-6"><b>Maklumat Waris Pertama (1)</b></label>
				</div>


				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="text" name="nama_waris1" class="form-control form-control-lg" placeholder="Nama Waris Pertama" value="<?= $user['nama_waris1']?>" />
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">No. Kad Pengenalan</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="number" maxlength="12" name="no_kp_waris1" class="form-control form-control-lg" placeholder="No. Kad Pengenalan Waris Pertama" value="<?= $user['no_kp_waris1']?>" />
					</div>
					<!--end::Col-->
				</div>

				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">No. Telefon</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="number" name="no_tel_waris1" class="form-control form-control-lg" placeholder="No. Telefon Waris Pertama" value="<?= $user['no_tel_waris1']?>" />
					</div>
					<!--end::Col-->
				</div>



				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-12 col-form-label fw-semibold fs-6"><b>Maklumat Waris Kedua (2)</b></label>
				</div>


				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="text" name="nama_waris2" class="form-control form-control-lg" placeholder="Nama Waris Kedua" value="<?= $user['nama_waris2']?>" />
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">No. Kad Pengenalan</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="number" maxlength="12" name="no_kp_waris2" class="form-control form-control-lg" placeholder="No. Kad Pengenalan Waris Kedua" value="<?= $user['no_kp_waris2']?>" />
					</div>
					<!--end::Col-->
				</div>

				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">No. Telefon</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="number" name="no_tel_waris2" class="form-control form-control-lg" placeholder="No. Telefon Waris Kedua" value="<?= $user['no_tel_waris2']?>" />
					</div>
					<!--end::Col-->
				</div>

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





