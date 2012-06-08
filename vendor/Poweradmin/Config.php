<?php

namespace Poweradmin;

class Config
{
    public $items;

    function error($msg) {
        if ($msg) {
            echo "     <div class=\"error\">Error: " . $msg . "</div>\n";
        }
    }

    function __construct() {
        include('inc/config-me.inc.php');

        if (file_exists('inc/config.inc.php')) {
            // TODO: what if there is syntax error?
            include('inc/config.inc.php');
        } else {
            // TODO: display error
            //error( _('You have to create a config.inc.php!') );
        }

        $this->items = compact(array_keys(get_defined_vars()));
    }
}
