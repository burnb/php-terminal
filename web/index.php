<?php
if (preg_match('/^.*(dev|loc)$/', $_SERVER['HTTP_HOST'])) {
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_ENV') or define('YII_ENV', 'dev');
}
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../models/Decode.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();