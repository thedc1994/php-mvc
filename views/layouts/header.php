<div class="row header">
	<div class="col-9">
	</div>
	<div class="col-3">
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
				}else if(isset($_SESSION['save'])){
					echo 'USER 1';
				}else{
					echo 'NO USER';
				}
			?>
		</label>
	</div>
</div>
