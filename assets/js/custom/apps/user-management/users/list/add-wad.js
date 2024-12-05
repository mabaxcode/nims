
$( document ).ready(function() {
    validateAddWad('kt_modal_add_wad_form');
});

var validateFormAddGred;
function validateAddWad(formID)
{   
    const folderFormWad = document.getElementById(formID);
    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    validateFormAddGred = FormValidation.formValidation(
    folderFormWad,
    {
        fields: {
            name: {
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

$(document).on('click', '.add-new-wad', function (e) {
    // e.preventDefault();
    // validateFormAddGred.validate().then(function(status) {
	e.preventDefault();
    validateFormAddGred.validate().then(function(status) {

        if (status == 'Valid') {

            var fileFormData = $('#kt_modal_add_wad_form').serialize();

            $.ajax({
                url: base_url + 'setting/addNewWad',
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