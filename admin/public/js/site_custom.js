function getPostCatByPosttype(id) {
    if (id) {
        $.ajax({
            url: base_url_addr + "admin/partial/get_post_cat_data.php",
            type: "POST",
            dataType: "html",
            data: 'post_type_id=' + id,
            success: function (response) {
                $('#post_cat').html(response);
            }
        });
    }else{
        $('#post_cat').html('');
    }
}