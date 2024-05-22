document.getElementById('application-form').addEventListener('submit', function(event) {
    event.preventDefault();
    var fullname = document.getElementById('fullname').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var fullinn = document.getElementById('fullinn').value;
    var fullusluga = document.getElementById('fullusluga').value;
    alert('ФИО: ' + fullname + '\nEmail: ' + email + '\nТелефон: ' + phone + '\nИНН: ' + fullinn+ '\nУслуга: ' + fullusluga);
});
