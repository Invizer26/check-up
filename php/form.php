<?php
if(mail("rbru-metrika@yandex.ru", "Запись на приём", "name: ${_POST["name"]}\nphone: ${_POST["phone"]}")){
    echo "Запись завершена успешно";
} else {
    echo "при отправке сообщения возникли ошибки";
}
