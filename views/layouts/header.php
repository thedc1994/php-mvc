<div class="row header">
	<div class="col-9">
	</div>
	<div class="col-3">
		<div class="row">
			<div class="col-6">
				<label class="label-user-fullname">
					<?php
						if(Auth::checkAuth()){
					?>
						<a href="<?php echo Route::name('edit-profile')?>">
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

