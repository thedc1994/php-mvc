<?php include 'views/layouts/master.php' ?>

<?php startblock('title') ?>
    Trang chủ
<?php endblock() ?>


<?php startblock('content') ?>
    <div class="col-2">
    </div>
    <div class="col-4">
        <form action="<?php echo Route::name('auth.register');?>" method="POST">
            <div class="row form-group">
                <label>Tên tài khoản</label>
                <input type="text" class="form-control" placeholder="Nhập tên tài khoản" name="username">
            </div>
            <div class="row form-group">
                <button class="btn btn-success" type="submit">
                    ĐĂNG KÝ
                </button>
            </div>
        </form>
    </div>
<?php endblock() ?>

