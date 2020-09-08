(function ($) {
    $(document).ready(function () {

        /**
         *  Функция показа меню продукции при наведении
         */
        $('.production').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn();
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut();
        });

        /**
         *  Функция Отправки формы
         */
		
		$('.hide-form-price > button').click(function() {
			$(this).next().slideToggle('show')
		});
		
        function SendFile(form, path) {
            $.ajax({
                url:     path, //url страницы (action_ajax_form.php)
                type:     "POST", //метод отправки
                dataType: "JSON", //формат данных
                data: form.serialize(),  // Сеарилизуем объект
                beforeSend: function() {
					form.children('.send-form').fadeOut();
                    form.siblings().children('.lds-ring').fadeIn();
                },
                success: function(response) { //Данные отправлены успешно
					if(response) {
						setTimeout(function(){
							form.next('.response').html('Письмо отправлено успешно!<br>пожалуйста, проверьте Ваш почтовый ящик.');
							form.children('.user-email').val('');
						}, 700);
					}else {
						form.next('.response').text('Ошибка. Данные не отправлены. Повторите пожалуйста ваше действие');
					}
                },
                error: function(response) { // Данные не отправлены
                    form.next('.response').text('Ошибка. Данные не отправлены. Повторите пожалуйста ваше действие');
                },
                complete: function(){
                    setTimeout(function(){
						form.children('.send-form').fadeIn();
                    	form.siblings().children('.lds-ring').fadeOut();
                    }, 600);
                }
            });
        };


        $('.hide-form').submit(function (e) {
            e.preventDefault();
            SendFile($(this), './php/mail');
        })

    })
})(jQuery);