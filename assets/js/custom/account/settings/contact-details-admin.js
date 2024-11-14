$( document ).ready(function() {
	validateMaklumat('kt_account_profile_details_form_kontak');
});

var validateFormKontak;
function validateMaklumat(formID)
{   
    const kontakForm = document.getElementById(formID);
    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    validateFormKontak = FormValidation.formValidation(
    kontakForm,
    {
        fields: {
            phone_no: {
                validators: {
                    notEmpty: {
                        message: "Sila isi phone no."
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: "Email is required"
                    },
                    emailAddress: {  // Correct validator for email
                        message: "The value is not a valid email address"
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

$(document).on('click', '.simpan-maklumat-kontak', function (e) {
    e.preventDefault();
    validateFormKontak.validate().then(function(status) {

        if (status == 'Valid') {

            var fileFormDataKontak = $('#kt_account_profile_details_form_kontak').serialize();

            $.ajax({
                url: base_url + 'editdetails/simpanMaklumatKontakAdmin',
                type: "POST",
                data: fileFormDataKontak,
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
                                // $(".tab-kontak").addClass('active');
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