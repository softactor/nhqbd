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

function getPostDataSearchForm(formId){
    var post_type  = $('#post_type').val();
    var post_cat   = $('#post_cat').val();
    if(post_type && post_cat){
        $.ajax({
            url         : base_url_addr + "admin/partial/get_post_data_search_form.php",
            type        : "POST",
            dataType    : "html",
            data        : $('#'+formId).serialize(),
            success     : function (response) {
                $('#search_data_response_section').html(response);
            }
        });
    }
}

function openPostDetailsEditForm(editId){
    $.ajax({
            url         : base_url_addr + "admin/partial/open_post_details_edit_form.php",
            type        : "POST",
            dataType    : "html",
            data        : 'editId='+editId,
            success     : function (response) {
                $('#post_details_edit_modal').modal('show');
                $('#post_details_edit_body').html(response);
            }
        });
}