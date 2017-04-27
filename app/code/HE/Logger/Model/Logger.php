<?php

namespace HE\Logger\Model;

class Logger
{
    public static function log($msg, $file, $priority = \Zend\Log\Logger::DEBUG)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/' . $file);
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->log($priority, $msg);
    }
}