# HE_Logger: Magento 2 Module

## Purpose
The purpose of this module is to provide the impatient Magento 2 developer (like me) a way to easily log messages to arbitrary log files within the "var/log" directory, similar to how logging worked in Magento 1. Magento 2 supports logging right out of the box via Zend Logging and Monolog, but both options are a pain to use when you just want to quickly log something. With this technique, there is no need to do anything with DI (or your brain) -- no DI file updates, no need to mess with constructors, and no need to DI compile -- you just log when you want to log.

## To install manually
1. Copy the files to the root of your Magento 2 site,
2. run "php bin/magento module:enable HE_Logger" on the command line,
3. run "php bin/magento setup:upgrade" on the command line.


## To install via composer
Coming soon!


## To use it
- ### Debug (used as the default if you don't pass the 3rd parameter)
`\HE\Logger\Model\Logger::log('my message', 'my_log_within_var_log_dir.log');`

- ### Emergency
`\HE\Logger\Model\Logger::log('my message', 'my_log_within_var_log_dir.log', \Zend\Log\Logger::EMERG);`

- ### Alert
`\HE\Logger\Model\Logger::log('my message', 'my_log_within_var_log_dir.log', \Zend\Log\Logger::ALERT);`

- ### Critical
`\HE\Logger\Model\Logger::log('my message', 'my_log_within_var_log_dir.log', \Zend\Log\Logger::CRIT);`

- ### Error
`\HE\Logger\Model\Logger::log('my message', 'my_log_within_var_log_dir.log', \Zend\Log\Logger::ERR);`

- ### Warning
`\HE\Logger\Model\Logger::log('my message', 'my_log_within_var_log_dir.log', \Zend\Log\Logger::WARN);`

- ### Notice
`\HE\Logger\Model\Logger::log('my message', 'my_log_within_var_log_dir.log', \Zend\Log\Logger::NOTICE);`

- ### Info
`\HE\Logger\Model\Logger::log('my message', 'my_log_within_var_log_dir.log', \Zend\Log\Logger::INFO);`
