<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
    'db' => array(
    	'driver'         => 'Pdo',
    	'dsn'            => 'mysql:dbname=zf2napratica;host=localhost;passoword=123456',
    	'driver_options' => array(
    		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
		)
	)
);
