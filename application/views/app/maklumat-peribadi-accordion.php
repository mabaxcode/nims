<div class="card-body border-top p-9">
	<!--begin::Input group-->
	<div class="row mb-6">
		<!--begin::Label-->
		<label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama</label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8 fv-row">
			<input type="text" class="form-control form-control-lg" placeholder="Nama" value="<?= $user_accounts['name']?>" disabled />
		</div>
		<!--end::Col-->
	</div>
	<!--end::Input group-->
	<!--begin::Input group-->
	<div class="row mb-6">
		<!--begin::Label-->
		<label class="col-lg-4 col-form-label required fw-semibold fs-6">No Kad Pengenalan</label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8 fv-row">
			<input type="text" class="form-control form-control-lg" placeholder="No Kad Pengenalan" value="<?= $user_accounts['no_kp']?>" disabled />
		</div>
		<!--end::Col-->
	</div>
	<!--end::Input group-->
	<!--begin::Input group-->
	<div class="row mb-6">
		<!--begin::Label-->
		<label class="col-lg-4 col-form-label fw-semibold fs-6 required">Umur</label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8 fv-row">
			<input type="number" class="form-control form-control-lg" placeholder="Umur" value="<?= $personal_info['umur']?>" disabled />
		</div>
		<!--end::Col-->
	</div>
	<!--end::Input group-->
	<!--begin::Input group-->
	<div class="row mb-6">
		<!--begin::Label-->
		<label class="col-lg-4 col-form-label fw-semibold fs-6">
			<span class="required">Bangsa</span>
		</label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8 fv-row">
			<input type="text" class="form-control form-control-lg" placeholder="Umur" value="<?= $personal_info['bangsa']?>" disabled />
		</div>
		<!--end::Col-->
	</div>
	<div class="row mb-6">
		<!--begin::Label-->
		<label class="col-lg-4 col-form-label fw-semibold fs-6">
			<span class="required">Status</span>
		</label>
		<!--end::Label-->
		<!--begin::Col-->
		<div class="col-lg-8 fv-row">
			<input type="text" class="form-control form-control-lg" placeholder="Status" value="<?= $personal_info['person_status']?>" disabled />
		</div>
		<!--end::Col-->
	</div>
</div>