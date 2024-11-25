// "use strict";
// var KTUsersAddUser = function() {
//     const t = document.getElementById("kt_modal_add_user"),
//         e = t.querySelector("#kt_modal_add_user_form"),
//         n = new bootstrap.Modal(t);
//     return {
//         init: function() {
//             (() => {
//                 var o = FormValidation.formValidation(e, {
//                     fields: {
//                         name: {
//                             validators: {
//                                 notEmpty: {
//                                     message: "Sila isi nama"
//                                 }
//                             }
//                         },
//                         no_kp: {
//                             validators: {
//                                 notEmpty: {
//                                     message: "Sila isi no kad pengenalan jururawat"
//                                 }
//                             }
//                         }
//                     },
//                     plugins: {
//                         trigger: new FormValidation.plugins.Trigger,
//                         bootstrap: new FormValidation.plugins.Bootstrap5({
//                             rowSelector: ".fv-row",
//                             eleInvalidClass: "",
//                             eleValidClass: ""
//                         })
//                     }
//                 });
//                 const i = t.querySelector('[data-kt-users-modal-action="submit"]');
//                 i.addEventListener("click", (t => {
//                     t.preventDefault(), o && o.validate().then((function(t) {
//                         console.log("validated!"), "Valid" == t ? (i.setAttribute("data-kt-indicator", "on"), i.disabled = !0, setTimeout((function() {
//                             i.removeAttribute("data-kt-indicator"), i.disabled = !1, Swal.fire({
//                                 text: "Form has been successfully submitted!",
//                                 icon: "success",
//                                 buttonsStyling: !1,
//                                 confirmButtonText: "Ok, got it!",
//                                 customClass: {
//                                     confirmButton: "btn btn-primary"
//                                 }
//                             }).then((function(t) {
//                                 t.isConfirmed && n.hide()
//                             }))
//                         }), 2e3)) : Swal.fire({
//                             text: "Sorry, looks like there are some errors detected, please try again.",
//                             icon: "error",
//                             buttonsStyling: !1,
//                             confirmButtonText: "Ok, got it!",
//                             customClass: {
//                                 confirmButton: "btn btn-primary"
//                             }
//                         })
//                     }))
//                 })), t.querySelector('[data-kt-users-modal-action="cancel"]').addEventListener("click", (t => {
//                     t.preventDefault(), Swal.fire({
//                         text: "Are you sure you would like to cancel?",
//                         icon: "warning",
//                         showCancelButton: !0,
//                         buttonsStyling: !1,
//                         confirmButtonText: "Yes, cancel it!",
//                         cancelButtonText: "No, return",
//                         customClass: {
//                             confirmButton: "btn btn-primary",
//                             cancelButton: "btn btn-active-light"
//                         }
//                     }).then((function(t) {
//                         t.value ? (e.reset(), n.hide()) : "cancel" === t.dismiss && Swal.fire({
//                             text: "Your form has not been cancelled!.",
//                             icon: "error",
//                             buttonsStyling: !1,
//                             confirmButtonText: "Ok, got it!",
//                             customClass: {
//                                 confirmButton: "btn btn-primary"
//                             }
//                         })
//                     }))
//                 })), t.querySelector('[data-kt-users-modal-action="close"]').addEventListener("click", (t => {
//                     t.preventDefault(), Swal.fire({
//                         text: "Are you sure you would like to cancel?",
//                         icon: "warning",
//                         showCancelButton: !0,
//                         buttonsStyling: !1,
//                         confirmButtonText: "Yes, cancel it!",
//                         cancelButtonText: "No, return",
//                         customClass: {
//                             confirmButton: "btn btn-primary",
//                             cancelButton: "btn btn-active-light"
//                         }
//                     }).then((function(t) {
//                         t.value ? (e.reset(), n.hide()) : "cancel" === t.dismiss && Swal.fire({
//                             text: "Your form has not been cancelled!.",
//                             icon: "error",
//                             buttonsStyling: !1,
//                             confirmButtonText: "Ok, got it!",
//                             customClass: {
//                                 confirmButton: "btn btn-primary"
//                             }
//                         })
//                     }))
//                 }))
//             })()
//         }
//     }
// }();
// KTUtil.onDOMContentLoaded((function() {
//     KTUsersAddUser.init()
// }));






$( document ).ready(function() {
	validateAddNurse('kt_modal_add_user_form');
});

var validateFormAddNurse;
function validateAddNurse(formID)
{   
    const folderForm = document.getElementById(formID);
    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    validateFormAddNurse = FormValidation.formValidation(
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
            no_kp: {
                validators: {
                    notEmpty: {
                        message: "Sila isi no kad pengenalan"
                    }
                }
            },
            email: {
                validators: {
                    regexp: {
                        regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                        message: "The value is not a valid email address"
                    },
                    notEmpty: {
                        message: "Sila isi alamat email"
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: "Sila isi katalaluan"
                    }
                }
            },
            c_password: {
                validators: {
                    notEmpty: {
                        message: "Sila sahkan katalaluan"
                    },
                    identical: {
                        compare: function() {
                            return folderForm.querySelector('[name="password"]').value
                        },
                        message: "Kataluan dan Sahkan katalaluan tidak sama"
                    }
                }
            },
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

$(document).on('click', '.add-new-nurse', function (e) {
    // e.preventDefault();
    // validateFormAddNurse.validate().then(function(status) {
	e.preventDefault();
    validateFormAddNurse.validate().then(function(status) {

        if (status == 'Valid') {

            var fileFormData = $('#kt_modal_add_user_form').serialize();

            $.ajax({
                url: base_url + 'app/addNewNurse',
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

