<?php

return [
    'class' => 'yii\db\Connection',
    // ���� ��������
	'dsn'=>'oci:dbname=//192.168.2.1:1521/ORCL;charset=UTF8',
    'username' => 'kinematic',
    'password' => 'marchuk',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
