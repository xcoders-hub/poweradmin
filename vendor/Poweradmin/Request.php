<?php

namespace Poweradmin;

class Request
{
    private $method;
    private $params;

    function __construct() {
        $this->method = $_SERVER['REQUEST_METHOD'];

        if ($this->isPostMethod()) {
            $this->params = $_POST;
        } else {
            $this->params = $_GET;
        }
    }

    function isPostMethod() {
        return ($this->method == 'POST' ? true : false);
    }

}
