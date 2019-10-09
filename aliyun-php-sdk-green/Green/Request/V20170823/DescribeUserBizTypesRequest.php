<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeUserBizTypes
 *
 * @method string getCustomized()
 * @method string getSourceIp()
 */
class DescribeUserBizTypesRequest extends \RpcAcsRequest
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
            'Green',
            '2017-08-23',
            'DescribeUserBizTypes',
            'green'
        );
    }

    /**
     * @param string $customized
     *
     * @return $this
     */
    public function setCustomized($customized)
    {
        $this->requestParameters['Customized'] = $customized;
        $this->queryParameters['Customized'] = $customized;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }
}
