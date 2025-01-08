$( document ).ready(function() {
	validateMaklumatKerja('kt_account_profile_details_form_kerja');
});

var validateFormMaklumatKerja;
function validateMaklumatKerja(formID)
{   
    const folderForm = document.getElementById(formID);
    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    validateFormMaklumatKerja = FormValidation.formValidation(
    folderForm,
    {
        fields: {
            wad: {
                validators: {
                    notEmpty: {
                        message: "Sila pilih wad/unit"
                    }
                }
            },
            jawatan: {
                validators: {
                    notEmpty: {
                        message: "Sila pilih jawatan"
                    }
                }
            },
            gred: {
                validators: {
                    notEmpty: {
                        message: "Sila pilih gred"
                    }
                }
            },
            tarikh_lantikan: {
                validators: {
                    notEmpty: {
                        message: "Sila isi tarikh lantikan"
                    }
                }
            },
            tarikh_bersara: {
                validators: {
                    notEmpty: {
                        message: "Sila isi tarikh bersara"
                    }
                }
            },
            no_ljm: {
                validators: {
                    notEmpty: {
                        message: "Sila isi No LJM"
                    }
                }
            },
            tarikh_lapor_diri: {
                validators: {
                    notEmpty: {
                        message: "Sila isi tarikh lapor diri"
                    }
                }
            }
        },
        plugins: {
            trigger: new FormValidation.plugins.Trigger,
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: ".fv-row",
                eleInvalidClass: "",
                eleValidClass: ""
            })
        }
    }
    );
}

$(document).on('click', '.simpan-maklumat-kerja', function (e) {
    e.preventDefault();
    validateFormMaklumatKerja.validate().then(function(status) {

        if (status == 'Valid') {

            var fileFormDataKerja = $('#kt_account_profile_details_form_kerja').serialize();

            $.ajax({
                url: base_url + 'editdetails/simpanMaklumatKerjaAdmin',
                type: "POST",
                data: fileFormDataKerja,
                dataType: "json",
                async: true,
                success: function( response ) {
                    // console.log(response);
                    if (response.status == true) {
                        Swal.fire({
                            text: response.msg,
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then((function(t) {
                            if (t.isConfirmed) {
                                // loadDirectory(response.id);
                                // location.reload();
                                // $(".tab-pekerjaan").trigger('click');
                            }
                        }))
                    } else {
                        Swal.fire({
                            text: response.msg,
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    }
                }
            });

        } else {
            swal.fire({
                text: "Before proceeding, please ensure that all mandatory fields have been completed.",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok",
                customClass: {
                    confirmButton: "btn font-weight-bold btn-light-primary"
                }
            })
        }
    });
});