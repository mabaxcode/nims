<div class="card mb-5 mb-xl-10">
	<!--begin::Card header-->
	<div class="card-header cursor-pointer">
		<!--begin::Card title-->
		<div class="card-title m-0">
			<h3 class="fw-bold m-0">Maklumat Peribadi</h3>
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
		<form id="kt_account_profile_details_form_new" class="form">
			<!--begin::Card body-->
			<div class="card-body border-top p-9">
				<!--begin::Input group-->
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="text" name="name" class="form-control form-control-lg" placeholder="Nama" value="<?= $user['name']?>" />
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
						<input type="text" name="no_ic" class="form-control form-control-lg" placeholder="No Kad Pengenalan" value="<?= $personal['no_ic']?>" />
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
						<input type="number" name="umur" class="form-control form-control-lg" placeholder="Umur" value="<?= $personal['umur']?>" />
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
						<select name="bangsa" aria-label="Sila pilih" data-control="select2" data-placeholder="Pilih Bangsa..." class="form-select form-select-lg fw-semibold">
							<option value="">Sila pilih...</option>
							<option data-kt-flag="" <? if($personal['bangsa'] == "MELAYU"){echo "selected";} ?>  value="MELAYU">Melayu</option>
							<option data-kt-flag="" <? if($personal['bangsa'] == "INDIA"){echo "selected";} ?> value="INDIA">India</option>
							<option data-kt-flag="" <? if($personal['bangsa'] == "CINA"){echo "selected";} ?> value="CINA">Cina</option>
						</select>
					</div>
					<!--end::Col-->
				</div>
			</div>
			<!--end::Card body-->
			<!--begin::Actions-->
			<div class="card-footer d-flex justify-content-end py-6 px-9">
				<!-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> -->
				<a class="btn btn-primary simpan-maklumat-peribadi">Simpan</a>
			</div>
			<!--end::Actions-->
		</form>
		<!--end::Form-->
	</div>
	<!--end::Content-->
</div>





