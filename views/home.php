<?php include 'views/layouts/master.php' ?>

<?php startblock('title') ?>
    Trang chủ
<?php endblock() ?>

<?php startblock('css') ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
    <style>

    </style>
<?php endblock() ?>


<?php startblock('content') ?>

<?php endblock() ?>

<?php startblock('script') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js" integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

        function registerForm(formId){
            var form = $('#'+formId);

            // tổng hợp dữ liệu từ form
            var dataSend = {
                'username' : form.find('.username').first().val()
            };

            // gửi ajax
            $.ajax({
                url: "<?php echo Route::name('auth.register');?>",
                type: "POST",
                data: dataSend,
                success: function (data) {
                    var data = $.parseJSON(data);
                    console.log(data);
                    console.log(data.username);
                },
                error: function () {

                }
            });
        }

        function validateRegisterForm(){
            console.log('validating');
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
                            }
                        }
                    }
                }
            });
        }


        $(document).ready(function(){
            validateRegisterForm();
        });

    </script>
<?php endblock() ?>






