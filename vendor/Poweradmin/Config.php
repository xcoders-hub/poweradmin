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
            include('inc/config.inc.php');
        } else {
            die(_('You have to create a config.inc.php!'));
        }

        // put all configuration settings to array
        $this->items = compact(array_keys(get_defined_vars()));
    }

    function getDbSettings() {
        $settings = array();

        $settings['hostname'] = (isset($this->items['db_host']) ? $this->items['db_host'] : null);
        $settings['port'] = (isset($this->items['db_port']) ? $this->items['db_port'] : null);
        $settings['username'] = (isset($this->items['db_user']) ? $this->items['db_user'] : null);
        $settings['password'] = (isset($this->items['db_pass']) ? $this->items['db_pass'] : null);
        $settings['database'] = (isset($this->items['db_name']) ? $this->items['db_name'] : null);
        $settings['type'] = (isset($this->items['db_type']) ? $this->items['db_type'] : null);
        $settings['file'] = (isset($this->items['db_file']) ? $this->items['db_file'] : null);
        $settings['debug'] = (isset($this->items['db_debug']) ? $this->items['db_debug'] : null);
        $settings['layer'] = (isset($this->items['db_layer']) ? $this->items['db_layer'] : null);

        return $settings;
    }
}
