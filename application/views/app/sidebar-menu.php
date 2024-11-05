<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
	<!--begin::Menu wrapper-->
	<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
		<!--begin::Scroll wrapper-->
		<div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
			<!--begin::Menu-->
			<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
				<!--begin:Menu item-->
				<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
					<!--end:Menu sub-->
					<a class="menu-link" href="<?= base_url('app')?>">
						<span class="menu-icon">
							<i class="ki-duotone ki-element-11 fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
								<span class="path4"></span>
							</i>
						</span>
						<span class="menu-title">Home</span>
					</a>
				</div>

				<!--end:Menu item-->
				<!--begin:Menu item-->
				<div class="menu-item pt-5">
					<!--begin:Menu content-->
					<div class="menu-content">
						<span class="menu-heading fw-bold text-uppercase fs-7">Menu</span>
					</div>
					<!--end:Menu content-->
				</div>
				<!--end:Menu item-->
				<!--begin:Menu item-->
				<? if(isAdmin($this->session->userdata('user_id')) == true || isSister($this->session->userdata('user_id')) == true): ?>
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<!--begin:Menu link-->
					<span class="menu-link">
						<span class="menu-icon">
							<i class="ki-duotone ki-address-book fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
							</i>
						</span>
						<span class="menu-title">User Profile</span>
						<span class="menu-arrow"></span>
					</span>
					<!--end:Menu link-->
					<!--begin:Menu sub-->
					<div class="menu-sub menu-sub-accordion">
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link" href="pages/user-profile/overview.html">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Overview</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link" href="pages/user-profile/projects.html">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Projects</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link" href="pages/user-profile/campaigns.html">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Campaigns</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link" href="pages/user-profile/documents.html">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Documents</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link" href="pages/user-profile/followers.html">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Followers</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link" href="pages/user-profile/activity.html">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Activity</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->
					</div>
					<!--end:Menu sub-->
				</div>
				<!--begin:Menu item-->
				<div class="menu-item pt-5">
					<!--begin:Menu content-->
					<div class="menu-content">
						<span class="menu-heading fw-bold text-uppercase fs-7">Help</span>
					</div>
					<!--end:Menu content-->
				</div>
				<!--end:Menu item-->
				<!--begin:Menu item-->
				<div class="menu-item">
					<!--begin:Menu link-->
					<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank">
						<span class="menu-icon">
							<i class="ki-duotone ki-rocket fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</span>
						<span class="menu-title">Components</span>
					</a>
					<!--end:Menu link-->
				</div>
				<!--end:Menu item-->
				<!--begin:Menu item-->
				<? endif; ?>
				<? if(isNurse($this->session->userdata('user_id')) == true): ?>
				<div class="menu-item">
					<!--begin:Menu link-->
					<a class="menu-link <?= ($this->uri->segment(2) == 'kemaskiniMaklumat') ? 'active' : '' ; ?>" href="<?= base_url('app/kemaskiniMaklumat');?>">
						<span class="menu-icon">
							<i class="ki-duotone ki-address-book fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
							</i>
						</span>
						<span class="menu-title">Maklumat Pekerjaan</span>
					</a>
					<!--end:Menu link-->
				</div>
				<? endif; ?>
				
			</div>
			<!--end::Menu-->
		</div>
		<!--end::Scroll wrapper-->
	</div>
	<!--end::Menu wrapper-->
</div>