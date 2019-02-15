<?php

namespace Hayageek\OAuth2\Client\Provider;

use League\OAuth2\Client\Grant\AbstractGrant;


class RefreshToken implements AbstractGrant
{
    protected function getName()
    {
        return 'refresh_token';
    }

    protected function getRequiredRequestParameters()
    {
        return [ 'refresh_token' ];
    }
}
