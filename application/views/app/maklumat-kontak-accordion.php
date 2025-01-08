<div class="card-body border-top p-9">
				<!--begin::Input group-->
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">No. Telefon</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="text" name="phone_no" class="form-control form-control-lg" disabled value="<?= $user_accounts['phone_no']?>" />
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
						<input type="text" name="email" class="form-control form-control-lg" disabled value="<?= $user_accounts['email']?>" />
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
						<input type="text" name="nama_waris1" class="form-control form-control-lg" disabled placeholder="Nama Waris Pertama" value="<?= $user_accounts['nama_waris1']?>" />
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
						<input type="number" maxlength="12" name="no_kp_waris1" class="form-control form-control-lg" disabled placeholder="No. Kad Pengenalan Waris Pertama" value="<?= $user_accounts['no_kp_waris1']?>" />
					</div>
					<!--end::Col-->
				</div>

				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">No. Telefon</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="number" name="no_tel_waris1" class="form-control form-control-lg" disabled placeholder="No. Telefon Waris Pertama" value="<?= $user_accounts['no_tel_waris1']?>" />
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
						<input type="text" name="nama_waris2" class="form-control form-control-lg" disabled placeholder="Nama Waris Kedua" value="<?= $user_accounts['nama_waris2']?>" />
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
						<input type="number" maxlength="12" name="no_kp_waris2" class="form-control form-control-lg" disabled placeholder="No. Kad Pengenalan Waris Kedua" value="<?= $user_accounts['no_kp_waris2']?>" />
					</div>
					<!--end::Col-->
				</div>

				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">No. Telefon</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="number" name="no_tel_waris2" class="form-control form-control-lg" disabled placeholder="No. Telefon Waris Kedua" value="<?= $user_accounts['no_tel_waris2']?>" />
					</div>
					<!--end::Col-->
				</div>



			</div>


