<?php
include 'engine/view.php';

// Внутренний шаблон.
$content = view_include(
    'templates/v_contact.php',
    array());

// Внешний шаблон.
$page = view_include(
    'templates/v_main.php',
    array('content' => $content));

// Вывод.
echo $page;

?>
