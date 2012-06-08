<?php

namespace Poweradmin;

class Template
{
    private $templateDirectory;

    function __construct($path) {
        $this->templateDirectory = $path;
    }

    function display($template, $variables = array()) {
        extract($variables);
        ob_start();
        include($this->templateDirectory . '/' . $template . '.phtml');
        echo ob_get_clean();
    }
}
