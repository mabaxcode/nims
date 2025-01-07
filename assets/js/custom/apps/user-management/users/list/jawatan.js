

var validateFormEditRefCode;
function validateEditRefCode(formID)
{   
    const folderFormWad = document.getElementById(formID);
    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    validateFormEditRefCode = FormValidation.formValidation(
    folderFormWad,
    {
        fields: {
            code_desc: {
                validators: {
                    notEmpty: {
                        message: "Sila isi nama"
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

$(document).on('click', '.btn-edit-ref-coded', function (e) {
    // e.preventDefault();
    // validateFormEditRefCode.validate().then(function(status) {
	e.preventDefault();
    validateFormEditRefCode.validate().then(function(status) {

        if (status == 'Valid') {

            var fileFormData = $('#form_edit_ref_code').serialize();

            $.ajax({
                url: base_url + 'setting/doEditRefCode',
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
                                location.reload();
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
                text: "Sila pastikan semua maklumat telah diisi.",
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





