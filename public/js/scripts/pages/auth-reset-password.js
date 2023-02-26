/*=========================================================================================
  File Name: auth-reset-password.js
  Description: Auth reset password js file.
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: PIXINVENT
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(function () {
    'use strict';

    var pageResetPasswordForm = $('.auth-reset-password-form');

    // jQuery Validation
    // --------------------------------------------------------------------
    if (pageResetPasswordForm.length) {
        pageResetPasswordForm.validate({
            /*
            * ? To enable validation onkeyup
            onkeyup: function (element) {
              $(element).valid();
            },*/
            /*
            * ? To enable validation on focusout
            onfocusout: function (element) {
              $(element).valid();
            }, */
            rules: {
                'email': {
                    required: true,
                    email: true
                },
                'password': {
                    required: true,
                    minlength: 8,
                },
                'password_confirmation': {
                    required: true,
                    minlength: 8,
                    equalTo: "#reset-password-new"
                }
            }
        });
    }
});
