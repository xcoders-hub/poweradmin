<?php

namespace Poweradmin;

class Application
{
    function __construct() {
        $this->config = new Config();
        $this->request = new Request();
        $this->template = new Template($this->config->items['iface_templates']);
    }
}
