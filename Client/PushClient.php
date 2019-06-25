<?php

namespace Beapp\Push\Core\Client;

use Beapp\Push\Core\Push;
use Beapp\Push\Core\PushException;

/**
 * Interface PushClient
 * @package Beapp\Push\Core\Push
 */
interface PushClient
{
    /**
     * @param Push $push
     *
     * @return Push
     * @throws PushException
     */
    public function sendPush(Push $push): Push;
}