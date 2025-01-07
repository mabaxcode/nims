
<div class="modal-dialog modal-fullscreen">
    <div class="modal-content shadow-none">
        <div class="modal-header">
            <h5 class="modal-title">Maklumat Jururawat</h5>

            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
        </div>

        <div class="modal-body">
            <p class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">Nama : <?=strtoupper($user_accounts['name'])?> <span class="badge badge-primary badge-lg"><?=$employment_info['no_ljm']?></span></p>


            <!--begin::Accordion-->
            <div class="accordion accordion-icon-toggle" id="kt_accordion_2">
                <!--begin::Item-->
                <div class="mb-5">
                    <!--begin::Header-->
                    <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_1">
                        <span class="accordion-icon">
                            <i class="ki-duotone ki-arrow-right fs-4"><span class="path1"></span><span class="path2"></span></i>
                        </span>
                        <h3 class="fs-4 fw-semibold mb-0 ms-4">Maklumat Peribadi</h3>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div id="kt_accordion_2_item_1" class="fs-6 collapse show ps-10" data-bs-parent="#kt_accordion_2">
                        <? $this->load->view('app/maklumat-peribadi-accordion') ?>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="mb-5">
                    <!--begin::Header-->
                    <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_2">
                        <span class="accordion-icon">
                            <i class="ki-duotone ki-arrow-right fs-4"><span class="path1"></span><span class="path2"></span></i>
                        </span>
                        <h3 class="fs-4 fw-semibold mb-0 ms-4">Maklumat Pekerjaan</h3>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div id="kt_accordion_2_item_2" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                        <? $this->load->view('app/maklumat-pekerjaan-accordion') ?>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="mb-5">
                    <!--begin::Header-->
                    <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_3">
                        <span class="accordion-icon">
                            <i class="ki-duotone ki-arrow-right fs-4"><span class="path1"></span><span class="path2"></span></i>
                        </span>
                        <h3 class="fs-4 fw-semibold mb-0 ms-4">Maklumat Kontak</h3>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div id="kt_accordion_2_item_3" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                        <? $this->load->view('app/maklumat-kontak-accordion') ?>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Item-->
            </div>
            <!--end::Accordion-->


        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
            <!-- <button type="button" class="btn btn-primary">Tutup</button> -->
        </div>
    </div>
</div>
