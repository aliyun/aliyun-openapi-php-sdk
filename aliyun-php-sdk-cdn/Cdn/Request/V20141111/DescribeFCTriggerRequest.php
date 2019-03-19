<?php

namespace Cdn\Request\V20141111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeFCTrigger
 *
 * @method string getTriggerARN()
 * @method string getOwnerId()
 */
class DescribeFCTriggerRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Cdn',
            '2014-11-11',
            'DescribeFCTrigger'
        );
    }

    /**
     * @param string $triggerARN
     *
     * @return $this
     */
    public function setTriggerARN($triggerARN)
    {
        $this->requestParameters['TriggerARN'] = $triggerARN;
        $this->queryParameters['TriggerARN'] = $triggerARN;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }
}
