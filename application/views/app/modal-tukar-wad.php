<div class="modal-dialog modal-dialog-centered mw-750px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header" id="kt_modal_add_user_header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bold">Tukar Wad Sister</h2>
                                            <!--end::Modal title-->
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary" onclick="$('#modal_settting_sister').modal('hide');">
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
                                            <form id="form_tukar_sister" class="form" action="#">

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
                                                        <label class="fw-semibold fs-6 mb-2">Nama Sister : </label> <?=$nurse['name']?> (<?=$nurse['no_kp']?>)
                                                        <input type="hidden" name="nurse_id" value="<?=$nurse_id?>">
                                                        <!-- <input type="text" name="name" class="form-control mb-3 mb-lg-0" placeholder="Nama"/> -->
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-semibold fs-6 mb-2">Tukar Wad</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select class="form-select" data-control="select2" data-dropdown-parent="#modal_settting_sister" data-placeholder="Pilih Wad" data-allow-clear="true" name="wad">
                                                            <option value="">Pilih Wad</option>
                                                            <? foreach($all_wad as $key){ ?>
                                                            <option value="<?=$key['code']?>" <? if($current_wad == $key['code']){ echo "selected"; } ?>><?=$key['code_desc']?></option>
                                                            <? } ?>
                                                        </select>
                                                        
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    
                                                    
                                                </div>
                                        
                                                
                                                <!--end::Scroll-->
                                                <!--begin::Actions-->
                                                <div class="text-center pt-10">
                                                    <button type="reset" class="btn btn-secondary me-3" onclick="$('#modal_settting_sister').modal('hide');">Batal</button>
                                                    <button type="submit" class="btn btn-primary tukar-wad-nurse" data-kt-users-modal-action="submit">
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
    validateTukarSister('form_tukar_sister');
});
                                </script>