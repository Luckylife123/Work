jQuery('#commentform').submit(function(){
    //объединяет всю информацию, полученную от формы, в объект
    var formData = jQuery("#commentform").serialize();
    
    //теперь мы можем отобразить комментарий
    var comment = jQuery('textarea#comment').val();
    jQuery.ajax({
      type: "POST",
        //это скрипт, который отправляет форму комментариев по адресу:
      url: "/wp-jqury/wp-comments-post.php",
        //formData это наш сериализованный объект, содержащий в себе контент
      data: formData,
      success: function(){
        jQuery('#respond').prepend('<div class="message"></div>');
	jQuery('#respond .message') .html("<div style='border: 1px solid #ccc; padding: 5px 10px'><b>Thank you.</b>  <span style='font-size: 90%;'>  <i>Your comment may be pending moderation.</i>          </span>"+comment+"</div>")      .hide()       .fadeIn(2000);      },      error: function(){        //при ошибке, информируем пользователя, что он сделал не так:
	      }
	    });
	      //страница не должна перезагружаться
	    return false;
    
    
  });





