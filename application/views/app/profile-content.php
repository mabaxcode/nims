<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_content_container" class="app-container container-fluid">
								<!--begin::Toolbar container-->
								 <!--begin::Header-->
                     
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							
          
								<!--begin::Content container-->
								 <div id="kt_app_content_container" class="app-container container-fluid">
									<!--begin::Navbar-->
									<div class="card mb-5 mb-xl-10">
										<div class="card-body pt-9 pb-0">
											<!--begin::Details-->
											<div class="d-flex flex-wrap flex-sm-nowrap">
												<!--begin: Pic-->
												
												<!--end::Pic-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<!--begin::Title-->
													<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
														<!--begin::User-->
														<div class="d-flex flex-column">
															<!--begin::Name-->
															<div class="d-flex align-items-center mb-2">
																<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"><?=strtoupper($profile['name'])?></a>
																<a href="#">
																	<i class="ki-duotone ki-verify fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</a>
															</div>
															<!--end::Name-->
															<!--begin::Info-->
															<?/*
															<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
																<a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
																<i class="ki-duotone ki-profile-circle fs-4 me-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>User</a>
																
																<a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
																<i class="ki-duotone ki-sms fs-4">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i><?=$profile['email']?></a>
															</div>
															*/?>
															<!--end::Info-->
														</div>
														<!--end::User-->
														<!--begin::Actions-->
														
														<!--end::Actions-->
													</div>
													<!--end::Title-->
													<!--begin::Stats-->
													
													<!--end::Stats-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::Details-->
											<!--begin::Navs-->
											<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="<?=base_url('app/myProfile')?>">Maklumat</a>
												</li>
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="<?=base_url('app/setting')?>">Tetapan</a>
												</li>

												<!--end::Nav item-->
												<!--begin::Nav item-->
												
											</ul>
											<!--begin::Navs-->
										</div>
									</div>
									<!--end::Navbar-->
									<!--begin::details View-->
									<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
										<!--begin::Card header-->
										<div class="card-header cursor-pointer">
											<!--begin::Card title-->
											<div class="card-title m-0">
												<h3 class="fw-bold m-0">Maklumat</h3>
											</div>
											<!--end::Card title-->
											<!--begin::Action-->
											<a href="<?=base_url('app/setting')?>" class="btn btn-sm btn-primary align-self-center">Kemaskini Profile</a>
											<!--end::Action-->
										</div>
										<!--begin::Card header-->
										<!--begin::Card body-->
										<div class="card-body p-9">
											<!--begin::Row-->
											<div class="row mb-7">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">Nama</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800"><?=strtoupper($profile['name'])?></span>
													<span class="badge badge-success">Verified</span>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Input group-->
											
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-7">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">No. Telefon
												</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 d-flex align-items-center">
													<span class="fw-bold fs-6 text-gray-800 me-2"><?=$profile['phone_no']?></span>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											
											<!--end::Input group-->
											<!--begin::Input group-->
											
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-7">
												<!--begin::Label-->
												<label class="col-lg-4 fw-semibold text-muted">Email</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800"><?=$profile['email']?></span>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											
											<!--end::Input group-->
											<!--begin::Notice-->
											
										</div>
										<!--end::Card body-->
									</div>
									<!--end::details View-->
	
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>