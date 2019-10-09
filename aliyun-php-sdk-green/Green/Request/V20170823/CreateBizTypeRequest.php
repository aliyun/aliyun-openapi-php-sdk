<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateBizType
 *
 * @method string getBizTypeImport()
 * @method string getSourceIp()
 * @method string getIndustryInfo()
 * @method string getBizTypeName()
 */
class CreateBizTypeRequest extends \RpcAcsRequest
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
            'CreateBizType',
            'green'
        );
    }

    /**
     * @param string $bizTypeImport
     *
     * @return $this
     */
    public function setBizTypeImport($bizTypeImport)
    {
        $this->requestParameters['BizTypeImport'] = $bizTypeImport;
        $this->queryParameters['BizTypeImport'] = $bizTypeImport;

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

    /**
     * @param string $industryInfo
     *
     * @return $this
     */
    public function setIndustryInfo($industryInfo)
    {
        $this->requestParameters['IndustryInfo'] = $industryInfo;
        $this->queryParameters['IndustryInfo'] = $industryInfo;

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
}
