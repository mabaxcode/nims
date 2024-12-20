<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Rekod Jururawat</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="index.html" class="text-muted text-hover-primary">Rekod semua jururawat yang telah lengkap borang</a>
                        </li>
                        
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->

            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="col-lg-12">
    <div class="card-body card card-custom bg-white gutter-b p-5">
        <div class="row">

            <div class="col-lg-12 mb-5 mt-5">
                

                <div class="col-lg-12">
                    <table class="table text-uppercase bt-0">
                        <tbody>
                            <tr>
                                <th class="pt-5" style="width:11%;">KEYWORD</th>
                                <td>
                                    <input type="text" class="form-control inpt_data dt-select" name="inpt_data" value="" placeholder="Name / No Kad Pengenalan">
                                </td>
                            </tr>
                            <tr>
                                <th class="pt-5" style="width:11%;">JAWATAN</th>
                                <td colspan="3">
                                <select class="js-example-basic-single form-control select-single inpt_jawatan dt-select">
                                    <option value="">Pilih Jawatan</option>

                                    <? $alljawatan = get_any_table_array(array('module' => 'jawatan'), 'ref_code'); ?>
                                    <? foreach($alljawatan as $jawatan){ ?>
                                    <option value="<?=$jawatan['code']?>"><?=$jawatan['code_desc']?></option>
                                    <? } ?>
                                    <!-- 
                                    <option value="KUP U32">KUP U32</option>
                                    <option value="TBK 2 U36">TBK 2 U36</option> -->
                                </select>
                            </td>
                            </tr>
                            <tr>
                                <th class="pt-5" style="width:11%;">GRED</th>
                                <td colspan="3">
                                <select class="js-example-basic-single form-control select-single inpt_gred dt-select">
                                    <option value="">Pilih Gred</option>

                                    <? $allGred = get_any_table_array(array('module' => 'gred'), 'ref_code'); ?>
                                    <? foreach($allGred as $key){ ?>
                                    <option value="<?=$key['code']?>"><?=$key['code_desc']?></option>
                                    <? } ?>
                                    <!-- 
                                    <option value="KUP U32">KUP U32</option>
                                    <option value="TBK 2 U36">TBK 2 U36</option> -->
                                </select>
                            </td>
                            </tr>
                            <tr>
                                <th class="pt-5" style="width:11%;">WAD</th>
                                <td colspan="3">
                                <select class="js-example-basic-single form-control select-single inpt_wad dt-select">
                                    <option value="">Pilih Wad</option>

                                    <? $allWad = get_any_table_array(array('module' => 'wad'), 'ref_code'); ?>
                                    <? foreach($allWad as $wad){ ?>
                                    <option value="<?=$wad['code']?>"><?=$wad['code_desc']?></option>
                                    <? } ?>
                                    <!-- 
                                    <option value="KUP U32">KUP U32</option>
                                    <option value="TBK 2 U36">TBK 2 U36</option> -->
                                </select>
                            </td>
                            </tr>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-12" style="text-align: right;">
                    <a href="#" class="btn btn-sm btn-success font-weight-bold mr-2 mb-5 generate-csv-file">
                    <i class="fas fa-envelope-open-text fs-4"></i>
                    Cetak CSV
                    </a>
                    <a class="btn btn-sm btn-warning font-weight-bold mr-2 mb-5 btn-reset-search-nurse">Reset</a>
                    <a class="btn btn-sm btn-primary font-weight-bold mr-2 mb-5 btn-search">Search</a>
                </div>
                <div class="col-lg-12 mb-5 mt-5" id="result-company-search">
                    <div class="tab-content mt-5">
                        <div class="tab-pane fade active show" role="tabpanel" aria-labelledby="profile-tab-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table id="rekod-nurse-table"
                                            class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold dataTable no-footer">
                                            <thead class="fs-7 text-gray-500 text-uppercase">
                                                <tr>
                                                    <th class="" tabindex="0" rowspan="1" colspan="1" style="width: 0px;">NO</th>
                                                    <th class="" tabindex="0" rowspan="1" colspan="1" style="width: 0px;">NAMA</th>
                                                    <th class="" tabindex="0" rowspan="1" colspan="1" style="width: 0px;">EMAIL</th>
                                                    <th class="" tabindex="0" rowspan="1" colspan="1" style="width: 0px;">PHONE NO</th>
                                                    <th class="" rowspan="1" colspan="1"  style="width: 0px;">NO K/P</th>
                                                    <th class="" tabindex="0" rowspan="1" colspan="1" style="width: 0px;">GRED</th>
                                                    <th class="" rowspan="1" colspan="1"  style="width: 0px; text-align: right;">ACTION</th>

                                                </tr>
                                            </thead>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--begin::Footer-->
    
    <!--end::Footer-->
</div>

