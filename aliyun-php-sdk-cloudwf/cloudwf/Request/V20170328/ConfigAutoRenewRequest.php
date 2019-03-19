<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ConfigAutoRenew
 *
 * @method string getOffsetDays()
 * @method string getMonths()
 * @method string getAutoRenew()
 * @method array getApLists()
 */
class ConfigAutoRenewRequest extends \RpcAcsRequest
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
            'ConfigAutoRenew',
            'cloudwf'
        );
    }

    /**
     * @param string $offsetDays
     *
     * @return $this
     */
    public function setOffsetDays($offsetDays)
    {
        $this->requestParameters['OffsetDays'] = $offsetDays;
        $this->queryParameters['OffsetDays'] = $offsetDays;

        return $this;
    }

    /**
     * @param string $months
     *
     * @return $this
     */
    public function setMonths($months)
    {
        $this->requestParameters['Months'] = $months;
        $this->queryParameters['Months'] = $months;

        return $this;
    }

    /**
     * @param string $autoRenew
     *
     * @return $this
     */
    public function setAutoRenew($autoRenew)
    {
        $this->requestParameters['AutoRenew'] = $autoRenew;
        $this->queryParameters['AutoRenew'] = $autoRenew;

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
