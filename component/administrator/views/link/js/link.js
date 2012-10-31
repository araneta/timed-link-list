function get_article_url(article_id){
	 $.get(
        'index.php?option=com_timedlinklist&task=Link.get_article_url&id='+article_id,{},
        function(data){
            if(data!=null)
            {               
                var y = jQuery.parseJSON(data);        
                if(y.error){
                    alert(y.msg);
                    return;
                }
                $('#jform_url').val(y.msg);
                $('#jform_title').val($('#jform_article_id_name').val());
               
            }
        }
    );
}
