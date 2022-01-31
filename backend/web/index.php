<?php
/**
 * Это единая точка входа для нашего приложения.
 * На этот файл будут переадресованы все запросы нашего сайта.
 */

// Включим вывод всех ошибок на экран.
error_reporting(E_ALL);       // устанавливает уровень отслеживаемых ошибок интерпретатором php

ini_set('display_errors', 1); // дает команду интерпретатору php выводить все отслеживаемые ошибки в браузере
require __DIR__ . '/../../vendor/autoload.php';
(new common\companents\ErrorHandlerWeb)->register();

$app = new backend\config\Router();
$app->run();



