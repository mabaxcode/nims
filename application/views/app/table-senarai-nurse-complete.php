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
                                    <input type="text" class="form-control inpt_data dt-select" name="inpt_data" value="" placeholder="Name / Passport Number">
                                </td>
                            </tr>
                            <tr>
                                <th class="pt-5" style="width:11%;">PASS TYPE</th>
                                <td colspan="3">
                                <select class="js-example-basic-single form-control select-single inpt_pass_type dt-select">
                                    <option value="">SELECT OPTION</option>
                                    <option value="EP">EP</option>
                                    <option value="PVP">PVP</option>
                                    <option value="DEP">DEP</option>
                                </select>
                            </td>
                            </tr>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-12" style="text-align: right;">
                    <a class="btn btn-warning font-weight-bold mr-2 mb-5 btn-reset-search-expats">Reset</a>
                    <a class="btn btn-primary font-weight-bold mr-2 mb-5 btn-search">Search</a>
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
                                                    <th class="min-w-10px sorting_disabled" tabindex="0" rowspan="1" colspan="1" style="width: 0px;">NO</th>
                                                    <th class="min-w-10px sorting_disabled" tabindex="0" rowspan="1" colspan="1" style="width: 0px;">FORM ID</th>
                                                    <th class="min-w-90px sorting_disabled" tabindex="0" rowspan="1" colspan="1" style="width: 0px;">PHOTO</th>
                                                    <th class="min-w-90px sorting_disabled" tabindex="0" rowspan="1" colspan="1" style="width: 0px;">NAME</th>
                                                    <th class="min-w-50px text-end sorting_disabled" rowspan="1" colspan="1"  style="width: 0px;">PASSPORT</th>
                                                    <th class="min-w-90px sorting_disabled" rowspan="1" colspan="1"  style="width: 0px;">COMPANY</th>
                                                    <th class="min-w-90px text-end sorting_disabled" rowspan="1" colspan="1"  style="width: 0px;">PASS TYPE</th>
                                                    <th class="min-w-10px text-end sorting_disabled" rowspan="1" colspan="1"  style="width: 0px;">ACTION</th>

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

<script>

    var table_nurse_complete = $('#rekod-nurse-table');

    var KTDatatablesDataSourceAjaxServer3 = function () {

        var initTableComplete = function () {
            var qData = {};
            // begin first table
            table_nurse_complete.DataTable({
                responsive: true,
                autoWidth: false,
                // dom: '<"top"l>rt<"bottom"ip><"clear">',
                searching: false,
                processing: true,
                serverSide: true,
                ajax: {
                    url: base_url + "rekod/rekodNurse", type: "POST",
                    data: function (d) {
                        return $.extend({}, d, {
                            "inpt_data": $('.inpt_data').val(),
                            "inpt_pass_type": $('.inpt_pass_type').val(),
                        }, qData);
                    },
                    error: function (data, textStatus, xhr) {

                    }
                },
                columns: [
                    {
                        data: 'no',
                        // width: "5%",
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'form_id',
                        // width: "10%",
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'photo',
                        width: "10%",
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'name',
                        // width: "15%",
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'passport',
                        width: "5%",
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'company',
                        width: "20%",
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'pass',
                        width: "5%",
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'action',
                        width: "11%",
                        searchable: false,
                        orderable: false
                    },
                ],
                order: false,
            });
            var timeout = null;

            $('.btn-search').on('click', function (e) {
                e.preventDefault();
                e.stopImmediatePropagation();
                table_nurse_complete.DataTable().columns().search().draw();
                // alert($('.inpt_month').val() + $('.inpt_year').val(),);
            });

            $('.btn-reset-search-expats').on('click', function (e) {
                e.preventDefault();
                $('.inpt_data').each(function () {
                    $(this).val('');
                    $('.dt-select').val(null).trigger('change');
                });

                table_nurse_complete.DataTable().columns().search().draw();
            });



        };

        return {

            //main function to initiate the module
            init: function () {
                initTableComplete();
            }
        };
    }();

    $(document).ready(function () {
        KTDatatablesDataSourceAjaxServer3.init();

    });

    $('body').on('click', '.cancel-app', function(){

        // var jobid  = $(this).data('jobid');
        var formid = $(this).data('formid');

        $.ajax({
            type: "POST",
            // url: base_url+'_admin/view_ep_epass',
            url: base_url+'_admin/cancel_modal',
            data: {
                // job_id: jobid,
                form_id: formid
            },
            async: true,
            success: function(data){
                $('#modal-view-cancel').html(data);
                $('#modal-view-cancel').modal();

            },
            error: function(data){
                console.log(data);
            },
        });
    });

    $('body').on('click', '.proceed-cancel', function() {

        var remarkC = $("#remark-cancel").val();
        if (remarkC=='') {alert_msg('error', 'Please insert remark');return;}

        var formData = $("#cancel-form-data").serialize();

        Swal.fire({
            title: "Are you sure want to cancel this application?",
            showDenyButton: true,
            // showCancelButton: true,
            confirmButtonText: "Yes",
            denyButtonText: `Close`
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                // Swal.fire("Saved!", "", "success");
                $.ajax({
                    type: "POST",
                    url:base_url+'_admin/do_cancel',
                    data:formData,
                    async: true,
                    dataType:"json",
                    success: function(data){

                        $('#modal-view-cancel').modal('hide');

                        if (data.status == true) {
                            alert_msg('success', data.msg);
                            setTimeout(function() {
                                ajaxLoadHtml('div-pp-admin', '_admin/cancellation_application', '');
                            }, 1000);
                            // alert_msg('success', data.msg);
                            // location.reload();
                            // $('#modal-view-cancel').modal('hide');
                            // ajaxLoadHtml('div-pp-admin', '_admin/cancellation_application', '');
                        }
                    },
                    error: function(data){
                        console.log(data);
                    },
                });
            } 
        });
        
        // $('#loading').show();

    });
    

</script>