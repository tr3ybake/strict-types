<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(-1);

    require 'a.php';

    function foo(int $int)
    {
        echo gettype($int);
    }

    foo('true');
    foo(true);
    foo(4);
    foo(34.43);
    foo('string');
