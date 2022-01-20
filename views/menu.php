<?php
if (Auth::checkAuth()) {
    ?>
    <div class="menu">
        <a href="<?php echo Route::name('admin.users') ?>">
            Quản lý người dùng
        </a>
    </div>

<?php
    }
?>
