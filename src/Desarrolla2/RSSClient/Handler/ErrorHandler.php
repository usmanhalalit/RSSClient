<?php

/**
 * This file is part of the RSSClient proyect.
 * 
 * Copyright (c)
 * Daniel González Cerviño <daniel.gonzalez@externos.seap.minhap.es>  
 * 
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.
 */

namespace Desarrolla2\RSSClient\Handler;

/**
 * 
 * Description of ErrorHandler
 *
 * @author : Daniel González Cerviño <daniel.gonzalez@externos.seap.minhap.es>  
 * @file : ErrorHandler.php , UTF-8
 * @date : Mar 19, 2013 , 4:13:03 PM
 */
abstract class ErrorHandler {

    /**
     * @var array 
     */
    protected $errors = array();

    /**
     * Add Error to stack
     * 
     * @param string $message
     */
    protected function addError($message) {
        $message = (string) $message;
        array_push($this->errors, $message);
    }

}
