$( document ).ready(function() {
	validateMaklumatPeribadi('kt_account_profile_details_form_new');
});

var validateFormMaklumatPeribadi;
function validateMaklumatPeribadi(formID)
{   
    const folderForm = document.getElementById(formID);
    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    validateFormMaklumatPeribadi = FormValidation.formValidation(
    folderForm,
    {
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: "Sila isi nama"
                    }
                }
            },
            umur: {
                validators: {
                    notEmpty: {
                        message: "Sila pilih umur"
                    }
                }
            },
            no_kp: {
                validators: {
                    notEmpty: {
                        message: "Sila isi no kad pengenalan"
                    }
                }
            },
            bangsa: {
                validators: {
                    notEmpty: {
                        message: "Sila pilih bangsa"
                    }
                }
            },
            address1: {
                validators: {
                    notEmpty: {
                        message: "Sila isi alamat 1"
                    }
                }
            },
            address2: {
                validators: {
                    notEmpty: {
                        message: "Sila isi alamat 2"
                    }
                }
            },
            postcode: {
                validators: {
                    notEmpty: {
                        message: "Sila isi poskod"
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: "Sila pilih bandar"
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: "Sila pilih negeri"
                    }
                }
            },
            person_status: {
                validators: {
                    notEmpty: {
                        message: "Sila pilih status"
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

$(document).on('click', '.simpan-maklumat-peribadi', function (e) {
    // e.preventDefault();
    // validateFormMaklumatPeribadi.validate().then(function(status) {
	e.preventDefault();
    validateFormMaklumatPeribadi.validate().then(function(status) {

        if (status == 'Valid') {

            var fileFormData = $('#kt_account_profile_details_form_new').serialize();

            $.ajax({
                url: base_url + 'app/simpanMaklumatPeribadi',
                type: "POST",
                data: fileFormData,
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
                                location.reload();
                                // $(".tab-peribadi").trigger('click');
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