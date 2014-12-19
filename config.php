<?php

defined('ISHOP') or die('Access denied');

// домен
define('PATH', 'http://ishop-lera.azurewebsites.net/');

// модель
define('MODEL', 'model/model.php');

// контроллер
define('CONTROLLER', 'controller/controller.php');

// вид
define('VIEW', 'views/');

// папка с активным шаблоном
define('TEMPLATE', VIEW.'ishop/');

// папка с картинками контента
define('PRODUCTIMG', PATH.'userfiles/product_img/baseimg/');

// папка с картинками галереи
define('GALLERYIMG', PATH.'userfiles/product_img/');

// максимально допустимый вес загружаемых картинок - 1 Мб
define('SIZE', 1048576);

// сервер БД
define('HOST', 'us-cdbr-azure-northcentral-a.cleardb.com');

// пользователь
define('USER', 'b293a887f46a3b');

// пароль
define('PASS', 'ce0c8af1');

// БД
define('DB', 'ishop');

// название магазина - title
define('TITLE', 'Интернет магазин сотовых телефонов');

// email администратора
define('ADMIN_EMAIL', 'admin@ishop.com');

// количество товаров на страницу
define('PERPAGE', 9);

// папка шаблонов административной части
define('ADMIN_TEMPLATE', 'templates/');

mysql_connect(HOST, USER, PASS) or die('No connect to Server');
mysql_select_db(DB) or die('No connect to DB');
mysql_query("SET NAMES 'UTF8'") or die('Cant set charset');