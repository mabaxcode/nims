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
            no_ic: {
                validators: {
                    notEmpty: {
                        message: "Sila isi no kad pengenalan"
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
            bangsa: {
                validators: {
                    notEmpty: {
                        message: "Sila pilih bangsa"
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
                url: base_url + 'editdetails/simpanMaklumatPeribadiAdmin',
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
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then((function(t) {
                            if (t.isConfirmed) {
                                // loadDirectory(response.id);
                                // location.reload();
                                // $(".tab-peribadi").trigger('click');
                            }
                        }))
                    } else {
                        Swal.fire({
                            text: response.msg,
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
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
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn font-weight-bold btn-light-primary"
                }
            })
        }
    });
});