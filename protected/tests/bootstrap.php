<?php

// change the following paths if necessary
$yiit=dirname(__FILE__).'/../../../../bin/apache/apache2.2.22/htdocs/testyii.com/yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
