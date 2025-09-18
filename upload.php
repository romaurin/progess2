<?php
$target_dir = "uploads/";
$target_file = $target_dir . "photo.jpg"; // Всегда заменяем одно фото

if (move_uploaded_file($_FILES["newphoto"]["tmp_name"], $target_file)) {
    echo "Фото обновлено! <a href='index.html'>Назад</a>";
} else {
    echo "Ошибка загрузки!";
}
?>
