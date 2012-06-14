<?php

namespace Poweradmin;

class Config
{
    public $items;

    function __construct() {
        // load default settings
        include('inc/config-me.inc.php');

        // load user defined setting
        if (file_exists('inc/config.inc.php')) {
            // TODO: what if there is syntax error?
            include('inc/config.inc.php');
        } else {
            // TODO: display error
            die( _('You have to create a config.inc.php!') );
        }

        $this->items = compact(array_keys(get_defined_vars()));
    }
}
