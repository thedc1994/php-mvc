<div class="row header">
	<div class="col-8">
        <?php include('views/menu.php'); ?>
	</div>
	<div class="col-4">
		<div class="row right-header">
			<div class="col-6">
				<label>
					<?php
						if(Auth::checkAuth()){
					?>
                        <img src="<?php echo Auth::user()->getAvatar();?>" class="avatar">
						<a  class="label-user-full-name" href="<?php echo Route::name('edit-profile')?>">
							<?php
								echo Auth::user()->getFullName();
							?>
						</a>

					<?php
						}else{
					?>
						<a href="<?php echo Route::name('auth.show-login')?>">
							Đăng nhập
						</a>
					<?php
						}
					?>
				</label>
			</div>
			<div class="col-6">
				<?php
					if(Auth::checkAuth()){
				?>
					<a href="<?php echo Route::name('logout')?>">
						Đăng xuất
					</a>
				<?php
					}
				?>
			</div>
		</div>

	</div>
</div>

