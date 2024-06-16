document.getElementById('application-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Остановка отправки формы по умолчанию

    // Собираем данные формы
    var selectOption1Text = document.getElementById('select-option-1').selectedOptions[0].text;
    var fullname = document.getElementById('fullname').value;
    var fullinn = document.getElementById('fullinn').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var selectOption2Text = document.getElementById('select-option-2').selectedOptions[0].text;
    var fullusluga = document.getElementById('fullusluga').value;

    // Формируем сообщение
    var message = `Укажите лицо: ${selectOption1Text}\nФИО: ${fullname}\nИНН: ${fullinn}\nEmail: ${email}\nТелефон: ${phone}\nВыберите раздел услуг: ${selectOption2Text}\nПодробнее об услуге: ${fullusluga}`;

    // Устанавливаем значение поля message
    document.getElementById('message').value = message;

    // Отправляем данные через EmailJS
    var templateParams = {
        message: message
    };

    emailjs.send('service_2a9gi1y', 'template_xwdofhy', templateParams)
        .then(function(response) {
            console.log('SUCCESS!', response.status, response.text);
            alert('Заявка успешно отправлена!');
        }, function(error) {
            console.log('FAILED...', error);
            alert('Произошла ошибка при отправке заявки.');
        });
});

