<?php
/**
 * Created by PhpStorm.
 * User: ABN
 * Date: 13/08/2014
 * Time: 12:52
 */

return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host' => 'localhost',
                    'port' => '3306',
                    'user' => 'takeawayit',
                    'password' => 'takeawayitpass',
                    'dbname' => 'takeawayit',
                )))));