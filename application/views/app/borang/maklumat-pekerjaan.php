<div class="card mb-5 mb-xl-10">
	<!--begin::Card header-->
	<div class="card-header cursor-pointer">
		<!--begin::Card title-->
		<div class="card-title m-0">
			<h3 class="fw-bold m-0">Maklumat Pekerjaan</h3>
		</div>
		<!--end::Card title-->
		<!--begin::Action-->
		<!-- <a href="account/settings.html" class="btn btn-sm btn-primary align-self-center">Edit Profile</a> -->
		<!--end::Action-->
	</div>
	<!--begin::Card header-->
	<!--begin::Content-->
	<div id="kt_account_settings_profile_details" class="collapse show">
		<!--begin::Form-->
		<form id="kt_account_profile_details_form_kerja" class="form">
			<!--begin::Card body-->
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
						<select name="wad" aria-label="Select a Country" data-control="select2" data-placeholder="Pilih unit/wad..." class="form-select form-select-lg fw-semibold">
							<option value="">Pilih wad...</option>
							<? $allWad = get_any_table_array(array('module' => 'wad'), 'ref_code'); ?>
							<? foreach ($allWad as $wad) { ?>
							<option data-kt-flag="" <? if($wad['code'] == $employment['wad']){echo "selected";} ?> value="<?= $wad['code']?>"><?= $wad['code_desc']?></option>
							<? } ?>
							
						</select>
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
						<select name="jawatan" aria-label="Select a Country" data-control="select2" data-placeholder="Pilih jawatan..." class="form-select form-select-lg fw-semibold">
							<option value="">Pilih jawatan...</option>
							<? $allJawatan = get_any_table_array(array('module' => 'jawatan'), 'ref_code'); ?>
							<? foreach ($allJawatan as $jawatan) { ?>
							<option data-kt-flag="" <? if($jawatan['code'] == $employment['jawatan']){echo "selected";} ?> value="<?= $jawatan['code']?>"><?= $jawatan['code_desc']?></option>
							<? } ?>
							
						</select>
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
						<select name="gred" aria-label="Select a Country" data-control="select2" data-placeholder="Pilih gred..." class="form-select form-select-lg fw-semibold">
							<option value="">Pilih gred...</option>
							<? $allGred = get_any_table_array(array('module' => 'gred'), 'ref_code'); ?>
							<? foreach ($allGred as $gred) { ?>
							<option data-kt-flag="" <? if($gred['code'] == $employment['gred']){echo "selected";} ?> value="<?= $gred['code']?>"><?= $gred['code_desc']?></option>
							<? } ?>
							
						</select>
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
						if ($employment['tarikh_lantikan']) {
							$tarikh_lantikan =  date('Y-m-d', strtotime($employment['tarikh_lantikan']));
						} else {
							$tarikh_lantikan = '';
						}
						?>

						<input type="date" name="tarikh_lantikan" class="form-control form-control-lg" placeholder="Nama" value="<?=$tarikh_lantikan ?>" />
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
						if ($employment['tarikh_naik_pangkat']) {
							$tarikh_naik_pangkat =  date('Y-m-d', strtotime($employment['tarikh_naik_pangkat']));
						} else {
							$tarikh_naik_pangkat = '';
						}
						?>
						<input type="date" name="tarikh_naik_pangkat" class="form-control form-control-lg" placeholder="Nama" value="<?=$tarikh_naik_pangkat?>" />
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
						if ($employment['tarikh_bersara']) {
							$tarikh_bersara =  date('Y-m-d', strtotime($employment['tarikh_bersara']));
						} else {
							$tarikh_bersara = '';
						}
						?>
						<input type="date" name="tarikh_bersara" class="form-control form-control-lg" placeholder="Nama" value="<?=$tarikh_bersara?>" />
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">No. LJM</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="text" name="no_ljm" class="form-control form-control-lg" placeholder="No. LJM" value="<?= $employment['no_ljm']?>" />
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
						if ($employment['tarikh_lapor_diri']) {
							$tarikh_lapor_diri =  date('Y-m-d', strtotime($employment['tarikh_lapor_diri']));
						} else {
							$tarikh_lapor_diri = '';
						}
						?>
						<input type="date" name="tarikh_lapor_diri" class="form-control form-control-lg" placeholder="Nama" value="<?= $tarikh_lapor_diri?>" />
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">POS Basik 1</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="text" name="pos_basik_1" class="form-control form-control-lg" placeholder="POS Basik 1" value="<?= $employment['pos_basik_1']?>" />
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
						if ($employment['tarikh_basik1']) {
							$tarikh_basik1 =  date('Y-m-d', strtotime($employment['tarikh_basik1']));
						} else {
							$tarikh_basik1 = '';
						}
						?>
						<input type="date" name="tarikh_basik1" class="form-control form-control-lg" placeholder="Nama" value="<?=$tarikh_basik1?>" />
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">POS Basik 2</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="text" name="pos_basik_2" class="form-control form-control-lg" placeholder="POS Basik 2" value="<?= $employment['pos_basik_2']?>" />
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
						if ($employment['tarikh_basik2']) {
							$tarikh_basik2 =  date('Y-m-d', strtotime($employment['tarikh_basik2']));
						} else {
							$tarikh_basik2 = '';
						}
						?>
						<input type="date" name="tarikh_basik2" class="form-control form-control-lg" placeholder="Tarikh" value="<?=$tarikh_basik2?>" />
					</div>
					<!--end::Col-->
				</div>
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">POS Basik 3</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<input type="text" name="pos_basik_3" class="form-control form-control-lg" placeholder="POS Basik 3" value="<?= $employment['pos_basik_3']?>" />
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
						if ($employment['tarikh_basik3']) {
							$tarikh_basik3 =  date('Y-m-d', strtotime($employment['tarikh_basik3']));
						} else {
							$tarikh_basik3 = '';
						}
						?>
						<input type="date" name="tarikh_basik3" class="form-control form-control-lg" placeholder="Nama" value="<?=$tarikh_basik3?>" />
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
						<input type="text" name="credential" class="form-control form-control-lg" placeholder="Credential" value="<?= $employment['credential']?>">
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
						if ($employment['tarikh_credential']) {
							$tarikh_credential =  date('Y-m-d', strtotime($employment['tarikh_credential']));
						} else {
							$tarikh_credential = '';
						}
						?>
						<input type="date" name="tarikh_credential" class="form-control form-control-lg" placeholder="Tarikh Credential" value="<?=$tarikh_credential?>" />
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
						if ($employment['tarikh_privilege_start']) {
							$tarikh_privilege_start =  date('Y-m-d', strtotime($employment['tarikh_privilege_start']));
						} else {
							$tarikh_privilege_start = '';
						}
						?>
						<input type="date" name="tarikh_privilege_start" class="form-control form-control-lg" placeholder="Tarikh Mula" value="<?=$tarikh_privilege_start?>" />
					</div>
					<div class="col-lg-4 fv-row">
						<?
						if ($employment['tarikh_privilege_end']) {
							$tarikh_privilege_end =  date('Y-m-d', strtotime($employment['tarikh_privilege_end']));
						} else {
							$tarikh_privilege_end = '';
						}
						?>
						<input type="date" name="tarikh_privilege_end" class="form-control form-control-lg" placeholder="Tarikh Tamat" value="<?=$tarikh_privilege_end?>" />
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<?/*
				<!--begin::Input group-->
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">Time Zone</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="Select a timezone.." class="form-select form-select-solid form-select-lg">
							<option value="">Select a Timezone..</option>
							<option data-bs-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
							<option data-bs-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
							<option data-bs-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
							<option data-bs-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
							<option data-bs-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
							<option data-bs-offset="-25200" value="Pacific Time (US & Canada)">(GMT-07:00) Pacific Time (US & Canada)</option>
							<option data-bs-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
							<option data-bs-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
							<option data-bs-offset="-21600" value="Mountain Time (US & Canada)">(GMT-06:00) Mountain Time (US & Canada)</option>
							<option data-bs-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
							<option data-bs-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
							<option data-bs-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
							<option data-bs-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
							<option data-bs-offset="-18000" value="Central Time (US & Canada)">(GMT-05:00) Central Time (US & Canada)</option>
							<option data-bs-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
							<option data-bs-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
							<option data-bs-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
							<option data-bs-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
							<option data-bs-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
							<option data-bs-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
							<option data-bs-offset="-14400" value="Eastern Time (US & Canada)">(GMT-04:00) Eastern Time (US & Canada)</option>
							<option data-bs-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
							<option data-bs-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
							<option data-bs-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
							<option data-bs-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
							<option data-bs-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
							<option data-bs-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
							<option data-bs-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
							<option data-bs-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
							<option data-bs-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
							<option data-bs-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
							<option data-bs-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
							<option data-bs-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
							<option data-bs-offset="0" value="Azores">(GMT) Azores</option>
							<option data-bs-offset="0" value="Monrovia">(GMT) Monrovia</option>
							<option data-bs-offset="0" value="UTC">(GMT) UTC</option>
							<option data-bs-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
							<option data-bs-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
							<option data-bs-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
							<option data-bs-offset="3600" value="London">(GMT+01:00) London</option>
							<option data-bs-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
							<option data-bs-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
							<option data-bs-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
							<option data-bs-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
							<option data-bs-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
							<option data-bs-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
							<option data-bs-offset="7200" value="Prague">(GMT+02:00) Prague</option>
							<option data-bs-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
							<option data-bs-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
							<option data-bs-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
							<option data-bs-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
							<option data-bs-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
							<option data-bs-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
							<option data-bs-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
							<option data-bs-offset="7200" value="Paris">(GMT+02:00) Paris</option>
							<option data-bs-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
							<option data-bs-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
							<option data-bs-offset="7200" value="Bern">(GMT+02:00) Bern</option>
							<option data-bs-offset="7200" value="Rome">(GMT+02:00) Rome</option>
							<option data-bs-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
							<option data-bs-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
							<option data-bs-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
							<option data-bs-offset="7200" value="Harare">(GMT+02:00) Harare</option>
							<option data-bs-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
							<option data-bs-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
							<option data-bs-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
							<option data-bs-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
							<option data-bs-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
							<option data-bs-offset="10800" value="Riga">(GMT+03:00) Riga</option>
							<option data-bs-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
							<option data-bs-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
							<option data-bs-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
							<option data-bs-offset="10800" value="Athens">(GMT+03:00) Athens</option>
							<option data-bs-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
							<option data-bs-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
							<option data-bs-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
							<option data-bs-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
							<option data-bs-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
							<option data-bs-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
							<option data-bs-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
							<option data-bs-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
							<option data-bs-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
							<option data-bs-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
							<option data-bs-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
							<option data-bs-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
							<option data-bs-offset="14400" value="Baku">(GMT+04:00) Baku</option>
							<option data-bs-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
							<option data-bs-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
							<option data-bs-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
							<option data-bs-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
							<option data-bs-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
							<option data-bs-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
							<option data-bs-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
							<option data-bs-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
							<option data-bs-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
							<option data-bs-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
							<option data-bs-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
							<option data-bs-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
							<option data-bs-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
							<option data-bs-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
							<option data-bs-offset="21600" value="Astana">(GMT+06:00) Astana</option>
							<option data-bs-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
							<option data-bs-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
							<option data-bs-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
							<option data-bs-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
							<option data-bs-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
							<option data-bs-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
							<option data-bs-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
							<option data-bs-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
							<option data-bs-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
							<option data-bs-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
							<option data-bs-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
							<option data-bs-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
							<option data-bs-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
							<option data-bs-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
							<option data-bs-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
							<option data-bs-offset="28800" value="Perth">(GMT+08:00) Perth</option>
							<option data-bs-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
							<option data-bs-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
							<option data-bs-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
							<option data-bs-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
							<option data-bs-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
							<option data-bs-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
							<option data-bs-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
							<option data-bs-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
							<option data-bs-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
							<option data-bs-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
							<option data-bs-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
							<option data-bs-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
							<option data-bs-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
							<option data-bs-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
							<option data-bs-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
							<option data-bs-offset="36000" value="Guam">(GMT+10:00) Guam</option>
							<option data-bs-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
							<option data-bs-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
							<option data-bs-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
							<option data-bs-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
							<option data-bs-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
							<option data-bs-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
							<option data-bs-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
							<option data-bs-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
							<option data-bs-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
							<option data-bs-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
						</select>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">Currency</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<select name="currnecy" aria-label="Select a Currency" data-control="select2" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
							<option value="">Select a currency..</option>
							<option data-kt-flag="flags/united-states.svg" value="USD">
							<b>USD</b>&nbsp;-&nbsp;USA dollar</option>
							<option data-kt-flag="flags/united-kingdom.svg" value="GBP">
							<b>GBP</b>&nbsp;-&nbsp;British pound</option>
							<option data-kt-flag="flags/australia.svg" value="AUD">
							<b>AUD</b>&nbsp;-&nbsp;Australian dollar</option>
							<option data-kt-flag="flags/japan.svg" value="JPY">
							<b>JPY</b>&nbsp;-&nbsp;Japanese yen</option>
							<option data-kt-flag="flags/sweden.svg" value="SEK">
							<b>SEK</b>&nbsp;-&nbsp;Swedish krona</option>
							<option data-kt-flag="flags/canada.svg" value="CAD">
							<b>CAD</b>&nbsp;-&nbsp;Canadian dollar</option>
							<option data-kt-flag="flags/switzerland.svg" value="CHF">
							<b>CHF</b>&nbsp;-&nbsp;Swiss franc</option>
						</select>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-semibold fs-6">Communication</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						<!--begin::Options-->
						<div class="d-flex align-items-center mt-3">
							<!--begin::Option-->
							<label class="form-check form-check-custom form-check-inline form-check-solid me-5">
								<input class="form-check-input" name="communication[]" type="checkbox" value="1" />
								<span class="fw-semibold ps-2 fs-6">Email</span>
							</label>
							<!--end::Option-->
							<!--begin::Option-->
							<label class="form-check form-check-custom form-check-inline form-check-solid">
								<input class="form-check-input" name="communication[]" type="checkbox" value="2" />
								<span class="fw-semibold ps-2 fs-6">Phone</span>
							</label>
							<!--end::Option-->
						</div>
						<!--end::Options-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-0">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-semibold fs-6">Allow Marketing</label>
					<!--begin::Label-->
					<!--begin::Label-->
					<div class="col-lg-8 d-flex align-items-center">
						<div class="form-check form-check-solid form-switch form-check-custom fv-row">
							<input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked" />
							<label class="form-check-label" for="allowmarketing"></label>
						</div>
					</div>
					<!--begin::Label-->
				</div>
				<!--end::Input group-->
				*/?>
			</div>
			<!--end::Card body-->
			<!--begin::Actions-->
			<div class="card-footer d-flex justify-content-end py-6 px-9">
				<!-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> -->
				<a class="btn btn-primary simpan-maklumat-kerja">Simpan</a>
			</div>
			<!--end::Actions-->
		</form>
		<!--end::Form-->
	</div>
	<!--end::Content-->
</div>