function goComment(obj, post_id, user_id) {
    var text = $(obj).parent().children('input').val();
    if(text!="") {
        $.ajax({
            url: '/admin/comment/create',
            type: 'POST',
            data: {
                'post_id': post_id,
                'user_id': user_id,
                'test': text
            },
            success: function (data) {
                //переадрессация
                //console.log(data);
            },
            error: function () {
                console.log('Внутренняя ошибка сервера');
            }
        });
    }else{
        return false;
    }
}