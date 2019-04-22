<?php

namespace Domain\Request\V20180208;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetReserveDomainUrl
 *
 */
class GetReserveDomainUrlRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Domain',
            '2018-02-08',
            'GetReserveDomainUrl'
        );
    }
}
