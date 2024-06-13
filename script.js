JQuery('form button').click(function(){
    var form = JQuery(this).closest('form');

    if(form.valid()){
        var actUrl=form.attr('action');

        JQuery.ajax({
            url:actUrl,
            type:'post',
            dataType:'html',
            data:form.serializeO(),
            success:function(data){
                form.find('.status').html('Заявка успешно отправлена');
            };
            error:    function(){
                form.find('.status').html('серверная ошибка');
            }
    });
}
                            });
