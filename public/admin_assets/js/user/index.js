$(document).ready(function () {
    $('#search_content').change(function(){
        var search_content = $('#search_content').val();
        var data_post = { search_content: search_content };
        $("#user_card_body").empty();
        $("#loading").show();
        $.post("/admin/user/search", data_post, function (data) {
            $("#user_card_body").html(data);
            $("#loading").hide();
        });
    });
});
