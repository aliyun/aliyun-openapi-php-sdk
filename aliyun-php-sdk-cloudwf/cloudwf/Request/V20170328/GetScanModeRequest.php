<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetScanMode
 *
 * @method array getMacLists()
 */
class GetScanModeRequest extends \RpcAcsRequest
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
            'GetScanMode',
            'cloudwf'
        );
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function setMacLists(array $value)
    {
        $this->requestParameters['MacLists'] = $value;
        foreach ($value as $i => $iValue) {
            $this->queryParameters['MacList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
