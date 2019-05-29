<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetAuthorizationToken
 *
 */
class GetAuthorizationTokenRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/tokens';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'GetAuthorizationToken',
            'cr'
        );
    }
}
