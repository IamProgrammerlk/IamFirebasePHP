<?php

/*
 * You only need this file if you are not using composer.
 * Why are you not using composer? https://getcomposer.org/
 *
 *
 *
 */
  
if (version_compare(PHP_VERSION, '5.4.0', '<')) 
{
    throw new Exception('The Firebase SDK requires PHP version 5.4 or higher.');
}

/**
 * Register the autoloader for the IamFirebasePHP API classes.
 *
 * Based off the official PSR-4 autoloader example found here:
 * https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md
 *
 * @param string $IamClass The fully-qualified class name.
 * @return void
 */
 
 
spl_autoload_register(function ($IamClass) {
	
    // project-specific namespace prefix
    $IamNamespace = 'IamProgrammerlk\\IamFirebasePHP\\';
	
    // base directory for the namespace prefix
    $IamBaseDirectory = __DIR__ . '/';
	
    // does the class use the namespace prefix?
    $IamNamespaceLength = strlen($IamNamespace);
    if (strncmp($IamNamespace, $IamClass, $IamNamespaceLength) !== 0) {
        // no, move to the next registered autoloader
        return;
    }
	
    // get the relative class name
    $IamRelativeClassName = substr($IamClass, $IamNamespaceLength);
	
    // replace the namespace prefix with the base directory, replace namespace separators with
    // directory separators in the relative class name, append with .php
    $IamPHPFile = rtrim($IamBaseDirectory, '/') . '/' . str_replace('\\', '/', $IamRelativeClassName) . '.php';
	
    // if the file exists, require it
    if (file_exists($IamPHPFile)) {
        require $IamPHPFile;
    }
});
