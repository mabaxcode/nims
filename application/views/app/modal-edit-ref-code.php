<div class="modal-dialog modal-dialog-centered mw-750px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header" id="kt_modal_add_user_header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bold">Kemaskini</h2>
                                            <!--end::Modal title-->
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary" onclick="$('#modal_settting_jawatan').modal('hide');">
                                                <i class="ki-duotone ki-cross fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Close-->
                                        </div>
                                        <!--end::Modal header-->
                                        <!--begin::Modal body-->
                                        <div class="modal-body px-5 my-7">

                                            <!--begin::Form-->
                                            <form id="form_edit_ref_code" class="form" action="#">

                                                <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

                                                    <!--begin::Alert-->
                                                    <?/*
                                                    <div class="alert alert-dismissible bg-light-primary d-flex flex-column flex-sm-row p-5 mb-10">
                                                        <!--begin::Icon-->
                                                        <i class="ki-duotone ki-notification-bing fs-2hx text-primary me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                                        <!--end::Icon-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column pe-0 pe-sm-10">
                                                            <!--begin::Title-->
                                                            <h4 class="fw-semibold">This is an alert</h4>
                                                            <!--end::Title-->

                                                            <!--begin::Content-->
                                                            <span>Once account created, the user password will be set to the default password which is <b>[password123]</b></span>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    */?>
                                                    <!--end::Alert-->
                                                    <!--begin::Input group-->
                                                
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="fw-semibold fs-6 mb-2"><?=$label?> : </label>
                                                        <input type="hidden" name="id" value="<?=$ref_data['id']?>">
                                                        <input type="text" name="code_desc" class="form-control mb-3 mb-lg-0" value="<?=$ref_data['code_desc']?>" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    
                                                    
                                                </div>
                                        
                                                
                                                <!--end::Scroll-->
                                                <!--begin::Actions-->
                                                <div class="text-center pt-10">
                                                    <button type="reset" class="btn btn-secondary me-3" onclick="$('#modal_settting_jawatan').modal('hide');">Batal</button>
                                                    <button type="submit" class="btn btn-primary btn-edit-ref-coded" data-kt-users-modal-action="submit">
                                                        <span class="indicator-label">Simpan</span>
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



<script type="text/javascript">
    $( document ).ready(function() {
        validateEditRefCode('form_edit_ref_code');
    });
</script>