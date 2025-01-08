<div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
        
                
                <!--begin::Row-->
                <div class="row g-5 g-xl-10">
                    <div class="col-xl-12">
                        <!--begin::Chart widget 15-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <div class="d-flex flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="flex-grow-1">
				<!--begin::Title-->
				<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
					<!--begin::User-->
					<div class="d-flex flex-column">
						<!--begin::Name-->
						<div class="d-flex align-items-center mb-2">
							<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">
								<?= strtoupper($user['name'])?>
							</a>
							<a href="#">
								<i class="ki-duotone ki-verify fs-1 text-primary">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</a>
						</div>
						<!--end::Name-->
						<!--begin::Info-->
						<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
							<a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
							<i class="ki-duotone ki-profile-circle fs-4 me-1">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
							</i>
							<span class="badge badge-success"><?= $role?> </span>
							</a>
							<a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
							<i class="ki-duotone ki-sms fs-4">
								<span class="path1"></span>
								<span class="path2"></span>
							</i><?= $user['email']?></a>
						</div>
						<!--end::Info-->
					</div>
					<!--end::Actions-->





				</div>
				<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
					<!--begin::Nav item-->
					<li class="nav-item mt-2">
						<a class="nav-link text-active-primary ms-0 me-10 py-5 active tab-peribadi" data-bs-toggle="tab" href="#maklumat-peribadi">Maklumat Peribadi</a>
						<!-- <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#maklumat-peribadi">Updates</a> -->
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mt-2">
						<a class="nav-link text-active-primary ms-0 me-10 py-5 tab-pekerjaan" data-bs-toggle="tab" href="#maklumat-pekerjaan">Maklumat Pekerjaan</a>
					</li>
					<!--end::Nav item-->
					<!--begin::Nav item-->
					<li class="nav-item mt-2">
						<a class="nav-link text-active-primary ms-0 me-10 py-5 tab-kontak" data-bs-toggle="tab" href="#maklumat-kontak">Maklumat Kontak</a>
					</li>
				</ul>
				<!--end::Title-->
				<!--begin::Stats-->
			</div>
			<!--end::Info-->
		</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">


                               <div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="maklumat-peribadi" role="tabpanel">
	<? $this->load->view('app/borang/maklumat-peribadi-admin'); ?>
</div>

<div class="tab-pane fade" id="maklumat-pekerjaan" role="tabpanel">
	<? $this->load->view('app/borang/maklumat-pekerjaan-admin'); ?>
</div>

<div class="tab-pane fade" id="maklumat-kontak" role="tabpanel">
	<? $this->load->view('app/borang/maklumat-kontak-admin'); ?>
</div>

</div>


                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart widget 15-->
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>





