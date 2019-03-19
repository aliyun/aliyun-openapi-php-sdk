<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateRenewOrder
 *
 * @method string getTimeCycleNum()
 * @method array getApLists()
 */
class CreateRenewOrderRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'CreateRenewOrder',
            'cloudwf'
        );
    }

    /**
     * @param string $timeCycleNum
     *
     * @return $this
     */
    public function setTimeCycleNum($timeCycleNum)
    {
        $this->requestParameters['TimeCycleNum'] = $timeCycleNum;
        $this->queryParameters['TimeCycleNum'] = $timeCycleNum;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function setApLists(array $value)
    {
        $this->requestParameters['ApLists'] = $value;
        foreach ($value as $i => $iValue) {
            $this->queryParameters['ApList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
