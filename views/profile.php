<?php include 'views/layouts/master.php' ?>

<?php startblock('title') ?>
    Sửa thông tin cá nhân
<?php endblock() ?>

<?php startblock('css') ?>
    <style type="text/css">
    	.avatar{
    		object-fit: cover;
		    width: 200px;
		    height: 200px;
		    border-radius: 50%;
		    display: block;
    		margin: auto;
    	}

    	.avatar:hover{
    		cursor: pointer;
    	}
    </style>
<?php endblock() ?>


<?php startblock('content') ?>
	
		<div class="col-3">
		</div>
		<div class="col-6">
			<form action="<?php echo Route::name('auth.register');?>" method="POST"  id="edit-user-form">

                <div class="row form-group" align="center">
                	<img src="<?php echo $user->getAvatar()?>" class="avatar"/>
                	<input type="file" name="avatar"  class="input-avatar" style="display: none;" />
                </div>

                <div class="row form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Tên tài khoản</span>
                        </div>
                        <input type="text" class="form-control username" name="username" value="<?php echo $user->username ?>">
                    </div>
                    <span class="help-block username-validate" />
                </div>

                <div class="row form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                        </div>
                        <input type="text" class="form-control email" name="email" value="<?php echo $user->email ?>">
                        
                    </div>
                    <span class="help-block email-validate" />
                </div>

               

                <div class="row form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Họ và tên</span>
                        </div>
                        <input type="text" class="form-control fullname" name="fullname" value="<?php echo $user->getFullName() ?>">
                        
                    </div>
                    <span class="help-block fullname-validate" />
                </div>

                <div class="row form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Ngày sinh</span>
                        </div>
                        <input type="text" class="form-control date-of-birth" name="date_of_birth" value="<?php echo dateFormat($user->date_of_birth) ?>">
                        
                    </div>
                    <span class="help-block date-of-birth-validate" />
                </div>

                <div class="row form-group">
                    <button class="btn btn-info btn-block" type="submit">
                        CẬP NHẬT
                    </button>
                </div>
            </form>
		</div>
		<div class="col-3">
		</div>
<?php endblock() ?>

<?php startblock('script') ?>
	<script type="text/javascript">
		function initEditUserForm(){

			var form = $('#edit-user-form');
			initDatepicker(form.find('.date-of-birth').first());

			var imageAvatar = form.find('.avatar').first();
			var imageInput  = form.find('.input-avatar').first();

			initImageFile(imageAvatar, imageInput);

		}

		$(document).ready(function(){

			initEditUserForm();

		});
	</script>
<?php endblock() ?>






