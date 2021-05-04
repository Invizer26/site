<?php
include 'config/config.php';

$sqlProduct = 'select * from Product';
$resProduct = mysqli_query($link,$sqlProduct);
$arrProduct = mysqli_fetch_all($resProduct);