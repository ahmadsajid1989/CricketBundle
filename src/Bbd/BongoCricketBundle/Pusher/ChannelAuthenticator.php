<?php

// src/AppBundle/Pusher/ChannelAuthenticator.php

namespace Bbd\BongoCricketBundle\Pusher;

use Lopi\Bundle\PusherBundle\Authenticator\ChannelAuthenticatorInterface;

class ChannelAuthenticator implements ChannelAuthenticatorInterface
{
    public function authenticate($socketId, $channelName)
    {
        // logic here

        return true;
    }
}