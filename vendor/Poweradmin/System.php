<?php

namespace Poweradmin;

class System
{
    public static function checkPhpExtensions() {
        if (!function_exists('session_start')) die('You have to install PHP session extension!');
        if (!function_exists('_')) die('You have to install PHP gettext extension!');
        if (!function_exists('mcrypt_encrypt')) die('You have to install PHP mcrypt extension!');
    }
}
