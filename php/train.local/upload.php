<?php
var_dump($_FILES);

if (isset($_FILES['myimage'])) {//проверяем наличие файла
    if (0== $_FILES['myimage'] ['error']) {//проверяем отсутствие ошибок
        move_uploaded_file(//перемещаем загруженный файл
            $_FILES['myimage'] ['tmp_name'],//
            __DIR__ . '/images/uploaded.jpg'//указываем полный путь до файла и его новое имя
        );
    }

}