<script>

    function showFormEdit(userId){
        showLoading();
        $.ajax({
            url: "<?php echo Route::name('admin.users.show-form-edit');?>",
            type: "POST",
            data: {
                user_id: userId
            },
            success: function (data) {
                hideLoading();
                if(data.message == undefined){
                    $('#edit-user').find('.modal-content').html(data);
                }else{
                    alert(data.message, "error");
                }
            },
            error: function (e) {
                hideLoading();
                alert("Vui lòng thực hiện lại", "error");
            }
        });

    }

    function deleteUser(userId){
        showLoading();
        var runFunction = function(){
            $.ajax({
                url: "<?php echo Route::name('admin.users.delete');?>",
                type: "POST",
                data: {
                    user_id: userId
                },
                success: function (data) {
                    hideLoading();
                    if(data.code == 200){
                        alert(data.message, "success");
                        $('#user-row-'+userId).remove();
                    }else{
                        alert(data.message, "error");
                    }
                },
                error: function (e) {
                    hideLoading();
                    alert("Vui lòng thực hiện lại", "error");
                }
            });
        };

        confirm("Bạn muốn xóa người dùng này ?", runFunction);
    }

</script>