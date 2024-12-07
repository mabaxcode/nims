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


				<? if(isSister($this->session->userdata('user_id')) == true): ?>

				<div class="menu-item pt-5">
					<!--begin:Menu content-->
					<div class="menu-content">
						<span class="menu-heading fw-bold text-uppercase fs-7">Menu</span>
					</div>
					<!--end:Menu content-->
				</div>

				<div class="menu-item">
					<!--begin:Menu link-->
					<?/*<a class="menu-link <? if($this->uri->segment(1) == 'rekod'){echo "active";} ?>" href="<?= base_url('rekod')?>"> */?>
					<a class="menu-link <? if($this->uri->segment(2) == 'wadSelian'){echo "active";} ?>" href="<?= base_url('sister/wadSelian')?>">
						<span class="menu-icon">
							<i class="ki-duotone ki-abstract-26 fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</span>
						<span class="menu-title">Wad Seliaan</span>
					</a>
					<!--end:Menu link-->
				</div>

				<? endif; ?>

				<!--end:Menu item-->
				<!--begin:Menu item-->
				<?/*
				<div class="menu-item pt-5">
					<!--begin:Menu content-->
					<div class="menu-content">
						<span class="menu-heading fw-bold text-uppercase fs-7">Menu</span>
					</div>
					<!--end:Menu content-->
				</div>
				*/?>
				<!--end:Menu item-->
				<!--begin:Menu item-->
				<? if(isAdmin($this->session->userdata('user_id')) == true): ?>
					<?/*
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
						<span class="menu-title">Jururawat</span>
						<span class="menu-arrow"></span>
					</span>
					<!--end:Menu link-->
					<!--begin:Menu sub-->
					<div class="menu-sub menu-sub-accordion">
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link" href="<?= base_url('senaraijururawat')?>">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Senarai</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						
						<!--end:Menu item-->
						<!--begin:Menu item-->
						
						<!--end:Menu item-->
						<!--begin:Menu item-->
						
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
				*/?>

				<div class="menu-item pt-5">
					<!--begin:Menu content-->
					<div class="menu-content">
						<span class="menu-heading fw-bold text-uppercase fs-7">Menu</span>
					</div>
					<!--end:Menu content-->
				</div>
				<!--end:Menu item-->
				<!--begin:Menu item-->
				
				<?/*
				<div class="menu-item">
					<!--begin:Menu link-->
					<a class="menu-link <? if($this->uri->segment(1) == 'cetak'){echo "active";} ?>" href="<?= base_url('cetak')?>">
						<span class="menu-icon">
							<i class="ki-duotone ki-printer fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</span>
						
						<span class="menu-title">Cetak Senarai</span>
					</a>
					<!--end:Menu link-->
				</div>
				*/?>
				<?/*
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
						<span class="menu-title">Rekod</span>
						<span class="menu-arrow"></span>
					</span>
					<!--end:Menu link-->
					<!--begin:Menu sub-->
					<div class="menu-sub menu-sub-accordion">
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link" href="<?= base_url('senaraijururawat')?>">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Maklumat Peribadi</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						
						<!--end:Menu item-->
						<!--begin:Menu item-->
						
						<!--end:Menu item-->
						<!--begin:Menu item-->
						
						<!--end:Menu item-->
						
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link" href="pages/user-profile/followers.html">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Maklumat Pekerjaan</span>
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
								<span class="menu-title">Maklumat Kompetensi</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->
						
					</div>
					<!--end:Menu sub-->
				</div>
				<!--begin:Menu item-->
				*/?>
				<div class="menu-item">
					<!--begin:Menu link-->
					<?/*<a class="menu-link <? if($this->uri->segment(1) == 'rekod'){echo "active";} ?>" href="<?= base_url('rekod')?>"> */?>
					<a class="menu-link <? if($this->uri->segment(1) == 'rekod'){echo "active";} ?>" href="<?= base_url('rekod')?>">
						<span class="menu-icon">
							<i class="ki-duotone ki-menu">
							 <span class="path1"></span>
							 <span class="path2"></span>
							 <span class="path3"></span>
							 <span class="path4"></span>
							</i>
						</span>
						<span class="menu-title">Rekod</span>
					</a>
					<!--end:Menu link-->
				</div>
				<?/*
				<div class="menu-item">
					<!--begin:Menu link-->
					<a class="menu-link <? if($this->uri->segment(1) == 'rekod'){echo "active";} ?>" href="<?= base_url('rekod')?>">
						<span class="menu-icon">
							<i class="ki-duotone ki-abstract-26 fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</span>
						<span class="menu-title">Permohonan Sister</span>
					</a>
					<!--end:Menu link-->
				</div>
				
				<div class="menu-item">
					<!--begin:Menu link-->
					<a class="menu-link <? if($this->uri->segment(1) == 'senaraijururawat'){echo "active";} ?>" href="<?= base_url('senaraijururawat')?>">
						<span class="menu-icon">
							<i class="ki-duotone ki-abstract-26 fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</span>
						<span class="menu-title">Senarai Jururawat</span>
					</a>
					<!--end:Menu link-->
				</div>
				*/?>

				<div class="menu-item pt-5">
					<!--begin:Menu content-->
					<div class="menu-content">
						<span class="menu-heading fw-bold text-uppercase fs-7">Pengurusan Pengguna</span>
					</div>
					<!--end:Menu content-->
				</div>

				<div class="menu-item">
					<!--begin:Menu link-->
					<?/*<a class="menu-link <? if($this->uri->segment(1) == 'rekod'){echo "active";} ?>" href="<?= base_url('rekod')?>"> */?>
					<a class="menu-link <? if($this->uri->segment(1) == 'senaraijururawat' && $this->uri->segment(2) <> 'hapus'){echo "active";} ?>" href="<?= base_url('senaraijururawat')?>">
						<span class="menu-icon">
							<i class="ki-duotone ki-menu">
							 <span class="path1"></span>
							 <span class="path2"></span>
							 <span class="path3"></span>
							 <span class="path4"></span>
							</i>
						</span>
						<span class="menu-title">Senarai Pengguna</span>
					</a>
					<!--end:Menu link-->
				</div>

				<div class="menu-item">
					<!--begin:Menu link-->
					<?/*<a class="menu-link <? if($this->uri->segment(1) == 'rekod'){echo "active";} ?>" href="<?= base_url('rekod')?>"> */?>
					<a class="menu-link <? if($this->uri->segment(2) == 'hapus'){echo "active";} ?>" href="<?= base_url('senaraijururawat/hapus')?>">
						<span class="menu-icon">
							<i class="ki-duotone ki-menu">
							 <span class="path1"></span>
							 <span class="path2"></span>
							 <span class="path3"></span>
							 <span class="path4"></span>
							</i>
						</span>
						<span class="menu-title">Pengguna Dihapus</span>
					</a>
					<!--end:Menu link-->
				</div>

				<?/*
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<!--begin:Menu link-->
					<span class="menu-link <? if($this->uri->segment(2) == 'hapus'){echo "active";} ?> " href="<?= base_url('senaraijururawat/hapus')?>" href="<?= base_url('senaraijururawat/hapus')?>">
						<span class="menu-icon">
							<i class="ki-duotone ki-address-book fs-2">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
							</i>
						</span>
						<span class="menu-title">Pengurusan Pengguna</span>
						<span class="menu-arrow"></span>
					</span>
					<!--end:Menu link-->
					<!--begin:Menu sub-->
					<div class="menu-sub menu-sub-accordion show active">
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link <? if($this->uri->segment(1) == 'senaraijururawat' && $this->uri->segment(2) <> 'hapus'){echo "active";} ?>" href="<?= base_url('senaraijururawat')?>">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Senarai Pengguna</span>
							</a>
							<!--end:Menu link-->
						</div>
						
						<!--begin:Menu item-->
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link <? if($this->uri->segment(2) == 'hapus'){echo "active";} ?> " href="<?= base_url('senaraijururawat/hapus')?>">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Pengguna Dihapus</span>
							</a>
							<!--end:Menu link-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<!-- <div class="menu-item">
							<a class="menu-link" href="pages/user-profile/activity.html">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Maklumat Kompetensi</span>
							</a>
						</div> -->
						<!--end:Menu item-->
						
					</div>
					<!--end:Menu sub-->
				</div>
				*/?>

				<!-- setting -->
				<div class="menu-item pt-5">
					<!--begin:Menu content-->
					<div class="menu-content">
						<span class="menu-heading fw-bold text-uppercase fs-7">Tetapan Sistem</span>
					</div>
					<!--end:Menu content-->
				</div>

				<div class="menu-item">
					<!--begin:Menu link-->
					<?/*<a class="menu-link <? if($this->uri->segment(1) == 'rekod'){echo "active";} ?>" href="<?= base_url('rekod')?>"> */?>
					<a class="menu-link <? if($this->uri->segment(2) == 'wad'){echo "active";} ?>" href="<?= base_url('setting/wad')?>">
						<span class="menu-icon">
							<i class="ki-duotone ki-menu">
							 <span class="path1"></span>
							 <span class="path2"></span>
							 <span class="path3"></span>
							 <span class="path4"></span>
							</i>
						</span>
						<span class="menu-title">Unit/Wad</span>
					</a>
					<!--end:Menu link-->
				</div>

				<div class="menu-item">
					<!--begin:Menu link-->
					<?/*<a class="menu-link <? if($this->uri->segment(1) == 'rekod'){echo "active";} ?>" href="<?= base_url('rekod')?>"> */?>
					<a class="menu-link <? if($this->uri->segment(2) == 'jawatan'){echo "active";} ?>" href="<?= base_url('setting/jawatan')?>">
						<span class="menu-icon">
							<i class="ki-duotone ki-menu">
							 <span class="path1"></span>
							 <span class="path2"></span>
							 <span class="path3"></span>
							 <span class="path4"></span>
							</i>
						</span>
						<span class="menu-title">Jawatan</span>
					</a>
					<!--end:Menu link-->
				</div>
				<div class="menu-item">
					<!--begin:Menu link-->
					<?/*<a class="menu-link <? if($this->uri->segment(1) == 'rekod'){echo "active";} ?>" href="<?= base_url('rekod')?>"> */?>
					<a class="menu-link <? if($this->uri->segment(2) == 'gred'){echo "active";} ?>" href="<?= base_url('setting/gred')?>">
						<span class="menu-icon">
							<i class="ki-duotone ki-menu">
							 <span class="path1"></span>
							 <span class="path2"></span>
							 <span class="path3"></span>
							 <span class="path4"></span>
							</i>
						</span>
						<span class="menu-title">Gred</span>
					</a>
					<!--end:Menu link-->
				</div>
				<div class="menu-item">
					<!--begin:Menu link-->
					<?/*<a class="menu-link <? if($this->uri->segment(1) == 'rekod'){echo "active";} ?>" href="<?= base_url('rekod')?>"> */?>
					<a class="menu-link <? if($this->uri->segment(2) == 'senaraiSister'){echo "active";} ?>" href="<?= base_url('setting/senaraiSister')?>">
						<span class="menu-icon">
							<i class="ki-duotone ki-menu">
							 <span class="path1"></span>
							 <span class="path2"></span>
							 <span class="path3"></span>
							 <span class="path4"></span>
							</i>
						</span>
						<span class="menu-title">Sister</span>
					</a>
					<!--end:Menu link-->
				</div>
				<!-- end setting -->

				
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