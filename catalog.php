<?php
include 'engine/view.php';
ob_start();
include 'engine/catalogProduct.php';
$product = ob_get_clean();

    // Внутренний шаблон.
    $content = view_include(
        'templates/v_catalog.php',
        array('product' => $product));

    // Внешний шаблон.
    $page = view_include(
        'templates/v_main.php',
        array('content' => $content));

    // Вывод.
    echo $page;

?>
