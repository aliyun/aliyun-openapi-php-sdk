<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeBizTypeSetting
 *
 * @method string getSourceIp()
 * @method string getBizTypeName()
 * @method string getResourceType()
 */
class DescribeBizTypeSettingRequest extends \RpcAcsRequest
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
            'DescribeBizTypeSetting',
            'green'
        );
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

    /**
     * @param string $bizTypeName
     *
     * @return $this
     */
    public function setBizTypeName($bizTypeName)
    {
        $this->requestParameters['BizTypeName'] = $bizTypeName;
        $this->queryParameters['BizTypeName'] = $bizTypeName;

        return $this;
    }

    /**
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->requestParameters['ResourceType'] = $resourceType;
        $this->queryParameters['ResourceType'] = $resourceType;

        return $this;
    }
}
