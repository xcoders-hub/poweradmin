<?php

namespace Poweradmin;

class Database
{
    // TODO: reimplement code from inc/database.inc.php

    function __construct($settings) {
        // TODO: check db settings

        /*
         * If DB layer is not defined in configuration file, then use PDO by default,
         * because MDB2 library is unmaintained for 2 years and also it uses huge
         * amount of memory compared to PDO
         */
        if (!$settings['layer']) {
            $settings['layer'] = 'PDO';
        }

        if ($settings['layer'] == 'MDB2') {
            (@include 'MDB2.php') or die ('You have to install MDB2 library!');
        } else {
            if (class_exists('PDO', false)) {
                include 'inc/PDOLayer.php';
            } else {
                die ('You have to install PDO library!');
            }
        }

        // TODO: build dsn
        // TODO: connect to db
    }

}
