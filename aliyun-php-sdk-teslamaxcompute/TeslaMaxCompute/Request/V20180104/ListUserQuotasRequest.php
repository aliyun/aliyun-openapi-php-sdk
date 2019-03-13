<?php

namespace TeslaMaxCompute\Request\V20180104;

/**
 * Request of ListUserQuotas
 *
 */
class ListUserQuotasRequest extends \RpcAcsRequest
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
            'TeslaMaxCompute',
            '2018-01-04',
            'ListUserQuotas',
            'teslamaxcompute'
        );
    }
}
