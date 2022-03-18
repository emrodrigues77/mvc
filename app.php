<?php

function ExceptionHandler($e) {
    $message = sprintf("[%s] %s@%s: [%s] %s", date("Y-m-d H:i:s"), __LINE__, __FILE__, $e->getCode(), $e->getMessage());
    //error_log($message, 3, 'logs/errors.log');
    header("location:/mvc/error.php?message=Exceção: " . $message);
}

function ErrorHandler($e) {
    $message = sprintf("[%s] %s@%s: [%s] %s", date("Y-m-d H:i:s"), __LINE__, __FILE__, "e->getCode()", "e->getMessage()");
    error_log($message, 3, 'logs/errors.log');
    header("location:/mvc/error.php?message=Erro: " . $message);
}

set_exception_handler("ExceptionHandler");
set_error_handler("ErrorHandler");