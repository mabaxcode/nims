<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Maklumat Wad Seliaan</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Maklumat Wad Seliaan</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">
										<!--begin::Filter menu-->
										<div class="m-0">
											<!--begin::Menu toggle-->
											<!-- <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<i class="ki-duotone ki-filter fs-6 text-muted me-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>Filter</a> -->
											<!--end::Menu toggle-->
											<!--begin::Menu 1-->
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_66b9a24d7b58a">
												<!--begin::Header-->
												<div class="px-7 py-5">
													<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
												</div>
												<!--end::Header-->
												<!--begin::Menu separator-->
												<div class="separator border-gray-200"></div>
												<!--end::Menu separator-->
												<!--begin::Form-->
												<div class="px-7 py-5">
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Status:</label>
														<!--end::Label-->
														<!--begin::Input-->
														<div>
															<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_66b9a24d7b58a" data-allow-clear="true">
																<option></option>
																<option value="1">Approved</option>
																<option value="2">Pending</option>
																<option value="2">In Process</option>
																<option value="2">Rejected</option>
															</select>
														</div>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Member Type:</label>
														<!--end::Label-->
														<!--begin::Options-->
														<div class="d-flex">
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																<input class="form-check-input" type="checkbox" value="1" />
																<span class="form-check-label">Author</span>
															</label>
															<!--end::Options-->
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																<span class="form-check-label">Customer</span>
															</label>
															<!--end::Options-->
														</div>
														<!--end::Options-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Notifications:</label>
														<!--end::Label-->
														<!--begin::Switch-->
														<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
															<label class="form-check-label">Enabled</label>
														</div>
														<!--end::Switch-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="d-flex justify-content-end">
														<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
														<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Form-->
											</div>
											<!--end::Menu 1-->
										</div>
										<!--end::Filter menu-->
										<!--begin::Secondary button-->
										<!--end::Secondary button-->
										<!--begin::Primary button-->
										<!-- <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a> -->
										<!--end::Primary button-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Layout-->
									<div class="d-flex flex-column flex-lg-row">
										<!--begin::Sidebar-->
										<div class="flex-column flex-lg-row-auto w-lg-200px w-xl-300px mb-10">
											<!--begin::Card-->
											<div class="card mb-5 mb-xl-8">
												<!--begin::Card body-->
												<div class="card-body">
													<!--begin::Summary-->
													<!--begin::User Info-->
													<div class="d-flex flex-center flex-column py-5">
														<!--begin::Avatar-->
														
														<!--end::Avatar-->
														<!--begin::Name-->
														<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3"><?=$wad_selian?></a>
														<!--end::Name-->
														<!--begin::Position-->
														<div class="mb-9">
															<!--begin::Badge-->
															<div class="badge badge-lg badge-light-primary d-inline">Jumlah Nurse : <?=$total_nurse_selian?></div>
															<!--begin::Badge-->
														</div>
														<!--end::Position-->
														<!--begin::Info-->
														<!--begin::Info heading-->
														<!-- <div class="fw-bold mb-3">Jumlah Nurse</div> -->
														<!--end::Info heading-->
														<div class="d-flex flex-wrap flex-center">
															<!--begin::Stats-->
															<!-- <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
																<div class="fs-4 fw-bold text-gray-700">
																	<span class="w-75px">243</span>
																	
																</div>
																<div class="fw-semibold text-muted">Jumlah Keseluruhan</div>
															</div> -->
															<!--end::Stats-->
															<!--begin::Stats-->
															<!-- <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
																<div class="fs-4 fw-bold text-gray-700">
																	<span class="w-50px">56</span>
																	<i class="ki-duotone ki-arrow-down fs-3 text-danger">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</div>
																<div class="fw-semibold text-muted">Solved</div>
															</div> -->
															<!--end::Stats-->
															<!--begin::Stats-->
															<!-- <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
																<div class="fs-4 fw-bold text-gray-700">
																	<span class="w-50px">188</span>
																	<i class="ki-duotone ki-arrow-up fs-3 text-success">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</div>
																<div class="fw-semibold text-muted">Open</div>
															</div> -->
															<!--end::Stats-->
														</div>
														<!--end::Info-->
													</div>
													<!--end::User Info-->
													<!--end::Summary-->
													<!--begin::Details toggle-->
													<?/*
													<div class="d-flex flex-stack fs-4 py-3">
														<div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Details 
														<span class="ms-2 rotate-180">
															<i class="ki-duotone ki-down fs-3"></i>
														</span></div>
														<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
															<a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details">Edit</a>
														</span>
													</div>
													<!--end::Details toggle-->
													<div class="separator"></div>
													<!--begin::Details content-->
													<div id="kt_user_view_details" class="collapse show">
														<div class="pb-5 fs-6">
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Account ID</div>
															<div class="text-gray-600">ID-45453423</div>
															<!--begin::Details item-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Email</div>
															<div class="text-gray-600">
																<a href="#" class="text-gray-600 text-hover-primary">info@keenthemes.com</a>
															</div>
															<!--begin::Details item-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Address</div>
															<div class="text-gray-600">101 Collin Street, 
															<br />Melbourne 3000 VIC
															<br />Australia</div>
															<!--begin::Details item-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Language</div>
															<div class="text-gray-600">English</div>
															<!--begin::Details item-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Last Login</div>
															<div class="text-gray-600">10 Mar 2024, 5:20 pm</div>
															<!--begin::Details item-->
														</div>
													</div>
													*/?>
													<!--end::Details content-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
											<!--begin::Connected Accounts-->
											<?/*
											<div class="card mb-5 mb-xl-8">
												<!--begin::Card header-->
												<div class="card-header border-0">
													<div class="card-title">
														<h3 class="fw-bold m-0">Connected Accounts</h3>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-2">
													<!--begin::Notice-->
													<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
														<!--begin::Icon-->
														<i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>
														<!--end::Icon-->
														<!--begin::Wrapper-->
														<div class="d-flex flex-stack flex-grow-1">
															<!--begin::Content-->
															<div class="fw-semibold">
																<div class="fs-6 text-gray-700">By connecting an account, you hereby agree to our 
																<a href="#" class="me-1">privacy policy</a>and 
																<a href="#">terms of use</a>.</div>
															</div>
															<!--end::Content-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Notice-->
													<!--begin::Items-->
													<div class="py-2">
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<div class="d-flex">
																<img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
																<div class="d-flex flex-column">
																	<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Google</a>
																	<div class="fs-6 fw-semibold text-muted">Plan properly your workflow</div>
																</div>
															</div>
															<div class="d-flex justify-content-end">
																<!--begin::Switch-->
																<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input" name="google" type="checkbox" value="1" id="kt_modal_connected_accounts_google" checked="checked" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_google"></span>
																	<!--end::Label-->
																</label>
																<!--end::Switch-->
															</div>
														</div>
														<!--end::Item-->
														<div class="separator separator-dashed my-5"></div>
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<div class="d-flex">
																<img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
																<div class="d-flex flex-column">
																	<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Github</a>
																	<div class="fs-6 fw-semibold text-muted">Keep eye on on your Repositories</div>
																</div>
															</div>
															<div class="d-flex justify-content-end">
																<!--begin::Switch-->
																<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input" name="github" type="checkbox" value="1" id="kt_modal_connected_accounts_github" checked="checked" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_github"></span>
																	<!--end::Label-->
																</label>
																<!--end::Switch-->
															</div>
														</div>
														<!--end::Item-->
														<div class="separator separator-dashed my-5"></div>
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<div class="d-flex">
																<img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />
																<div class="d-flex flex-column">
																	<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Slack</a>
																	<div class="fs-6 fw-semibold text-muted">Integrate Projects Discussions</div>
																</div>
															</div>
															<div class="d-flex justify-content-end">
																<!--begin::Switch-->
																<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input" name="slack" type="checkbox" value="1" id="kt_modal_connected_accounts_slack" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_slack"></span>
																	<!--end::Label-->
																</label>
																<!--end::Switch-->
															</div>
														</div>
														<!--end::Item-->
													</div>
													<!--end::Items-->
												</div>
												<!--end::Card body-->
												<!--begin::Card footer-->
												<div class="card-footer border-0 d-flex justify-content-center pt-0">
													<button class="btn btn-sm btn-light-primary">Save Changes</button>
												</div>
												<!--end::Card footer-->
											</div>
											*/?>
											<!--end::Connected Accounts-->
										</div>
										<!--end::Sidebar-->
										<!--begin::Content-->
										<div class="flex-lg-row-fluid ms-lg-15">
											<!--begin:::Tabs-->
											<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
												<!--begin:::Tab item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_overview_tab">Senarai Nurse Dalam Wad Seliaan</a>
												</li>
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												<?/*
												<li class="nav-item ms-auto">
													<!--begin::Action menu-->
													<a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions 
													<i class="ki-duotone ki-down fs-2 me-0"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 w-250px fs-6" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Payments</div>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<a href="#" class="menu-link px-5">Create invoice</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<a href="#" class="menu-link flex-stack px-5">Create payments 
															<span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																<i class="ki-duotone ki-information fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span></a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
															<a href="#" class="menu-link px-5">
																<span class="menu-title">Subscription</span>
																<span class="menu-arrow"></span>
															</a>
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-5">Apps</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-5">Billing</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-5">Statements</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator my-2"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3">
																		<label class="form-check form-switch form-check-custom form-check-solid">
																			<input class="form-check-input w-30px h-20px" type="checkbox" value="" name="notifications" checked="checked" id="kt_user_menu_notifications" />
																			<span class="form-check-label text-muted fs-6" for="kt_user_menu_notifications">Notifications</span>
																		</label>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu separator-->
														<div class="separator my-3"></div>
														<!--end::Menu separator-->
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<a href="#" class="menu-link px-5">Reports</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5 my-1">
															<a href="#" class="menu-link px-5">Account Settings</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<a href="#" class="menu-link text-danger px-5">Delete customer</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
													<!--end::Menu-->
												</li>
												*/?>
												<!--end:::Tab item-->
											</ul>
											<!--end:::Tabs-->
											<!--begin:::Tab content-->
											<div class="tab-content" id="myTabContent">
												<!--begin:::Tab pane-->
												<div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">
													<!--begin::Card-->
													<div class="card card-flush mb-6 mb-xl-9">
														<!--begin::Card header-->
														
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body p-9 pt-4">
															<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_search_setting">
									                            <thead>
									                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
									                                    <th class="w-10px pe-2">
									                                        No.
									                                    </th>
									                                    <th class="min-w-125px">Nama</th>
									                                    <th class="min-w-125px">No. KP</th>
									                                    <th class="min-w-125px">Status Borang</th>
									                          <!--           <th class="min-w-125px">Nama</th>
									                                    <th class="min-w-125px">Gred</th>
									                                    <th class="min-w-125px">No LJM</th>
									                                    <th class="min-w-125px">Status Borang</th> -->
									                                    <th class="text-end min-w-100px">Actions</th>
									                                </tr>
									                            </thead>
									                            <tbody class="text-gray-600 fw-semibold">
									                                <?
									                                if($nurse_list){
									                                $no = 1;
									                                foreach ($nurse_list as $key) {

									                                $user = get_any_table_row(array('id' => $key['user_id']), 'user_accounts');

									                                // $personal = get_any_table_row(array('user_id' => $key['id']), 'personal_info');
									                                $employment = get_any_table_row(array('user_id' => $key['user_id']), 'employment_info');

									                                ?>
									                                <tr>
									                                    <td>
									                                        <?= $no++ ?>
									                                    </td>
									                                    <td width="45%"><?=strtoupper($user['name'])?><br><span class="badge badge-primary badge-sm"><?=$employment['no_ljm']?></span></td>
									                                    <td><?=$user['no_kp']?></td>
									                                    <td>

									                                       <? if($user['complete'] == "Y"){ ?>
									                                       <span class="badge badge-success badge-sm">Lengkap</span>
									                                       <? } else { ?>
									                                       <span class="badge badge-danger badge-sm">Tidak Lengkap</span>
									                                       <? } ?>

									                                    </td>
									                                    
									                                    <td class="text-end">
									                                        <a href="javascript:void(0);" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm view-nurse-details" data-init="<?=$employment['user_id']?>">View
									                                        <!--end::Menu-->
									                                    </td>
									                                </tr>

									                                <?
									                                }
									                                }
									                                ?>
									                            </tbody>
									                        </table>
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
													<!--begin::Tasks-->
													<!--end::Tasks-->
												</div>
												<!--end:::Tab pane-->
												<!--begin:::Tab pane-->
											
												<!--end:::Tab pane-->
												<!--begin:::Tab pane-->
											
												<!--end:::Tab pane-->
											</div>
											<!--end:::Tab content-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Layout-->
									<!--begin::Modals-->
									<!--begin::Modal - Update user details-->
									
									<!--end::Modal - Update user details-->
									<!--begin::Modal - Add schedule-->
									<div class="modal fade" id="kt_modal_add_schedule" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Add an Event</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
														<i class="ki-duotone ki-cross fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Form-->
													<form id="kt_modal_add_schedule_form" class="form" action="#">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Event Name</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="event_name" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Date & Time</span>
																<span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a date & time.">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="Pick date & time" name="event_datetime" id="kt_modal_add_schedule_datepicker" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Event Organiser</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="event_org" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Send Event Details To</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input id="kt_modal_add_schedule_tagify" type="text" class="form-control form-control-solid" name="event_invitees" value="smith@kpmg.com, melody@altbox.com" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait... 
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Add schedule-->
									<!--begin::Modal - Add task-->
									<div class="modal fade" id="kt_modal_add_task" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Add a Task</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
														<i class="ki-duotone ki-cross fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Form-->
													<form id="kt_modal_add_task_form" class="form" action="#">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Task Name</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="task_name" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Task Due Date</span>
																<span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a due date.">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="Pick date" name="task_duedate" id="kt_modal_add_task_datepicker" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">Task Description</label>
															<!--end::Label-->
															<!--begin::Input-->
															<textarea class="form-control form-control-solid rounded-3"></textarea>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait... 
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Add task-->
									<!--begin::Modal - Update email-->
									<div class="modal fade" id="kt_modal_update_email" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Update Email Address</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
														<i class="ki-duotone ki-cross fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Form-->
													<form id="kt_modal_update_email_form" class="form" action="#">
														<!--begin::Notice-->
														<!--begin::Notice-->
														<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
															<!--begin::Icon-->
															<i class="ki-duotone ki-information fs-2tx text-primary me-4">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
															<!--end::Icon-->
															<!--begin::Wrapper-->
															<div class="d-flex flex-stack flex-grow-1">
																<!--begin::Content-->
																<div class="fw-semibold">
																	<div class="fs-6 text-gray-700">Please note that a valid email address is required to complete the email verification.</div>
																</div>
																<!--end::Content-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Notice-->
														<!--end::Notice-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Email Address</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="" name="profile_email" value="smith@kpmg.com" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait... 
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Update email-->
									<!--begin::Modal - Update password-->
									<div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Update Password</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
														<i class="ki-duotone ki-cross fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Form-->
													<form id="kt_modal_update_password_form" class="form" action="#">
														<!--begin::Input group=-->
														<div class="fv-row mb-10">
															<label class="required form-label fs-6 mb-2">Current Password</label>
															<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="current_password" autocomplete="off" />
														</div>
														<!--end::Input group=-->
														<!--begin::Input group-->
														<div class="mb-10 fv-row" data-kt-password-meter="true">
															<!--begin::Wrapper-->
															<div class="mb-1">
																<!--begin::Label-->
																<label class="form-label fw-semibold fs-6 mb-2">New Password</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="position-relative mb-3">
																	<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="new_password" autocomplete="off" />
																	<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
																		<i class="ki-duotone ki-eye-slash fs-1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>
																		<i class="ki-duotone ki-eye d-none fs-1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span>
																</div>
																<!--end::Input wrapper-->
																<!--begin::Meter-->
																<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
																	<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
																	<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
																	<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
																	<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
																</div>
																<!--end::Meter-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Hint-->
															<div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
															<!--end::Hint-->
														</div>
														<!--end::Input group=-->
														<!--begin::Input group=-->
														<div class="fv-row mb-10">
															<label class="form-label fw-semibold fs-6 mb-2">Confirm New Password</label>
															<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm_password" autocomplete="off" />
														</div>
														<!--end::Input group=-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait... 
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Update password-->
									<!--begin::Modal - Update role-->
									<div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Update User Role</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
														<i class="ki-duotone ki-cross fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Form-->
													<form id="kt_modal_update_role_form" class="form" action="#">
														<!--begin::Notice-->
														<!--begin::Notice-->
														<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
															<!--begin::Icon-->
															<i class="ki-duotone ki-information fs-2tx text-primary me-4">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
															<!--end::Icon-->
															<!--begin::Wrapper-->
															<div class="d-flex flex-stack flex-grow-1">
																<!--begin::Content-->
																<div class="fw-semibold">
																	<div class="fs-6 text-gray-700">Please note that reducing a user role rank, that user will lose all priviledges that was assigned to the previous role.</div>
																</div>
																<!--end::Content-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Notice-->
														<!--end::Notice-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-5">
																<span class="required">Select a user role</span>
															</label>
															<!--end::Label-->
															<!--begin::Input row-->
															<div class="d-flex">
																<!--begin::Radio-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_role_option_0">
																		<div class="fw-bold text-gray-800">Administrator</div>
																		<div class="text-gray-600">Best for business owners and company administrators</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Radio-->
															</div>
															<!--end::Input row-->
															<div class='separator separator-dashed my-5'></div>
															<!--begin::Input row-->
															<div class="d-flex">
																<!--begin::Radio-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_role_option_1">
																		<div class="fw-bold text-gray-800">Developer</div>
																		<div class="text-gray-600">Best for developers or people primarily using the API</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Radio-->
															</div>
															<!--end::Input row-->
															<div class='separator separator-dashed my-5'></div>
															<!--begin::Input row-->
															<div class="d-flex">
																<!--begin::Radio-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_role_option_2">
																		<div class="fw-bold text-gray-800">Analyst</div>
																		<div class="text-gray-600">Best for people who need full access to analytics data, but don't need to update business settings</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Radio-->
															</div>
															<!--end::Input row-->
															<div class='separator separator-dashed my-5'></div>
															<!--begin::Input row-->
															<div class="d-flex">
																<!--begin::Radio-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_role_option_3">
																		<div class="fw-bold text-gray-800">Support</div>
																		<div class="text-gray-600">Best for employees who regularly refund payments and respond to disputes</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Radio-->
															</div>
															<!--end::Input row-->
															<div class='separator separator-dashed my-5'></div>
															<!--begin::Input row-->
															<div class="d-flex">
																<!--begin::Radio-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_role_option_4">
																		<div class="fw-bold text-gray-800">Trial</div>
																		<div class="text-gray-600">Best for people who need to preview content data, but don't need to make any updates</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Radio-->
															</div>
															<!--end::Input row-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait... 
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Update role-->
									<!--begin::Modal - Add task-->
									<div class="modal fade" id="kt_modal_add_auth_app" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Add Authenticator App</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
														<i class="ki-duotone ki-cross fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Content-->
													<div class="fw-bold d-flex flex-column justify-content-center mb-5">
														<!--begin::Label-->
														<div class="text-center mb-5" data-kt-add-auth-action="qr-code-label">Download the 
														<a href="#">Authenticator app</a>, add a new account, then scan this barcode to set up your account.</div>
														<div class="text-center mb-5 d-none" data-kt-add-auth-action="text-code-label">Download the 
														<a href="#">Authenticator app</a>, add a new account, then enter this code to set up your account.</div>
														<!--end::Label-->
														<!--begin::QR code-->
														<div class="d-flex flex-center" data-kt-add-auth-action="qr-code">
															<img src="assets/media/misc/qr.png" alt="Scan this QR code" />
														</div>
														<!--end::QR code-->
														<!--begin::Text code-->
														<div class="border rounded p-5 d-flex flex-center d-none" data-kt-add-auth-action="text-code">
															<div class="fs-1">gi2kdnb54is709j</div>
														</div>
														<!--end::Text code-->
													</div>
													<!--end::Content-->
													<!--begin::Action-->
													<div class="d-flex flex-center">
														<div class="btn btn-light-primary" data-kt-add-auth-action="text-code-button">Enter code manually</div>
														<div class="btn btn-light-primary d-none" data-kt-add-auth-action="qr-code-button">Scan barcode instead</div>
													</div>
													<!--end::Action-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Add task-->
									<!--begin::Modal - Add task-->
									<div class="modal fade" id="kt_modal_add_one_time_password" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Enable One Time Password</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
														<i class="ki-duotone ki-cross fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Form-->
													<form class="form" id="kt_modal_add_one_time_password_form">
														<!--begin::Label-->
														<div class="fw-bold mb-9">Enter the new phone number to receive an SMS to when you log in.</div>
														<!--end::Label-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Mobile number</span>
																<span class="ms-2" data-bs-toggle="tooltip" title="A valid mobile number is required to receive the one-time password to validate your account login.">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="otp_mobile_number" placeholder="+6123 456 789" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Separator-->
														<div class="separator saperator-dashed my-5"></div>
														<!--end::Separator-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Email</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="email" class="form-control form-control-solid" name="otp_email" value="smith@kpmg.com" readonly="readonly" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Confirm password</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="password" class="form-control form-control-solid" name="otp_confirm_password" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Cancel</button>
															<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait... 
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Add task-->
									<!--end::Modals-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>