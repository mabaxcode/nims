<div class="card-body border-top p-9">
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">
						<span class="required">Unit / Wad</span>
					</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<?
						$ref_wad = get_any_table_row(array('code' => $employment_info['wad'], 'module' => 'wad'), 'ref_code');
						?>
						<input type="text" name="tarikh_naik_pangkat" class="form-control form-control-lg" value="<?=$ref_wad['code_desc']?>" disabled/>

						
					</div>
					<!--end::Col-->
				</div>


				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">
						<span class="required">Jawatan</span>
					</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<?
						$ref_jawatan = get_any_table_row(array('code' => $employment_info['jawatan'], 'module' => 'jawatan'), 'ref_code');
						?>
						<input type="text" name="tarikh_naik_pangkat" class="form-control form-control-lg" value="<?=$ref_jawatan['code_desc']?>" disabled/>
						
					</div>
					<!--end::Col-->
				</div>

				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">
						<span class="required">Gred</span>
					</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">

						<?
						$ref_gred = get_any_table_row(array('code' => $employment_info['gred'], 'module' => 'gred'), 'ref_code');
						?>
						<input type="text" name="tarikh_naik_pangkat" class="form-control form-control-lg" value="<?=$ref_gred['code_desc']?>" disabled/>


						
					</div>
					<!--end::Col-->
				</div>

				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">Tarikh Lantikan</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">

						<?
						if ($employment_info['tarikh_lantikan']) {
							$tarikh_lantikan =  date('Y-m-d', strtotime($employment_info['tarikh_lantikan']));
						} else {
							$tarikh_lantikan = '';
						}
						?>

						<input type="date" name="tarikh_lantikan" class="form-control form-control-lg" value="<?=$tarikh_lantikan ?>"disabled />
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">Tarikh Kenaikan Pangkat</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<?
						if ($employment_info['tarikh_naik_pangkat']) {
							$tarikh_naik_pangkat =  date('Y-m-d', strtotime($employment_info['tarikh_naik_pangkat']));
						} else {
							$tarikh_naik_pangkat = '';
						}
						?>
						<input type="date" name="tarikh_naik_pangkat" class="form-control form-control-lg" value="<?=$tarikh_naik_pangkat?>" disabled/>
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">Tarikh Bersara</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<?
						if ($employment_info['tarikh_bersara']) {
							$tarikh_bersara =  date('Y-m-d', strtotime($employment_info['tarikh_bersara']));
						} else {
							$tarikh_bersara = '';
						}
						?>
						<input type="date" name="tarikh_bersara" class="form-control form-control-lg" value="<?=$tarikh_bersara?>" disabled/>
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">No. LJM</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="text" name="no_ljm" class="form-control form-control-lg" value="<?= $employment_info['no_ljm']?>" disabled/>
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">Tarikh Lapor Diri Ke HSNI</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<?
						if ($employment_info['tarikh_lapor_diri']) {
							$tarikh_lapor_diri =  date('Y-m-d', strtotime($employment_info['tarikh_lapor_diri']));
						} else {
							$tarikh_lapor_diri = '';
						}
						?>
						<input type="date" name="tarikh_lapor_diri" class="form-control form-control-lg" value="<?= $tarikh_lapor_diri?>" disabled/>
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">POS Basik 1</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="text" name="pos_basik_1" class="form-control form-control-lg" value="<?= $employment_info['pos_basik_1']?>" disabled/>
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">Tarikh Basik 1</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<?
						if ($employment_info['tarikh_basik1']) {
							$tarikh_basik1 =  date('Y-m-d', strtotime($employment_info['tarikh_basik1']));
						} else {
							$tarikh_basik1 = '';
						}
						?>
						<input type="date" name="tarikh_basik1" class="form-control form-control-lg" value="<?=$tarikh_basik1?>" disabled/>
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">POS Basik 2</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="text" name="pos_basik_2" class="form-control form-control-lg" value="<?= $employment_info['pos_basik_2']?>" disabled/>
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">Tarikh Basik 2</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<?
						if ($employment_info['tarikh_basik2']) {
							$tarikh_basik2 =  date('Y-m-d', strtotime($employment_info['tarikh_basik2']));
						} else {
							$tarikh_basik2 = '';
						}
						?>
						<input type="date" name="tarikh_basik2" class="form-control form-control-lg" value="<?=$tarikh_basik2?>" disabled/>
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">POS Basik 3</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="text" name="pos_basik_3" class="form-control form-control-lg" value="<?= $employment_info['pos_basik_3']?>" disabled/>
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">Tarikh Basik 3</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<?
						if ($employment_info['tarikh_basik3']) {
							$tarikh_basik3 =  date('Y-m-d', strtotime($employment_info['tarikh_basik3']));
						} else {
							$tarikh_basik3 = '';
						}
						?>
						<input type="date" name="tarikh_basik3" class="form-control form-control-lg" disabled value="<?=$tarikh_basik3?>" />
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-12 col-form-label fw-semibold fs-6"><b>Maklumat Kompetensi/Kelayakan Profesional</b></label>
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">Credential</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="text" name="credential" class="form-control form-control-lg" disabled value="<?= $employment_info['credential']?>">
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">Tarikh Credential</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<?
						if ($employment_info['tarikh_credential']) {
							$tarikh_credential =  date('Y-m-d', strtotime($employment_info['tarikh_credential']));
						} else {
							$tarikh_credential = '';
						}
						?>
						<input type="date" name="tarikh_credential" class="form-control form-control-lg" disabled value="<?=$tarikh_credential?>" />
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">Tarikh Privilege</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-4 fv-row">
						<label class="col-lg-4 col-form-label fw-semibold fs-6">Tarikh Mula</label>
					</div>
					<div class="col-lg-4 fv-row">
						<label class="col-lg-4 col-form-label fw-semibold fs-6">Tarikh Tamat</label>
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6"></label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-4 fv-row">
						<?
						if ($employment_info['tarikh_privilege_start']) {
							$tarikh_privilege_start =  date('Y-m-d', strtotime($employment_info['tarikh_privilege_start']));
						} else {
							$tarikh_privilege_start = '';
						}
						?>
						<input type="date" name="tarikh_privilege_start" class="form-control form-control-lg" disabled value="<?=$tarikh_privilege_start?>" />
					</div>
					<div class="col-lg-4 fv-row">
						<?
						if ($employment_info['tarikh_privilege_end']) {
							$tarikh_privilege_end =  date('Y-m-d', strtotime($employment_info['tarikh_privilege_end']));
						} else {
							$tarikh_privilege_end = '';
						}
						?>
						<input type="date" name="tarikh_privilege_end" class="form-control form-control-lg" disabled value="<?=$tarikh_privilege_end?>" />
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				
			</div>