<script>
    // function registerForm(formId){
    //     var form = $('#'+formId);

    //     // tổng hợp dữ liệu từ form
    //     var dataSend = {
    //         'username' : form.find('.username').first().val()
    //     };

    //     // gửi ajax
    //     $.ajax({
    //         url: "<?php echo Route::name('auth.register');?>",
    //         type: "POST",
    //         data: dataSend,
    //         success: function (data) {
    //             var data = $.parseJSON(data);
    //             console.log(data);
    //             console.log(data.username);
    //         },
    //         error: function () {

    //         }
    //     });
    // }

    function validateRegisterForm(){

        var datepicker = $('#register-form').find('.date-of-birth').first();
        initDatepicker(datepicker);

        $('#register-form').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    container: '.username-validate',
                    validators: {
                        notEmpty: {
                            message: 'Cần phải nhập tên tài khoản'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'Tên tài khoản phải từ 6-30 ký tự'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'Tên tài khoản không được chứa ký tự đặc biệt'
                        },
                        different: {
                            field: 'password',
                            message: 'Tên tài khoản không được giống mật khẩu'
                        },
                        remote: {
                            message: "Tên tài khoản đã được sử dụng",
                            url: "<?php echo Route::name('auth.check-duplicate-username')?>",
                            data: {
                                username: 'username'
                            },
                            dataType: 'JSON',
                            type: 'POST',
                            delay: 2000     // Send Ajax request every 2 seconds
                        }
                    }
                },
                email: {
                    container: '.email-validate',
                    validators: {
                        emailAddress: {
                            message: 'Email phải đúng định dạng'
                        }
                    }
                },
                password: {
                    container: '.password-validate',
                    validators: {
                        notEmpty: {
                            message: 'Mật khẩu không được để trống'
                        },
                        identical: {
                            field: 'password',
                            message: "Bạn phải nhập lại mật khẩu chính xác",
                        }
                    }
                },

                re_password: {
                    container: '.re-password-validate',
                    validators: {
                        notEmpty: {
                            message: 'Bạn phải nhập lại mật khẩu'
                        },
                        identical: {
                            field: 'password',
                            message: "Bạn phải nhập lại mật khẩu chính xác",
                        }
                    }
                },

                full_name: {
                    container: '.fullname-validate',
                    validators: {
                        notEmpty: {
                            message: 'Cần phải nhập họ tên'
                        }
                    }
                },

                date_of_birth: {
                    container: '.date-of-birth-validate',
                    validators: {
                        notEmpty: {
                            message: 'Cần phải nhập ngày sinh'
                        }
                    }
                },

            }
        });
    }

    function validateLoginForm(){
        
        $('#login-form').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    container: '.login-username-validate',
                    validators: {
                        notEmpty: {
                            message: 'Cần phải nhập tên tài khoản'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'Tên tài khoản phải từ 6-30 ký tự'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'Tên tài khoản không được chứa ký tự đặc biệt'
                        },
                        different: {
                            field: 'password',
                            message: 'Tên tài khoản không được giống mật khẩu'
                        }
                    }
                },

                password: {
                    container: '.login-password-validate',
                    validators: {
                        notEmpty: {
                            message: 'Cần phải nhập mật khẩu'
                        }
                    }
                }
            }
        });
    }
</script>