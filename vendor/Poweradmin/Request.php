<?php

namespace Poweradmin;

class Request
{
    private $method;

    function __construct() {
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    function isPostMethod() {
        return ($this->method == 'POST' ? true : false);
    }

}
