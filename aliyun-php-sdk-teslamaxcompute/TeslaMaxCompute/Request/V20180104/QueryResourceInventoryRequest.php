<?php

namespace TeslaMaxCompute\Request\V20180104;

/**
 * Request of QueryResourceInventory
 *
 */
class QueryResourceInventoryRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'TeslaMaxCompute',
            '2018-01-04',
            'QueryResourceInventory',
            'teslamaxcompute'
        );
    }
}
