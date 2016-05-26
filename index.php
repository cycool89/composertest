<?php
require __DIR__ . '/AECore/plugins/autoload.php';


new aengine\classes\Test();


//minden osztályban a $this->log = new Monolog\Logger('className');
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');
$log->addAlert('Alertes',array("x"=>"valami"));