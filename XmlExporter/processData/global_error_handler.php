<?php

class ErrorHandler {
    public static function handleError($errno, $errstr, $errfile, $errline) {
        $date = date('Y-m-d H:i:s');
        $errorMessage = "[$date] Error: $errstr in $errfile on line $errline\n";
        
        file_put_contents('error_log.txt', $errorMessage, FILE_APPEND);
        return true; // Prevents the PHP default error handler from running
    }
    
    public static function handleException($exception) {
        $date = date('Y-m-d H:i:s');
        $errorMessage = "[$date] Uncaught exception: " . $exception->getMessage() . " in " . $exception->getFile() . " on line " . $exception->getLine() . "\n";
        
        file_put_contents('exception_log.txt', $errorMessage, FILE_APPEND);
    }
}
?>