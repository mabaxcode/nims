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
						<input type="text" name="no_kp" maxlength="12" class="form-control form-control-lg" placeholder="No Kad Pengenalan" value="<?= $user['no_kp']?>" />
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
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">
						<span class="required">Status</span>
					</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<select name="person_status" aria-label="Sila pilih" data-control="select2" data-placeholder="Pilih Status..." class="form-select form-select-lg fw-semibold">
							<option value="">Sila pilih...</option>
							<option data-kt-flag="" <? if($personal['person_status'] == "BERKAHWIN"){echo "selected";} ?>  value="BERKAHWIN">Berkahwin</option>
							<option data-kt-flag="" <? if($personal['person_status'] == "BUJANG"){echo "selected";} ?> value="BUJANG">Bujang</option>
							<option data-kt-flag="" <? if($personal['person_status'] == "BERCERAI"){echo "selected";} ?> value="BERCERAI">Bercerai</option>
						</select>
					</div>
					<!--end::Col-->
				</div>


				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">
						<span class="required">Alamat</span>
					</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="text" name="address1" class="form-control form-control-lg mb-5" placeholder="Alamat 1" value="<?= $personal['address1']?>" />

						<input type="text" name="address2" class="form-control form-control-lg" placeholder="Alamat 2" value="<?= $personal['address2']?>" />
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">
					</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-4 fv-row">
						<input type="text" name="postcode" class="form-control form-control-lg" placeholder="Poskod" value="<?= $personal['postcode']?>" />
					</div>
					<? $all_city = get_any_table_array(array('module' => 'city'), 'ref_code'); ?>
					<div class="col-lg-4 fv-row">
						<select name="city" aria-label="Sila pilih" data-control="select2" data-placeholder="Bandar" class="form-select form-select-lg fw-semibold">
							<option value="">Pilih Bandar</option>
							<? foreach ($all_city as $city) { ?>
							<option value="<?=$city['code']?>" <? if($city['code'] == $personal['city']){echo "selected";} ?> ><?=$city['code_desc']?></option>
							<? } ?>
						</select>
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">
					</label>
					<!--end::Label-->
					<!--begin::Col-->
					<? $all_state = get_any_table_array(array('module' => 'state'), 'ref_code'); ?>
					<div class="col-lg-8 fv-row">
						<select name="state" aria-label="Sila pilih" data-control="select2" data-placeholder="Negeri" class="form-select form-select-lg fw-semibold">
							<option value="">Pilih Negeri</option>
							<? foreach ($all_state as $state) { ?>
							<option value="<?=$state['code']?>" <? if($state['code'] == $personal['state']){echo "selected";} ?>><?=$state['code_desc']?></option>
							<? } ?>
							
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





