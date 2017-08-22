function goComment(obj, post_id, user_id) {
    var text = $(obj).parent().children('textarea').val();
    console.log(post_id);
    console.log(user_id);
    console.log(text);
    if(text!="") {
        $.ajax({
            url: '/admin/comment/create',
            type: 'GET',
            data: {
                'post_id': post_id,
                'user_id': user_id,
                'test': text
            },
            success: function (data) {
                //переадрессация
                //console.log(data);
                if(data!==false){
                    addNewComment(data);
                }
            },
            error: function () {
                console.log('Внутренняя ошибка сервера');
            }
        });
    }else{
        return false;
    }
}

function addNewComment(model) {



}