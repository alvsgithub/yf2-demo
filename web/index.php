<?php

if (extension_loaded('newrelic'))
  newrelic_set_appname('YF2 Demo');

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', false);

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/yii/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
