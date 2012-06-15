<?php

namespace Poweradmin;

class Benchmark
{
    private $startMemory;
    private $startTime;

    function __construct() {
        $this->startMemory = memory_get_usage();
        $this->startTime = microtime(true);
    }

    function getHumanReadableUsage($size) {
        $units = array('B', 'KB', 'MB', 'GB');
        $result = $size . ' B';

        if ($size < 1024) return $result;

        $index = floor(log($size, 1024));
        if ($index < sizeof($units)) {
            $result = round($size / pow(1024, ($index)), 2) . ' ' . $units[$index];
        }
        return $result;
    }

    function getMemoryUsage() {
        return $this->getHumanReadableUsage(memory_get_usage() - $this->startMemory);
    }

    function getElapsedTime() {
        return sprintf("%.5f", microtime(true) - $this->startTime);
    }

    function displayCurrentStats() {
        echo "Memory usage: " . $this->getMemoryUsage() . ", elapsed time: " . $this->getElapsedTime();
    }

}
