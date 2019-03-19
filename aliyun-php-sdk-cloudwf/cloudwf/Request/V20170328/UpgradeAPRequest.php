<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpgradeAP
 *
 * @method array getIdss()
 */
class UpgradeAPRequest extends \RpcAcsRequest
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
            'UpgradeAP',
            'cloudwf'
        );
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function setIdss(array $value)
    {
        $this->requestParameters['Idss'] = $value;
        foreach ($value as $i => $iValue) {
            $this->queryParameters['Ids.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
