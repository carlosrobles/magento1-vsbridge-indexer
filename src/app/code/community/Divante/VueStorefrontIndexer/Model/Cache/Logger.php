<?php

/**
 * Class Divante_VueStorefrontIndexer_Model_Cache_Logger
 *
 * @package     Divante
 * @category    VueStoreFrontIndexer
 * @author      Agata Firlejczyk <afirlejczyk@divante.pl
 * @copyright   Copyright (C) 2018 Divante Sp. z o.o.
 * @license     See LICENSE_DIVANTE.txt for license details.
 */
class Divante_VueStorefrontIndexer_Model_Cache_Logger
{
    const LOG_FILE_NAME = 'vsf_cache.log';

    /**
     * @param string $message
     *
     * @return void
     */
    public function error($message)
    {
        Mage::log($message, Zend_Log::ERR, self::LOG_FILE_NAME, true);
    }

    /**
     * @param string $message
     *
     * @return void
     */
    public function debug($message)
    {
        Mage::log($message, Zend_Log::INFO, self::LOG_FILE_NAME, true);
    }
}
