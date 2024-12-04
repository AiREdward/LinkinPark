<?php
class Logger {
    private $logFile;

    public function __construct($file) {
        $this->logFile = $file;
    }

    public function log($message) {
        $timestamp = date("Y-m-d H:i:s");
        error_log("[$timestamp] $message\n", 3, $this->logFile);
    }
}
?>

<!-- HOW TO USE: -->
<!-- $logger->log("Card Number: $n_carta"); -->
